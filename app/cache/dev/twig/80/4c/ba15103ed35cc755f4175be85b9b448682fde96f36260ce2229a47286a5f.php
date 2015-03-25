<?php

/* ::base.html.twig */
class __TwigTemplate_804cba15103ed35cc755f4175be85b9b448682fde96f36260ce2229a47286a5f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'ListaMenu' => array($this, 'block_ListaMenu'),
            'selector' => array($this, 'block_selector'),
            'logo' => array($this, 'block_logo'),
            'banner' => array($this, 'block_banner'),
            'logo2' => array($this, 'block_logo2'),
            'Imagen' => array($this, 'block_Imagen'),
            'Nombre' => array($this, 'block_Nombre'),
            'Informacion' => array($this, 'block_Informacion'),
            'Contenido' => array($this, 'block_Contenido'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "CAII</title>
        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("caii.ico"), "html", null, true);
        echo "\" />
        <link rel=\"stylesheet\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/personalpageproyectos/css/foundation.css"), "html", null, true);
        echo "\" />
    </head>

    <body>
    \t<div class=\"fondo\">
\t    \t<div class=\"fixed\" >
\t\t\t\t<nav class=\"top-bar\" data-topbar>
\t\t\t\t\t<ul class=\"title-area\">
\t\t\t\t\t\t<li class=\"name\">
\t\t\t\t\t\t\t<h1><a href=\"\">CAII</a></h1>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"toggle-topbar menu-icon\"><a href=\"#\">CAII</a></li>
\t\t\t\t\t</ul>
\t\t\t\t\t<section class=\"top-bar-section\">
\t\t\t\t\t\t<ul class=\"left\">
\t\t\t\t\t\t\t";
        // line 22
        $this->displayBlock('ListaMenu', $context, $blocks);
        // line 23
        echo "\t\t\t\t\t\t</ul>
\t\t\t\t\t</section>
\t\t\t\t\t<section class=\"right\">
\t\t\t\t\t\t";
        // line 26
        $this->displayBlock('selector', $context, $blocks);
        // line 27
        echo "\t\t\t\t\t</section>
\t\t\t\t</nav>
\t\t\t</div>
\t\t\t<div style=\"background: white;\">
\t\t\t\t<div class=\"row\" style=\"background: white;\"><br/><br/></div>
\t\t\t\t<div class=\"row\" style=\"background: white;\">
\t\t\t\t\t<div class=\"small-2 columns\">
\t\t\t\t\t\t";
        // line 34
        $this->displayBlock('logo', $context, $blocks);
        // line 35
        echo "\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"small-8 columns\">
\t\t\t\t\t\t";
        // line 37
        $this->displayBlock('banner', $context, $blocks);
        // line 38
        echo "\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"small-2 columns\" align=\"rigth\">
\t\t\t\t\t\t";
        // line 40
        $this->displayBlock('logo2', $context, $blocks);
        echo "\t\t\t\t
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<hr>
\t\t\t\t<div class=\"row\" >
\t\t\t\t\t<div class=\"small-3 columns\">
\t\t\t\t\t\t";
        // line 47
        echo "\t\t\t\t\t\t";
        $this->displayBlock('Imagen', $context, $blocks);
        // line 48
        echo "\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"small-9 columns\">
\t\t\t\t\t\t<h1>";
        // line 50
        $this->displayBlock('Nombre', $context, $blocks);
        echo "</h1>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"small-12 columns\">
\t\t\t\t\t\t";
        // line 55
        $this->displayBlock('Informacion', $context, $blocks);
        // line 56
        echo "\t\t\t\t\t</div>
\t\t\t\t</div><br>
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"small-12 columns\">
\t\t\t\t\t\t";
        // line 60
        $this->displayBlock('Contenido', $context, $blocks);
        // line 61
        echo "\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t  \t<script src=\"";
        // line 65
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/personalpageproyectos/js/foundation.min.js"), "html", null, true);
        echo "\"></script>
\t\t<script src=\"";
        // line 66
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/personalpageproyectos/js/foundation/foundation.js"), "html", null, true);
        echo "\"></script>
\t\t<script src=\"";
        // line 67
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/personalpageproyectos/js/foundation/foundation.dropdown.js"), "html", null, true);
        echo "\"></script>
\t\t<script src=\"";
        // line 68
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/personalpageproyectos/js/foundation/foundation.tab.js"), "html", null, true);
        echo "\"></script>
\t  \t<script src=\"";
        // line 69
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/personalpageproyectos/js/vendor/jquery.js"), "html", null, true);
        echo "\"></script>
\t\t<script src=\"";
        // line 70
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/personalpageproyectos/js/foundation/foundation.js"), "html", null, true);
        echo "\"></script>
\t  \t<script src=\"";
        // line 71
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/personalpageproyectos/js/foundation/foundation.topbar.js"), "html", null, true);
        echo "\"></script>
\t  \t<script>
\t    \t\$(document).foundation();
\t  \t</script>
    </body>
</html>
";
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
    }

    // line 22
    public function block_ListaMenu($context, array $blocks = array())
    {
    }

    // line 26
    public function block_selector($context, array $blocks = array())
    {
    }

    // line 34
    public function block_logo($context, array $blocks = array())
    {
    }

    // line 37
    public function block_banner($context, array $blocks = array())
    {
    }

    // line 40
    public function block_logo2($context, array $blocks = array())
    {
    }

    // line 47
    public function block_Imagen($context, array $blocks = array())
    {
    }

    // line 50
    public function block_Nombre($context, array $blocks = array())
    {
    }

    // line 55
    public function block_Informacion($context, array $blocks = array())
    {
    }

    // line 60
    public function block_Contenido($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  211 => 60,  206 => 55,  201 => 50,  196 => 47,  191 => 40,  186 => 37,  181 => 34,  176 => 26,  171 => 22,  166 => 5,  155 => 71,  151 => 70,  147 => 69,  143 => 68,  139 => 67,  135 => 66,  131 => 65,  125 => 61,  123 => 60,  117 => 56,  115 => 55,  107 => 50,  103 => 48,  100 => 47,  91 => 40,  87 => 38,  85 => 37,  81 => 35,  79 => 34,  70 => 27,  68 => 26,  63 => 23,  61 => 22,  43 => 7,  39 => 6,  35 => 5,  29 => 1,);
    }
}
