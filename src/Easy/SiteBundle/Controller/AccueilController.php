<?php

namespace Easy\SiteBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Easy\SiteBundle\Extension\MinecraftQuery;

class AccueilController extends Controller
{
    public function loadEtats()
    {
        // Informations serveurs
        $infos_mc1 = new MinecraftQuery();
        $infos_mc1->Connect( '188.165.37.162', 25565 , 1 );
        $infos_mc2 = new MinecraftQuery();
        $infos_mc2->Connect( '188.165.37.162', 25565 , 1 );
        
        // Evènements
        
        return array('infos_mc1' => $infos_mc1, 'infos_mc2' => $infos_mc2);
    }
    
    public function indexAction()
    {
        $etats = $this->loadEtats();
        // Chargement des News
        $articles = $this->getDoctrine()->getManager()->getRepository('EasyArticleBundle:Article')->findBy(array(), array('date' => 'DESC'), 5, 0);

        return $this->render('EasySiteBundle:Default:index.html.twig', array('articles' => $articles, 'infos_mc1' => $etats['infos_mc1'], 'infos_mc2' => $etats['infos_mc2']));
    }
    
    public function pageDonAction()
    {
        $etats = $this->loadEtats();
        return $this->render('EasySiteBundle:Pages:dons.html.twig', array('infos_mc1' => $etats['infos_mc1'], 'infos_mc2' => $etats['infos_mc2']));
    }
}
