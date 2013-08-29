<?php

/* EasyDonBundle:Don:index.html.twig */
class __TwigTemplate_16d3399cc01dd9ab3dd4d6b56710a255 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("EasyEspaceMembreBundle::layout.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "EasyEspaceMembreBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $this->displayParentBlock("title", $context, $blocks);
        echo " - Dons";
    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        // line 8
        echo "    <div class=\"page-header\">
        <h1>Aperçu des Dons</h1>
    </div>
    <div class=\"tabbable\">
        <ul class=\"nav nav-tabs\">
            <li class=\"active\"><a href=\"#tab1\" data-toggle=\"tab\">Statistiques générales</a></li>
            <li><a href=\"#tab2\" data-toggle=\"tab\">Mes Statistiques</a></li>
        </ul>
        <div class=\"tab-content\">
            <div class=\"tab-pane active\" id=\"tab1\">
                <h2>Objectif ";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "mois"), twig_date_format_filter($this->env, "now", "m"), array(), "array"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "Y"), "html", null, true);
        echo "</h2>
                <div class=\"progress progress-danger\">
                    <div class=\"bar\" style=\"width: 80%\"></div>
                </div>
                <p>
                    Objectif : ";
        // line 23
        echo twig_escape_filter($this->env, twig_constant("Easy\\DonBundle\\Entity\\Don::PRIX_SERVEUR_PAR_MOIS"), "html", null, true);
        echo " €<br/>
                    Montant récolté : <br/>
                    Date du dernier don : <br/>
                    Montant moyen : <br/>
                </p>
            </div>
            <div class=\"tab-pane\" id=\"tab2\">
                <p>
                    Nombre de Dons : <br/>
                    Date du premier don : <br/>
                    Date du dernier don : <br/>
                    Montant moyen : <br/>
                </p>
            </div>
        </div>
        <div>
            <a class=\"btn btn-large btn-primary\" href=\" ";
        // line 39
        echo $this->env->getExtension('routing')->getPath("easy_don_tableau");
        echo "\" type=\"button\">Consulter le tableau global</a>
        </div>
    </div>

";
    }

    public function getTemplateName()
    {
        return "EasyDonBundle:Don:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  53 => 17,  90 => 49,  23 => 4,  34 => 6,  100 => 27,  81 => 24,  20 => 1,  113 => 29,  110 => 28,  104 => 7,  97 => 7,  58 => 18,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 65,  169 => 60,  140 => 55,  132 => 51,  128 => 49,  107 => 36,  61 => 23,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 72,  179 => 69,  159 => 61,  143 => 56,  135 => 53,  119 => 42,  102 => 32,  71 => 24,  67 => 20,  63 => 15,  59 => 14,  38 => 8,  94 => 28,  89 => 20,  85 => 25,  75 => 25,  68 => 14,  56 => 23,  87 => 25,  21 => 2,  26 => 12,  93 => 29,  88 => 39,  78 => 42,  46 => 11,  27 => 5,  44 => 22,  31 => 6,  28 => 7,  201 => 92,  196 => 90,  183 => 82,  171 => 61,  166 => 71,  163 => 62,  158 => 67,  156 => 66,  151 => 63,  142 => 59,  138 => 54,  136 => 56,  121 => 46,  117 => 44,  105 => 40,  91 => 27,  62 => 29,  49 => 16,  24 => 7,  25 => 3,  19 => 1,  79 => 18,  72 => 22,  69 => 25,  47 => 9,  40 => 11,  37 => 10,  22 => 3,  246 => 90,  157 => 56,  145 => 46,  139 => 45,  131 => 52,  123 => 47,  120 => 40,  115 => 43,  111 => 37,  108 => 36,  101 => 32,  98 => 31,  96 => 31,  83 => 25,  74 => 35,  66 => 30,  55 => 14,  52 => 25,  50 => 10,  43 => 12,  41 => 9,  35 => 8,  32 => 8,  29 => 5,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 66,  176 => 64,  173 => 65,  168 => 72,  164 => 59,  162 => 57,  154 => 58,  149 => 51,  147 => 58,  144 => 49,  141 => 48,  133 => 55,  130 => 41,  125 => 44,  122 => 43,  116 => 41,  112 => 42,  109 => 34,  106 => 43,  103 => 42,  99 => 31,  95 => 28,  92 => 21,  86 => 27,  82 => 37,  80 => 39,  73 => 19,  64 => 19,  60 => 16,  57 => 11,  54 => 16,  51 => 18,  48 => 12,  45 => 17,  42 => 9,  39 => 8,  36 => 7,  33 => 7,  30 => 2,);
    }
}
