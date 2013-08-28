<?php

/* EasyDonBundle:Don:list.html.twig */
class __TwigTemplate_5849dd20ee91066aadd925783adac317 extends Twig_Template
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
        <h1>Tableau des dons</h1>
    </div>
    <div>
        <table class=\"table table-condensed table-hover\">
            <thead>
                <tr>
                    <th colspan=\"12\">
                        ";
        // line 16
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "Y"), "html", null, true);
        echo "
                    </th>
                </tr>
                <tr>
                    ";
        // line 20
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_array_keys_filter($this->getContext($context, "mois")));
        foreach ($context['_seq'] as $context["_key"] => $context["unMois"]) {
            // line 21
            echo "                        <th>";
            echo twig_escape_filter($this->env, $this->getContext($context, "unMois"), "html", null, true);
            echo "</th>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['unMois'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 23
        echo "                </tr>
            </thead>
            <tbody>
                            
            </tbody>
            <tfoot>
                <tr>
                    ";
        // line 30
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_array_keys_filter($this->getContext($context, "mois")));
        foreach ($context['_seq'] as $context["_key"] => $context["unMois"]) {
            // line 31
            echo "                        <th>Total</th>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['unMois'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 33
        echo "                </tr>
            </tfoot>
        </table>
    </div>

";
    }

    public function getTemplateName()
    {
        return "EasyDonBundle:Don:list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 33,  82 => 31,  78 => 30,  69 => 23,  60 => 21,  56 => 20,  49 => 16,  39 => 8,  36 => 7,  29 => 5,);
    }
}
