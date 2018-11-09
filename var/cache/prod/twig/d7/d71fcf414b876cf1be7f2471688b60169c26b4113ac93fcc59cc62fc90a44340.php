<?php

/* @Twig/Exception/exception.rdf.twig */
class __TwigTemplate_82eaa3cd85eedaf3eeb4b766ccb56975aab8622e97d7e57ff7e0fad80e3ccc40 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/exception.xml.twig", array("exception" => ($context["exception"] ?? null)));
        echo "
";
    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.rdf.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@Twig/Exception/exception.rdf.twig", "/Users/gordo/Desktop/Maestro/tiktok/vendor/symfony/twig-bundle/Resources/views/Exception/exception.rdf.twig");
    }
}
