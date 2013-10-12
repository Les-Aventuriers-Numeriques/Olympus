<?php

namespace Easy\DispoBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class EvenementController extends Controller
{
    public function listAccueilAction()
    {
        // TODO En lister 5 au max ?
        $evenements = $this->getDoctrine()->getManager()->getRepository('EasyDispoBundle:Evenement')->findAll();

        return $this->render('EasyDispoBundle:Evenement:listAccueil.html.twig', array('evenements' => $evenements));
    }

    public function listAdminAction()
    {
        $evenements = $this->getDoctrine()->getManager()->getRepository('EasyDispoBundle:Evenement')->findAll();

        return $this->render('EasyDispoBundle:Evenement:listAdmin.html.twig', array('evenements' => $evenements));
    }

    public function deleteAdminAction($id)
    {
        // Récupération de l'article à supprimer
        $evenement = $this->getDoctrine()->getManager()->getRepository('EasyDispoBundle:Evenement')->findOneById($id);

        // Suppression
        $this->getDoctrine()->getManager()->remove($evenement);
        $this->getDoctrine()->getManager()->flush();

        // Retour sur l'administration des articles
        return $this->redirect($this->generateUrl('easy_evenement_admin'));
    }

    public function showAdminAction($id=NULL)
    {
        // Récupération de l'article à supprimer
        if ($id==NULL)
        {
            $evenement = NULL;
        }
        else
        {
            $evenement = $this->getDoctrine()->getManager()->getRepository('EasyDispoBundle:Evenement')->findOneById($id);
        }

        // Retour sur l'administration des articles
        return $this->render('EasyDispoBundle:Evenement:showAdmin.html.twig', array('evenement' => $evenement));
    }

    public function updateAdminAction()
    {
        // Récupération de l'article à supprimer
        $evenement = $this->getDoctrine()->getManager()->getRepository('EasyDispoBundle:Evenement')->findOneById($this->getRequest()->request->get('evenement'));
        if (!$evenement) $evenement = new Evenement();

        // Enregistrement des données
        $evenement->setTitre($this->getRequest()->request->get('titre'));
        $evenement->setDescription($this->getRequest()->request->get('description'));

        // TODO Rajouter les dates

        // On save
        $this->getDoctrine()->getManager()->persist($evenement);
        $this->getDoctrine()->getManager()->flush();

        // Retour sur l'administration des articles
        return $this->redirect($this->generateUrl('easy_evenement_admin'));
    }

    public function showAction($id=NULL)
    {
        // Récupération de l'article à supprimer
        $evenement = $this->getDoctrine()->getManager()->getRepository('EasyDispoBundle:Evenement')->findOneById($id);

        // Retour sur l'administration des articles
        return $this->render('EasyDispoBundle:Evenement:show.html.twig', array('evenement' => $evenement));
    }

    // ---------------------------------------------------------------------- //
    // Espace membre

    /**
     * Listage des évènements dans l'espace membre
     */
    public function listEspaceMembreAction()
    {
        // Récupération de tous les évènements
        $evenements = $this->getDoctrine()->getManager()->getRepository('EasyDispoBundle:Evenement')->findAll();

        return $this->render('EasyDispoBundle:Evenement:listEspaceMembre.html.twig', array('evenements' => $evenements));
    }

    /**
     * Affichage d'un évènement dans l'espace membre pour renseignement disponiblités
     */
    public function showEspaceMembreAction($id)
    {
        // Récupération de l'évènement concerné
        $evenement = $this->getDoctrine()->getManager()->getRepository('EasyDispoBundle:Evenement')->findOneById($id);

        // Utilisateur courant
        $current_utilisateur = $this->get('security.context')->getToken()->getUser();
        $dispo_current_utilisateur = $this->getDoctrine()->getManager()->getRepository('EasyDispoBundle:Disponibilite')->findOneBy(array('evenement' => $evenement->getId(), 'utilisateur' => $current_utilisateur->getId()));

        // Tous les utilisateurs
        $utilisateurs = $this->getDoctrine()->getManager()->getRepository('EasyUtilisateurBundle:Utilisateur')->findAll();
        $dispos_utilisateurs = array(); // Utilisé sur la vue pour afficher les dispos de tout le monde
        $total_pas_encore_prononces = 0; // Le total des utilisateurs qui se sont pas prononcés

        foreach ($utilisateurs as $utilisateur) {
            $dispo = $this->getDoctrine()->getManager()->getRepository('EasyDispoBundle:Disponibilite')->findOneBy(array('evenement' => $evenement->getId(), 'utilisateur' => $utilisateur->getId()));

            if ($dispo === null) {
                $total_pas_encore_prononces++;
                $dispos_utilisateurs[] = '<span class="label label-default"><i class="icon-question-sign"></i></span> '.$utilisateur->getUsername();
            } else {
                $dispos_utilisateurs[] = $dispo->getEtat()->getStylizedLibelle().' '.$dispo->getStylizedUtilisateur();
            }
        }

        return $this->render('EasyDispoBundle:Evenement:showEspaceMembre.html.twig', array(
            'evenement' => $evenement,
            'current_utilisateur' => $current_utilisateur,
            'dispos_utilisateurs' => $dispos_utilisateurs,
            'dispo_current_utilisateur' => $dispo_current_utilisateur,
            'totaux' => array(
                'disponible' => count($this->getDoctrine()->getManager()->getRepository('EasyDispoBundle:Disponibilite')->findBy(array('evenement' => $evenement->getId(), 'etat' => 1))),
                'indisponible' => count($this->getDoctrine()->getManager()->getRepository('EasyDispoBundle:Disponibilite')->findBy(array('evenement' => $evenement->getId(), 'etat' => 3))),
                'pas_encore_prononce' => $total_pas_encore_prononces,
                'peut_etre' => count($this->getDoctrine()->getManager()->getRepository('EasyDispoBundle:Disponibilite')->findBy(array('evenement' => $evenement->getId(), 'etat' => 2)))
            )
        ));
    }
}
