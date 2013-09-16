<?php

namespace Easy\SiteBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Easy\SiteBundle\Extension\MinecraftQuery;

class AccueilController extends Controller
{
    public function loadEtatsAction()
    {
        // Informations serveurs
        $infos_mc1 = new MinecraftQuery();
        $infos_mc1->Connect( '188.165.37.162', 25565 , 1 );
        $infos_mc2 = new MinecraftQuery();
        $infos_mc2->Connect( '188.165.37.162', 25565 , 1 );
        
        // Evènements
        return $this->render('EasySiteBundle::etats.html.twig', array('infos_mc1' => $infos_mc1, 'infos_mc2' => $infos_mc2));
    }
    
    public function indexAction()
    {
        // Chargement des News
        $articles = $this->getDoctrine()->getManager()->getRepository('EasyArticleBundle:Article')->findBy(array(), array('date' => 'DESC'), 5, 0);

        return $this->render('EasySiteBundle:Default:index.html.twig', array('articles' => $articles));
    }
    
    public function pageDonAction()
    {
        return $this->render('EasySiteBundle:Pages:dons.html.twig');
    }
    
    public function pageMentionsAction()
    {
        return $this->render('EasySiteBundle:Pages:mentions.html.twig');
    }
}
