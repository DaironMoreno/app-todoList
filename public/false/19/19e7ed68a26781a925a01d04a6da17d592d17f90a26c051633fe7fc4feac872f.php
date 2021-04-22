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

/* index.twig */
class __TwigTemplate_56ff10f284264ec2294c0ed51e1382deba77e3c53feee2e68686fc71c9d91804 extends Template
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
        $this->parent = $this->loadTemplate("layout.twig", "index.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 3
        echo "
";
        // line 4
        $this->loadTemplate("utilidades/errores.twig", "index.twig", 4)->display($context);
        // line 5
        echo "<section class=\"main_tareas\">
        ";
        // line 6
        if (call_user_func_array($this->env->getFunction('SesionID')->getCallable(), [])) {
            // line 7
            echo "                <a href=\"";
            echo "/usuarios";
            echo "\">Ir al DashBoard</a>
        ";
        } else {
            // line 9
            echo "        <section class=\"main_tareas__titulo\">
                <a href=\"";
            // line 10
            echo "/";
            echo "\" >Login</a>
                <a href=\"";
            // line 11
            echo "registro";
            echo "\" >Registro</a>
        </section>
        <div class=\"main_tareas__form\">
                <form method=\"post\" action=\"";
            // line 14
            echo "/auth";
            echo "\">
                ";
            // line 15
            $this->loadTemplate("utilidades/form.twig", "index.twig", 15)->display($context);
            echo "  
                </form>
        <div>
        ";
        }
        // line 19
        echo "      
</section>
    


";
    }

    public function getTemplateName()
    {
        return "index.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 19,  83 => 15,  79 => 14,  73 => 11,  69 => 10,  66 => 9,  60 => 7,  58 => 6,  55 => 5,  53 => 4,  50 => 3,  46 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"layout.twig\"  %}
{% block content %}

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
                <form method=\"post\" action=\"{{ '/auth' }}\">
                {% include \"utilidades/form.twig\" %}  
                </form>
        <div>
        {% endif %}
      
</section>
    


{% endblock %}", "index.twig", "C:\\laragon\\www\\app-todoList\\views\\index.twig");
    }
}
