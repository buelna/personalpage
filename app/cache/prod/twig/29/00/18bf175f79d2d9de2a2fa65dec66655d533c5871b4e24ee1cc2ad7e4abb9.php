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
        echo "\t\t";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["publicaciones"]) ? $context["publicaciones"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["publicacion"]) {
            // line 15
            echo "\t\t";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["tipos"]) ? $context["tipos"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["tipo"]) {
                // line 16
                echo "\t\t    ";
                if (($this->getAttribute($context["publicacion"], "id", array()) == $this->getAttribute($context["tipo"], "id", array()))) {
                    // line 17
                    echo "\t\t        <h3>";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["publicacion"], "nombre", array()), "html", null, true);
                    echo "</h3>
\t\t    ";
                }
                // line 19
                echo "\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tipo'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo "        
\t<ul >
\t    ";
            // line 21
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
                // line 22
                echo "\t    \t";
                $context["c"] = 1;
                // line 23
                echo "\t        ";
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["publicacionesid"]) ? $context["publicacionesid"] : null));
                foreach ($context['_seq'] as $context["_key"] => $context["publicacionid"]) {
                    echo "    
\t            ";
                    // line 24
                    if (($this->getAttribute($context["entity"], "id", array()) == $this->getAttribute($context["publicacionid"], "id", array()))) {
                        // line 25
                        echo "\t                    ";
                        if (($this->getAttribute($context["publicacion"], "nombre", array()) == $this->getAttribute($context["publicacionid"], "tipoPublicacion", array()))) {
                            // line 26
                            echo "\t                        <li>
\t                            <cite>
\t                            ";
                            // line 28
                            $context['_parent'] = (array) $context;
                            $context['_seq'] = twig_ensure_traversable((isset($context["miembros"]) ? $context["miembros"] : null));
                            foreach ($context['_seq'] as $context["_key"] => $context["member"]) {
                                // line 29
                                echo "\t                                ";
                                if (($this->getAttribute($context["member"], "idpublicacion", array()) == $this->getAttribute($context["entity"], "id", array()))) {
                                    // line 30
                                    echo "\t                                   ";
                                    echo twig_escape_filter($this->env, twig_first($this->env, $this->getAttribute($context["member"], "nombreMiembro", array())), "html", null, true);
                                    echo ". ";
                                    echo twig_escape_filter($this->env, $this->getAttribute($context["member"], "apellidoP", array()), "html", null, true);
                                    echo ", 
\t                                ";
                                }
                                // line 32
                                echo "\t                            ";
                            }
                            $_parent = $context['_parent'];
                            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['member'], $context['_parent'], $context['loop']);
                            $context = array_intersect_key($context, $_parent) + $_parent;
                            // line 33
                            echo "\t                            ";
                            if ($this->getAttribute($context["entity"], "path", array())) {
                                // line 34
                                echo "\t                                <a href=\"http://caii.itmexicali.edu.mx/download/";
                                echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "path", array()), "html", null, true);
                                echo "\">";
                                if ($this->getAttribute($context["entity"], "titulo", array())) {
                                    echo "\"";
                                    echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "titulo", array()), "html", null, true);
                                    echo "\"";
                                }
                                echo "</a>

\t                            ";
                            } else {
                                // line 36
                                echo "  
\t                                ";
                                // line 37
                                if ($this->getAttribute($context["entity"], "titulo", array())) {
                                    echo "\"";
                                    echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "titulo", array()), "html", null, true);
                                    echo "\"";
                                }
                                // line 38
                                echo "\t                            ";
                            }
                            // line 39
                            echo "\t                            ";
                            if ($this->getAttribute($context["entity"], "tituloLibro", array())) {
                                echo ", ";
                                echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "tituloLibro", array()), "html", null, true);
                            }
                            echo "</cite>
