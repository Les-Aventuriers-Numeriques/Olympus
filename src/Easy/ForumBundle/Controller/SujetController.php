<?php

namespace Easy\ForumBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class SujetController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('EasyForumBundle:Default:index.html.twig', array('name' => $name));
    }
}
