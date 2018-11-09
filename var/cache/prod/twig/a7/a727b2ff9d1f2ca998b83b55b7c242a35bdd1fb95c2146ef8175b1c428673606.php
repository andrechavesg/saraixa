<?php

/* HoraLancada/lista.html.twig */
class __TwigTemplate_f053bf2acedceb20fbc0d1249a7e5001d2141f4ab681cbea76bb056bd238ac7f extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "HoraLancada/lista.html.twig", 1);
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
            Horas Lançadas
        </div>
        <!-- /.panel-heading -->
        <div class=\"panel-body\">
            <div class=\"table-responsive\">
                <table class=\"table table-hover\">
                    <thead>
                    <tr>
                        <th>Descrição</th>
                        <th>Funcionario</th>
                        <th>Projeto</th>
                        <th>Ações</th>
                    </tr>
                    </thead>
                    <tbody>
                    ";
        // line 20
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["horasLancadas"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["horaLancada"]) {
            // line 21
            echo "                        <tr>
                            <td><a href=\"/horaLancada/edita/";
            // line 22
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["horaLancada"], "id", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["horaLancada"], "descricao", array()), "html", null, true);
            echo "</a></td>
                            <td>";
            // line 23
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["horaLancada"], "funcionario", array()), "html", null, true);
            echo "</td>
                            <td>";
            // line 24
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["horaLancada"], "projeto", array()), "html", null, true);
            echo "</td>
                            <td>
                                <a class=\"btn btn-danger\" href=\"/horaLancada/remove/";
            // line 26
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["horaLancada"], "id", array()), "html", null, true);
            echo "\">remover</a>
                            </td>
                        </tr>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['horaLancada'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 30
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
        return "HoraLancada/lista.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  86 => 30,  76 => 26,  71 => 24,  67 => 23,  61 => 22,  58 => 21,  54 => 20,  35 => 3,  32 => 2,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "HoraLancada/lista.html.twig", "/Users/gordo/Desktop/Maestro/tiktok/templates/HoraLancada/lista.html.twig");
    }
}
