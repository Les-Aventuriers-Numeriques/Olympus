<?php

namespace Easy\UtilisateurBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class UtilisateurController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('EasyUtilisateurBundle:Default:index.html.twig', array('name' => $name));
    }
    
    public function listAction($name)
    {
        return $this->render('EasyUtilisateurBundle:Default:index.html.twig', array('name' => $name));
    }
    
    public function showAction($name)
    {
        return $this->render('EasyUtilisateurBundle:Default:index.html.twig', array('name' => $name));
    }
    
    public function saveAction($name)
    {
        return $this->render('EasyUtilisateurBundle:Default:index.html.twig', array('name' => $name));
    }
    
    public function newAction($name)
    {
        return $this->render('EasyUtilisateurBundle:Default:index.html.twig', array('name' => $name));
    }
}
