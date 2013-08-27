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
            ";
        // line 18
        $this->env->loadTemplate("EasySiteBundle::menu.html.twig")->display($context);
        // line 19
        echo "        </div>
        <div class=\"row\">
            <div class=\"col-xs-4 col-md-3\">
                <div class=\"bloc\">
                    ";
        // line 23
        $this->env->loadTemplate("EasySiteBundle::ts.html.twig")->display($context);
        // line 24
        echo "                </div>
            </div>
            <div class=\"col-xs-8 col-md-6\">
                <div class=\"bloc\">
                    ";
        // line 28
        $this->displayBlock('body', $context, $blocks);
        // line 30
        echo "                </div>
            </div>
            <div class=\"col-xs-4 col-md-3\">
                <div class=\"bloc\">
                    ";
        // line 34
        if ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 35
            echo "                        Connecté en tant que ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "app"), "user"), "username"), "html", null, true);
            echo " - <a href=\"";
            echo $this->env->getExtension('routing')->getPath("fos_user_security_logout");
            echo "\">Déconnexion</a>
                    ";
        } else {
            // line 37
            echo "                        <a href=\"";
            echo $this->env->getExtension('routing')->getPath("fos_user_security_login");
            echo "\">Connexion</a>
                    ";
        }
        // line 39
        echo "                </div>
            </div>
        </div>
        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src=\"";
        // line 43
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/easysite/js/jquery-2.0.0.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 44
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

    // line 28
    public function block_body($context, array $blocks = array())
    {
        // line 29
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
        return array (  114 => 29,  111 => 28,  105 => 7,  98 => 44,  94 => 43,  88 => 39,  82 => 37,  74 => 35,  72 => 34,  66 => 30,  64 => 28,  58 => 24,  56 => 23,  50 => 19,  48 => 18,  36 => 9,  32 => 8,  28 => 7,  21 => 2,);
    }
}
