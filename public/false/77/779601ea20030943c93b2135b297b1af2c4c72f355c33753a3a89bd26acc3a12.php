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
class __TwigTemplate_2c25ff41431dfe7b55f356142300f55cc725cbab864ec8a486c78869ce1a7b47 extends Template
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
        <form method=\"post\">
            <input name=\"titulo\"     type=\"text\" required placeholder=\"Tarea\"/>
            <input name=\"contenido\" type=\"text\" required placeholder=\"Contenido\" />
            <input name=\"enviar\"    type=\"submit\" value=\"Guardar\">
        </form>
    </div>
";
    }

    // line 11
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 12
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
        // line 24
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["tareas"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["tarea"]) {
            // line 25
            echo "                    <tr>
                        <td>";
            // line 26
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["tarea"], "id_tarea", [], "any", false, false, false, 26), "html", null, true);
            echo "</td>
                        <td>";
            // line 27
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["tarea"], "titulo", [], "any", false, false, false, 27), "html", null, true);
            echo "</td>
                            <td>
                                <span  ";
            // line 29
            if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["tarea"], "estado", [], "any", false, false, false, 29), "completa"))) {
                echo " style=\"text-decoration: line-through; color:green;   \"  ";
            }
            echo ">
                                    ";
            // line 30
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["tarea"], "contenido", [], "any", false, false, false, 30), "html", null, true);
            echo "
                                </span>
                            </td>
                        ";
            // line 33
            if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["tarea"], "estado", [], "any", false, false, false, 33), "incompleta"))) {
                // line 34
                echo "                            <td >
                            <a href=\"";
                // line 35
                echo "tareas/editar";
                echo "?id_tarea=";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["tarea"], "id_tarea", [], "any", false, false, false, 35), "html", null, true);
                echo "\" style=\"color:red\" title=\"Tarea Incompleta\" onclick=\" return confirm('deseas Completar la tarea');\">
                                <i class=\"far fa-square\"></i>
                            </a>
                            </td>                                                 
                        ";
            } else {
                // line 40
                echo "                            <td><i title=\"Tarea completa\"style=\"color:green\" class=\"far fa-check-circle\"></i></td>
                        ";
            }
            // line 42
            echo "                           <td>
                            <a href=\"";
            // line 43
            echo "tareas/eliminar";
            echo "?id_tarea=";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["tarea"], "id_tarea", [], "any", false, false, false, 43), "html", null, true);
            echo "\" style=\"color:red;\" title=\"Eliminar Tarea\" onclick=\" return confirm('deseas Eliminar');\">
                                <i class=\"far fa-trash-alt\"></i>
                            </a>
                           </td>
                    </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tarea'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 49
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
        return array (  144 => 49,  130 => 43,  127 => 42,  123 => 40,  113 => 35,  110 => 34,  108 => 33,  102 => 30,  96 => 29,  91 => 27,  87 => 26,  84 => 25,  80 => 24,  66 => 12,  62 => 11,  51 => 3,  47 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"layout.twig\"  %}
{% block form %}
    <div class=\"header_content__form\">
        <form method=\"post\">
            <input name=\"titulo\"     type=\"text\" required placeholder=\"Tarea\"/>
            <input name=\"contenido\" type=\"text\" required placeholder=\"Contenido\" />
            <input name=\"enviar\"    type=\"submit\" value=\"Guardar\">
        </form>
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
                    <tr>
                        <td>{{ tarea.id_tarea }}</td>
                        <td>{{ tarea.titulo }}</td>
                            <td>
                                <span  {% if tarea.estado == \"completa\" %} style=\"text-decoration: line-through; color:green;   \"  {% endif %}>
                                    {{ tarea.contenido }}
                                </span>
                            </td>
                        {% if tarea.estado == \"incompleta\" %}
                            <td >
                            <a href=\"{{ 'tareas/editar' }}?id_tarea={{ tarea.id_tarea }}\" style=\"color:red\" title=\"Tarea Incompleta\" onclick=\" return confirm('deseas Completar la tarea');\">
                                <i class=\"far fa-square\"></i>
                            </a>
                            </td>                                                 
                        {% else  %}
                            <td><i title=\"Tarea completa\"style=\"color:green\" class=\"far fa-check-circle\"></i></td>
                        {% endif %}
                           <td>
                            <a href=\"{{ 'tareas/eliminar' }}?id_tarea={{ tarea.id_tarea }}\" style=\"color:red;\" title=\"Eliminar Tarea\" onclick=\" return confirm('deseas Eliminar');\">
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
