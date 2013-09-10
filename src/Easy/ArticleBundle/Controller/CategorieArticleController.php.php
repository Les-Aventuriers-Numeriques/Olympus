<?php

namespace Easy\ArticleBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class CategorieArticleController extends Controller
{
    public function indexAction()
    {
        // Chargement des News
        $articles = $this->getDoctrine()->getManager()->getRepository('EasyArticleBundle:Article')->findBy(array(), array('date' => 'DESC'), 5, 0);
        
        return $this->render('EasyArticleBundle:Article:index.html.twig', array('articles' => $articles));
    }
}
