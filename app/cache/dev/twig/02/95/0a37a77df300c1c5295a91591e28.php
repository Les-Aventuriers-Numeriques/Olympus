<?php

/* EasySiteBundle::layout.html.twig */
class __TwigTemplate_02950a37a77df300c1c5295a91591e28 extends Twig_Template
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
                <li class=\"active\"><a href=\"#\">Accueil</a></li>
                <li><a href=\"#\">Forum</a></li>
                <li><a href=\"#\">Membres</a></li>
                <li><a href=\"#\">Nos Serveurs</a></li>
                <li><a href=\"#\">Recrutement</a></li>
                <li><a href=\"#\">Nous Contacter</a></li>
              </ul>
            </div><!-- /.navbar-collapse -->
          </nav>
        </div>
    </div>
    <div class=\"row\">
        <div class=\"col-xs-4 col-md-3\">
            <div class=\"bloc\">
                ";
        // line 48
        $this->env->loadTemplate("EasySiteBundle::ts.html.twig")->display($context);
        // line 49
        echo "            </div>
        </div>
        <div class=\"col-xs-8 col-md-6\">
            <div class=\"bloc\">
                ";
        // line 53
        $this->displayBlock('body', $context, $blocks);
        // line 55
        echo "            </div>
        </div>
        <div class=\"col-xs-4 col-md-3\">
            <div class=\"bloc\">
                test3
            </div>
        </div>
    </div>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src=\"";
        // line 64
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/easysite/js/jquery-2.0.0.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 65
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

    // line 53
    public function block_body($context, array $blocks = array())
    {
        // line 54
        echo "                ";
    }

    public function getTemplateName()
    {
        return "EasySiteBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  119 => 54,  116 => 53,  110 => 7,  103 => 65,  99 => 64,  88 => 55,  86 => 53,  80 => 49,  78 => 48,  36 => 9,  32 => 8,  28 => 7,  21 => 2,);
    }
}
