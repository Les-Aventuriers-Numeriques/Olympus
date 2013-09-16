<?php

namespace Easy\UtilisateurBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Easy\UtilisateurBundle\Entity\Groupe;

class UtilisateurController extends Controller
{
    public function showAction($username)
    {
        // UserManager de FosUserBundle
        $userManager = $this->container->get('fos_user.user_manager');
        
        // Récupération de l'utilisateur à supprimer
        $utilisateur = $userManager->findUserByUsername($username);
        
        // La vue
        return $this->render('EasyUtilisateurBundle:Utilisateur:show.html.twig', array('utilisateur' => $utilisateur));
    }
    
    public function updateAction()
    {
        // UserManager de FosUserBundle
        $userManager = $this->container->get('fos_user.user_manager');
        
        // Récupération de l'utilisateur
        $utilisateur = $userManager->findUserByUsername($this->getRequest()->request->get('username'));
        
        // Enregistrement des données
        $utilisateur->setNom($this->getRequest()->request->get('nom'));
        $utilisateur->setPrenom($this->getRequest()->request->get('prenom'));
        $utilisateur->setEmail($this->getRequest()->request->get('email'));
        $utilisateur->setIdSteam($this->getRequest()->request->get('id_steam'));
        $utilisateur->setPseudoSteam($this->getRequest()->request->get('pseudo_steam'));
        $utilisateur->setLeitmotiv($this->getRequest()->request->get('leitmotiv'));
        $utilisateur->setEstPublique($this->getRequest()->request->get('est_publique'));
        if ($this->getRequest()->request->get('password')!="" || $this->getRequest()->request->get('password')==$this->getRequest()->request->get('password2')) $utilisateur->setPassword($this->getRequest()->request->get('password'));
        
        // On sauvegarde
        $userManager->updateUser($utilisateur);
        
        // Retour sur l'administration des articles
        return $this->redirect($this->generateUrl('easy_utilisateur_profil', array('username' => $this->getRequest()->request->get('username'))));
    }
    
    public function listAdminAction()
    {
        // UserManager de FosUserBundle
        $userManager = $this->container->get('fos_user.user_manager');
        
        // Récupération des utilisateurs
        $utilisateurs = $userManager->findUsers();
        
        // La vue
        return $this->render('EasyUtilisateurBundle:Utilisateur:listAdmin.html.twig', array('utilisateurs' => $utilisateurs));
    }
    
    public function deleteAdminAction($username)
    {
        // UserManager de FosUserBundle
        $userManager = $this->container->get('fos_user.user_manager');
        
        // Récupération de l'utilisateur à supprimer
        $utilisateur = $userManager->findUserByUsername($username);
        
        // Supression
        $userManager->deleteUser($utilisateur);
        
        // La vue
        return $this->redirect($this->generateUrl('easy_utilisateur_admin'));
    }
}
