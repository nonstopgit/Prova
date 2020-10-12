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

/* /home/vagrant/code/prova/themes/prova/layouts/home.htm */
class __TwigTemplate_6406258c16c41a8a33a7ba7333a5218f0b88385fd5e19475acd59069629d2fea extends \Twig\Template
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
        $tags = array("partial" => 4, "for" => 10, "page" => 29);
        $filters = array();
        $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['partial', 'for', 'page'],
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
        echo "<!DOCTYPE html>
<html lang=\"en\">
  <head>
    ";
        // line 4
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("head"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 5
        echo "  </head>
  <body>
    <header>
        ";
        // line 8
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("navbar"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 9
        echo "  
        ";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["extraData"] ?? null), "slider", [], "any", false, false, true, 10));
        foreach ($context['_seq'] as $context["_key"] => $context["fields"]) {
            // line 11
            echo "
          
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['fields'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 14
        echo "        ";
        // line 24
        echo "      </header>

    <section id=\"page\" class=\"home\">

      <div class=\"container\">
        ";
        // line 29
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFunction();
        // line 30
        echo "      </div>

    </section>

    <footer>
      ";
        // line 35
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("footer"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 36
        echo "    </footer>

    ";
        // line 38
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("scripts"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 39
        echo "    
  </body>
</html>";
    }

    public function getTemplateName()
    {
        return "/home/vagrant/code/prova/themes/prova/layouts/home.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  125 => 39,  121 => 38,  117 => 36,  113 => 35,  106 => 30,  104 => 29,  97 => 24,  95 => 14,  87 => 11,  83 => 10,  80 => 9,  76 => 8,  71 => 5,  67 => 4,  62 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en\">
  <head>
    {% partial 'head' %}
  </head>
  <body>
    <header>
        {% partial 'navbar' %}
  
        {% for fields in extraData.slider %}

          
{% endfor %}
        {#<div class=\"container\">
          <div class=\"row d-flex align-content-stretch flex-wrap\">            
            <div class=\"col-12 col-lg-7\">
              {% partial 'slider' %}
            </div>
            <div class=\"col-12 col-lg-5 bnftcnt\">
              {% partial 'benefits' %}
            </div>
          </div>
        </div>#}
      </header>

    <section id=\"page\" class=\"home\">

      <div class=\"container\">
        {% page %}
      </div>

    </section>

    <footer>
      {% partial 'footer' %}
    </footer>

    {% partial 'scripts' %}
    
  </body>
</html>", "/home/vagrant/code/prova/themes/prova/layouts/home.htm", "");
    }
}
