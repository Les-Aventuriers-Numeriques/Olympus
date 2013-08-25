<?php

namespace Easy\SiteBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class AccueilController extends Controller
{
    public function indexAction()
    {
        return $this->render('EasySiteBundle:Default:index.html.twig');
    }
}
