<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* base.html.twig */
class __TwigTemplate_550d04d8a36e60aa285cee9dafa29cb14e1befa1381dc8ea2af031aaf7fb9dc0 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'content_wrapper' => [$this, 'block_content_wrapper'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "
<!DOCTYPE html>
<html lang=\"en\">
  <head>
    <meta http-equiv=\"Content-Type\" content=\"text/html; charset=UTF-8\">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
\t<link rel=\"icon\" href=\"images/favicon.ico\" type=\"image/ico\" />

    <title>";
        // line 12
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
    ";
        // line 13
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 23
        echo "  </head>

  <body class=\"nav-md\">
    <div class=\"container body\">
    ";
        // line 27
        $this->loadTemplate("base.html.twig", "base.html.twig", 27, "1265205465")->display($context);
        // line 28
        echo "    ";
        $this->loadTemplate("base.html.twig", "base.html.twig", 28, "1215221805")->display($context);
        // line 29
        echo "    ";
        $this->displayBlock('content_wrapper', $context, $blocks);
        // line 30
        echo "    </div>
    ";
        // line 31
        $this->loadTemplate("base.html.twig", "base.html.twig", 31, "917413180")->display($context);
        // line 32
        echo "
      </div>
    </div>
    ";
        // line 35
        $this->displayBlock('javascripts', $context, $blocks);
        // line 56
        echo "  </body>
</html>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 12
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 13
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 14
        echo "    <!-- Bootstrap -->
    <link href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("web/css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <!-- Font Awesome -->
    <link href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("web/css/font-awesome.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    
    <!-- Custom Theme Style -->
    <link href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("web/css/custom.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
     <link href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("web/css/styles.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 29
    public function block_content_wrapper($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content_wrapper"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content_wrapper"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 35
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 36
        echo "    <!-- jQuery -->
    <script src=\"";
        // line 37
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("web/js/jquery.min.js"), "html", null, true);
        echo "\"></script>
    <!-- Bootstrap -->
    <script src=\"";
        // line 39
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("web/js/bootstrap.bundle.min.js"), "html", null, true);
        echo "\"></script>
    <!-- FastClick -->
    <script src=\"";
        // line 41
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("web/js/fastclick.js"), "html", null, true);
        echo "\"></script>
    <!-- NProgress -->
    <!-- Chart.js -->
    <script src=\"";
        // line 44
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("web/js/Chart.min.js"), "html", null, true);
        echo "\"></script>
    <!-- gauge.js -->
    <script src=\"";
        // line 46
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("web/js/gauge.min.js"), "html", null, true);
        echo "\"></script>
    <!-- bootstrap-progressbar -->
    <script src=\"";
        // line 48
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("web/js/bootstrap-progressbar.min.js"), "html", null, true);
        echo "\"></script>
    <!-- bootstrap-daterangepicker -->
    <script src=\"";
        // line 50
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("web/js/moment.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 51
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("web/js/daterangepicker.js"), "html", null, true);
        echo "\"></script>

    <!-- Custom Theme Scripts -->
    <script src=\"";
        // line 54
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("web/js/custom.min.js"), "html", null, true);
        echo "\"></script>
\t";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  235 => 54,  229 => 51,  225 => 50,  220 => 48,  215 => 46,  210 => 44,  204 => 41,  199 => 39,  194 => 37,  191 => 36,  181 => 35,  163 => 29,  151 => 21,  147 => 20,  141 => 17,  136 => 15,  133 => 14,  123 => 13,  104 => 12,  92 => 56,  90 => 35,  85 => 32,  83 => 31,  80 => 30,  77 => 29,  74 => 28,  72 => 27,  66 => 23,  64 => 13,  60 => 12,  47 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("
<!DOCTYPE html>
<html lang=\"en\">
  <head>
    <meta http-equiv=\"Content-Type\" content=\"text/html; charset=UTF-8\">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
