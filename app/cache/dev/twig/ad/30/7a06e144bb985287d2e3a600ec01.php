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
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class=\"navbar-header\">
      <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\".navbar-ex1-collapse\">
        <span class=\"sr-only\">Toggle navigation</span>
        <span class=\"icon-bar\"></span>
        <span class=\"icon-bar\"></span>
        <span class=\"icon-bar\"></span>
      </button>
      <a class=\"navbar-brand\" href=\"#\">=EaSy=</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class=\"collapse navbar-collapse navbar-ex1-collapse\">
      <ul class=\"nav navbar-nav\">
        <li class=\"active\"><a href=\"";
        // line 18
        echo $this->env->getExtension('routing')->getPath("easy_site_homepage");
        echo "\">Accueil</a></li>
        <li><a href=\"#\">Forum</a></li>
        <li><a href=\"#\">Membres</a></li>
        <li><a href=\"#\">Nos Serveurs</a></li>
        <li><a href=\"#\">Recrutement</a></li>
        <li><a href=\"#\">Nous Contacter</a></li>
        ";
        // line 24
        if ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 25
            echo "            <li><a href=\"";
            echo $this->env->getExtension('routing')->getPath("espace_membre_accueil");
            echo "\">Espace Membre</a></li>
        ";
        }
        // line 27
        echo "      </ul>
    </div><!-- /.navbar-collapse -->
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
        return array (  54 => 27,  48 => 25,  46 => 24,  37 => 18,  19 => 2,  91 => 31,  88 => 30,  82 => 7,  75 => 37,  71 => 36,  65 => 32,  63 => 30,  51 => 20,  49 => 19,  36 => 9,  32 => 8,  28 => 7,  21 => 2,);
    }
}
