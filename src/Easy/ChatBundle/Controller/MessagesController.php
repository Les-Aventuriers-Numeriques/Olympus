<?php

namespace Easy\ChatBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;

class MessagesController extends Controller
{
    public function getMessagesAction()
    {
        return $this->render('ChatBundle:messages.html.twig');
    }
    
    public function newMessageAction()
    {
        return new JsonResponse(array('hell' => 'o'));
    }
}