\t<link rel=\"icon\" href=\"images/favicon.ico\" type=\"image/ico\" />

    <title>{% block title %}Welcome!{% endblock %}</title>
    {% block stylesheets %}
    <!-- Bootstrap -->
    <link href=\"{{ asset('web/css/bootstrap.min.css') }}\" rel=\"stylesheet\">
    <!-- Font Awesome -->
    <link href=\"{{ asset('web/css/font-awesome.min.css') }}\" rel=\"stylesheet\">
    
    <!-- Custom Theme Style -->
    <link href=\"{{ asset('web/css/custom.min.css') }}\" rel=\"stylesheet\">
     <link href=\"{{ asset('web/css/styles.css') }}\" rel=\"stylesheet\">
    {% endblock %}
  </head>

  <body class=\"nav-md\">
    <div class=\"container body\">
    {% embed '/admin/main-sidebar.html.twig' %}{% endembed %}
    {% embed '/admin/header.html.twig' %}{% endembed %}
    {% block content_wrapper %}{% endblock %}
    </div>
    {% embed '/admin/footer.html.twig' %}{% endembed %}

      </div>
    </div>
    {% block javascripts %}
    <!-- jQuery -->
    <script src=\"{{ asset('web/js/jquery.min.js') }}\"></script>
    <!-- Bootstrap -->
    <script src=\"{{ asset('web/js/bootstrap.bundle.min.js') }}\"></script>
    <!-- FastClick -->
    <script src=\"{{ asset('web/js/fastclick.js') }}\"></script>
    <!-- NProgress -->
    <!-- Chart.js -->
    <script src=\"{{ asset('web/js/Chart.min.js') }}\"></script>
    <!-- gauge.js -->
    <script src=\"{{ asset('web/js/gauge.min.js') }}\"></script>
    <!-- bootstrap-progressbar -->
    <script src=\"{{ asset('web/js/bootstrap-progressbar.min.js') }}\"></script>
    <!-- bootstrap-daterangepicker -->
    <script src=\"{{ asset('web/js/moment.min.js') }}\"></script>
    <script src=\"{{ asset('web/js/daterangepicker.js') }}\"></script>

    <!-- Custom Theme Scripts -->
    <script src=\"{{ asset('web/js/custom.min.js') }}\"></script>
\t{% endblock %}
  </body>
</html>
", "base.html.twig", "/Users/angendri/Sites/Flackbook/templates/base.html.twig");
    }
}


/* base.html.twig */
class __TwigTemplate_550d04d8a36e60aa285cee9dafa29cb14e1befa1381dc8ea2af031aaf7fb9dc0___1265205465 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 27
        return "/admin/main-sidebar.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        $this->parent = $this->loadTemplate("/admin/main-sidebar.html.twig", "base.html.twig", 27);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  344 => 27,  235 => 54,  229 => 51,  225 => 50,  220 => 48,  215 => 46,  210 => 44,  204 => 41,  199 => 39,  194 => 37,  191 => 36,  181 => 35,  163 => 29,  151 => 21,  147 => 20,  141 => 17,  136 => 15,  133 => 14,  123 => 13,  104 => 12,  92 => 56,  90 => 35,  85 => 32,  83 => 31,  80 => 30,  77 => 29,  74 => 28,  72 => 27,  66 => 23,  64 => 13,  60 => 12,  47 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("
<!DOCTYPE html>
<html lang=\"en\">
  <head>
    <meta http-equiv=\"Content-Type\" content=\"text/html; charset=UTF-8\">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
