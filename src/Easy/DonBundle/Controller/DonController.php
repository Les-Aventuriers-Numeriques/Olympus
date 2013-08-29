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
        
        
        return $this->render('EasyDonBundle:Don:index.html.twig', array('mois' => Don::$mois));
    }
    
    /*
     * Fonction permettant de lister précisement les dons pour un mois donné
     */
    public function listAction()
    {
        return $this->render('EasyDonBundle:Don:list.html.twig', array('mois' => Don::$mois));
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
