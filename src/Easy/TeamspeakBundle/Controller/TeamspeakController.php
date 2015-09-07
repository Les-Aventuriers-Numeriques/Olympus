<?php

namespace Easy\TeamspeakBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

require_once(__DIR__ . "/../Helpers/TeamSpeak3.php");

class TeamspeakController extends Controller {

    public function indexAction() {
        // Connexion
        $ts3 = \TeamSpeak3::factory("serverquery://rootTs:0v+DnNBM@ts.easy-company.fr:10011/?server_port=9987");
        
        // Liste des clients connectés
        $clients = $ts3->clientList();
        
        // Vue
        return $this->render('EasyTeamspeakBundle:Teamspeak:index.html.twig', array('clients' => $clients));
    }

}
