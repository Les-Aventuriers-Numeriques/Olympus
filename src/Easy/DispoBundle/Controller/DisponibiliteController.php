<?php

namespace Easy\DispoBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class DisponibiliteController extends Controller
{
    /**
     * Crée / met à jour la dispo de l'utilisateur
     */
    public function updateAction($evenement_id)
    {
        // On interdit les requêtes non-Ajax
        if (!$this->getRequest()->isXmlHttpRequest()) {
            throw new HttpException('Accès interdit', 401);
        }

        // Récupération des paramètres POST
        $my_disponibility = $this->getRequest()->request->get('my_disponibility');
        $my_disponibility_comment = $this->getRequest()->request->get('my_disponibility_comment');

        // Récupération de plusieurs entités
        $utilisateur = $this->get('security.context')->getToken()->getUser();
        $evenement = $this->getDoctrine()->getManager()->getRepository('EasyDispoBundle:Evenement')->findOneById($evenement_id);
        $etat = $this->getDoctrine()->getManager()->getRepository('EasyDispoBundle:Etat')->findOneById($my_disponibility);

        // Récupération de la dispo de l'utilisateur
        $disponibilite = $this->getDoctrine()->getManager()->getRepository('EasyDispoBundle:Disponibilite')->findOneBy(array('evenement' => $evenement->getId(), 'utilisateur' => $utilisateur->getId()));

        // Si elle existe pas, on en créé une nouvelle
        if ($disponibilite === null) {
            $disponibilite = new \Easy\DispoBundle\Entity\Disponibilite();
            $disponibilite->setEvenement($evenement);
            $disponibilite->setUtilisateur($utilisateur);
        }

        if (empty($my_disponibility_comment)) {
            $disponibilite->setCommentaire(null);
        } else {
            $disponibilite->setCommentaire($my_disponibility_comment);
        }

        $disponibilite->setEtat($etat);

        $this->getDoctrine()->getManager()->persist($disponibilite);
        $this->getDoctrine()->getManager()->flush();

        return new Response();
    }
}
