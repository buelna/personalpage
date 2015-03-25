<?php

/* PersonalPageProyectosBundle:Default:Proyectos.html.twig */
class __TwigTemplate_66fef7a197d64555581340d7ff43a16f6b116574a61572729e4455062856b8c9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        try {
            $this->parent = $this->env->loadTemplate("::menu.html.twig");
        } catch (Twig_Error_Loader $e) {
            $e->setTemplateFile($this->getTemplateName());
            $e->setTemplateLine(2);

            throw $e;
        }

        $this->blocks = array(
            'masmenu' => array($this, 'block_masmenu'),
            'Contenido' => array($this, 'block_Contenido'),
            'selector' => array($this, 'block_selector'),
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
        echo "\t";
        // line 11
        echo "\t<h2>";
        echo $this->env->getExtension('translator')->getTranslator()->trans("Proyectos", array(), "messages");
        echo "</h2>
\t";
        // line 12
        $context["b"] = 0;
        // line 13
        echo "\t";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["proyectos"]) ? $context["proyectos"] : $this->getContext($context, "proyectos")));
        foreach ($context['_seq'] as $context["_key"] => $context["proyecto"]) {
            // line 14
            echo "\t\t";
            $context["b"] = 1;
            // line 15
            echo "\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['proyecto'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 16
        echo "\t";
        echo "<br><br>
\t";
        // line 17
        if (((isset($context["b"]) ? $context["b"] : $this->getContext($context, "b")) == 1)) {
            // line 18
            echo "\t\t<ul>
\t\t";
            // line 19
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["proyectos"]) ? $context["proyectos"] : $this->getContext($context, "proyectos")));
            foreach ($context['_seq'] as $context["_key"] => $context["proyecto"]) {
                // line 20
                echo "
\t\t\t<li>
\t\t\t\t\t";
                // line 23
                echo "\t\t\t\t\t\t";
                echo twig_escape_filter($this->env, $this->getAttribute($context["proyecto"], "nombre", array(), "array"), "html", null, true);
                echo ",
\t\t\t\t\t";
                // line 25
                echo "\t\t\t\t\t\t";
                echo twig_escape_filter($this->env, $this->getAttribute($context["proyecto"], "miembro", array(), "array"), "html", null, true);
                echo "
\t\t\t\t\t\t";
                // line 26
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["proyecto"], "colaboradores", array(), "array"));
                foreach ($context['_seq'] as $context["_key"] => $context["otro"]) {
                    // line 27
                    echo "\t\t\t\t\t\t\t";
                    // line 28
                    echo "\t\t\t\t\t\t\t,
\t\t\t\t\t\t\t\t ";
                    // line 29
                    echo twig_escape_filter($this->env, $context["otro"], "html", null, true);
                    echo "
\t\t\t\t\t\t\t";
                    // line 31
                    echo "\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['otro'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                echo ",
\t\t\t\t\t";
                // line 33
                echo "\t\t\t\t\t\t
\t\t\t\t\t\t";
                // line 41
                echo "\t\t\t</li>
\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['proyecto'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 43
            echo "\t\t</ul>
\t";
        } else {
            // line 45
            echo "\t\t<span>";
            echo $this->env->getExtension('translator')->getTranslator()->trans("Actualmente no se cuenta con ningun proyecto que mostrar", array(), "messages");
            echo "</span><br>
\t";
        }
    }

    // line 48
    public function block_selector($context, array $blocks = array())
    {
        // line 49
        echo "\t";
        $context["locale"] = $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "locale", array());
        // line 50
        echo "\t";
        if (((isset($context["locale"]) ? $context["locale"] : $this->getContext($context, "locale")) == "es")) {
            // line 51
            echo "\t<a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("proyectos", array("_locale" => "en", "id" => $this->getAttribute((isset($context["miembro"]) ? $context["miembro"] : $this->getContext($context, "miembro")), "id", array(), "array"))), "html", null, true);
            echo "\"><img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("us.jpg"), "html", null, true);
            echo "\" height=\"40\" width=\"40\" > </a>
\t";
        } elseif ((        // line 52
(isset($context["locale"]) ? $context["locale"] : $this->getContext($context, "locale")) == "en")) {
            // line 53
            echo "\t<a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("proyectos", array("_locale" => "es", "id" => $this->getAttribute((isset($context["miembro"]) ? $context["miembro"] : $this->getContext($context, "miembro")), "id", array(), "array"))), "html", null, true);
            echo "\"><img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("es.jpg"), "html", null, true);
            echo "\" height=\"40\" width=\"40\" ></a>
\t";
        }
    }

    public function getTemplateName()
    {
        return "PersonalPageProyectosBundle:Default:Proyectos.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  157 => 53,  155 => 52,  148 => 51,  145 => 50,  142 => 49,  139 => 48,  131 => 45,  127 => 43,  120 => 41,  117 => 33,  109 => 31,  105 => 29,  102 => 28,  100 => 27,  96 => 26,  91 => 25,  86 => 23,  82 => 20,  78 => 19,  75 => 18,  73 => 17,  69 => 16,  63 => 15,  60 => 14,  55 => 13,  53 => 12,  48 => 11,  46 => 5,  43 => 4,  38 => 3,  11 => 2,);
    }
}
