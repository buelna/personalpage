<?php

/* PersonalPageProyectosBundle:Default:Publicaciones.html.twig */
class __TwigTemplate_290018bf175f79d2d9de2a2fa65dec66655d533c5871b4e24ee1cc2ad7e4abb9 extends Twig_Template
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
        echo $this->env->getExtension('translator')->getTranslator()->trans("Publicaciones y Conferencias", array(), "messages");
        echo "</h2>
\t<br><br>
\t";
        // line 13
        $context["c"] = 0;
        // line 14
        echo "\t";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["tipos"]) ? $context["tipos"] : $this->getContext($context, "tipos")));
        foreach ($context['_seq'] as $context["_key"] => $context["tipo"]) {
            // line 15
            echo "\t\t";
            $context["b"] = 0;
            // line 16
            echo "\t\t";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["publicaciones"]) ? $context["publicaciones"] : $this->getContext($context, "publicaciones")));
            foreach ($context['_seq'] as $context["_key"] => $context["publicacion"]) {
                // line 17
                echo "\t\t\t";
                if ((($this->getAttribute($context["tipo"], "id", array(), "array") == $this->getAttribute($context["publicacion"], "idTipo", array(), "array")) && ($this->getAttribute($context["publicacion"], "idMiembro", array(), "array") == $this->getAttribute((isset($context["miembro"]) ? $context["miembro"] : $this->getContext($context, "miembro")), "id", array(), "array")))) {
                    // line 18
                    echo "\t\t\t\t";
                    $context["b"] = 1;
                    // line 19
                    echo "\t\t\t";
                }
                // line 20
                echo "\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['publicacion'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 21
            echo "\t\t";
            if (((isset($context["b"]) ? $context["b"] : $this->getContext($context, "b")) == 1)) {
                // line 22
                echo "\t\t\t";
                $context["c"] = 1;
                // line 23
                echo "\t\t\t";
                // line 24
                echo "\t\t\t";
                $context["list"] = 0;
                // line 25
                echo "\t\t\t";
                if ((($this->getAttribute($context["tipo"], "nombre", array(), "array") == "Libros") || ($this->getAttribute($context["tipo"], "nombre", array(), "array") == "Books"))) {
                    // line 26
                    echo "\t\t\t\t";
                    $context["list"] = 1;
                    // line 27
                    echo "\t\t\t";
                }
                // line 28
                echo "\t\t\t";
                if ((($this->getAttribute($context["tipo"], "nombre", array(), "array") == "Capítulos de libros") || ($this->getAttribute($context["tipo"], "nombre", array(), "array") == "Book chapters"))) {
                    // line 29
                    echo "\t\t\t\t";
                    $context["list"] = 2;
                    // line 30
                    echo "\t\t\t";
                }
                // line 31
                echo "\t\t\t";
                if ((((((((($this->getAttribute($context["tipo"], "nombre", array(), "array") == "Artículos") || ($this->getAttribute($context["tipo"], "nombre", array(), "array") == "Articles")) || ($this->getAttribute($context["tipo"], "nombre", array(), "array") == "Articulos en congresos internacionales")) || ($this->getAttribute($context["tipo"], "nombre", array(), "array") == "International conference's articles")) || ($this->getAttribute($context["tipo"], "nombre", array(), "array") == "Articulos en congresos nacionales")) || ($this->getAttribute($context["tipo"], "nombre", array(), "array") == "National conference's articles")) || ($this->getAttribute($context["tipo"], "nombre", array(), "array") == "Revistas")) || ($this->getAttribute($context["tipo"], "nombre", array(), "array") == "Journals"))) {
                    // line 32
                    echo "\t\t\t\t";
                    $context["list"] = 3;
                    // line 33
                    echo "\t\t\t";
                }
                // line 34
                echo "\t\t\t";
                if ((($this->getAttribute($context["tipo"], "nombre", array(), "array") == "Reportes técnicos") || ($this->getAttribute($context["tipo"], "nombre", array(), "array") == "Technical Reports"))) {
                    // line 35
                    echo "\t\t\t\t";
                    $context["list"] = 4;
                    // line 36
                    echo "\t\t\t";
                }
                // line 37
                echo "\t\t\t";
                if ((($this->getAttribute($context["tipo"], "nombre", array(), "array") == "Tesis") || ($this->getAttribute($context["tipo"], "nombre", array(), "array") == "Thesis"))) {
                    // line 38
                    echo "\t\t\t\t";
                    $context["list"] = 5;
                    // line 39
                    echo "\t\t\t";
                }
                // line 40
                echo "\t\t\t";
                // line 41
                echo "\t\t\t<ul>
\t\t\t\t";
                // line 42
                $context["i"] = 0;
                // line 43
                echo "\t\t\t\t";
                $context["mostrar"] = 1;
                // line 44
                echo "\t\t\t\t";
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["publicaciones"]) ? $context["publicaciones"] : $this->getContext($context, "publicaciones")));
                foreach ($context['_seq'] as $context["_key"] => $context["publicacion"]) {
                    // line 45
                    echo "\t\t\t\t\t";
                    if ((($this->getAttribute($context["tipo"], "id", array(), "array") == $this->getAttribute($context["publicacion"], "idTipo", array(), "array")) && ($this->getAttribute($context["publicacion"], "idMiembro", array(), "array") == $this->getAttribute((isset($context["miembro"]) ? $context["miembro"] : $this->getContext($context, "miembro")), "id", array(), "array")))) {
                        // line 46
                        echo "\t\t\t\t\t\t";
                        if (((($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "locale", array()) == "en") && ($this->getAttribute($context["publicacion"], "english", array(), "array") == "true")) || ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "locale", array()) == "es"))) {
                            // line 47
                            echo "\t\t\t\t\t\t\t";
                            $context["ingles"] = 1;
                            // line 48
                            echo "\t\t\t\t\t\t";
                        } else {
                            // line 49
                            echo "\t\t\t\t\t\t\t";
                            $context["ingles"] = 0;
                            // line 50
                            echo "\t\t\t\t\t\t";
                        }
                        // line 51
                        echo "\t\t\t\t\t\t";
                        $context["i"] = ((isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")) + 1);
                        // line 52
                        echo "\t\t\t\t\t\t";
                        if (((isset($context["ingles"]) ? $context["ingles"] : $this->getContext($context, "ingles")) == 1)) {
                            // line 53
                            echo "\t\t\t\t\t\t\t";
                            // line 54
                            echo "\t\t\t\t\t\t\t";
                            if (((isset($context["list"]) ? $context["list"] : $this->getContext($context, "list")) == 1)) {
                                // line 55
                                echo "\t\t\t\t\t\t\t\t";
                                if (((isset($context["mostrar"]) ? $context["mostrar"] : $this->getContext($context, "mostrar")) == 1)) {
                                    // line 56
                                    echo "\t\t\t\t\t\t\t\t\t<h3>";
                                    echo twig_escape_filter($this->env, $this->getAttribute($context["tipo"], "nombre", array(), "array"), "html", null, true);
                                    echo "</h3>
\t\t\t\t\t\t\t\t\t";
                                    // line 57
                                    $context["mostrar"] = 0;
                                    // line 58
                                    echo "\t\t\t\t\t\t\t\t";
                                }
                                // line 59
                                echo "\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t";
                                // line 61
                                echo "\t\t\t\t\t\t\t\t";
                                $context['_parent'] = (array) $context;
                                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["publicacion"], "autores", array(), "array"));
                                foreach ($context['_seq'] as $context["_key"] => $context["miembrop"]) {
                                    // line 62
                                    echo "\t\t\t\t\t\t\t\t\t";
                                    echo twig_escape_filter($this->env, $context["miembrop"], "html", null, true);
                                    echo ",
\t\t\t\t\t\t\t\t";
                                }
                                $_parent = $context['_parent'];
                                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['miembrop'], $context['_parent'], $context['loop']);
                                $context = array_intersect_key($context, $_parent) + $_parent;
                                // line 64
                                echo "\t\t\t\t\t\t\t\t";
                                // line 65
                                echo "\t\t\t\t\t\t\t\t\t<i>";
                                echo twig_escape_filter($this->env, $this->getAttribute($context["publicacion"], "titulo", array(), "array"), "html", null, true);
                                echo ".</i>
\t\t\t\t\t\t\t\t";
                                // line 67
                                echo "\t\t\t\t\t\t\t\t\tEd. ";
                                echo twig_escape_filter($this->env, $this->getAttribute($context["publicacion"], "ciudad", array(), "array"), "html", null, true);
                                echo ": ";
                                echo twig_escape_filter($this->env, $this->getAttribute($context["publicacion"], "editorial", array(), "array"), "html", null, true);
                                echo ",
\t\t\t\t\t\t\t\t";
                                // line 69
                                echo "\t\t\t\t\t\t\t\t";
                                echo ".
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t";
                            }
                            // line 72
                            echo "\t\t\t\t\t\t\t";
                            // line 73
                            echo "\t\t\t\t\t\t\t";
                            if (((isset($context["list"]) ? $context["list"] : $this->getContext($context, "list")) == 2)) {
                                // line 74
                                echo "\t\t\t\t\t\t\t\t";
                                if (((isset($context["mostrar"]) ? $context["mostrar"] : $this->getContext($context, "mostrar")) == 1)) {
                                    // line 75
                                    echo "\t\t\t\t\t\t\t\t\t<h3>";
                                    echo twig_escape_filter($this->env, $this->getAttribute($context["tipo"], "nombre", array(), "array"), "html", null, true);
                                    echo "</h3>
\t\t\t\t\t\t\t\t\t";
                                    // line 76
                                    $context["mostrar"] = 0;
                                    // line 77
                                    echo "\t\t\t\t\t\t\t\t";
                                }
                                // line 78
                                echo "\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t";
                                // line 80
                                echo "\t\t\t\t\t\t\t\t";
                                $context['_parent'] = (array) $context;
                                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["publicacion"], "autores", array(), "array"));
                                foreach ($context['_seq'] as $context["_key"] => $context["miembrop"]) {
                                    // line 81
                                    echo "\t\t\t\t\t\t\t\t\t";
                                    echo twig_escape_filter($this->env, $context["miembrop"], "html", null, true);
                                    echo ",
\t\t\t\t\t\t\t\t";
                                }
                                $_parent = $context['_parent'];
                                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['miembrop'], $context['_parent'], $context['loop']);
                                $context = array_intersect_key($context, $_parent) + $_parent;
                                // line 83
                                echo "\t\t\t\t\t\t\t\t";
                                // line 84
                                echo "\t\t\t\t\t\t\t\t\t<i>\"";
                                echo twig_escape_filter($this->env, $this->getAttribute($context["publicacion"], "capitulo", array(), "array"), "html", null, true);
                                echo "\".</i> ";
                                echo $this->env->getExtension('translator')->getTranslator()->trans("en", array(), "messages");
                                // line 85
                                echo "\t\t\t\t\t\t\t\t";
                                // line 86
                                echo "\t\t\t\t\t\t\t\t\t<i>";
                                echo twig_escape_filter($this->env, $this->getAttribute($context["publicacion"], "titulo", array(), "array"), "html", null, true);
                                echo ".</i>
