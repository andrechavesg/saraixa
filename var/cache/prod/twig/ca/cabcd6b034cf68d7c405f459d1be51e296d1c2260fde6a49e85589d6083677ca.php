<?php

/* Funcionario/lista.html.twig */
class __TwigTemplate_9818f5a9e0ff4a345138ad4592a548bf19277873743adeba5623d558846bc61c extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "Funcionario/lista.html.twig", 1);
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
            Funcionarios
        </div>
        <!-- /.panel-heading -->
        <div class=\"panel-body\">
            <div class=\"table-responsive\">
                <table class=\"table table-hover\">
                    <thead>
                    <tr>
                        <th>Nome</th>
                        <th>Data de Nascimento</th>
                        <th>Projeto</th>
                        <th>Ações</th>
                    </tr>
                    </thead>
                    <tbody>
                    ";
        // line 20
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["funcionarios"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["funcionario"]) {
            // line 21
            echo "                        <tr>
                            <td><a href=\"/funcionario/edita/";
            // line 22
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["funcionario"], "id", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["funcionario"], "nome", array()), "html", null, true);
            echo "</a></td>
                            <td>
                                ";
            // line 24
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["funcionario"], "dataDeNascimento", array()), "d-m-Y"), "html", null, true);
            echo "
                            </td>
                            <td>";
            // line 26
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["funcionario"], "projeto", array()), "html", null, true);
            echo "</td>
                            <td>
                                <a class=\"btn btn-danger\" href=\"/funcionario/remove/";
            // line 28
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["funcionario"], "id", array()), "html", null, true);
            echo "\">remover</a>
                            </td>
                        </tr>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['funcionario'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 32
        echo "                    </tbody>
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
        return "Funcionario/lista.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  88 => 32,  78 => 28,  73 => 26,  68 => 24,  61 => 22,  58 => 21,  54 => 20,  35 => 3,  32 => 2,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "Funcionario/lista.html.twig", "/Users/gordo/Desktop/Maestro/tiktok/templates/Funcionario/lista.html.twig");
    }
}
