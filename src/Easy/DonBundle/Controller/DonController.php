<?php

namespace Easy\DonBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Easy\DonBundle\Entity\Don;

class DonController extends Controller
{    
    /*
     * Fonction permettant d'avoir un paerçu sur le financement du serveur
     */
    public function indexAction()
    {
        // Récupération des dons des stats de l'utilisateur
        $utilisateur = $this->container->get('security.context')->getToken()->getUser();
        $dons_utilisateur = $this->getDoctrine()->getManager()->getRepository('EasyDonBundle:Don')->findByUtilisateur($utilisateur);
        $don_moyen = $this->getDoctrine()->getManager()->getRepository('EasyDonBundle:Don')->findMoyenneUtilisateur($utilisateur);
        
        return $this->render('EasyDonBundle:Don:index.html.twig', array('mois' => Don::$mois,
                                                                        'dons_utilisateur' => $dons_utilisateur,
                                                                        'don_moyen' => $don_moyen
                ));
    }
    
    /*
     * Fonction permettant de lister précisement les dons pour un mois donné
     */
    public function listAction()
    {
        $utilisateurs = $this->container->get('fos_user.user_manager')->findUsers();
        //$dons = $this->getDoctrine()->getManager()->getRepository('EasyDonBundle:Don')->findTotalDonsMois();
        
        return $this->render('EasyDonBundle:Don:list.html.twig', array('mois' => Don::$mois,
                                                                        'utilisateurs' => $utilisateurs,
                                                                        //'dons' => $dons
            ));
    }
    
    /*
     * Fonction permettant de lister précisement les dons pour un mois donné
     */
    public function addAction()
    {
        // Récupération des moyens de paiement et des utilisateurs
        $moyensPaiement = $this->getDoctrine()->getManager()->getRepository('EasyDonBundle:MoyenPaiement')->findAll();
        $utilisateurs = $this->getDoctrine()->getManager()->getRepository('EasyUtilisateurBundle:Utilisateur')->findAll();
            
        return $this->render('EasyDonBundle:Don:add.html.twig', array('moyensPaiement' => $moyensPaiement,
                                                                        'utilisateurs' => $utilisateurs
                ));
    }
    
    /*
     * Fonction permettant de lister précisement les dons pour un mois donné
     */
    public function saveAction()
    {
        // Récupération des moyens de paiement et des utilisateurs
        $moyensPaiement = $this->getDoctrine()->getManager()->getRepository('EasyDonBundle:MoyenPaiement')->findAll();
        $utilisateurs = $this->getDoctrine()->getManager()->getRepository('EasyUtilisateurBundle:Utilisateur')->findAll();
            
        return $this->render('EasyDonBundle:Don:add.html.twig', array('moyensPaiement' => $moyensPaiement,
                                                                        'utilisateurs' => $utilisateurs
                ));
    }
    
    /*
     * Fonction permettant de lister précisement les dons pour un mois donné
     */
    public function updateAction()
    {
        return $this->render('EasyDonBundle:Don:index.html.twig');
    }
    
    /*
     * Fonction permettant de lister précisement les dons pour un mois donné
     */
    public function deleteAction()
    {
        return $this->render('EasyDonBundle:Don:index.html.twig');
    }
}
