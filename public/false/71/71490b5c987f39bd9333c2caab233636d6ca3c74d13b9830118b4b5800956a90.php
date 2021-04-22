<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* tareas/tarea.twig */
class __TwigTemplate_e0299c798e5066404e43efbe5ece9541a01b9d89277f473c4a4fde46df49d2cb extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'form' => [$this, 'block_form'],
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "layout.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("layout.twig", "tareas/tarea.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_form($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 3
        echo "    <div class=\"header_content__form\">
        <form method=\"post\" action=\"";
        // line 4
        echo "usuarios/tareas";
        echo "\" >
            <input name=\"titulo\"    autocomplete=\"off\"   type=\"text\" required placeholder=\"Tarea\"/>
            <input name=\"contenido\" autocomplete=\"off\"   type=\"text\" required placeholder=\"Contenido\" />
            <input name=\"enviar\"    type=\"submit\" value=\"Guardar\">
        </form>
    </div>
    <div class=\"header_content__options\">
        <p class=\"color_primary\">Bienvenid@: ";
        // line 11
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('SesionID')->getCallable(), []), "html", null, true);
        echo "</p>
        <a href=\"/logaut\">Cerrar Sesion <i class=\"fas fa-sign-out-alt\"></i></a>
        
    </div>
";
    }

    // line 16
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 17
        echo "<div class=\"main_tareas\">
    <table class=\"table\">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Tarea</th>
                    <th>Contenido</th>
                    <th>Completar</th>
                    <th>Eliminar</th>
                </tr>
            </thead>
            <tbody>
                ";
        // line 29
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["tareas"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["tarea"]) {
            // line 30
            echo "                    <tr class=\"table_content\">
                        <td>";
            // line 31
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["tarea"], "id_tarea", [], "any", false, false, false, 31), "html", null, true);
            echo "</td>
                        <td>
                                <span  ";
            // line 33
            if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["tarea"], "estado", [], "any", false, false, false, 33), "completa"))) {
                echo " style=\"text-decoration: line-through; color:green;   \"  ";
            }
            echo ">
                                    ";
            // line 34
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["tarea"], "titulo", [], "any", false, false, false, 34), "html", null, true);
            echo "
                                </span>
                        </td>
                        <td class=\"table_content__row\">
                            <span  ";
            // line 38
            if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["tarea"], "estado", [], "any", false, false, false, 38), "completa"))) {
                echo " style=\"text-decoration: line-through; color:green;   \"  ";
            }
            echo ">
                                ";
            // line 39
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["tarea"], "contenido", [], "any", false, false, false, 39), "html", null, true);
            echo "
                            </span>
                           
                        </td>
                            
                        ";
            // line 44
            if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["tarea"], "estado", [], "any", false, false, false, 44), "incompleta"))) {
                // line 45
                echo "                            <td > Completar Tarea?
                            <a href=\"/usuarios/tareas/editar?id_tarea=";
                // line 46
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["tarea"], "id_tarea", [], "any", false, false, false, 46), "html", null, true);
                echo "\" style=\"color:red\" title=\"Tarea Incompleta\" onclick=\" return confirm('deseas Completar la tarea');\">
                                <i class=\"far fa-square\"></i>
                            </a>
                            
                            </td>                                                 
                        ";
            } else {
                // line 52
                echo "                            <td class=\"table_content__row\"><i title=\"Tarea completa\"style=\"color:green\" class=\"far fa-check-circle\"></i> Tarea Completada
                             <p class=\"tooltip_tarea\">Tarea completada el ";
                // line 53
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["tarea"], "updated_at", [], "any", false, false, false, 53), "html", null, true);
                echo "</p>
                           
                            </td>

                        ";
            }
            // line 58
            echo "                           <td>
                            <a href=\"/usuarios/delete?id_tarea=";
            // line 59
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["tarea"], "id_tarea", [], "any", false, false, false, 59), "html", null, true);
            echo "\" style=\"color:red;\" title=\"Eliminar Tarea\" onclick=\"return confirm('Desea Eliminar la tarea?')\" >
                                <i class=\"far fa-trash-alt\"></i>
                            </a>
                             
                           </td>
                    </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tarea'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 66
        echo "            </tbody>
    </table>

</div>
    


";
    }

    public function getTemplateName()
    {
        return "tareas/tarea.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  171 => 66,  158 => 59,  155 => 58,  147 => 53,  144 => 52,  135 => 46,  132 => 45,  130 => 44,  122 => 39,  116 => 38,  109 => 34,  103 => 33,  98 => 31,  95 => 30,  91 => 29,  77 => 17,  73 => 16,  64 => 11,  54 => 4,  51 => 3,  47 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"layout.twig\"  %}
{% block form %}
    <div class=\"header_content__form\">
        <form method=\"post\" action=\"{{ 'usuarios/tareas'  }}\" >
            <input name=\"titulo\"    autocomplete=\"off\"   type=\"text\" required placeholder=\"Tarea\"/>
            <input name=\"contenido\" autocomplete=\"off\"   type=\"text\" required placeholder=\"Contenido\" />
            <input name=\"enviar\"    type=\"submit\" value=\"Guardar\">
        </form>
    </div>
    <div class=\"header_content__options\">
        <p class=\"color_primary\">Bienvenid@: {{ SesionID() }}</p>
        <a href=\"/logaut\">Cerrar Sesion <i class=\"fas fa-sign-out-alt\"></i></a>
        
    </div>
{% endblock %}
{% block content %}
<div class=\"main_tareas\">
    <table class=\"table\">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Tarea</th>
                    <th>Contenido</th>
                    <th>Completar</th>
                    <th>Eliminar</th>
                </tr>
            </thead>
            <tbody>
                {% for tarea in tareas %}
                    <tr class=\"table_content\">
                        <td>{{ tarea.id_tarea }}</td>
                        <td>
                                <span  {% if tarea.estado == \"completa\" %} style=\"text-decoration: line-through; color:green;   \"  {% endif %}>
                                    {{ tarea.titulo }}
                                </span>
                        </td>
                        <td class=\"table_content__row\">
                            <span  {% if tarea.estado == \"completa\" %} style=\"text-decoration: line-through; color:green;   \"  {% endif %}>
                                {{ tarea.contenido }}
                            </span>
                           
                        </td>
                            
                        {% if tarea.estado == \"incompleta\" %}
                            <td > Completar Tarea?
                            <a href=\"/usuarios/tareas/editar?id_tarea={{ tarea.id_tarea }}\" style=\"color:red\" title=\"Tarea Incompleta\" onclick=\" return confirm('deseas Completar la tarea');\">
                                <i class=\"far fa-square\"></i>
                            </a>
                            
                            </td>                                                 
                        {% else  %}
                            <td class=\"table_content__row\"><i title=\"Tarea completa\"style=\"color:green\" class=\"far fa-check-circle\"></i> Tarea Completada
                             <p class=\"tooltip_tarea\">Tarea completada el {{ tarea.updated_at }}</p>
                           
                            </td>

                        {% endif %}
                           <td>
                            <a href=\"/usuarios/delete?id_tarea={{ tarea.id_tarea  }}\" style=\"color:red;\" title=\"Eliminar Tarea\" onclick=\"return confirm('Desea Eliminar la tarea?')\" >
                                <i class=\"far fa-trash-alt\"></i>
                            </a>
                             
                           </td>
                    </tr>
                {% endfor %}
            </tbody>
    </table>

</div>
    


{% endblock %}", "tareas/tarea.twig", "C:\\laragon\\www\\app-todoList\\views\\tareas\\tarea.twig");
    }
}