\t<link rel=\"icon\" href=\"images/favicon.ico\" type=\"image/ico\" />

    <title>{% block title %}Welcome!{% endblock %}</title>
    {% block stylesheets %}
    <!-- Bootstrap -->
    <link href=\"{{ asset('web/css/bootstrap.min.css') }}\" rel=\"stylesheet\">
    <!-- Font Awesome -->
    <link href=\"{{ asset('web/css/font-awesome.min.css') }}\" rel=\"stylesheet\">
    
    <!-- Custom Theme Style -->
    <link href=\"{{ asset('web/css/custom.min.css') }}\" rel=\"stylesheet\">
     <link href=\"{{ asset('web/css/styles.css') }}\" rel=\"stylesheet\">
    {% endblock %}
  </head>

  <body class=\"nav-md\">
    <div class=\"container body\">
    {% embed '/admin/main-sidebar.html.twig' %}{% endembed %}
    {% embed '/admin/header.html.twig' %}{% endembed %}
    {% block content_wrapper %}{% endblock %}
    </div>
    {% embed '/admin/footer.html.twig' %}{% endembed %}

      </div>
    </div>
    {% block javascripts %}
    <!-- jQuery -->
    <script src=\"{{ asset('web/js/jquery.min.js') }}\"></script>
    <!-- Bootstrap -->
    <script src=\"{{ asset('web/js/bootstrap.bundle.min.js') }}\"></script>
    <!-- FastClick -->
    <script src=\"{{ asset('web/js/fastclick.js') }}\"></script>
    <!-- NProgress -->
    <!-- Chart.js -->
    <script src=\"{{ asset('web/js/Chart.min.js') }}\"></script>
    <!-- gauge.js -->
    <script src=\"{{ asset('web/js/gauge.min.js') }}\"></script>
    <!-- bootstrap-progressbar -->
    <script src=\"{{ asset('web/js/bootstrap-progressbar.min.js') }}\"></script>
    <!-- bootstrap-daterangepicker -->
    <script src=\"{{ asset('web/js/moment.min.js') }}\"></script>
    <script src=\"{{ asset('web/js/daterangepicker.js') }}\"></script>

    <!-- Custom Theme Scripts -->
    <script src=\"{{ asset('web/js/custom.min.js') }}\"></script>
\t{% endblock %}
  </body>
</html>
", "base.html.twig", "/Users/angendri/Sites/Flackbook/templates/base.html.twig");
    }
}


/* base.html.twig */
class __TwigTemplate_550d04d8a36e60aa285cee9dafa29cb14e1befa1381dc8ea2af031aaf7fb9dc0___1215221805 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 28
        return "/admin/header.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        $this->parent = $this->loadTemplate("/admin/header.html.twig", "base.html.twig", 28);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  464 => 28,  344 => 27,  235 => 54,  229 => 51,  225 => 50,  220 => 48,  215 => 46,  210 => 44,  204 => 41,  199 => 39,  194 => 37,  191 => 36,  181 => 35,  163 => 29,  151 => 21,  147 => 20,  141 => 17,  136 => 15,  133 => 14,  123 => 13,  104 => 12,  92 => 56,  90 => 35,  85 => 32,  83 => 31,  80 => 30,  77 => 29,  74 => 28,  72 => 27,  66 => 23,  64 => 13,  60 => 12,  47 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("
<!DOCTYPE html>
<html lang=\"en\">
  <head>
    <meta http-equiv=\"Content-Type\" content=\"text/html; charset=UTF-8\">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
\t<link rel=\"icon\" href=\"images/favicon.ico\" type=\"image/ico\" />

    <title>{% block title %}Welcome!{% endblock %}</title>
    {% block stylesheets %}
    <!-- Bootstrap -->
    <link href=\"{{ asset('web/css/bootstrap.min.css') }}\" rel=\"stylesheet\">
    <!-- Font Awesome -->
    <link href=\"{{ asset('web/css/font-awesome.min.css') }}\" rel=\"stylesheet\">
    
    <!-- Custom Theme Style -->
    <link href=\"{{ asset('web/css/custom.min.css') }}\" rel=\"stylesheet\">
     <link href=\"{{ asset('web/css/styles.css') }}\" rel=\"stylesheet\">
    {% endblock %}
  </head>

  <body class=\"nav-md\">
    <div class=\"container body\">
    {% embed '/admin/main-sidebar.html.twig' %}{% endembed %}
    {% embed '/admin/header.html.twig' %}{% endembed %}
    {% block content_wrapper %}{% endblock %}
    </div>
    {% embed '/admin/footer.html.twig' %}{% endembed %}

      </div>
    </div>
    {% block javascripts %}
    <!-- jQuery -->
    <script src=\"{{ asset('web/js/jquery.min.js') }}\"></script>
    <!-- Bootstrap -->
    <script src=\"{{ asset('web/js/bootstrap.bundle.min.js') }}\"></script>
    <!-- FastClick -->
    <script src=\"{{ asset('web/js/fastclick.js') }}\"></script>
    <!-- NProgress -->
    <!-- Chart.js -->
    <script src=\"{{ asset('web/js/Chart.min.js') }}\"></script>
    <!-- gauge.js -->
    <script src=\"{{ asset('web/js/gauge.min.js') }}\"></script>
    <!-- bootstrap-progressbar -->
    <script src=\"{{ asset('web/js/bootstrap-progressbar.min.js') }}\"></script>
    <!-- bootstrap-daterangepicker -->
    <script src=\"{{ asset('web/js/moment.min.js') }}\"></script>
    <script src=\"{{ asset('web/js/daterangepicker.js') }}\"></script>

    <!-- Custom Theme Scripts -->
    <script src=\"{{ asset('web/js/custom.min.js') }}\"></script>
