<?php

namespace Easy\UtilisateurBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class EasyUtilisateurBundle extends Bundle
{
    public function getParent()
    {
      return 'FOSUserBundle';
    }
}
