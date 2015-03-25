<?php

/* ::catalogobase.html.twig */
class __TwigTemplate_9d2a40ab72dd9ffd4ebf23404ec910717dff0b2043a1cc971587837c406a846e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'ListaMenu' => array($this, 'block_ListaMenu'),
            'logo' => array($this, 'block_logo'),
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
    \t<div class=\"fixed\">
\t\t\t<nav class=\"top-bar\" data-topbar>
\t\t\t\t<ul class=\"title-area\">
\t\t\t\t\t<li class=\"name\">
\t\t\t\t\t\t<h1><a href=\"\">CAII</a></h1>
\t\t\t\t\t</li>
\t\t\t\t\t<li class=\"toggle-topbar menu-icon\"><a href=\"#\">CAII</a></li>
\t\t\t\t</ul>
\t\t\t\t<section class=\"top-bar-section\">
\t\t\t\t\t<!--<ul class=\"left\">
\t\t\t\t\t\t<li class=\"has-dropdown\">
\t\t\t\t\t\t\t<a href=\"#\">Menu</a>
\t\t\t\t\t\t\t<ul class=\"dropdown\">
\t\t\t\t\t\t\t\t";
        // line 23
        $this->displayBlock('ListaMenu', $context, $blocks);
        // line 24
        echo "\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</li>
\t\t\t\t\t</ul>-->
\t\t\t\t</section>
\t\t\t</nav>
\t\t</div>
\t\t<div>
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"small-10 columns\">
\t\t\t\t\t";
        // line 33
        $this->displayBlock('logo', $context, $blocks);
        // line 34
        echo "\t\t\t\t</div>
\t\t\t\t<div class=\"small-2 columns\">
\t\t\t\t\t";
        // line 36
        $this->displayBlock('logo2', $context, $blocks);
        echo "\t\t\t\t
\t\t\t\t</div>
\t\t\t\t<hr>
\t\t\t</div>
\t\t\t<div class=\"row\" >
\t\t\t\t<div class=\"small-3 columns\">
\t\t\t\t\t<img src=\"\" height=\"180\" width=\"110\">
\t\t\t\t\t";
        // line 43
        $this->displayBlock('Imagen', $context, $blocks);
        // line 44
        echo "\t\t\t\t</div>
\t\t\t\t<div class=\"small-9 columns\">
\t\t\t\t\t<h1>";
        // line 46
        $this->displayBlock('Nombre', $context, $blocks);
        echo "</h1>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"small-12 columns\">
\t\t\t\t\t";
        // line 51
        $this->displayBlock('Informacion', $context, $blocks);
        // line 52
        echo "\t\t\t\t</div>
\t\t\t</div><br>
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"small-12 columns\">
\t\t\t\t\t";
        // line 56
        $this->displayBlock('Contenido', $context, $blocks);
        // line 57
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

    // line 36
    public function block_logo2($context, array $blocks = array())
    {
    }

    // line 43
    public function block_Imagen($context, array $blocks = array())
    {
    }

    // line 46
    public function block_Nombre($context, array $blocks = array())
    {
    }

    // line 51
    public function block_Informacion($context, array $blocks = array())
    {
    }

    // line 56
    public function block_Contenido($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "::catalogobase.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  167 => 56,  162 => 51,  157 => 46,  152 => 43,  147 => 36,  142 => 33,  137 => 23,  132 => 5,  113 => 57,  111 => 56,  105 => 52,  103 => 51,  95 => 46,  91 => 44,  89 => 43,  79 => 36,  75 => 34,  73 => 33,  62 => 24,  60 => 23,  41 => 7,  37 => 6,  33 => 5,  27 => 1,);
    }
}
