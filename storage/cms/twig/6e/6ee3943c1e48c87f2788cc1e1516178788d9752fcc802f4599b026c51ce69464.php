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

/* /home/vagrant/code/prova/themes/prova/partials/footer.htm */
class __TwigTemplate_420d3423d10a605be389fc2cd9185f39dc72f502d7eb94c1c786d089755e81e0 extends \Twig\Template
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
        $tags = array();
        $filters = array("escape" => 4, "date" => 4);
        $functions = array();

        try {
            $this->sandbox->checkSecurity(
                [],
                ['escape', 'date'],
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
        echo "<div class=\"container\">
    <div class=\"row\">
        <div class=\"col-12 col-md-6 text-center text-md-left\"><a href=\"/\"><img class=\"logo lazyload\" src=\"/themes/prova/assets/images/prova-logo.png\" data-src=\"/themes/prova/assets/images/prova-logo.png\" alt=\"ProVa\"></a></div>
        <div class=\"col-12 col-md-6 text-center text-md-right\">Copyright &copy; ";
        // line 4
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "Y"), "html", null, true);
        echo ", Prova d.o.o.</div>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "/home/vagrant/code/prova/themes/prova/partials/footer.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  67 => 4,  62 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"container\">
    <div class=\"row\">
        <div class=\"col-12 col-md-6 text-center text-md-left\"><a href=\"/\"><img class=\"logo lazyload\" src=\"/themes/prova/assets/images/prova-logo.png\" data-src=\"/themes/prova/assets/images/prova-logo.png\" alt=\"ProVa\"></a></div>
        <div class=\"col-12 col-md-6 text-center text-md-right\">Copyright &copy; {{ \"now\"|date(\"Y\") }}, Prova d.o.o.</div>
    </div>
</div>", "/home/vagrant/code/prova/themes/prova/partials/footer.htm", "");
    }
}
