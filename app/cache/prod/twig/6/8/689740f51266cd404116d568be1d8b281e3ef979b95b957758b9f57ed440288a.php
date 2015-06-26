<?php

/* PersonalPageProyectosBundle:Default:Areas.html.twig */
class __TwigTemplate_689740f51266cd404116d568be1d8b281e3ef979b95b957758b9f57ed440288a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("::menu.html.twig", "PersonalPageProyectosBundle:Default:Areas.html.twig", 2);
        $this->blocks = array(
            'masmenu' => array($this, 'block_masmenu'),
            'Contenido' => array($this, 'block_Contenido'),
            'selector' => array($this, 'block_selector'),
            'Nombre' => array($this, 'block_Nombre'),
            'Informacion' => array($this, 'block_Informacion'),
            'Imagen' => array($this, 'block_Imagen'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::menu.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_masmenu($context, array $blocks = array())
    {
    }

    // line 4
    public function block_Contenido($context, array $blocks = array())
    {
        // line 5
        echo "
";
    }

    // line 7
    public function block_selector($context, array $blocks = array())
    {
        // line 8
        echo "\t\t<footer>
\t\t\t";
        // line 9
        $context["locale"] = $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "locale", array());
        // line 10
        echo "\t\t\t";
        if (((isset($context["locale"]) ? $context["locale"] : null) == "es")) {
            // line 11
            echo "\t\t\t<a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("areas", array("_locale" => "en", "id" => $this->getAttribute((isset($context["miembro"]) ? $context["miembro"] : null), "link", array(), "array"))), "html", null, true);
            echo "\"><img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("us.jpg"), "html", null, true);
            echo "\" height=\"40\" width=\"40\" >  </a>
\t\t\t";
        } elseif ((        // line 12
(isset($context["locale"]) ? $context["locale"] : null) == "en")) {
            // line 13
            echo "\t\t\t<a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("areas", array("_locale" => "es", "id" => $this->getAttribute((isset($context["miembro"]) ? $context["miembro"] : null), "link", array(), "array"))), "html", null, true);
            echo "\"><img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("es.jpg"), "html", null, true);
            echo "\" height=\"40\" width=\"40\" >  </a>
\t\t\t";
        }
        // line 15
        echo "\t\t</footer>
";
    }

    // line 17
    public function block_Nombre($context, array $blocks = array())
    {
        // line 18
        echo "\t";
        echo twig_escape_filter($this->env, (((($this->getAttribute((isset($context["miembro"]) ? $context["miembro"] : null), "nombre", array(), "array") . " ") . $this->getAttribute((isset($context["miembro"]) ? $context["miembro"] : null), "paterno", array(), "array")) . " ") . $this->getAttribute((isset($context["miembro"]) ? $context["miembro"] : null), "materno", array(), "array")), "html", null, true);
        echo "
";
    }

    // line 20
    public function block_Informacion($context, array $blocks = array())
    {
        // line 21
        echo "<div style=\"text-align: justify\">
\t";
        // line 22
        if (($this->getAttribute((isset($context["miembro"]) ? $context["miembro"] : null), "link", array(), "array") == "")) {
            // line 23
            echo "\t\tRecurso no encontrado o inexistente
\t";
        }
        // line 25
        echo "\t<div style=\"margin-top: 15px;margin-left: 10px;margin-right: 10px\">
\t<p margin=\"15px\">
\t<span>";
        // line 27
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["miembro"]) ? $context["miembro"] : null), "descripcion", array(), "array"), "html", null, true);
        echo "</span><br><br>
\t</p>
\t</div>
</div>

";
    }

    // line 33
    public function block_Imagen($context, array $blocks = array())
    {
        // line 34
        echo "\t";
        if ($this->getAttribute((isset($context["miembro"]) ? $context["miembro"] : null), "fotoUrl", array(), "array")) {
            // line 35
            echo "\t\t<img src=\"http://caii.itmexicali.edu.mx/uploads/images/miembros/";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["miembro"]) ? $context["miembro"] : null), "fotoUrl", array(), "array"), "html", null, true);
            echo "\" height=\"180\" width=\"110\">
\t";
        } else {
            // line 37
            echo "\t\t<img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/img/miembros/unknown-user.gif"), "html", null, true);
            echo "\" height=\"180\" width=\"110\">
\t";
        }
    }

    public function getTemplateName()
    {
        return "PersonalPageProyectosBundle:Default:Areas.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  127 => 37,  121 => 35,  118 => 34,  115 => 33,  105 => 27,  101 => 25,  97 => 23,  95 => 22,  92 => 21,  89 => 20,  82 => 18,  79 => 17,  74 => 15,  66 => 13,  64 => 12,  57 => 11,  54 => 10,  52 => 9,  49 => 8,  46 => 7,  41 => 5,  38 => 4,  33 => 3,  11 => 2,);
    }
}
