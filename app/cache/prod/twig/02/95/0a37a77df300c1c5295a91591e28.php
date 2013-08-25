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
        echo "                </div>
            </div>
            <div class=\"col-xs-8 col-md-6\">
                <div class=\"bloc\">
                    ";
        // line 53
        $this->displayBlock('body', $context, $blocks);
        // line 55
        echo "                </div>
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
        echo "                    ";
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
        return array (  119 => 54,  116 => 53,  103 => 65,  99 => 64,  86 => 53,  21 => 2,  54 => 14,  31 => 7,  549 => 162,  543 => 161,  538 => 158,  530 => 155,  526 => 153,  522 => 151,  512 => 149,  505 => 148,  502 => 147,  497 => 146,  491 => 144,  488 => 143,  483 => 142,  473 => 134,  469 => 132,  466 => 131,  460 => 130,  455 => 129,  450 => 126,  444 => 122,  441 => 121,  437 => 120,  434 => 119,  429 => 116,  423 => 112,  420 => 111,  416 => 110,  413 => 109,  408 => 106,  394 => 105,  390 => 103,  375 => 101,  365 => 99,  362 => 98,  359 => 97,  355 => 95,  348 => 91,  344 => 90,  330 => 89,  327 => 88,  321 => 86,  307 => 85,  302 => 84,  295 => 81,  287 => 80,  279 => 78,  256 => 73,  251 => 71,  239 => 69,  231 => 68,  219 => 67,  201 => 66,  143 => 49,  138 => 44,  134 => 43,  131 => 42,  122 => 37,  117 => 36,  108 => 31,  102 => 28,  92 => 25,  84 => 21,  72 => 15,  69 => 17,  51 => 13,  48 => 7,  35 => 5,  29 => 5,  312 => 96,  308 => 94,  293 => 92,  285 => 90,  281 => 88,  277 => 86,  274 => 85,  271 => 77,  264 => 74,  261 => 81,  257 => 79,  253 => 77,  249 => 76,  247 => 70,  237 => 73,  204 => 69,  198 => 65,  194 => 64,  150 => 54,  147 => 51,  127 => 41,  112 => 32,  96 => 25,  76 => 19,  71 => 17,  55 => 15,  114 => 22,  109 => 31,  106 => 20,  101 => 19,  85 => 22,  77 => 12,  67 => 15,  28 => 7,  39 => 8,  110 => 7,  89 => 16,  65 => 14,  63 => 13,  58 => 10,  34 => 5,  26 => 6,  98 => 40,  88 => 55,  80 => 49,  46 => 12,  44 => 9,  36 => 9,  43 => 7,  57 => 11,  50 => 7,  47 => 7,  38 => 6,  27 => 3,  227 => 92,  224 => 91,  221 => 90,  207 => 70,  197 => 74,  195 => 65,  192 => 72,  189 => 61,  186 => 60,  181 => 67,  178 => 61,  173 => 58,  162 => 58,  158 => 56,  155 => 55,  152 => 55,  142 => 52,  136 => 44,  133 => 43,  130 => 42,  120 => 40,  105 => 31,  100 => 27,  78 => 48,  75 => 24,  60 => 12,  53 => 19,  40 => 6,  32 => 8,  24 => 4,  25 => 3,  22 => 2,  19 => 1,  232 => 72,  226 => 71,  222 => 76,  215 => 73,  211 => 84,  208 => 70,  202 => 68,  196 => 64,  193 => 63,  187 => 62,  183 => 62,  180 => 59,  171 => 54,  166 => 51,  163 => 50,  160 => 49,  157 => 48,  149 => 42,  146 => 41,  140 => 46,  137 => 37,  129 => 36,  124 => 35,  121 => 24,  118 => 36,  115 => 39,  111 => 32,  107 => 28,  104 => 28,  97 => 24,  93 => 18,  90 => 21,  81 => 14,  70 => 23,  66 => 13,  62 => 11,  59 => 15,  56 => 12,  52 => 10,  49 => 9,  45 => 6,  41 => 9,  37 => 5,  33 => 4,  30 => 3,);
    }
}
