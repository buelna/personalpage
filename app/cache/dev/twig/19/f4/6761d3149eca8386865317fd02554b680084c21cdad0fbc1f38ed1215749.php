<?php

/* ::menu.html (copy).twig */
class __TwigTemplate_19f46761d3149eca8386865317fd02554b680084c21cdad0fbc1f38ed1215749 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        try {
            $this->parent = $this->env->loadTemplate("::base.html.twig");
        } catch (Twig_Error_Loader $e) {
            $e->setTemplateFile($this->getTemplateName());
            $e->setTemplateLine(2);

            throw $e;
        }

        $this->blocks = array(
            'logo' => array($this, 'block_logo'),
            'ListaMenu' => array($this, 'block_ListaMenu'),
            'MasMenu' => array($this, 'block_MasMenu'),
            'Nombre' => array($this, 'block_Nombre'),
            'Informacion' => array($this, 'block_Informacion'),
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
        echo " 
\t<img src=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("caii.png"), "html", null, true);
        echo "\" height=\"100\" width=\"100\" >
";
    }

    // line 6
    public function block_ListaMenu($context, array $blocks = array())
    {
        // line 7
        echo "<ul>
\t<li>
\t\t<a href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("areas", array("id" => $this->getAttribute((isset($context["miembro"]) ? $context["miembro"] : $this->getContext($context, "miembro")), "getid", array(), "method"))), "html", null, true);
        echo "\">Áreas de interés</a>
\t</li>
\t<li>
\t\t<a href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("proyectos", array("id" => $this->getAttribute((isset($context["miembro"]) ? $context["miembro"] : $this->getContext($context, "miembro")), "getId", array(), "method"))), "html", null, true);
        echo "\">Proyectos</a>
\t</li>
\t<li>
\t\t<a href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("publicaciones", array("id" => $this->getAttribute((isset($context["miembro"]) ? $context["miembro"] : $this->getContext($context, "miembro")), "getId", array(), "method"))), "html", null, true);
        echo "\">Publicaciones/Conferencias</a>
\t</li>
</ul>
";
    }

    // line 19
    public function block_MasMenu($context, array $blocks = array())
    {
    }

    // line 20
    public function block_Nombre($context, array $blocks = array())
    {
        // line 21
        echo "\t";
        echo twig_escape_filter($this->env, (((($this->getAttribute((isset($context["miembro"]) ? $context["miembro"] : $this->getContext($context, "miembro")), "getNombre", array(), "method") . " ") . $this->getAttribute((isset($context["miembro"]) ? $context["miembro"] : $this->getContext($context, "miembro")), "getApellidop", array(), "method")) . " ") . $this->getAttribute((isset($context["miembro"]) ? $context["miembro"] : $this->getContext($context, "miembro")), "getApellidom", array(), "method")), "html", null, true);
        echo "
";
    }

    // line 23
    public function block_Informacion($context, array $blocks = array())
    {
        // line 24
        echo "\t<span>";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["miembro"]) ? $context["miembro"] : $this->getContext($context, "miembro")), "getAlumDecripcion", array(), "method"), "html", null, true);
        echo "</span><br><br>
\t<span><strong>Correo electronico: ";
        // line 25
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["miembro"]) ? $context["miembro"] : $this->getContext($context, "miembro")), "getEmail", array(), "method"), "html", null, true);
        echo "</strong></span>
";
    }

    public function getTemplateName()
    {
        return "::menu.html (copy).twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  101 => 25,  96 => 24,  93 => 23,  86 => 21,  83 => 20,  78 => 19,  70 => 15,  64 => 12,  58 => 9,  54 => 7,  51 => 6,  45 => 4,  40 => 3,  11 => 2,);
    }
}