\t\t\t\t\t\t\t\t";
                                // line 88
                                echo "\t\t\t\t\t\t\t\t\tEd. ";
                                echo twig_escape_filter($this->env, $this->getAttribute($context["publicacion"], "ciudad", array(), "array"), "html", null, true);
                                echo ": ";
                                echo twig_escape_filter($this->env, $this->getAttribute($context["publicacion"], "editorial", array(), "array"), "html", null, true);
                                echo ",
\t\t\t\t\t\t\t\t";
                                // line 90
                                echo "\t\t\t\t\t\t\t\t";
                                // line 92
                                echo "\t\t\t\t\t\t\t\t\tpp. ";
                                echo twig_escape_filter($this->env, $this->getAttribute($context["publicacion"], "paginas", array(), "array"), "html", null, true);
                                echo ".
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t";
                            }
                            // line 95
                            echo "\t\t\t\t\t\t\t";
                            // line 96
                            echo "\t\t\t\t\t\t\t";
                            if (((isset($context["list"]) ? $context["list"] : $this->getContext($context, "list")) == 3)) {
                                // line 97
                                echo "\t\t\t\t\t\t\t\t";
                                if (((isset($context["mostrar"]) ? $context["mostrar"] : $this->getContext($context, "mostrar")) == 1)) {
                                    // line 98
                                    echo "\t\t\t\t\t\t\t\t\t<h3>";
                                    echo twig_escape_filter($this->env, $this->getAttribute($context["tipo"], "nombre", array(), "array"), "html", null, true);
                                    echo "</h3>
\t\t\t\t\t\t\t\t\t";
                                    // line 99
                                    $context["mostrar"] = 0;
                                    // line 100
                                    echo "\t\t\t\t\t\t\t\t";
                                }
                                // line 101
                                echo "\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t";
                                // line 103
                                echo "\t\t\t\t\t\t\t\t";
                                $context['_parent'] = (array) $context;
                                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["publicacion"], "autores", array(), "array"));
                                foreach ($context['_seq'] as $context["_key"] => $context["miembrop"]) {
                                    // line 104
                                    echo "\t\t\t\t\t\t\t\t\t";
                                    echo twig_escape_filter($this->env, $context["miembrop"], "html", null, true);
                                    echo ",
\t\t\t\t\t\t\t\t";
                                }
                                $_parent = $context['_parent'];
                                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['miembrop'], $context['_parent'], $context['loop']);
                                $context = array_intersect_key($context, $_parent) + $_parent;
                                // line 106
                                echo "\t\t\t\t\t\t\t\t";
                                // line 107
                                echo "\t\t\t\t\t\t\t\t\t<i>\"";
                                echo twig_escape_filter($this->env, $this->getAttribute($context["publicacion"], "titulo", array(), "array"), "html", null, true);
                                echo "\"</i>,
