<?php

/* @Framework/Form/hidden_row.html.php */
class __TwigTemplate_df1781814c916000e06907c633dcd7d4aeae5cabef678a39591f26e370649548 extends Twig_Template
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
        echo "<?php echo \$view['form']->widget(\$form) ?>
";
    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@Framework/Form/hidden_row.html.php", "/Users/gordo/Desktop/Maestro/tiktok/vendor/symfony/framework-bundle/Resources/views/Form/hidden_row.html.php");
    }
}
