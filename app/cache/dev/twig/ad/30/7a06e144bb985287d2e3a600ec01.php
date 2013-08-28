<?php

/* EasySiteBundle::menu.html.twig */
class __TwigTemplate_ad307a06e144bb985287d2e3a600ec01 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 2
        echo "
<nav class=\"navbar navbar-default\" role=\"navigation\">
    <div class=\"navbar-header\">
      <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\".navbar-ex1-collapse\">
        <span class=\"sr-only\">Toggle navigation</span>
        <span class=\"icon-bar\"></span>
        <span class=\"icon-bar\"></span>
        <span class=\"icon-bar\"></span>
      </button>
      <a class=\"navbar-brand\" href=\"#\">=EaSy=</a>
    </div>

    <div class=\"collapse navbar-collapse navbar-ex1-collapse\">
      <ul class=\"nav navbar-nav\">
        <li class=\"active\"><a href=\"";
        // line 16
        echo $this->env->getExtension('routing')->getPath("easy_site_homepage");
        echo "\">Accueil</a></li>
        <li><a href=\"#\">Forum</a></li>
        <li><a href=\"#\">Membres</a></li>
        <li><a href=\"#\">Nos Serveurs</a></li>
        <li><a href=\"#\">Recrutement</a></li>
        <li><a href=\"#\">Nous Contacter</a></li>
        ";
        // line 22
        if ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 23
            echo "            <li><a href=\"";
            echo $this->env->getExtension('routing')->getPath("espace_membre_accueil");
            echo "\">Espace Membre</a></li>
        ";
        }
        // line 25
        echo "      </ul>
    </div>
</nav>";
    }

    public function getTemplateName()
    {
        return "EasySiteBundle::menu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  52 => 25,  46 => 23,  44 => 22,  35 => 16,  19 => 2,  103 => 43,  100 => 42,  94 => 7,  87 => 49,  83 => 48,  77 => 44,  75 => 42,  51 => 20,  49 => 19,  32 => 8,  28 => 7,  21 => 2,  48 => 12,  42 => 9,  39 => 8,  36 => 9,  29 => 5,);
    }
}
