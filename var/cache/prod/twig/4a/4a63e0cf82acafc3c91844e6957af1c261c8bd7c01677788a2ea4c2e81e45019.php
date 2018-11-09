<?php

/* HoraLancada/mostra.html.twig */
class __TwigTemplate_ada30d1a3c9ddfb471c41f9ebcc8f3a9c004d936ed290f9eddce5b55588802ba extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "HoraLancada/mostra.html.twig", 1);
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
            Hora Lançada
        </div>
        <!-- /.panel-heading -->
        <div class=\"panel-body\">
            <div class=\"table-responsive\">
                <table class=\"table table-hover\">
                    <tr>
                        <th>Descrição</th>
                        <td>";
        // line 13
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["horaLancada"] ?? null), "descricao", array()), "html", null, true);
        echo "</td>
                    </tr>
                    <tr>
                        <th>Quantidade</th>
                        <td>";
        // line 17
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["horaLancada"] ?? null), "quantidade", array()), "html", null, true);
        echo "</td>
                    </tr>
                    <tr>
                        <th>Funcionario</th>
                        <td>";
        // line 21
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["horaLancada"] ?? null), "funcionario", array()), "html", null, true);
        echo "</td>
                    </tr>
                    <tr>
                        <th>Projeto</th>
                        <td>";
        // line 25
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["horaLancada"] ?? null), "projeto", array()), "html", null, true);
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
        return "HoraLancada/mostra.html.twig";
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
        return new Twig_Source("", "HoraLancada/mostra.html.twig", "/Users/gordo/Desktop/Maestro/tiktok/templates/HoraLancada/mostra.html.twig");
    }
}
