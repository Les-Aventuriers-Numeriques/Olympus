<?php

namespace Easy\ArticleBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Easy\ArticleBundle\Entity\CategorieArticle;

class CategorieArticleController extends Controller
{
    public function listAdminAction()
    {
        $categories = $this->getDoctrine()->getManager()->getRepository('EasyArticleBundle:CategorieArticle')->findAll();
        
        return $this->render('EasyArticleBundle:CategorieArticle:listAdmin.html.twig', array('categories' => $categories));
    }
    
    public function deleteAdminAction($id)
    {
        // Récupération de l'article à supprimer
        $categorie = $this->getDoctrine()->getManager()->getRepository('EasyArticleBundle:CategorieArticle')->findOneById($id);
        
        // Suppression
        $this->getDoctrine()->getManager()->remove($categorie);
        $this->getDoctrine()->getManager()->flush();
        
        // Retour sur l'administration des articles
        return $this->redirect($this->generateUrl('easy_categoriearticle_admin'));
    }
    
    public function showAdminAction($id=NULL)
    {
        // Récupération de l'article à supprimer
        if ($id==NULL) 
        {
            $categorie = NULL;
        }
        else
        {
            $categorie = $this->getDoctrine()->getManager()->getRepository('EasyArticleBundle:CategorieArticle')->findOneById($id);
        }
        
        // Retour sur l'administration des articles
        return $this->render('EasyArticleBundle:CategorieArticle:showAdmin.html.twig', array('categorie' => $categorie));
    }
    
    public function updateAdminAction()
    {
        // Récupération de la catégorie à modifier
        $categorie = $this->getDoctrine()->getManager()->getRepository('EasyArticleBundle:CategorieArticle')->findOneById($this->getRequest()->request->get('categorie'));
        if (!$categorie) $categorie = new CategorieArticle();
        
        // Enregistrement des données
        $categorie->setLibelle($this->getRequest()->request->get('libelle'));
        $categorie->setDescription($this->getRequest()->request->get('description'));
        
        // On save
        $this->getDoctrine()->getManager()->persist($categorie);
        $this->getDoctrine()->getManager()->flush();
        
        // Retour sur l'administration des articles
        return $this->redirect($this->generateUrl('easy_categoriearticle_admin'));
    }
}
