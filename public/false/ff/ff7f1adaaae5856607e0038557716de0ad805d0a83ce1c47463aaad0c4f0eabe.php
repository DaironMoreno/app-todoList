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
class __TwigTemplate_986a6067364cc79ea92caadf85e328a5df8ee8762256d73e61a9c1f1684f7e6d extends Template
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
        echo "<h2>Registrarse</h2>
";
        // line 4
        if (($context["registro"] ?? null)) {
            // line 5
            echo "        <div>Usuario Registrado Correctamente</div>
";
        }
        // line 7
        $this->loadTemplate("utilidades/errores.twig", "formRegistro.twig", 7)->display($context);
        // line 8
        echo "
<div class=\"main_tareas\">
        <form method=\"post\" action=\"";
        // line 10
        echo "usuarios";
        echo "\">
             ";
        // line 11
        $this->loadTemplate("utilidades/form.twig", "formRegistro.twig", 11)->display($context);
        echo "  
        </form>
</div>
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
        return array (  69 => 11,  65 => 10,  61 => 8,  59 => 7,  55 => 5,  53 => 4,  50 => 3,  46 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"layout.twig\"  %}
{% block content %}
<h2>Registrarse</h2>
{% if registro %}
        <div>Usuario Registrado Correctamente</div>
{% endif  %}
{% include \"utilidades/errores.twig\" %}

<div class=\"main_tareas\">
        <form method=\"post\" action=\"{{ 'usuarios' }}\">
             {% include \"utilidades/form.twig\" %}  
        </form>
</div>
{% endblock %}", "formRegistro.twig", "C:\\laragon\\www\\app-todoList\\views\\formRegistro.twig");
    }
}
