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

/* /home/vagrant/code/prova/themes/prova/partials/benefits.htm */
class __TwigTemplate_e87d1b5f575a499a1474ed4fa348a2b6c55497dd5d13bd316fd2b7ef9de78b27 extends \Twig\Template
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
        $filters = array();
        $functions = array();

        try {
            $this->sandbox->checkSecurity(
                [],
                [],
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
        echo "<div class=\"benefits\">
    <h3>Benefits</h3>
    <p>Comfortable fuelling</p>
    <p>Quick and clean fuelling</p>
    <p>Economical misfuelling prevention cap</p>
    <p>SoloDiesel also protects the environment</p>
    <p>Insurance companies reimburse for only a part of costs</p>
    ";
        // line 14
        echo "</div>";
    }

    public function getTemplateName()
    {
        return "/home/vagrant/code/prova/themes/prova/partials/benefits.htm";
    }

    public function getDebugInfo()
    {
        return array (  71 => 14,  62 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"benefits\">
    <h3>Benefits</h3>
    <p>Comfortable fuelling</p>
    <p>Quick and clean fuelling</p>
    <p>Economical misfuelling prevention cap</p>
    <p>SoloDiesel also protects the environment</p>
    <p>Insurance companies reimburse for only a part of costs</p>
    {#<p>Physically prevents misfuelling</p>
    <p>Saves money &amp; trouble</p>
    <p>Easy to install &amp; faster fuelling</p>
    <p>Complies to all EEC standards</p>
    <p>Potentially lower insurance premiums</p>
    <p>Environmental benefits...no waste &amp; no contamination</p>#}
</div>", "/home/vagrant/code/prova/themes/prova/partials/benefits.htm", "");
    }
}
