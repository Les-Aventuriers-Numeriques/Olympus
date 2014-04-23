<?php

namespace Easy\ForumBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Easy\ForumBundle\Entity\Sujet;
use Easy\ForumBundle\Entity\Message;

class SujetController extends Controller
{
    public function listAction($id)
    {
        $forum = $this->getDoctrine()->getManager()->getRepository('EasyForumBundle:Forum')->findOneById($id);
        
        $sujets = $this->getDoctrine()->getManager()->getRepository('EasyForumBundle:Sujet')->findByForum($forum);
        
        return $this->render('EasyForumBundle:Sujet:list.html.twig', array('sujets' => $sujets, 'forum' => $forum));
    }
    
    public function addAction($id)
    {
        $forum = $this->getDoctrine()->getManager()->getRepository('EasyForumBundle:Forum')->findOneById($id);
        
        return $this->render('EasyForumBundle:Sujet:add.html.twig', array('forum' => $forum));
    }
    
    public function updateAction()
    {
        // Récupération du sujet
        $sujet = $this->getDoctrine()->getManager()->getRepository('EasyForumBundle:Sujet')->findOneById($this->getRequest()->request->get('sujet'));
        
        if (!$sujet) 
        {
            $sujet = new Sujet();
            $message = new Message();
            
            $sujet->setTitre($this->getRequest()->request->get('titre'));
            $message->setContenu($this->getRequest()->request->get('message'));
            
            $forum = $this->getDoctrine()->getManager()->getRepository('EasyForumBundle:Forum')->findOneById($this->getRequest()->request->get('forum'));
            $sujet->setForum($forum);

            $utilisateur = $this->getDoctrine()->getManager()->getRepository('EasyUtilisateurBundle:Utilisateur')->findOneByUsername($this->getRequest()->request->get('utilisateur'));
            $sujet->setUtilisateur($utilisateur);
            $message->setUtilisateur($utilisateur);
            
            $sujet->setDate(new \DateTime('now'));
            $message->setDate(new \DateTime('now'));
            $message->setSujet($sujet);
            
            $this->getDoctrine()->getManager()->persist($sujet);
            $this->getDoctrine()->getManager()->persist($message);
            $this->getDoctrine()->getManager()->flush();
        }
        
        // Retour sur l'administration des articles
        return $this->redirect($this->generateUrl('easy_forum_forum', array('id' => $forum->getId())));
    }
}