\t{% endblock %}
  </body>
</html>
", "base.html.twig", "/Users/angendri/Sites/Flackbook/templates/base.html.twig");
    }
}


/* base.html.twig */
class __TwigTemplate_550d04d8a36e60aa285cee9dafa29cb14e1befa1381dc8ea2af031aaf7fb9dc0___917413180 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 31
        return "/admin/footer.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        $this->parent = $this->loadTemplate("/admin/footer.html.twig", "base.html.twig", 31);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  584 => 31,  464 => 28,  344 => 27,  235 => 54,  229 => 51,  225 => 50,  220 => 48,  215 => 46,  210 => 44,  204 => 41,  199 => 39,  194 => 37,  191 => 36,  181 => 35,  163 => 29,  151 => 21,  147 => 20,  141 => 17,  136 => 15,  133 => 14,  123 => 13,  104 => 12,  92 => 56,  90 => 35,  85 => 32,  83 => 31,  80 => 30,  77 => 29,  74 => 28,  72 => 27,  66 => 23,  64 => 13,  60 => 12,  47 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("
<!DOCTYPE html>
<html lang=\"en\">
  <head>
    <meta http-equiv=\"Content-Type\" content=\"text/html; charset=UTF-8\">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
\t<link rel=\"icon\" href=\"images/favicon.ico\" type=\"image/ico\" />

    <title>{% block title %}Welcome!{% endblock %}</title>
    {% block stylesheets %}
    <!-- Bootstrap -->
    <link href=\"{{ asset('web/css/bootstrap.min.css') }}\" rel=\"stylesheet\">
    <!-- Font Awesome -->
    <link href=\"{{ asset('web/css/font-awesome.min.css') }}\" rel=\"stylesheet\">
    
    <!-- Custom Theme Style -->
    <link href=\"{{ asset('web/css/custom.min.css') }}\" rel=\"stylesheet\">
     <link href=\"{{ asset('web/css/styles.css') }}\" rel=\"stylesheet\">
    {% endblock %}
  </head>

  <body class=\"nav-md\">
    <div class=\"container body\">
    {% embed '/admin/main-sidebar.html.twig' %}{% endembed %}
    {% embed '/admin/header.html.twig' %}{% endembed %}
    {% block content_wrapper %}{% endblock %}
    </div>
    {% embed '/admin/footer.html.twig' %}{% endembed %}

      </div>
    </div>
    {% block javascripts %}
    <!-- jQuery -->
    <script src=\"{{ asset('web/js/jquery.min.js') }}\"></script>
    <!-- Bootstrap -->
    <script src=\"{{ asset('web/js/bootstrap.bundle.min.js') }}\"></script>
    <!-- FastClick -->
    <script src=\"{{ asset('web/js/fastclick.js') }}\"></script>
    <!-- NProgress -->
    <!-- Chart.js -->
    <script src=\"{{ asset('web/js/Chart.min.js') }}\"></script>
    <!-- gauge.js -->
    <script src=\"{{ asset('web/js/gauge.min.js') }}\"></script>
    <!-- bootstrap-progressbar -->
    <script src=\"{{ asset('web/js/bootstrap-progressbar.min.js') }}\"></script>
    <!-- bootstrap-daterangepicker -->
    <script src=\"{{ asset('web/js/moment.min.js') }}\"></script>
    <script src=\"{{ asset('web/js/daterangepicker.js') }}\"></script>

    <!-- Custom Theme Scripts -->
    <script src=\"{{ asset('web/js/custom.min.js') }}\"></script>
\t{% endblock %}
  </body>
</html>
", "base.html.twig", "/Users/angendri/Sites/Flackbook/templates/base.html.twig");
    }
}
