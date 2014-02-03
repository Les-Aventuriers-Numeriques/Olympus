<?php

namespace Easy\WSBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Easy\WSBundle\Extension\MinecraftQuery;
use Symfony\Component\HttpFoundation\Response;

class EtatsController extends Controller {

    public function loadAction() {
        if ($this->getRequest()->isXmlHttpRequest()) {
            $hostname_mc1 = 'minecraft.easy-company.fr';
            $mc1 = new MinecraftQuery();
            $mc1->Connect($hostname_mc1, 25565, 1);
            $infos_mc1 = $mc1->GetInfo();
            $infos_mc1['HostName'] = $hostname_mc1;
            $players_mc1 = $mc1->GetPlayers();

            return new Response(json_encode(array('infos' => $infos_mc1, 'players' => $players_mc1)));
        } else {
            throw new NotFoundHttpException("No XML HTTP REQUEST");
        }
    }

}
