<?php

namespace Easy\EspaceMembreBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class EspaceMembreController extends Controller
{
    public function indexAction()
    {
        return $this->render('EasyEspaceMembreBundle:Accueil:index.html.twig');
    }
}
