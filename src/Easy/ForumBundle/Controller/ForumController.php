<?php

namespace Easy\ForumBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class ForumController extends Controller
{
    public function indexAction()
    {
        // Récupération des catégories
        $categories_forums = $this->getDoctrine()->getManager()->getRepository('EasyForumBundle:CategorieForum')->findAll();
        
        return $this->render('EasyForumBundle:Forum:index.html.twig', array('categories_forums' => $categories_forums));
    }
}
