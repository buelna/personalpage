<?php

/* PersonalPageProyectosBundle:Default:Catalogo.html.twig */
class __TwigTemplate_277a130597ad2b7524604f53903f679839583c620e1938ec2d8dfeafefb700d5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        try {
            $this->parent = $this->env->loadTemplate("::catalogobase.html.twig");
        } catch (Twig_Error_Loader $e) {
            $e->setTemplateFile($this->getTemplateName());
            $e->setTemplateLine(2);

            throw $e;
        }

        $this->blocks = array(
            'logo' => array($this, 'block_logo'),
            'logo2' => array($this, 'block_logo2'),
            'Contenido' => array($this, 'block_Contenido'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::catalogobase.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_logo($context, array $blocks = array())
    {
        // line 4
        echo "\t<img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("logoCAII.png"), "html", null, true);
        echo "\" height=\"150\" width=\"150\" >
";
    }

    // line 6
    public function block_logo2($context, array $blocks = array())
    {
        // line 7
        echo "\t<img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("logoITM.png"), "html", null, true);
        echo "\" height=\"100\" width=\"100\" >
";
    }

    // line 9
    public function block_Contenido($context, array $blocks = array())
    {
        // line 10
        echo "\t<h2>Miembros</h2>
\t<table>
\t<tr>
\t\t<th>Fotografia</th><th>Nombre</th><th>Descripción</th>
\t</tr>
\t";
        // line 15
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["miembros"]) ? $context["miembros"] : $this->getContext($context, "miembros")));
        foreach ($context['_seq'] as $context["_key"] => $context["miembro"]) {
            // line 16
            echo "\t\t<tr>
\t\t\t<td>
\t\t\t\t<a href=\"";
            // line 18
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("areas", array("id" => $this->getAttribute($context["miembro"], "getid", array(), "method"))), "html", null, true);
            echo "\">
\t\t\t\t\t<img src=\"";
            // line 19
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl($this->getAttribute($context["miembro"], "fotoURL", array())), "html", null, true);
            echo "\" height=\"180\" width=\"110\">
\t\t\t\t</a>
\t\t\t</td>
\t\t\t<td>
\t\t\t\t<a href=\"";
            // line 23
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("areas", array("id" => $this->getAttribute($context["miembro"], "getid", array(), "method"))), "html", null, true);
            echo "\">
\t\t\t\t\t";
            // line 24
            echo twig_escape_filter($this->env, (((($this->getAttribute($context["miembro"], "getNombre", array(), "method") . " ") . $this->getAttribute($context["miembro"], "getApellidop", array(), "method")) . " ") . $this->getAttribute($context["miembro"], "getApellidom", array(), "method")), "html", null, true);
            echo "
\t\t\t\t</a>
\t\t\t</td>
\t\t\t<td>";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute($context["miembro"], "getAlumDescripcion", array(), "method"), "html", null, true);
            echo "</td>
\t\t</tr>
\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['miembro'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 30
        echo "\t</table>
";
    }

    public function getTemplateName()
    {
        return "PersonalPageProyectosBundle:Default:Catalogo.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  106 => 30,  97 => 27,  91 => 24,  87 => 23,  80 => 19,  76 => 18,  72 => 16,  68 => 15,  61 => 10,  58 => 9,  51 => 7,  48 => 6,  41 => 4,  38 => 3,  11 => 2,);
    }
}
