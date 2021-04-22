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

/* formRegistro.twig */
class __TwigTemplate_2bdc76a0a53d4160e2851af1d7dc05c5754675c1d7e9e9b9050af4ab56d10f9c extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
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
        $this->parent = $this->loadTemplate("layout.twig", "formRegistro.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 3
        if (($context["registro"] ?? null)) {
            // line 4
            echo "        <div>Usuario Registrado Correctamente</div>
";
        }
        // line 6
        $this->loadTemplate("utilidades/errores.twig", "formRegistro.twig", 6)->display($context);
        // line 7
        echo "
<section class=\"main_tareas\">
        ";
        // line 9
        if (call_user_func_array($this->env->getFunction('SesionID')->getCallable(), [])) {
            // line 10
            echo "                <a href=\"";
            echo "/usuarios";
            echo "\">Ir al DashBoard</a>
        ";
        } else {
            // line 12
            echo "        <section class=\"main_tareas__titulo\">
                <a href=\"";
            // line 13
            echo "/";
            echo "\" >Login</a>
                <a href=\"";
            // line 14
            echo "registro";
            echo "\" >Registro</a>
        </section>
        <div class=\"main_tareas__form\">
                <form method=\"post\" action=\"";
            // line 17
            echo "/usuarios/registro";
            echo "\">
                ";
            // line 18
            $this->loadTemplate("utilidades/form.twig", "formRegistro.twig", 18)->display($context);
            echo "  
                </form>
        <div>
        ";
        }
        // line 22
        echo "      
</section>
";
    }

    public function getTemplateName()
    {
        return "formRegistro.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 22,  87 => 18,  83 => 17,  77 => 14,  73 => 13,  70 => 12,  64 => 10,  62 => 9,  58 => 7,  56 => 6,  52 => 4,  50 => 3,  46 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"layout.twig\"  %}
{% block content %}
{% if registro %}
        <div>Usuario Registrado Correctamente</div>
{% endif  %}
{% include \"utilidades/errores.twig\" %}

<section class=\"main_tareas\">
        {% if SesionID() %}
                <a href=\"{{ '/usuarios' }}\">Ir al DashBoard</a>
        {% else %}
        <section class=\"main_tareas__titulo\">
                <a href=\"{{ '/' }}\" >Login</a>
                <a href=\"{{ 'registro' }}\" >Registro</a>
        </section>
        <div class=\"main_tareas__form\">
                <form method=\"post\" action=\"{{ '/usuarios/registro' }}\">
                {% include \"utilidades/form.twig\" %}  
                </form>
        <div>
        {% endif %}
      
</section>
{% endblock %}



", "formRegistro.twig", "C:\\laragon\\www\\app-todoList\\views\\formRegistro.twig");
    }
}
