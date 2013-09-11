<?php

namespace Easy\ArticleBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

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
    
    public function updateAdminAction($id=NULL)
    {
        // Récupération de l'article à supprimer
        $article = $this->getDoctrine()->getManager()->getRepository('EasyArticleBundle:Article')->findOneById($id);
        if (!$article) $article = new Article();
        
        
        $this->getDoctrine()->getManager()->flush();
        
        // Retour sur l'administration des articles
        return $this->redirect($this->generateUrl('easy_article_admin'));
    }
}
