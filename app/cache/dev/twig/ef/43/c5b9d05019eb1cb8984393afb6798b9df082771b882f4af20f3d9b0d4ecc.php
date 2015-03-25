<?php

/* ::base.html (copy).twig */
class __TwigTemplate_ef43c5b9d05019eb1cb8984393afb6798b9df082771b882f4af20f3d9b0d4ecc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'ListaMenu' => array($this, 'block_ListaMenu'),
            'logo' => array($this, 'block_logo'),
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
    \t<div class=\"fixed\">
\t\t\t<nav class=\"top-bar\" data-topbar>
\t\t\t\t<ul class=\"title-area\">
\t\t\t\t\t<li class=\"name\">
\t\t\t\t\t\t<h1><a href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("areas", array("id" => $this->getAttribute((isset($context["miembro"]) ? $context["miembro"] : $this->getContext($context, "miembro")), "id", array()))), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["miembro"]) ? $context["miembro"] : $this->getContext($context, "miembro")), "apellidoP", array()), "html", null, true);
        echo "</a></h1>
\t\t\t\t\t</li>
\t\t\t\t\t<li class=\"toggle-topbar menu-icon\"><a href=\"#\">CAII</a></li>
\t\t\t\t</ul>
\t\t\t\t<section class=\"top-bar-section\">
\t\t\t\t\t<ul class=\"left\">
\t\t\t\t\t\t<li class=\"has-dropdown\">
\t\t\t\t\t\t\t<a href=\"#\">Menu</a>
\t\t\t\t\t\t\t<ul class=\"dropdown\">
\t\t\t\t\t\t\t\t";
        // line 23
        $this->displayBlock('ListaMenu', $context, $blocks);
        // line 24
        echo "\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</li>
\t\t\t\t\t</ul>
\t\t\t\t</section>
\t\t\t</nav>
\t\t</div>
\t\t<div>
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"small-12 columns\">
\t\t\t\t\t";
        // line 33
        $this->displayBlock('logo', $context, $blocks);
        // line 34
        echo "\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"row\" >
\t\t\t\t<div class=\"small-3 columns\">
\t\t\t\t\t<img src=\"";
        // line 38
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl($this->getAttribute((isset($context["miembro"]) ? $context["miembro"] : $this->getContext($context, "miembro")), "fotoURL", array())), "html", null, true);
        echo "\" height=\"180\" width=\"110\">
\t\t\t\t\t";
        // line 39
        $this->displayBlock('Imagen', $context, $blocks);
        // line 40
        echo "\t\t\t\t</div>
\t\t\t\t<div class=\"small-9 columns\">
\t\t\t\t\t<h1>";
        // line 42
        $this->displayBlock('Nombre', $context, $blocks);
        echo "</h1>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"small-12 columns\">
\t\t\t\t\t";
        // line 47
        $this->displayBlock('Informacion', $context, $blocks);
        // line 48
        echo "\t\t\t\t</div>
\t\t\t</div><br>
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"small-12 columns\">
\t\t\t\t\t";
        // line 52
        $this->displayBlock('Contenido', $context, $blocks);
        // line 53
        echo "\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t  \t<script src=\"/personalpage/web/bundles/personalpageproyectos/js/foundation.min.js\"></script>
\t\t<script src=\"/personalpage/web/bundles/personalpageproyectos/js/foundation/foundation.js\"></script>
\t\t<script src=\"/personalpage/web/bundles/personalpageproyectos/js/foundation/foundation.dropdown.js\"></script>
\t\t<script src=\"/personalpage/web/bundles/personalpageproyectos/js/foundation/foundation.tab.js\"></script>
\t  \t<script src=\"/personalpage/web/bundles/personalpageproyectos/js/vendor/jquery.js\"></script>
\t\t<script src=\"/personalpage/web/bundles/personalpageproyectos/js/foundation/foundation.js\"></script>
\t  \t<script src=\"/personalpage/web/bundles/personalpageproyectos/js/foundation/foundation.topbar.js\"></script>
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

    // line 23
    public function block_ListaMenu($context, array $blocks = array())
    {
    }

    // line 33
    public function block_logo($context, array $blocks = array())
    {
    }

    // line 39
    public function block_Imagen($context, array $blocks = array())
    {
    }

    // line 42
    public function block_Nombre($context, array $blocks = array())
    {
    }

    // line 47
    public function block_Informacion($context, array $blocks = array())
    {
    }

    // line 52
    public function block_Contenido($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "::base.html (copy).twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  162 => 52,  157 => 47,  152 => 42,  147 => 39,  142 => 33,  137 => 23,  132 => 5,  113 => 53,  111 => 52,  105 => 48,  103 => 47,  95 => 42,  91 => 40,  89 => 39,  85 => 38,  79 => 34,  77 => 33,  66 => 24,  64 => 23,  50 => 14,  40 => 7,  36 => 6,  32 => 5,  26 => 1,);
    }
}