\t\t\t\t\t\t\t\t";
                                // line 109
                                echo "\t\t\t\t\t\t\t\t\t<i>";
                                echo twig_escape_filter($this->env, $this->getAttribute($context["publicacion"], "journal", array(), "array"), "html", null, true);
                                echo ",</i>
\t\t\t\t\t\t\t\t";
                                // line 111
                                echo "\t\t\t\t\t\t\t\t\t";
                                echo twig_escape_filter($this->env, $this->getAttribute($context["publicacion"], "ciudad", array(), "array"), "html", null, true);
                                echo ",
\t\t\t\t\t\t\t\t";
                                // line 113
                                echo "\t\t\t\t\t\t\t\t\tvol. ";
                                echo twig_escape_filter($this->env, $this->getAttribute($context["publicacion"], "volumen", array(), "array"), "html", null, true);
                                echo ",
\t\t\t\t\t\t\t\t";
                                // line 115
                                echo "\t\t\t\t\t\t\t\t\t";
                                if (($this->getAttribute($context["publicacion"], "paginas", array(), "array") != 0)) {
                                    // line 116
                                    echo "\t\t\t\t\t\t\t\t\t\tpp. ";
                                    echo twig_escape_filter($this->env, $this->getAttribute($context["publicacion"], "paginas", array(), "array"), "html", null, true);
                                    echo ",
\t\t\t\t\t\t\t\t\t";
                                }
                                // line 118
                                echo "\t\t\t\t\t\t\t\t";
                                // line 119
                                echo "\t\t\t\t\t\t\t\t";
                                // line 121
                                echo "\t\t\t\t\t\t\t\t\t";
                                if (($this->getAttribute($context["publicacion"], "doi", array(), "array") != "")) {
                                    // line 122
                                    echo "\t\t\t\t\t\t\t\t\t\tdoi: ";
                                    echo twig_escape_filter($this->env, $this->getAttribute($context["publicacion"], "doi", array(), "array"), "html", null, true);
                                    echo ".
\t\t\t\t\t\t\t\t\t";
                                }
                                // line 124
                                echo "\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t";
                            }
                            // line 126
                            echo "\t\t\t\t\t\t\t";
                            // line 127
                            echo "\t\t\t\t\t\t\t";
                            if (((isset($context["list"]) ? $context["list"] : $this->getContext($context, "list")) == 4)) {
                                // line 128
                                echo "\t\t\t\t\t\t\t\t";
                                if (((isset($context["mostrar"]) ? $context["mostrar"] : $this->getContext($context, "mostrar")) == 1)) {
                                    // line 129
                                    echo "\t\t\t\t\t\t\t\t\t<h3>";
                                    echo twig_escape_filter($this->env, $this->getAttribute($context["tipo"], "nombre", array(), "array"), "html", null, true);
                                    echo "</h3>
\t\t\t\t\t\t\t\t\t";
                                    // line 130
                                    $context["mostrar"] = 0;
                                    // line 131
                                    echo "\t\t\t\t\t\t\t\t";
                                }
                                // line 132
                                echo "\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t";
                                // line 134
                                echo "\t\t\t\t\t\t\t\t";
                                $context['_parent'] = (array) $context;
                                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["publicacion"], "autores", array(), "array"));
                                foreach ($context['_seq'] as $context["_key"] => $context["miembrop"]) {
                                    // line 135
                                    echo "\t\t\t\t\t\t\t\t\t";
                                    echo twig_escape_filter($this->env, $context["miembrop"], "html", null, true);
                                    echo ",
\t\t\t\t\t\t\t\t";
                                }
                                $_parent = $context['_parent'];
                                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['miembrop'], $context['_parent'], $context['loop']);
                                $context = array_intersect_key($context, $_parent) + $_parent;
                                // line 137
                                echo "\t\t\t\t\t\t\t\t";
                                // line 138
                                echo "\t\t\t\t\t\t\t\t\t<i>";
                                echo twig_escape_filter($this->env, $this->getAttribute($context["publicacion"], "titulo", array(), "array"), "html", null, true);
                                echo ".</i>
