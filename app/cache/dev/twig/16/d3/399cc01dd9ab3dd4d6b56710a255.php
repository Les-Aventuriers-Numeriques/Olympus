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
        return array (  80 => 39,  61 => 23,  51 => 18,  39 => 8,  36 => 7,  29 => 5,);
    }
}
