<?php

/* @Framework/Form/hidden_widget.html.php */
class __TwigTemplate_cbf79d6a2b2899b41c2067d13fda1adfbc3ce867e867ad73678a0a1e628351ad extends Twig_Template
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
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
";
    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@Framework/Form/hidden_widget.html.php", "/Users/gordo/Desktop/Maestro/tiktok/vendor/symfony/framework-bundle/Resources/views/Form/hidden_widget.html.php");
    }
}
