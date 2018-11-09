<?php

/* HoraLancada/mostra.html.twig */
class __TwigTemplate_6e9f6e305751ac92eec9f4203b16a6f1cf99af8f6a1b57cf5308bf91243456e0 extends Twig_Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "HoraLancada/mostra.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "HoraLancada/mostra.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["horaLancada"]) || array_key_exists("horaLancada", $context) ? $context["horaLancada"] : (function () { throw new Twig_Error_Runtime('Variable "horaLancada" does not exist.', 13, $this->source); })()), "descricao", array()), "html", null, true);
        echo "</td>
                    </tr>
                    <tr>
                        <th>Quantidade</th>
                        <td>";
        // line 17
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["horaLancada"]) || array_key_exists("horaLancada", $context) ? $context["horaLancada"] : (function () { throw new Twig_Error_Runtime('Variable "horaLancada" does not exist.', 17, $this->source); })()), "quantidade", array()), "html", null, true);
        echo "</td>
                    </tr>
                    <tr>
                        <th>Funcionario</th>
                        <td>";
        // line 21
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["horaLancada"]) || array_key_exists("horaLancada", $context) ? $context["horaLancada"] : (function () { throw new Twig_Error_Runtime('Variable "horaLancada" does not exist.', 21, $this->source); })()), "funcionario", array()), "html", null, true);
        echo "</td>
                    </tr>
                    <tr>
                        <th>Projeto</th>
                        <td>";
        // line 25
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["horaLancada"]) || array_key_exists("horaLancada", $context) ? $context["horaLancada"] : (function () { throw new Twig_Error_Runtime('Variable "horaLancada" does not exist.', 25, $this->source); })()), "projeto", array()), "html", null, true);
        echo "</td>
                    </tr>
                </table>
            </div>
            <!-- /.table-responsive -->
        </div>
        <!-- /.panel-body -->
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

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
        return array (  86 => 25,  79 => 21,  72 => 17,  65 => 13,  53 => 3,  44 => 2,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}
{% block body %}
    <div class=\"panel panel-default\">
        <div class=\"panel-heading\">
            Hora Lançada
        </div>
        <!-- /.panel-heading -->
        <div class=\"panel-body\">
            <div class=\"table-responsive\">
                <table class=\"table table-hover\">
                    <tr>
                        <th>Descrição</th>
                        <td>{{ horaLancada.descricao }}</td>
                    </tr>
                    <tr>
                        <th>Quantidade</th>
                        <td>{{ horaLancada.quantidade }}</td>
                    </tr>
                    <tr>
                        <th>Funcionario</th>
                        <td>{{ horaLancada.funcionario }}</td>
                    </tr>
                    <tr>
                        <th>Projeto</th>
                        <td>{{ horaLancada.projeto }}</td>
                    </tr>
                </table>
            </div>
            <!-- /.table-responsive -->
        </div>
        <!-- /.panel-body -->
    </div>
{% endblock %}", "HoraLancada/mostra.html.twig", "/Users/gordo/Desktop/Maestro/tiktok/templates/HoraLancada/mostra.html.twig");
    }
}
