<?php

/* ::menu.html.twig */
class __TwigTemplate_a21004fc9158eb9d344e87e34db3619eb3df6030a7694181100a17f98adffe3d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("::base.html.twig", "::menu.html.twig", 2);
        $this->blocks = array(
            'logo' => array($this, 'block_logo'),
            'banner' => array($this, 'block_banner'),
            'logo2' => array($this, 'block_logo2'),
            'ListaMenu' => array($this, 'block_ListaMenu'),
            'MasMenu' => array($this, 'block_MasMenu'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_logo($context, array $blocks = array())
    {
        // line 4
        echo "\t<a href=\"caii.itmexicali.edu.mx\">
\t\t<img src=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("logoCAII.png"), "html", null, true);
        echo "\" >
\t</a>
";
    }

    // line 8
    public function block_banner($context, array $blocks = array())
    {
        // line 9
        echo "\t<img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("banner.jpg"), "html", null, true);
        echo "\">
";
    }

    // line 11
    public function block_logo2($context, array $blocks = array())
    {
        // line 12
        echo "\t<a href=\"http://www.itmexicali.edu.mx\">
\t\t<img src=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("logoITM.png"), "html", null, true);
        echo "\"  >
\t</a>
";
    }

    // line 16
    public function block_ListaMenu($context, array $blocks = array())
    {
        // line 17
        echo "\t<li>
\t\t<a href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("areas", array("id" => $this->getAttribute((isset($context["miembro"]) ? $context["miembro"] : null), "link", array(), "array"))), "html", null, true);
        echo "\">";
        echo $this->env->getExtension('translator')->getTranslator()->trans("Principal", array(), "messages");
        echo "</a>
\t</li>
\t<li>
\t\t<a href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("proyectos", array("id" => $this->getAttribute((isset($context["miembro"]) ? $context["miembro"] : null), "link", array(), "array"))), "html", null, true);
        echo "\">";
        echo $this->env->getExtension('translator')->getTranslator()->trans("Proyectos", array(), "messages");
        echo "</a>
\t</li>
\t<li>
\t\t<a href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("publicaciones", array("id" => $this->getAttribute((isset($context["miembro"]) ? $context["miembro"] : null), "link", array(), "array"))), "html", null, true);
        echo "\">";
        echo $this->env->getExtension('translator')->getTranslator()->trans("Publicaciones y Conferencias", array(), "messages");
        echo "</a>
\t</li>
";
    }

    // line 27
    public function block_MasMenu($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "::menu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  99 => 27,  90 => 24,  82 => 21,  74 => 18,  71 => 17,  68 => 16,  61 => 13,  58 => 12,  55 => 11,  48 => 9,  45 => 8,  38 => 5,  35 => 4,  32 => 3,  11 => 2,);
    }
}
