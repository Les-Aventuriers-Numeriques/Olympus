<?php

namespace Easy\EspaceMembreBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class EspaceMembreController extends Controller
{
    public function indexAction()
    {
        $evenements = $dispo = $this->getDoctrine()->getManager()->getRepository('EasyDispoBundle:Evenement')->findAll();
        $current_utilisateur = $this->get('security.context')->getToken()->getUser();

        $evenements_en_attente = array();

        foreach ($evenements as $evenement) {
            $dispo = $this->getDoctrine()->getManager()->getRepository('EasyDispoBundle:Disponibilite')->findOneBy(array('evenement' => $evenement->getId(), 'utilisateur' => $current_utilisateur->getId()));

            if ($dispo === null) {
                $evenements_en_attente[] = $evenement;
            }
        }

        return $this->render('EasyEspaceMembreBundle:Accueil:index.html.twig', array('evenements_en_attente' => $evenements_en_attente));
    }
}
