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

/* /home/vagrant/code/prova/themes/prova/partials/head.htm */
class __TwigTemplate_8334ec4b857c178bf5dd25253d458ad6b65341499482bded28a257cc736e3d80 extends \Twig\Template
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
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = array("styles" => 15);
        $filters = array("theme" => 11);
        $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['styles'],
                ['theme'],
                []
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->source);

            if ($e instanceof SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
    <meta http-equiv=\"x-ua-compatible\" content=\"ie=edge\">

    <link href=\"";
        // line 5
        echo $this->extensions['Cms\Twig\Extension']->themeFilter([0 => "assets/vendor/bootstrap/dist/css/bootstrap.min.css", 1 => "assets/vendor/font-awesome/css/font-awesome.min.css", 2 => "assets/vendor/animate.css/animate.min.css", 3 => "assets/vendor/plyr/dist/plyr.css", 4 => "assets/css/custom.css"]);
        // line 11
        echo "\" rel=\"stylesheet\">
    
    <link href=\"https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@400;700&display=swap\" rel=\"stylesheet\">
    
    ";
        // line 15
        echo $this->env->getExtension('Cms\Twig\Extension')->assetsFunction('css');
        echo $this->env->getExtension('Cms\Twig\Extension')->displayBlock('styles');
    }

    public function getTemplateName()
    {
        return "/home/vagrant/code/prova/themes/prova/partials/head.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  76 => 15,  70 => 11,  68 => 5,  62 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
    <meta http-equiv=\"x-ua-compatible\" content=\"ie=edge\">

    <link href=\"{{ [
      'assets/vendor/bootstrap/dist/css/bootstrap.min.css',
      'assets/vendor/font-awesome/css/font-awesome.min.css',
      'assets/vendor/animate.css/animate.min.css',
      'assets/vendor/plyr/dist/plyr.css',
      'assets/css/custom.css'
    ]|theme }}\" rel=\"stylesheet\">
    
    <link href=\"https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@400;700&display=swap\" rel=\"stylesheet\">
    
    {% styles %}", "/home/vagrant/code/prova/themes/prova/partials/head.htm", "");
    }
}
