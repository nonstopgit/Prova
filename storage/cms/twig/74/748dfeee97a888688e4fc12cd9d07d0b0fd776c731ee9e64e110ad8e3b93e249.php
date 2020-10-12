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

/* /home/vagrant/code/prova/themes/prova/partials/navbar.htm */
class __TwigTemplate_c1aa1ca99c9dd7dd5d2096e99d94e63565a26507a9ab7725e082ded097c3671c extends \Twig\Template
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
        $tags = array("for" => 11, "if" => 12);
        $filters = array("escape" => 14);
        $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['for', 'if'],
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
        // line 1
        echo "<section>
\t<nav class=\"navbar navbar-expand-lg fixed-top\">
\t\t<div class=\"container\">
\t\t\t<a class=\"navbar-brand font-weight-bold\" href=\"/\"><img src=\"/themes/prova/assets/images/prova-logo.png\" alt=\"Prova\"></a>
\t\t\t<button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarNav\" aria-controls=\"navbarNav\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
\t\t\t\t<!--span class=\"navbar-toggler-icon\"></span-->
\t\t\t\t<div class=\"animated-icon\"><span></span><span></span><span></span></div>
\t\t\t</button>
\t\t\t<div class=\"collapse navbar-collapse\" id=\"navbarNav\">
\t\t\t\t<ul class=\"nav navbar-nav ml-auto\">
\t\t\t\t\t";
        // line 11
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["staticMenu"] ?? null), "menuItems", [], "any", false, false, true, 11));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 12
            echo "\t\t\t\t\t\t";
            if ( !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "viewBag", [], "any", false, false, true, 12), "isHidden", [], "any", false, false, true, 12)) {
                // line 13
                echo "\t\t\t\t\t\t\t<li class=\"nav-item";
                if ((twig_get_attribute($this->env, $this->source, $context["item"], "isActive", [], "any", false, false, true, 13) || twig_get_attribute($this->env, $this->source, $context["item"], "isChildActive", [], "any", false, false, true, 13))) {
                    echo " active";
                }
                echo "\">
\t\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"";
                // line 14
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, true, 14), 14, $this->source), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, true, 14), 14, $this->source), "html", null, true);
                echo "</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t";
            }
            // line 17
            echo "\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 18
        echo "\t\t\t\t</ul>
\t\t\t</div>
\t\t</div>
\t</nav>
</section>";
    }

    public function getTemplateName()
    {
        return "/home/vagrant/code/prova/themes/prova/partials/navbar.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  102 => 18,  96 => 17,  88 => 14,  81 => 13,  78 => 12,  74 => 11,  62 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<section>
\t<nav class=\"navbar navbar-expand-lg fixed-top\">
\t\t<div class=\"container\">
\t\t\t<a class=\"navbar-brand font-weight-bold\" href=\"/\"><img src=\"/themes/prova/assets/images/prova-logo.png\" alt=\"Prova\"></a>
\t\t\t<button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarNav\" aria-controls=\"navbarNav\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
\t\t\t\t<!--span class=\"navbar-toggler-icon\"></span-->
\t\t\t\t<div class=\"animated-icon\"><span></span><span></span><span></span></div>
\t\t\t</button>
\t\t\t<div class=\"collapse navbar-collapse\" id=\"navbarNav\">
\t\t\t\t<ul class=\"nav navbar-nav ml-auto\">
\t\t\t\t\t{% for item in staticMenu.menuItems %}
\t\t\t\t\t\t{% if not item.viewBag.isHidden %}
\t\t\t\t\t\t\t<li class=\"nav-item{% if item.isActive or item.isChildActive %} active{% endif %}\">
\t\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"{{ item.url }}\">{{ item.title }}</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t{% endif %}
\t\t\t\t\t{% endfor %}
\t\t\t\t</ul>
\t\t\t</div>
\t\t</div>
\t</nav>
</section>{#{ d(staticMenu) }#}", "/home/vagrant/code/prova/themes/prova/partials/navbar.htm", "");
    }
}
