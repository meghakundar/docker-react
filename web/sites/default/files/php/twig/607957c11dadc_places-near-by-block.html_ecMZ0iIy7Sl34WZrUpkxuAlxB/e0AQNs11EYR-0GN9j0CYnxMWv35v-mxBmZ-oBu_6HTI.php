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

/* modules/contrib/places_near_by/templates/places-near-by-block.html.twig */
class __TwigTemplate_72b6df69d1401fea33127fde53d1c4d0cd1671b5f0ebdcf859f9de5ca500e062 extends \Twig\Template
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
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        echo "
<div class=\"places-near-by-main-wrapper\">
    <div class=\"places-near-by-wrapper\">
        <div class=\"places-near-by-left-section-wrapper\">
            <section>
                <h2> ";
        // line 11
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["term"] ?? null), "places_near_by_main_text", [], "any", false, false, true, 11), 11, $this->source), "html", null, true);
        echo " </h2>
                <div class=\"places-near-by-lds-hourglass\">
                    <img src=\"/modules/contrib/places_near_by/assets/images/preloader.gif\">
                </div>
                <div class=\"places-near-by-left-section hide\">
                    <ul id=\"places-near-by-map-list-data\"></ul>
                    <div class=\"places-near-by-places-pagination\">
          <span class=\"prev-page\">
            <button class=\"prev-page-button\">
              <span class=\"btn__label\">&#8249;</span>
              <span class=\"icon icon-arrow-left-2\"></span>
            </button>
          </span>
                        <span id=\"current-places-near-by-map-pagination\"></span>
                        <span class=\"next-page\">
            <button class=\"next-page-button\">
              <span class=\"btn__label\">&#8250;</span>
                <span class=\"icon icon-arrow-right-2\"></span>
            </button>
          </span>
                    </div>
                </div>
            </section>
        </div>
        <div class=\"places-near-by-right-section-wrapper\">
            <section>
                <div class=\"places-near-by-right-section\">
                    <div id=\"places-near-by-map-block\" class=\"places-nearby-map\" ></div>
                </div>
            </section>
        </div>
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "modules/contrib/places_near_by/templates/places-near-by-block.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  46 => 11,  39 => 6,);
    }

    public function getSourceContext()
    {
        return new Source("", "modules/contrib/places_near_by/templates/places-near-by-block.html.twig", "/Users/ashish/Documents/test/web/modules/contrib/places_near_by/templates/places-near-by-block.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array();
        static $filters = array("escape" => 11);
        static $functions = array();

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
}
