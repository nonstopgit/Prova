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

/* /home/vagrant/code/prova/themes/prova/layouts/dejavnosti.htm */
class __TwigTemplate_8d6576f5599bee03c2ffe8a42001c6631016ebaf85b64a356fc12035a74e0362 extends \Twig\Template
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
        $tags = array("partial" => 4, "page" => 20);
        $filters = array();
        $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['partial', 'page'],
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
        echo "      ";
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("header-title"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 10
        echo "    </header>

    <section id=\"page\">

      <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-12 col-lg-3 sub\">
                ";
        // line 17
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("dejavnosti-submenu"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 18
        echo "            </div>
            <div class=\"col-12 col-lg-8\">
                ";
        // line 20
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFunction();
        // line 21
        echo "            </div>
        </div>        
      </div>

    </section>

    <footer>
      ";
        // line 28
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("footer"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 29
        echo "    </footer>

    ";
        // line 31
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("scripts"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 32
        echo "
  </body>
</html>";
    }

    public function getTemplateName()
    {
        return "/home/vagrant/code/prova/themes/prova/layouts/dejavnosti.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  125 => 32,  121 => 31,  117 => 29,  113 => 28,  104 => 21,  102 => 20,  98 => 18,  94 => 17,  85 => 10,  80 => 9,  76 => 8,  71 => 5,  67 => 4,  62 => 1,);
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
      {% partial 'header-title' %}
    </header>

    <section id=\"page\">

      <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-12 col-lg-3 sub\">
                {% partial 'dejavnosti-submenu' %}
            </div>
            <div class=\"col-12 col-lg-8\">
                {% page %}
            </div>
        </div>        
      </div>

    </section>

    <footer>
      {% partial 'footer' %}
    </footer>

    {% partial 'scripts' %}

  </body>
</html>", "/home/vagrant/code/prova/themes/prova/layouts/dejavnosti.htm", "");
    }
}
