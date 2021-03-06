<?php

/* base.html.twig */
class __TwigTemplate_4b7432e3e7c8c28b5fa81dab3d268adf705f7de39f70c7bf32f86c8dc40af174 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <meta name=\"description\" content=\"\">
    <meta name=\"author\" content=\"\">
    <title>Tik Tok</title>
    <!-- Bootstrap Core CSS -->
    <link href=\"/vendor/bootstrap/css/bootstrap.min.css\" rel=\"stylesheet\">
    <!-- MetisMenu CSS -->
    <link href=\"/vendor/metisMenu/metisMenu.min.css\" rel=\"stylesheet\">
    <!-- Custom CSS -->
    <link href=\"/dist/css/sb-admin-2.css\" rel=\"stylesheet\">
    <!-- Custom Fonts -->
    <link href=\"/vendor/font-awesome/css/font-awesome.min.css\" rel=\"stylesheet\" type=\"text/css\">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src=\"https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js\"></script>
    <script src=\"https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js\"></script>
    <![endif]-->
    ";
        // line 24
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 25
        echo "</head>
<body>
<div id=\"wrapper\">
    <!-- Navigation -->
    <nav class=\"navbar navbar-default navbar-static-top\" role=\"navigation\" style=\"margin-bottom: 0\">
        <div class=\"navbar-header\">
            <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\".navbar-collapse\">
                <span class=\"sr-only\">Toggle navigation</span>
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
            </button>
            <a class=\"navbar-brand\" href=\"/\">Tik Tok</a>
        </div>
        <!-- /.navbar-top-links -->
        <div class=\"navbar-default sidebar\" role=\"navigation\">
            <div class=\"sidebar-nav navbar-collapse\">
                <ul class=\"nav\" id=\"side-menu\">
                    <li class=\"sidebar-search\">
                        <div class=\"input-group custom-search-form\">
                            <input type=\"text\" class=\"form-control\" placeholder=\"Busca...\">
                            <span class=\"input-group-btn\">
                                    <button class=\"btn btn-default\" type=\"button\">
                                        <i class=\"fa fa-search\"></i>
                                    </button>
                                </span>
                        </div>
                        <!-- /input-group -->
                    </li>
                    <li>
                        <a href=\"#\"><i class=\"fa fa-briefcase fa-fw\"></i> Funcionario<span class=\"fa arrow\"></span></a>
                        <ul class=\"nav nav-second-level\">
                            <li><a href=\"/funcionario/lista\">Lista</a></li>
                            <li>
                                <a href=\"/funcionario/novo\">Novo</a>
                            </li>
                        </ul>
                        <!-- /.nav-second-level -->
                    </li>
                    <li>
                        <a href=\"#\"><i class=\"fa fa-bar-chart-o fa-fw\"></i> Projeto<span class=\"fa arrow\"></span></a>
                        <ul class=\"nav nav-second-level\">
                            <li>
                                <a href=\"/projeto/lista\">Lista</a>
                            </li>
                            <li>
                                <a href=\"/projeto/novo\">Novo</a>
                            </li>
                        </ul>
                        <!-- /.nav-second-level -->
                    </li>
                    <li>
                        <a href=\"#\"><i class=\"fa fa-clock-o fa-fw\"></i> Hora Lançada<span class=\"fa arrow\"></span></a>
                        <ul class=\"nav nav-second-level\">
                            <li>
                                <a href=\"/horaLancada/lista\">Lista</a>
                            </li>
                            <li>
                                <a href=\"/horaLancada/novo\">Novo</a>
                            </li>
                        </ul>
                        <!-- /.nav-second-level -->
                    </li>
                    <li>
                        <a href=\"#\"><i class=\"fa fa-clock-o fa-fw\"></i> Usuario<span class=\"fa arrow\"></span></a>
                        <ul class=\"nav nav-second-level\">
                            <li>
                                <a href=\"/usuario/lista\">Lista</a>
                            </li>
                            <li>
                                <a href=\"/usuario/novo\">Novo</a>
                            </li>
                        </ul>
                        <!-- /.nav-second-level -->
                    </li>
                </ul>
            </div>
            <!-- /.sidebar-collapse -->
        </div>
        <div id=\"page-wrapper\">
            ";
        // line 105
        $this->displayBlock('body', $context, $blocks);
        // line 106
        echo "        </div>
        <!-- /.navbar-static-side -->
    </nav>
    <!-- /#page-wrapper -->
</div>
<!-- /#wrapper -->
<!-- jQuery -->
<script src=\"/vendor/jquery/jquery.min.js\"></script>
<!-- Bootstrap Core JavaScript -->
<script src=\"/vendor/bootstrap/js/bootstrap.min.js\"></script>
<!-- Metis Menu Plugin JavaScript -->
<script src=\"/vendor/metisMenu/metisMenu.min.js\"></script>
<!-- Custom Theme JavaScript -->
<script src=\"/dist/js/sb-admin-2.js\"></script>
";
        // line 120
        $this->displayBlock('javascripts', $context, $blocks);
        // line 121
        echo "</body>
</html>
";
    }

    // line 24
    public function block_stylesheets($context, array $blocks = array())
    {
    }

    // line 105
    public function block_body($context, array $blocks = array())
    {
    }

    // line 120
    public function block_javascripts($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  171 => 120,  166 => 105,  161 => 24,  155 => 121,  153 => 120,  137 => 106,  135 => 105,  53 => 25,  51 => 24,  26 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "base.html.twig", "/Users/gordo/Desktop/Maestro/tiktok/templates/base.html.twig");
    }
}
