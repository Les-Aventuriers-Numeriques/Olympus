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
        $this->em = $this->getDoctrine()->getManager();
        $this->messageRepository = $this->em->getRepository('ChatBundle:Message');
        
        $messages = $this->messageRepository->findAll();
    
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

            $this->em->persist($message);
            $this->em->flush();

            return $this->render('ChatBundle::message.html.twig', array('message' => $message));
        } catch (\Exception $e) {
            return new JsonResponse(array('message' => $e->getMessage()));
        }
    }

    public function deleteMessageAction(Request $request)
    {
        $this->em = $this->getDoctrine()->getManager();
        $this->messageRepository = $this->em->getRepository('ChatBundle:Message');

        $message = $this->messageRepository->find($request->get('id'));

        $message->setIsDeleted(true);

        $this->em->persist($message);
        $this->em->flush();

        return $this->render('ChatBundle::message.html.twig', array('message' => $message));
    }
}
