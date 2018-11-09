<?php

/* Funcionario/mostra.html.twig */
class __TwigTemplate_08202633db3557cc4d35d2b6b4466c2de9b96b5411eb7c7646773732f0476861 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "Funcionario/mostra.html.twig", 1);
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
                        <th>Nome</th>
                        <td>";
        // line 13
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["funcionario"] ?? null), "nome", array()), "html", null, true);
        echo "</td>
                    </tr>
                    <tr>
                        <th>Data de Nascimento</th>
                        <td>";
        // line 17
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["funcionario"] ?? null), "dataDeNascimento", array()), "d-m-Y"), "html", null, true);
        echo "</td>
                    </tr>
                    <tr>
                        <th>Data de entrada</th>
                        <td>";
        // line 21
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["funcionario"] ?? null), "dataDeEntrada", array()), "d-m-Y"), "html", null, true);
        echo "</td>
                    </tr>
                    <tr>
                        <th>Tempo na empresa</th>
                        <td>";
        // line 25
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["funcionario"] ?? null), "tempoNaEmpresa", array()), "%Y anos, %m meses, %d dias"), "html", null, true);
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
        return "Funcionario/mostra.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  68 => 25,  61 => 21,  54 => 17,  47 => 13,  35 => 3,  32 => 2,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "Funcionario/mostra.html.twig", "/Users/gordo/Desktop/Maestro/tiktok/templates/Funcionario/mostra.html.twig");
    }
}
