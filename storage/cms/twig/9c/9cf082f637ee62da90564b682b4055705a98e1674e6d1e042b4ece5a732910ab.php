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

/* /home/vagrant/code/prova/themes/prova/partials/header-title.htm */
class __TwigTemplate_3bc74c88a51332919bc3ee223fe583d6dc9bf657a497cbf9bb6a27f686540edc extends \Twig\Template
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
        $filters = array("escape" => 12);
        $functions = array();

        try {
            $this->sandbox->checkSecurity(
                [],
                ['escape'],
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
        // line 7
        echo "<!-- background image: http://www.freepik.com - Designed by pikisuperstar -->
<div class=\"headerimage\" style=\"background-image: url('/storage/app/media/header/bg.jpg');\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"text\">
                <h1>";
        // line 12
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 12), "title", [], "any", false, false, true, 12), 12, $this->source), "html", null, true);
        echo "</h1>
                ";
        // line 14
        echo "            </div>
        </div>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "/home/vagrant/code/prova/themes/prova/partials/header-title.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 14,  69 => 12,  62 => 7,);
    }

    public function getSourceContext()
    {
        return new Source("{#% if header %}
    {% set headerImage = header|media %}
{% else %}
    {% set headerImage = \"/storage/app/media/content/header/header-sample.jpg\" %}
{% endif %#}
{#<div class=\"headerimage{{ headersize }}\" style=\"background-image: url('{{ headerImage }}');\">#}
<!-- background image: http://www.freepik.com - Designed by pikisuperstar -->
<div class=\"headerimage\" style=\"background-image: url('/storage/app/media/header/bg.jpg');\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"text\">
                <h1>{{ this.page.title }}</h1>
                {#<h3 data-aos=\"fade-left\" data-aos-delay=\"300\">{{ caption|raw }}</h3>#}
            </div>
        </div>
    </div>
</div>", "/home/vagrant/code/prova/themes/prova/partials/header-title.htm", "");
    }
}
