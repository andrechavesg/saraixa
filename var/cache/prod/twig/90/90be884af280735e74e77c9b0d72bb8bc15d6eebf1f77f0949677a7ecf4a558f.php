<?php

/* Usuario/mostra.html.twig */
class __TwigTemplate_0ba80072e10e1899f7179824b9fb39295e6b2bbb3abaa5e84f0f68d9a4faa28e extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "Usuario/mostra.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        // line 3
        echo "    <div class=\"panel panel-default\">
        <div class=\"panel-heading\">
            Hover Rows
        </div>
        <!-- /.panel-heading -->
        <div class=\"panel-body\">
            <div class=\"table-responsive\">
                <table class=\"table table-hover\">
                    <tr>
                        <th>Login</th>
                        <td>";
        // line 13
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["usuario"] ?? null), "login", array()), "html", null, true);
        echo "</td>
                    </tr>
                    <tr>
                        <th>Senha</th>
                        <td>";
        // line 17
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["usuario"] ?? null), "senha", array()), "html", null, true);
        echo "</td>
                    </tr>
                </table>
            </div>
            <!-- /.table-responsive -->
        </div>
        <!-- /.panel-body -->
    </div>
";
    }

    public function getTemplateName()
    {
        return "Usuario/mostra.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  54 => 17,  47 => 13,  35 => 3,  32 => 2,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "Usuario/mostra.html.twig", "/Users/gordo/Desktop/Maestro/tiktok/templates/Usuario/mostra.html.twig");
    }
}