\t\t\t\t\t\t\t\t";
                                // line 140
                                echo "\t\t\t\t\t\t\t\t\t";
                                echo twig_escape_filter($this->env, $this->getAttribute($context["publicacion"], "ciudad", array(), "array"), "html", null, true);
                                echo ",
\t\t\t\t\t\t\t\t";
                                // line 142
                                echo "\t\t\t\t\t\t\t\t\t";
                                echo twig_escape_filter($this->env, $this->getAttribute($context["publicacion"], "id", array(), "array"), "html", null, true);
                                echo ",
\t\t\t\t\t\t\t\t";
                                // line 144
                                echo "\t\t\t\t\t\t\t\t\t";
                                echo ".
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t";
                            }
                            // line 147
                            echo "\t\t\t\t\t\t\t";
                            if (((isset($context["list"]) ? $context["list"] : $this->getContext($context, "list")) == 5)) {
                                // line 148
                                echo "\t\t\t\t\t\t\t\t";
                                if (((isset($context["mostrar"]) ? $context["mostrar"] : $this->getContext($context, "mostrar")) == 1)) {
                                    // line 149
                                    echo "\t\t\t\t\t\t\t\t\t<h3>";
                                    echo twig_escape_filter($this->env, $this->getAttribute($context["tipo"], "nombre", array(), "array"), "html", null, true);
                                    echo "</h3>
\t\t\t\t\t\t\t\t\t";
                                    // line 150
                                    $context["mostrar"] = 0;
                                    // line 151
                                    echo "\t\t\t\t\t\t\t\t";
                                }
                                // line 152
                                echo "\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t";
                                // line 154
                                echo "\t\t\t\t\t\t\t\t";
                                $context['_parent'] = (array) $context;
                                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["publicacion"], "autores", array(), "array"));
                                foreach ($context['_seq'] as $context["_key"] => $context["miembrop"]) {
                                    // line 155
                                    echo "\t\t\t\t\t\t\t\t\t";
                                    echo twig_escape_filter($this->env, $context["miembrop"], "html", null, true);
                                    echo ",
\t\t\t\t\t\t\t\t";
                                }
                                $_parent = $context['_parent'];
                                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['miembrop'], $context['_parent'], $context['loop']);
                                $context = array_intersect_key($context, $_parent) + $_parent;
                                // line 157
                                echo "\t\t\t\t\t\t\t\t";
                                // line 158
                                echo "\t\t\t\t\t\t\t\t\t<i>";
                                echo twig_escape_filter($this->env, $this->getAttribute($context["publicacion"], "titulo", array(), "array"), "html", null, true);
                                echo ".</i>