\t                            ";
                            // line 40
                            if ($this->getAttribute($context["entity"], "capitulo", array())) {
                                echo ", ";
                                echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "capitulo", array()), "html", null, true);
                            }
                            // line 41
                            echo "\t                            ";
                            if ($this->getAttribute($context["entity"], "journal", array())) {
                                echo ", ";
                                echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "journal", array()), "html", null, true);
                            }
                            // line 42
                            echo "\t                            ";
                            if ($this->getAttribute($context["entity"], "volumen", array())) {
                                echo ", vol. ";
                                echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "volumen", array()), "html", null, true);
                            }
                            // line 43
                            echo "\t                            ";
                            if ($this->getAttribute($context["entity"], "congreso", array())) {
                                echo ", In proceedings of ";
                                echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "congreso", array()), "html", null, true);
                            }
                            // line 44
                            echo "\t                            ";
                            if ($this->getAttribute($context["entity"], "ciudad", array())) {
                                echo ", ";
                                echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "ciudad", array()), "html", null, true);
                            }
                            // line 45
                            echo "\t                            ";
                            if ($this->getAttribute($context["entity"], "editorial", array())) {
                                echo ", Editorial ";
                                echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "editorial", array()), "html", null, true);
                            }
                            // line 46
                            echo "\t                            ";
                            if ($this->getAttribute($context["entity"], "serie", array())) {
                                echo "No. ";
                                echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "serie", array()), "html", null, true);
                            }
                            // line 47
                            echo "\t                            ";
                            if ($this->getAttribute($context["entity"], "edicion", array())) {
                                echo ", Edición. ";
                                echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "edicion", array()), "html", null, true);
                            }
                            // line 48
                            echo "\t                            ";
                            if ($this->getAttribute($context["entity"], "tipoReporte", array())) {
                                echo ", ";
                                echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "tipoReporte", array()), "html", null, true);
                            }
                            // line 49
                            echo "\t                           ";
                            // line 50
                            echo "\t                            ";
                            if ($this->getAttribute($context["entity"], "paginas", array())) {
                                echo ", pp. ";
                                echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "paginas", array()), "html", null, true);
                            }
                            // line 51
                            echo "\t                            ";
                            if ($this->getAttribute($context["entity"], "issn", array())) {
                                echo ", ISSN ";
                                echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "issn", array()), "html", null, true);
                            }
                            // line 52
                            echo "\t                            ";
                            if ($this->getAttribute($context["entity"], "isbn", array())) {
                                echo ", ISBN ";
                                echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "isbn", array()), "html", null, true);
                            }
                            // line 53
                            echo "\t                            ";
                            if ($this->getAttribute($context["entity"], "doi", array())) {
                                echo ", DOI: <a href=\"http://dx.doi.org/";
                                echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "doi", array()), "html", null, true);
                                echo "\">";
                                echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "doi", array()), "html", null, true);
                                echo "</a> ";
                            }
                            // line 54
                            echo "\t                            ";
                            if ($this->getAttribute($context["entity"], "tipoTesis", array())) {
                                echo ", ";
                                echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "tipoTesis", array()), "html", null, true);
                            }
                            // line 55
                            echo "\t                           
\t                        </li>
\t                    ";
                        }
                        // line 57
                        echo "   
\t            ";
                    }
                    // line 58
                    echo "        
\t        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['publicacionid'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 60
                echo "\t    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 61
            echo "\t</ul>    
\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['publicacion'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 62
        echo "  
\t";
        // line 63
        if (((isset($context["c"]) ? $context["c"] : null) == 0)) {
            // line 64
            echo "\t\t<span>";
            echo $this->env->getExtension('translator')->getTranslator()->trans("Actualmente no se cuenta con ninguna publicación que mostrar", array(), "messages");
            echo "</span><br>
\t";
        }
    }

    // line 67
    public function block_selector($context, array $blocks = array())
    {
        // line 68
        echo "\t\t<footer>
\t\t\t";
        // line 69
        $context["locale"] = $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "locale", array());
        // line 70
        echo "\t\t\t";
        if (((isset($context["locale"]) ? $context["locale"] : null) == "es")) {
            // line 71
            echo "\t\t\t<a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("publicaciones", array("_locale" => "en", "id" => $this->getAttribute((isset($context["miembro"]) ? $context["miembro"] : null), "link", array(), "array"))), "html", null, true);
            echo "\"><img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("us.jpg"), "html", null, true);
            echo "\" height=\"40\" width=\"40\" > </a>
\t\t\t";
        } elseif ((        // line 72
(isset($context["locale"]) ? $context["locale"] : null) == "en")) {
            // line 73
            echo "\t\t\t<a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("publicaciones", array("_locale" => "es", "id" => $this->getAttribute((isset($context["miembro"]) ? $context["miembro"] : null), "link", array(), "array"))), "html", null, true);
            echo "\"><img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("es.jpg"), "html", null, true);
            echo "\" height=\"40\" width=\"40\" ></a>
\t\t\t";
        }
        // line 75
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
        return array (  322 => 75,  314 => 73,  312 => 72,  305 => 71,  302 => 70,  300 => 69,  297 => 68,  294 => 67,  286 => 64,  284 => 63,  281 => 62,  274 => 61,  268 => 60,  261 => 58,  257 => 57,  252 => 55,  246 => 54,  237 => 53,  231 => 52,  225 => 51,  219 => 50,  217 => 49,  211 => 48,  205 => 47,  199 => 46,  193 => 45,  187 => 44,  181 => 43,  175 => 42,  169 => 41,  164 => 40,  156 => 39,  153 => 38,  147 => 37,  144 => 36,  131 => 34,  128 => 33,  122 => 32,  114 => 30,  111 => 29,  107 => 28,  103 => 26,  100 => 25,  98 => 24,  91 => 23,  88 => 22,  84 => 21,  75 => 19,  69 => 17,  66 => 16,  61 => 15,  56 => 14,  54 => 13,  48 => 11,  46 => 5,  43 => 4,  38 => 3,  11 => 2,);
    }
}
