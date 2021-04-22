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
class __TwigTemplate_0fc4786fd0d9e28ab21bbb93eb5a930cf0b483d2463a694291febe7e2ccbd11e extends Template
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
