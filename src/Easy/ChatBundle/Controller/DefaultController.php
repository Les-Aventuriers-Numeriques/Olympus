<?php

namespace Easy\ChatBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;

class DefaultController extends Controller
{
    public function newAction()
    {
        return new JsonResponse(array('hell' => 'o'));
    }
}
