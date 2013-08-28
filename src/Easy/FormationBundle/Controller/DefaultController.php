<?php

namespace Easy\FormationBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('EasyFormationBundle:Default:index.html.twig', array('name' => $name));
    }
}
