<?php

namespace Easy\ArticleBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('EasyArticleBundle:Default:index.html.twig', array('name' => $name));
    }
}
