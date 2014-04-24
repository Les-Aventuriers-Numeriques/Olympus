<?php

namespace Easy\ForumBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Easy\ForumBundle\Entity\Message;
use Easy\ForumBundle\Entity\Sujet;
use Symfony\Component\Security\Core\Exception\AccessDeniedException;

class MessageController extends Controller
{
    public function listAction($id)
    {
        $sujet = $this->getDoctrine()->getManager()->getRepository('EasyForumBundle:Sujet')->findOneById($id);
        $messages = $this->getDoctrine()->getManager()->getRepository('EasyForumBundle:Message')->findBySujet($sujet);
        
        return $this->render('EasyForumBundle:Message:list.html.twig', array('sujet' => $sujet, 'messages' => $messages));
    }
    
    public function addAction($id)
    {
        $sujet = $this->getDoctrine()->getManager()->getRepository('EasyForumBundle:Sujet')->findOneById($id);
        
        if ($sujet->getEstFerme()) return $this->redirect($this->generateUrl('easy_forum_sujet', array('id' => $id)));
        
        return $this->render('EasyForumBundle:Message:add.html.twig', array('sujet' => $sujet));
    }
    
    public function updateAction()
    {
        // Récupération du message
        $message = $this->getDoctrine()->getManager()->getRepository('EasyForumBundle:Message')->findOneById($this->getRequest()->request->get('message'));
        
        if (!$message) 
        {
            $message = new Message();
            
            $message->setContenu($this->getRequest()->request->get('message'));

            $utilisateur = $this->getDoctrine()->getManager()->getRepository('EasyUtilisateurBundle:Utilisateur')->findOneByUsername($this->getRequest()->request->get('utilisateur'));
            $message->setUtilisateur($utilisateur);
            
            $message->setDate(new \DateTime('now'));
            $message->setSujet($this->getDoctrine()->getManager()->getRepository('EasyForumBundle:Sujet')->findOneById($this->getRequest()->request->get('sujet')));
            
            $this->getDoctrine()->getManager()->persist($message);
            $this->getDoctrine()->getManager()->flush();
        }
        
        // Retour sur l'administration des articles
        return $this->redirect($this->generateUrl('easy_forum_sujet', array('id' => $this->getRequest()->request->get('sujet'))));
    }
}