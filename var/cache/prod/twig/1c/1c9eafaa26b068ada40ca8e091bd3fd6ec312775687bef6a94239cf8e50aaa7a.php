<?php

/* @Framework/FormTable/hidden_row.html.php */
class __TwigTemplate_bf6fc5c8fabcd8b1fbd382526b49d330b052d254c62e89cff3296c4e4bafb137 extends Twig_Template
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
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
";
    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/hidden_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@Framework/FormTable/hidden_row.html.php", "/Users/gordo/Desktop/Maestro/tiktok/vendor/symfony/framework-bundle/Resources/views/FormTable/hidden_row.html.php");
    }
}
