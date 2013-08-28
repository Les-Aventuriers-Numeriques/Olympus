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
                    <a href=\"\"><span class=\"glyphicon glyphicon-euro\"></span> Consulter les Dons</a><br />
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
        return array (  77 => 44,  23 => 4,  34 => 6,  100 => 42,  81 => 24,  20 => 1,  113 => 29,  110 => 28,  104 => 7,  97 => 43,  58 => 18,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 65,  169 => 60,  140 => 55,  132 => 51,  128 => 49,  107 => 36,  61 => 13,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 72,  179 => 69,  159 => 61,  143 => 56,  135 => 53,  119 => 42,  102 => 32,  71 => 19,  67 => 20,  63 => 15,  59 => 14,  38 => 8,  94 => 7,  89 => 20,  85 => 25,  75 => 42,  68 => 14,  56 => 23,  87 => 49,  21 => 2,  26 => 12,  93 => 29,  88 => 39,  78 => 21,  46 => 11,  27 => 5,  44 => 22,  31 => 6,  28 => 7,  201 => 92,  196 => 90,  183 => 82,  171 => 61,  166 => 71,  163 => 62,  158 => 67,  156 => 66,  151 => 63,  142 => 59,  138 => 54,  136 => 56,  121 => 46,  117 => 44,  105 => 40,  91 => 27,  62 => 19,  49 => 19,  24 => 7,  25 => 3,  19 => 1,  79 => 18,  72 => 22,  69 => 25,  47 => 9,  40 => 11,  37 => 10,  22 => 3,  246 => 90,  157 => 56,  145 => 46,  139 => 45,  131 => 52,  123 => 47,  120 => 40,  115 => 43,  111 => 37,  108 => 36,  101 => 32,  98 => 31,  96 => 31,  83 => 48,  74 => 35,  66 => 30,  55 => 14,  52 => 25,  50 => 10,  43 => 12,  41 => 9,  35 => 8,  32 => 8,  29 => 5,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 66,  176 => 64,  173 => 65,  168 => 72,  164 => 59,  162 => 57,  154 => 58,  149 => 51,  147 => 58,  144 => 49,  141 => 48,  133 => 55,  130 => 41,  125 => 44,  122 => 43,  116 => 41,  112 => 42,  109 => 34,  106 => 36,  103 => 43,  99 => 31,  95 => 28,  92 => 21,  86 => 28,  82 => 37,  80 => 19,  73 => 19,  64 => 28,  60 => 16,  57 => 11,  54 => 16,  51 => 20,  48 => 12,  45 => 17,  42 => 9,  39 => 8,  36 => 9,  33 => 7,  30 => 2,);
    }
}
