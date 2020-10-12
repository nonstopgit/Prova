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

/* /home/vagrant/code/prova/themes/prova/partials/slider.htm */
class __TwigTemplate_620beeb79734925b9b16231daadf46dee0ab693ecbcb89a45000693c93f961a2 extends \Twig\Template
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
        $tags = array("for" => 14, "if" => 15);
        $filters = array("escape" => 15, "media" => 20, "raw" => 22);
        $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['for', 'if'],
                ['escape', 'media', 'raw'],
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
        // line 10
        echo "<div class=\"slide\">

    <div id=\"carouselExampleIndicators\" class=\"carousel slide\" data-ride=\"carousel\">
        <ol class=\"carousel-indicators\">
            ";
        // line 14
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["slider"] ?? null));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["slides"]) {
            // line 15
            echo "                <li data-target=\"#carouselExampleIndicators\" data-slide-to=\"";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, true, 15), 15, $this->source), "html", null, true);
            echo "\"";
            if ((twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, true, 15) == 1)) {
                echo " class=\"active\"";
            }
            echo "></li>
            ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['slides'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 17
        echo "        </ol>
        <div class=\"carousel-inner\" role=\"listbox\">
            ";
        // line 19
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["slider"] ?? null));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["slides"]) {
            // line 20
            echo "                <div class=\"carousel-item";
            if ((twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, true, 20) == 1)) {
                echo " active";
            }
            echo "\" style=\"background-image: url('";
            echo $this->extensions['System\Twig\Extension']->mediaFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["slides"], "slide", [], "any", false, false, true, 20), 20, $this->source));
            echo "')\">
                    <div class=\"container carousel-caption d-none d-md-block text-left\">
                        ";
            // line 22
            if (twig_get_attribute($this->env, $this->source, $context["slides"], "slidercaption", [], "any", false, false, true, 22)) {
                echo "<h3>";
                echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["slides"], "slidercaption", [], "any", false, false, true, 22), 22, $this->source);
                echo "</h3>";
            }
            // line 23
            echo "                        ";
            // line 24
            echo "                    </div>
                </div>
            ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['slides'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 27
        echo "        </div>
        <a class=\"carousel-control-prev\" href=\"#carouselExampleIndicators\" role=\"button\" data-slide=\"prev\">
            <span class=\"carousel-control-prev-icon\" aria-hidden=\"true\"></span>
            <span class=\"sr-only\">Previous</span>
        </a>
        <a class=\"carousel-control-next\" href=\"#carouselExampleIndicators\" role=\"button\" data-slide=\"next\">
            <span class=\"carousel-control-next-icon\" aria-hidden=\"true\"></span>
            <span class=\"sr-only\">Next</span>
        </a>
    </div>

</div>";
    }

    public function getTemplateName()
    {
        return "/home/vagrant/code/prova/themes/prova/partials/slider.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  161 => 27,  145 => 24,  143 => 23,  137 => 22,  127 => 20,  110 => 19,  106 => 17,  85 => 15,  68 => 14,  62 => 10,);
    }

    public function getSourceContext()
    {
        return new Source("{#<div class=\"slider test\">
    {% for slides in slider %}
        {<div class=\"slide\" data-img=\"{{ slides.slide|media }}\" style=\"background: url('{{ slides.slide|media }}'); background-repeat: no-repeat; background-size: cover; background-position: 50% 50%;\">
            <div class=\"slide-text\">
                <h3>{{ slides.slidercaption|raw }}</h3>
            </div>
        </div>
    {% endfor %}
</div>#}
<div class=\"slide\">

    <div id=\"carouselExampleIndicators\" class=\"carousel slide\" data-ride=\"carousel\">
        <ol class=\"carousel-indicators\">
            {% for slides in slider %}
                <li data-target=\"#carouselExampleIndicators\" data-slide-to=\"{{ loop.index0 }}\"{% if loop.index == 1 %} class=\"active\"{% endif %}></li>
            {% endfor %}
        </ol>
        <div class=\"carousel-inner\" role=\"listbox\">
            {% for slides in slider %}
                <div class=\"carousel-item{% if loop.index == 1 %} active{% endif %}\" style=\"background-image: url('{{ slides.slide|media }}')\">
                    <div class=\"container carousel-caption d-none d-md-block text-left\">
                        {% if slides.slidercaption %}<h3>{{ slides.slidercaption|raw }}</h3>{% endif %}
                        {#<p class=\"lead\"></p>#}
                    </div>
                </div>
            {% endfor %}
        </div>
        <a class=\"carousel-control-prev\" href=\"#carouselExampleIndicators\" role=\"button\" data-slide=\"prev\">
            <span class=\"carousel-control-prev-icon\" aria-hidden=\"true\"></span>
            <span class=\"sr-only\">Previous</span>
        </a>
        <a class=\"carousel-control-next\" href=\"#carouselExampleIndicators\" role=\"button\" data-slide=\"next\">
            <span class=\"carousel-control-next-icon\" aria-hidden=\"true\"></span>
            <span class=\"sr-only\">Next</span>
        </a>
    </div>

</div>", "/home/vagrant/code/prova/themes/prova/partials/slider.htm", "");
    }
}
