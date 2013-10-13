<?php

namespace Easy\ForumBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class SujetController extends Controller
{
    public function listAction($id)
    {
        $forum = $this->getDoctrine()->getManager()->getRepository('EasyForumBundle:Sujet')->findOneById($id);
        
        $sujets = $this->getDoctrine()->getManager()->getRepository('EasyForumBundle:Sujet')->findByForum($forum);
        
        return $this->render('EasyForumBundle:Sujet:list.html.twig', array('sujets' => $sujets));
    }
}
