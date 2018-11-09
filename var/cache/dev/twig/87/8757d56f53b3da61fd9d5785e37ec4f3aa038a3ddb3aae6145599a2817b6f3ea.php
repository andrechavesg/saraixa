<?php

/* Funcionario/mostra.html.twig */
class __TwigTemplate_e65a6e96ac87b27a81db6aab2561850311a8817d87ec281dd6a57171eba439d1 extends Twig_Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Funcionario/mostra.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Funcionario/mostra.html.twig"));

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
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["funcionario"]) || array_key_exists("funcionario", $context) ? $context["funcionario"] : (function () { throw new Twig_Error_Runtime('Variable "funcionario" does not exist.', 13, $this->source); })()), "nome", array()), "html", null, true);
        echo "</td>
                    </tr>
                    <tr>
                        <th>Data de Nascimento</th>
                        <td>";
        // line 17
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["funcionario"]) || array_key_exists("funcionario", $context) ? $context["funcionario"] : (function () { throw new Twig_Error_Runtime('Variable "funcionario" does not exist.', 17, $this->source); })()), "dataDeNascimento", array()), "d-m-Y"), "html", null, true);
        echo "</td>
                    </tr>
                    <tr>
                        <th>Data de entrada</th>
                        <td>";
        // line 21
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["funcionario"]) || array_key_exists("funcionario", $context) ? $context["funcionario"] : (function () { throw new Twig_Error_Runtime('Variable "funcionario" does not exist.', 21, $this->source); })()), "dataDeEntrada", array()), "d-m-Y"), "html", null, true);
        echo "</td>
                    </tr>
                    <tr>
                        <th>Tempo na empresa</th>
                        <td>";
        // line 25
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["funcionario"]) || array_key_exists("funcionario", $context) ? $context["funcionario"] : (function () { throw new Twig_Error_Runtime('Variable "funcionario" does not exist.', 25, $this->source); })()), "tempoNaEmpresa", array()), "%Y anos, %m meses, %d dias"), "html", null, true);
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
        return "Funcionario/mostra.html.twig";
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
            Hover Rows
        </div>
        <!-- /.panel-heading -->
        <div class=\"panel-body\">
            <div class=\"table-responsive\">
                <table class=\"table table-hover\">
                    <tr>
                        <th>Nome</th>
                        <td>{{ funcionario.nome }}</td>
                    </tr>
                    <tr>
                        <th>Data de Nascimento</th>
                        <td>{{ funcionario.dataDeNascimento|date(\"d-m-Y\") }}</td>
                    </tr>
                    <tr>
                        <th>Data de entrada</th>
                        <td>{{ funcionario.dataDeEntrada|date(\"d-m-Y\") }}</td>
                    </tr>
                    <tr>
                        <th>Tempo na empresa</th>
                        <td>{{ funcionario.tempoNaEmpresa|date(\"%Y anos, %m meses, %d dias\") }}</td>
                    </tr>
                </table>
            </div>
            <!-- /.table-responsive -->
        </div>
        <!-- /.panel-body -->
    </div>
{% endblock %}", "Funcionario/mostra.html.twig", "/Users/gordo/Desktop/Maestro/tiktok/templates/Funcionario/mostra.html.twig");
    }
}
