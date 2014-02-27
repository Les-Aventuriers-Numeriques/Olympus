<?php

namespace Easy\SquadXmlBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Filesystem\Filesystem;
use Symfony\Component\Filesystem\Exception\IOException;
use Symfony\Component\HttpFoundation\Response;

class DefaultController extends Controller
{
    public function generateAction()
    {
        if (false === $this->get('security.context')->isGranted('ROLE_ADMINISTRATEUR')) {
            throw new AccessDeniedException();
        }

        // TODO vérifier que l'utilisateur est bien un admin
        // On interdit les requêtes non-Ajax
        if (!$this->getRequest()->isXmlHttpRequest()) {
            throw new HttpException('Accès interdit', 401);
        }

        $soldiers = $this->getDoctrine()->getManager()->getRepository('EasyUtilisateurBundle:Utilisateur')->findAll();

        $squad_xml_content = $this->renderView('EasySquadXmlBundle:Default:template.xml.twig', array('soldiers' => $soldiers));

        $fs = new Filesystem();

        try {
            $fs->dumpFile('/bundles/easysite/xml/squad.xml', $squad_xml_content); // TODO fichier config avec chemin vers le fichier
        } catch (IOException $e) {
            throw new \Exception($e->getMessage(), 500);
        }

        return new Response();
    }
}