\t\t\t\t\t\t\t\t";
                                // line 160
                                echo "\t\t\t\t\t\t\t\t\t";
                                echo twig_escape_filter($this->env, $this->getAttribute($context["publicacion"], "ciudad", array(), "array"), "html", null, true);
                                echo ",
\t\t\t\t\t\t\t\t";
                                // line 162
                                echo "\t\t\t\t\t\t\t\t\t";
                                echo ".
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t";
                            }
                            // line 165
                            echo "\t\t\t\t\t\t";
                        }
                        // line 166
                        echo "\t\t\t\t\t";
                    }
                    // line 167
                    echo "\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['publicacion'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 168
                echo "\t\t\t</ul>
\t\t\t";
                // line 170
                echo "\t\t";
            }
            // line 171
            echo "\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tipo'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 172
        echo "\t";
        if (((isset($context["c"]) ? $context["c"] : $this->getContext($context, "c")) == 0)) {
            // line 173
            echo "\t\t<span>";
            echo $this->env->getExtension('translator')->getTranslator()->trans("Actualmente no se cuenta con ninguna publicación que mostrar", array(), "messages");
            echo "</span><br>
\t";
        }
    }

    // line 176
    public function block_selector($context, array $blocks = array())
    {
        // line 177
        echo "\t\t<footer>
\t\t\t";
        // line 178
        $context["locale"] = $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "locale", array());
        // line 179
        echo "\t\t\t";
        if (((isset($context["locale"]) ? $context["locale"] : $this->getContext($context, "locale")) == "es")) {
            // line 180
            echo "\t\t\t<a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("publicaciones", array("_locale" => "en", "id" => $this->getAttribute((isset($context["miembro"]) ? $context["miembro"] : $this->getContext($context, "miembro")), "id", array(), "array"))), "html", null, true);
            echo "\"><img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("us.jpg"), "html", null, true);
            echo "\" height=\"40\" width=\"40\" > </a>
\t\t\t";
        } elseif ((        // line 181
(isset($context["locale"]) ? $context["locale"] : $this->getContext($context, "locale")) == "en")) {
            // line 182
            echo "\t\t\t<a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("publicaciones", array("_locale" => "es", "id" => $this->getAttribute((isset($context["miembro"]) ? $context["miembro"] : $this->getContext($context, "miembro")), "id", array(), "array"))), "html", null, true);
            echo "\"><img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("es.jpg"), "html", null, true);
            echo "\" height=\"40\" width=\"40\" ></a>
\t\t\t";
        }
        // line 184
        echo "\t\t</footer>
