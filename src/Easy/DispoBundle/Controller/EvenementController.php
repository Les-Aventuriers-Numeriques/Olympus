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
}
