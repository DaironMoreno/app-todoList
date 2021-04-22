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

/* layout.twig */
class __TwigTemplate_845e20f7276366244ca3fc6f90385adb54d163f4b0ac73edfec88325974f8f8b extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'form' => [$this, 'block_form'],
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"es\">
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <link rel=\"preconnect\" href=\"https://fonts.gstatic.com\">
    <link href=\"https://fonts.googleapis.com/css2?family=Roboto:wght@300;500;700&display=swap\" rel=\"stylesheet\">
    <link rel=\"stylesheet\" href=\"/css/style.css\">
    <title>Index</title>
</head>
<body>
    <header class=\"header_content\">
        <div class=\"header_content__title\">
            <h1>App Lista de Tareas</h1>
            
        </div>
        ";
        // line 17
        $this->displayBlock('form', $context, $blocks);
        // line 18
        echo " 
                 

        
    </header>
    <main class=\"main_content\">
        ";
        // line 24
        $this->displayBlock('content', $context, $blocks);
        // line 26
        echo "    </main>
    <script src=\"https://kit.fontawesome.com/784be56d59.js\" crossorigin=\"anonymous\"></script>
</body>
</html>";
    }

    // line 17
    public function block_form($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 18
        echo "        ";
    }

    // line 24
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 25
        echo "        ";
    }

    public function getTemplateName()
    {
        return "layout.twig";
    }

    public function getDebugInfo()
    {
        return array (  88 => 25,  84 => 24,  80 => 18,  76 => 17,  69 => 26,  67 => 24,  59 => 18,  57 => 17,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"es\">
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <link rel=\"preconnect\" href=\"https://fonts.gstatic.com\">
    <link href=\"https://fonts.googleapis.com/css2?family=Roboto:wght@300;500;700&display=swap\" rel=\"stylesheet\">
    <link rel=\"stylesheet\" href=\"/css/style.css\">
    <title>Index</title>
</head>
<body>
    <header class=\"header_content\">
        <div class=\"header_content__title\">
            <h1>App Lista de Tareas</h1>
            
        </div>
        {% block form %}
        {% endblock %} 
                 

        
    </header>
    <main class=\"main_content\">
        {% block content %}
        {% endblock %}
    </main>
    <script src=\"https://kit.fontawesome.com/784be56d59.js\" crossorigin=\"anonymous\"></script>
</body>
</html>", "layout.twig", "C:\\laragon\\www\\app-todoList\\views\\layout.twig");
    }
}