";
    }

    public function getTemplateName()
    {
        return "PersonalPageProyectosBundle:Default:Publicaciones.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  554 => 184,  546 => 182,  544 => 181,  537 => 180,  534 => 179,  532 => 178,  529 => 177,  526 => 176,  518 => 173,  515 => 172,  509 => 171,  506 => 170,  503 => 168,  497 => 167,  494 => 166,  491 => 165,  485 => 162,  480 => 160,  475 => 158,  473 => 157,  464 => 155,  459 => 154,  456 => 152,  453 => 151,  451 => 150,  446 => 149,  443 => 148,  440 => 147,  434 => 144,  429 => 142,  424 => 140,  419 => 138,  417 => 137,  408 => 135,  403 => 134,  400 => 132,  397 => 131,  395 => 130,  390 => 129,  387 => 128,  384 => 127,  382 => 126,  378 => 124,  372 => 122,  369 => 121,  367 => 119,  365 => 118,  359 => 116,  356 => 115,  351 => 113,  346 => 111,  341 => 109,  336 => 107,  334 => 106,  325 => 104,  320 => 103,  317 => 101,  314 => 100,  312 => 99,  307 => 98,  304 => 97,  301 => 96,  299 => 95,  292 => 92,  290 => 90,  283 => 88,  278 => 86,  276 => 85,  271 => 84,  269 => 83,  260 => 81,  255 => 80,  252 => 78,  249 => 77,  247 => 76,  242 => 75,  239 => 74,  236 => 73,  234 => 72,  228 => 69,  221 => 67,  216 => 65,  214 => 64,  205 => 62,  200 => 61,  197 => 59,  194 => 58,  192 => 57,  187 => 56,  184 => 55,  181 => 54,  179 => 53,  176 => 52,  173 => 51,  170 => 50,  167 => 49,  164 => 48,  161 => 47,  158 => 46,  155 => 45,  150 => 44,  147 => 43,  145 => 42,  142 => 41,  140 => 40,  137 => 39,  134 => 38,  131 => 37,  128 => 36,  125 => 35,  122 => 34,  119 => 33,  116 => 32,  113 => 31,  110 => 30,  107 => 29,  104 => 28,  101 => 27,  98 => 26,  95 => 25,  92 => 24,  90 => 23,  87 => 22,  84 => 21,  78 => 20,  75 => 19,  72 => 18,  69 => 17,  64 => 16,  61 => 15,  56 => 14,  54 => 13,  48 => 11,  46 => 5,  43 => 4,  38 => 3,  11 => 2,);
    }
}
