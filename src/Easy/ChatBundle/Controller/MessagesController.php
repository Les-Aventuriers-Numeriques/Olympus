<?php

namespace Easy\ChatBundle\Controller;

use Easy\ChatBundle\Entity\Message;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;

class MessagesController extends Controller
{
    protected $em;
    protected $messageRepository;
    
    public function getMessagesAction(Request $request)
    {
        $session = $this->getRequest()->getSession();
        
        if ($session->get('isMobile') === null) {
            $mobileDetector = $this->get('mobile_detect.mobile_detector');
            $session->set('isMobile', $mobileDetector->isMobile());
        }
        
        $this->em = $this->getDoctrine()->getManager();
        $this->messageRepository = $this->em->getRepository('ChatBundle:Message');

        $offset = $request->get('offset', null);
        
        $messages = $this->messageRepository->findAllFiltered($this->get('security.context')->isGranted('ROLE_ADMINISTRATEUR'), $offset);
    
        return $this->render('ChatBundle::messages.html.twig', array('messages' => $messages));
    }
    
    public function newMessageAction(Request $request)
    {
        try {
            $this->em = $this->getDoctrine()->getManager();

            $data = $request->request->all();

            $message = new Message();
            $message->setTexte($data['chat-message']);
            $message->setUtilisateur($this->getUser());
            $message->setIsMobile($this->getRequest()->getSession()->get('isMobile'));

            $this->em->persist($message);
            $this->em->flush();

            return $this->render('ChatBundle::message.html.twig', array('message' => $message));
        } catch (\Exception $e) {
            return new JsonResponse(array('message' => $e->getMessage()));
        }
    }

    public function deleteMessageAction(Request $request)
    {
        try {
            $this->em = $this->getDoctrine()->getManager();
            $this->messageRepository = $this->em->getRepository('ChatBundle:Message');

            $message = $this->messageRepository->find($request->get('id'));

            if (!$message) {
                throw new \Exception('Message introuvable.');
            }
            
            if (($this->getUser()->getId() != $message->getUtilisateur()->getId()) and !$this->get('security.context')->isGranted('ROLE_ADMINISTRATEUR')) {
                throw new \Exception('Vous n\'avez pas l\'autorisation de supprimer ce message.');
            }

            $message->setIsDeleted(true);

            $this->em->persist($message);
            $this->em->flush();

            return $this->render('ChatBundle::message.html.twig', array('message' => $message));
        } catch (\Exception $e) {
            return new JsonResponse(array('message' => $e->getMessage()));
        }
    }

    public function cancelDeleteMessageAction(Request $request)
    {
        try {
            $this->em = $this->getDoctrine()->getManager();
            $this->messageRepository = $this->em->getRepository('ChatBundle:Message');

            $message = $this->messageRepository->find($request->get('id'));

            if (!$message) {
                throw new \Exception('Message introuvable.');
            }

            if (!$this->get('security.context')->isGranted('ROLE_ADMINISTRATEUR')) {
                throw new \Exception('Vous n\'avez pas l\'autorisation d\'annuler la suppression de ce message.');
            }

            $message->setIsDeleted(false);

            $this->em->persist($message);
            $this->em->flush();

            return $this->render('ChatBundle::message.html.twig', array('message' => $message));
        } catch (\Exception $e) {
            return new JsonResponse(array('message' => $e->getMessage()));
        }
    }
}
