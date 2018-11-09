<?php

/* @Framework/Form/reset_widget.html.php */
class __TwigTemplate_b2c83fa245bbfc1c753294d49bc0f7c59b2cdb76e08d8c57a3b49b088b15b315 extends Twig_Template
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
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
";
    }

    public function getTemplateName()
    {
        return "@Framework/Form/reset_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@Framework/Form/reset_widget.html.php", "/Users/gordo/Desktop/Maestro/tiktok/vendor/symfony/framework-bundle/Resources/views/Form/reset_widget.html.php");
    }
}
