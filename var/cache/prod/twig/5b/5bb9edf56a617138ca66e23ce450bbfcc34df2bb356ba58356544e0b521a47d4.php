<?php

/* @Framework/Form/password_widget.html.php */
class __TwigTemplate_a9f376b1dd51f03b244d9b73414240f0cd7b535a6f51cebcd30cb3eb2f668ef9 extends Twig_Template
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
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
";
    }

    public function getTemplateName()
    {
        return "@Framework/Form/password_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@Framework/Form/password_widget.html.php", "/Users/gordo/Desktop/Maestro/tiktok/vendor/symfony/framework-bundle/Resources/views/Form/password_widget.html.php");
    }
}
