<?php

namespace Easy\DonBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Easy\DonBundle\Entity\Don;

class DonController extends Controller {
    /*
     * Fonction permettant d'avoir un paerçu sur le financement du serveur
     */

    public function indexAction() {
        // Récupération des dons des stats de l'utilisateur
        $utilisateur = $this->container->get('security.context')->getToken()->getUser();
        $repository = $this->getDoctrine()->getManager()->getRepository('EasyDonBundle:Don');
        
        $statistiquesGlobales = $repository->selectStatistiquesGlobales();
        $statistiquesUtilisateur = $repository->selectStatistiquesUtilisateur($utilisateur);
        
        return $this->render('EasyDonBundle:Don:index.html.twig', array('mois' => Don::$mois,
                    'statistiquesGlobales' => $statistiquesGlobales,
                    'statistiquesUtilisateur' => $statistiquesUtilisateur
        ));
    }

    /*
     * Fonction permettant de lister précisement les dons pour un mois donné
     */

    public function listAction() {
        $utilisateurs = $this->container->get('fos_user.user_manager')->findUsers();
        //$dons = $this->getDoctrine()->getManager()->getRepository('EasyDonBundle:Don')->findTotalDonsMois();

        return $this->render('EasyDonBundle:Don:list.html.twig', array('mois' => Don::$mois,
                    'utilisateurs' => $utilisateurs,
                        //'dons' => $dons
        ));
    }

    /*
     * Fonction permettant de lister tous les dons
     */

    public function listAdminAction() {
        $dons = $this->getDoctrine()->getManager()->getRepository('EasyDonBundle:Don')->findAll();

        return $this->render('EasyDonBundle:Don:listAdmin.html.twig', array('dons' => $dons));
    }

    public function deleteAdminAction($id) {
        // Récupération de l'article à supprimer
        $don = $this->getDoctrine()->getManager()->getRepository('EasyDonBundle:Don')->findOneById($id);

        // Suppression
        $this->getDoctrine()->getManager()->remove($don);
        $this->getDoctrine()->getManager()->flush();

        // Retour sur l'administration des articles
        return $this->redirect($this->generateUrl('easy_don_admin'));
    }

    public function showAdminAction($id = NULL) {
        // Récupération de l'article à supprimer
        if ($id == NULL) {
            $don = NULL;
        } else {
            $don = $this->getDoctrine()->getManager()->getRepository('EasyDonBundle:Don')->findOneById($id);
        }
        $moyens_paiements = $this->getDoctrine()->getManager()->getRepository('EasyDonBundle:MoyenPaiement')->findAll();
        $utilisateurs = $this->getDoctrine()->getManager()->getRepository('EasyUtilisateurBundle:Utilisateur')->findAll();

        // Retour sur l'administration des articles
        return $this->render('EasyDonBundle:Don:showAdmin.html.twig', array('don' => $don, 'moyens_paiements' => $moyens_paiements, 'utilisateurs' => $utilisateurs));
    }

    public function updateAdminAction() {
        // Récupération du don à modifier
        $don = $this->getDoctrine()->getManager()->getRepository('EasyDonBundle:Don')->findOneById($this->getRequest()->request->get('don'));
        if (!$don)
            $don = new Don();

        // Enregistrement des données
        $don->setMontant($this->getRequest()->request->get('montant'));

        $moyen_paiement = $this->getDoctrine()->getManager()->getRepository('EasyDonBundle:MoyenPaiement')->findOneById($this->getRequest()->request->get('moyen'));
        $don->setMoyenPaiement($moyen_paiement);

        $utilisateur = $this->getDoctrine()->getManager()->getRepository('EasyUtilisateurBundle:Utilisateur')->findOneById($this->getRequest()->request->get('utilisateur'));
        $don->setUtilisateur($utilisateur);

        // On save
        $this->getDoctrine()->getManager()->persist($don);
        $this->getDoctrine()->getManager()->flush();

        // Retour sur l'administration des articles
        return $this->redirect($this->generateUrl('easy_don_admin'));
    }

}
