<?php

namespace Easy\SquadXmlBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function generateAction()
    {
        // On interdit les requêtes non-Ajax
        if (!$this->getRequest()->isXmlHttpRequest()) {
            throw new HttpException('Accès interdit', 401);
        }

        $soldiers = $this->getDoctrine()->getManager()->getRepository('UtilisateurBundle:Utilisateur')->findAll();

        $squad_xml = $this->renderView('SquadXmlBundle:Default:template.xml.twig', array('soldiers' => $soldiers));
    }
}
