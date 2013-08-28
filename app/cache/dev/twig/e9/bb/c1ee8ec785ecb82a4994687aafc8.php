<?php

/* EasyEspaceMembreBundle::layout.html.twig */
class __TwigTemplate_e9bbc1ee8ec785ecb82a4994687aafc8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 2
        echo " 
<!DOCTYPE HTML>
<html>
    <head>
        <meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />
        <title>";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <link href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/easysite/css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" media=\"screen\">
        <link href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/easysite/css/main.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" media=\"screen\">
    </head>
    <body>
        <div class=\"row\">
            <div class=\"col-xs-12 col-md-12\">
                Bannière
            </div>
        </div>
        <div class=\"row\">
            <div class=\"col-xs-12 col-md-12\">
                ";
        // line 19
        $this->env->loadTemplate("EasySiteBundle::menu.html.twig")->display($context);
        // line 20
        echo "            </div>
        </div>
        <div class=\"row\">
            <div class=\"col-xs-4 col-md-3\">
                <div class=\"bloc\">
                    <div class=\"page-header\">
                        <h1>Menu</h1> 
                    </div>
                    <a href=\"\"><span class=\"glyphicon glyphicon-user\"></span> Gérer mon Profil</a><br />
                    <a href=\"";
        // line 29
        echo $this->env->getExtension('routing')->getPath("easy_don_accueil");
        echo "\"><span class=\"glyphicon glyphicon-euro\"></span> Consulter les Dons</a><br />
                    <a href=\"\"><span class=\"glyphicon glyphicon-calendar\"></span> Consulter les Evènements</a><br />
                    <a href=\"\"><span class=\"glyphicon glyphicon-send\"></span> Ecrire un Ticket</a><br />
                    ----<br />
                    <a href=\"\"><span class=\"glyphicon glyphicon-user\"></span> Administration des News</a><br />
                    <a href=\"\"><span class=\"glyphicon glyphicon-calendar\"></span> Administration des Evènements</a><br />
                    <a href=\"\"><span class=\"glyphicon glyphicon-th-list\"></span> Administration du Forum</a><br />
                    <a href=\"\"><span class=\"glyphicon glyphicon-euro\"></span> Administration des Dons</a><br />
                    <a href=\"\"><span class=\"glyphicon glyphicon-envelope\"></span> Administration des Tickets</a><br />
                </div>
            </div>
            <div class=\"col-xs-12 col-md-9\">
                <div class=\"bloc\">
                    ";
        // line 42
        $this->displayBlock('body', $context, $blocks);
        // line 44
        echo "                </div>
            </div>
        </div>
        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src=\"";
        // line 48
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/easysite/js/jquery-2.0.0.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 49
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/easysite/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
    </body>
</html>";
    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        echo "=EaSy= Company";
    }

    // line 42
    public function block_body($context, array $blocks = array())
    {
        // line 43
        echo "                    ";
    }

    public function getTemplateName()
    {
        return "EasyEspaceMembreBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  106 => 43,  103 => 42,  97 => 7,  90 => 49,  86 => 48,  80 => 44,  78 => 42,  62 => 29,  51 => 20,  49 => 19,  36 => 9,  32 => 8,  28 => 7,  21 => 2,);
    }
}
