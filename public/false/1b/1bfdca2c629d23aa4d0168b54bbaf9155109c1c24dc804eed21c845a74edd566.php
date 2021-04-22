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
class __TwigTemplate_84cc1b34432a18bc5ecb8dcd7fc22ce8dd05435b7a64076fb0557fd1042eb3c0 extends Template
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
        echo "<h2>Inicia Sesion</h2>
";
        // line 4
        $this->loadTemplate("utilidades/errores.twig", "index.twig", 4)->display($context);
        // line 5
        echo "<div class=\"main_tareas\">
        <form method=\"post\" action=\"";
        // line 6
        echo "/auth";
        echo "\">
             ";
        // line 7
        $this->loadTemplate("utilidades/form.twig", "index.twig", 7)->display($context);
        echo "  
        </form>
        <a href=\"";
        // line 9
        echo "registro";
        echo "\" >Registrarse</a>
        ";
        // line 10
        echo twig_escape_filter($this->env, ($context["errores"] ?? null), "html", null, true);
        echo "
</div>
    


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
        return array (  71 => 10,  67 => 9,  62 => 7,  58 => 6,  55 => 5,  53 => 4,  50 => 3,  46 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"layout.twig\"  %}
{% block content %}
<h2>Inicia Sesion</h2>
{% include \"utilidades/errores.twig\" %}
<div class=\"main_tareas\">
        <form method=\"post\" action=\"{{ '/auth' }}\">
             {% include \"utilidades/form.twig\" %}  
        </form>
        <a href=\"{{ 'registro' }}\" >Registrarse</a>
        {{ errores }}
</div>
    


{% endblock %}", "index.twig", "C:\\laragon\\www\\app-todoList\\views\\index.twig");
    }
}
