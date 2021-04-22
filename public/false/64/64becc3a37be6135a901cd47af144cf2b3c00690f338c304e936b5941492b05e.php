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

/* utilidades/form.twig */
class __TwigTemplate_709b84161bcc9bda524c8d405f88f9ea4bced3e2c3187b73f3628efdc11b984b extends Template
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
        echo "<div>
    <input name=\"email\" type=\"email\" required placeholder=\"Email\" autocomplete=\"off\"/><br>
    </div> 
    <div> 
    <input name=\"pass\" type=\"password\" required placeholder=\"Password\" autocomplete=\"off\"/><br>
    </div>
    <div>   
    <input name=\"enviar\" type=\"submit\" value=\"Enviar\"  />
    </div>   
</div> ";
    }

    public function getTemplateName()
    {
        return "utilidades/form.twig";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div>
    <input name=\"email\" type=\"email\" required placeholder=\"Email\" autocomplete=\"off\"/><br>
    </div> 
    <div> 
    <input name=\"pass\" type=\"password\" required placeholder=\"Password\" autocomplete=\"off\"/><br>
    </div>
    <div>   
    <input name=\"enviar\" type=\"submit\" value=\"Enviar\"  />
    </div>   
</div> ", "utilidades/form.twig", "C:\\laragon\\www\\app-todoList\\views\\utilidades\\form.twig");
    }
}
