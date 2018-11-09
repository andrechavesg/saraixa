<?php

/* @Twig/Exception/error.rdf.twig */
class __TwigTemplate_fea9f871cc9db0e9fd751b948f0ebec517f3b8f90b3b94607feb0e2fee64b167 extends Twig_Template
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
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.rdf.twig";
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
        return new Twig_Source("", "@Twig/Exception/error.rdf.twig", "/Users/gordo/Desktop/Maestro/tiktok/vendor/symfony/twig-bundle/Resources/views/Exception/error.rdf.twig");
    }
}
