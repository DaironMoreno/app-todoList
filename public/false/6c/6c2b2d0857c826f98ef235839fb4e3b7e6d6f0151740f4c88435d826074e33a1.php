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

/* utilidades/errores.twig */
class __TwigTemplate_0722da69cd9b35cae4c3e40d4c404560c96813b3796433a16b8f67cded5f3739 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        if (($context["errores"] ?? null)) {
            // line 2
            echo "    \t<div >
    \t\t";
            // line 3
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["errores"] ?? null));
            foreach ($context['_seq'] as $context["input"] => $context["mensajes"]) {
                // line 4
                echo "    \t\t\t";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($context["mensajes"]);
                foreach ($context['_seq'] as $context["_key"] => $context["mensaje"]) {
                    // line 5
                    echo "    \t\t\t\t<ul>
    \t\t\t\t\t<li><h2>";
                    // line 6
                    echo twig_escape_filter($this->env, $context["input"], "html", null, true);
                    echo ": ";
                    echo twig_escape_filter($this->env, $context["mensaje"], "html", null, true);
                    echo "</h2></li>
    \t\t\t\t</ul>
    \t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['mensaje'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 9
                echo "    \t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['input'], $context['mensajes'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo "\t
    \t</div>

";
        }
    }

    public function getTemplateName()
    {
        return "utilidades/errores.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  65 => 9,  54 => 6,  51 => 5,  46 => 4,  42 => 3,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% if errores %}
    \t<div >
    \t\t{% for input,mensajes in errores %}
    \t\t\t{% for mensaje in mensajes %}
    \t\t\t\t<ul>
    \t\t\t\t\t<li><h2>{{ input }}: {{ mensaje }}</h2></li>
    \t\t\t\t</ul>
    \t\t\t{% endfor %}
    \t\t{% endfor %}\t
    \t</div>

{% endif %}", "utilidades/errores.twig", "C:\\laragon\\www\\app-todoList\\views\\utilidades\\errores.twig");
    }
}
