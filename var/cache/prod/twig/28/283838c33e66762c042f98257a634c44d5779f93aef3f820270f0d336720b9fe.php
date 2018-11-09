<?php

/* Funcionario/novo.html.twig */
class __TwigTemplate_1e726fd3f3912ffda63aef46ec3f99423c6725bbcc200c9f9e985ff2972a659c extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "Funcionario/novo.html.twig", 1);
        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
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
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 3
        echo "    <style>
        h1 {
            font-size: 50px !important;
        }
    </style>
";
    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        // line 10
        echo "    <div class=\"row\">
        <div class=\"col-lg-12\">
            <h1 class=\"page-header\">Funcionário</h1>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->
    <div class=\"row\">
        <div class=\"col-lg-12\">
            <div class=\"panel panel-default\">
                <div class=\"panel-heading\">
                    Novo
                </div>
                <div class=\"panel-body\">
                    <div class=\"row\">
                        <div class=\"col-lg-6\">
                            <form role=\"form\" action=\"/funcionario/novo\" method=\"POST\">
                                <div class=\"form-group\">
                                    <label>Nome</label>
                                    <input class=\"form-control\" name=\"nome\" type=\"text\"
                                           placeholder=\"Digite o nome do funcionario\" required>
                                </div>
                                <div class=\"form-group\">
                                    <label>Data de Nascimento</label>
                                    <input class=\"form-control\" name=\"dataDeNascimento\" required type=\"date\">
                                </div>
                                <button type=\"submit\" class=\"btn btn-default\">Criar</button>
                            </form>
                        </div>
                        <!-- /.col-lg-6 (nested) -->
                    </div>
                    <!-- /.row (nested) -->
                </div>
                <!-- /.panel-body -->
            </div>
            <!-- /.panel -->
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->
";
    }

    public function getTemplateName()
    {
        return "Funcionario/novo.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  48 => 10,  45 => 9,  36 => 3,  33 => 2,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "Funcionario/novo.html.twig", "/Users/gordo/Desktop/Maestro/tiktok/templates/Funcionario/novo.html.twig");
    }
}
