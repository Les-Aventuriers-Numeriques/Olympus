<?php

namespace Easy\UtilisateurBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Easy\UtilisateurBundle\Entity\Groupe;

class UtilisateurController extends Controller
{
    public function indexAction()
    {
        // TESTS
        /*$group = new Groupe("Administrateur", array('ROLE_ADMINISTRATEUR'));
        $this->getDoctrine()->getEntityManager()->persist($group);
        $this->getDoctrine()->getEntityManager()->flush();*/
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
