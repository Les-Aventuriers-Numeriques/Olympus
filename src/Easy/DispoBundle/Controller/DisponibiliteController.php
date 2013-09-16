<?php

namespace Easy\DispoBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DisponibiliteController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('EasyDispoBundle:Default:index.html.twig', array('name' => $name));
    }
}
