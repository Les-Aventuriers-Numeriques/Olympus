<?php

namespace Easy\ArticleBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Easy\ArticleBundle\Entity\Article;

class ArticleController extends Controller
{
    public function listAdminAction()
    {
        $articles = $this->getDoctrine()->getManager()->getRepository('EasyArticleBundle:Article')->findAll();
        
        return $this->render('EasyArticleBundle:Article:listAdmin.html.twig', array('articles' => $articles));
    }
    
    public function deleteAdminAction($id)
    {
        // Récupération de l'article à supprimer
        $article = $this->getDoctrine()->getManager()->getRepository('EasyArticleBundle:Article')->findOneById($id);
        
        // Suppression
        $this->getDoctrine()->getManager()->remove($article);
        $this->getDoctrine()->getManager()->flush();
        
        // Retour sur l'administration des articles
        return $this->redirect($this->generateUrl('easy_article_admin'));
    }
    
    public function showAdminAction($id=NULL)
    {
        // Récupération de l'article à supprimer
        if ($id==NULL) 
        {
            $article = NULL;
        }
        else
        {
            $article = $this->getDoctrine()->getManager()->getRepository('EasyArticleBundle:Article')->findOneById($id);
        }
        $categories = $this->getDoctrine()->getManager()->getRepository('EasyArticleBundle:CategorieArticle')->findAll();
        
        // Retour sur l'administration des articles
        return $this->render('EasyArticleBundle:Article:showAdmin.html.twig', array('article' => $article, 'categories' => $categories));
    }
    
    public function updateAdminAction()
    {
        // Récupération de l'article à supprimer
        $article = $this->getDoctrine()->getManager()->getRepository('EasyArticleBundle:Article')->findOneById($this->getRequest()->request->get('article'));
        if (!$article) $article = new Article();
        
        // Enregistrement des données
        $article->setTitre($this->getRequest()->request->get('titre'));
        $article->setContenu($this->getRequest()->request->get('contenu'));
        
        $categorie = $this->getDoctrine()->getManager()->getRepository('EasyArticleBundle:CategorieArticle')->findOneById($this->getRequest()->request->get('categorie'));
        $article->setCategorieArticle($categorie);
        
        $utilisateur = $this->getDoctrine()->getManager()->getRepository('EasyUtilisateurBundle:Utilisateur')->findOneByUsername($this->getRequest()->request->get('utilisateur'));
        $article->setUtilisateur($utilisateur);
        
        $article->setDate(new \DateTime('now'));
        
        // On save
        $this->getDoctrine()->getManager()->persist($article);
        $this->getDoctrine()->getManager()->flush();
        
        // Retour sur l'administration des articles
        return $this->redirect($this->generateUrl('easy_article_admin'));
    }
}
