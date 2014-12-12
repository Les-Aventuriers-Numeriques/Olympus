<?php

namespace Easy\ChatBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;

class MessagesController extends Controller
{
    public function getMessagesAction()
    {
        $em = $this->getDoctrine()->getManager();
        
        $messages = $em->getRepository('ChatBundle:Message')->findAll();

        return $this->render('ChatBundle::messages.html.twig', array('messages' => $messages));
    }
    
    public function newMessageAction()
    {
        return new JsonResponse(array('hell' => 'o'));
    }
}
