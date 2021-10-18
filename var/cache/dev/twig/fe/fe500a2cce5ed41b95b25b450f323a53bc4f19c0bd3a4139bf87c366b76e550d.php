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

/* front/index.html.twig */
class __TwigTemplate_a7a5096f841188a5cb25cdfe5f4c43165a390c11f48004c52c92f30b71cf20ce extends Template
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
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/index.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
  <head>
    <meta http-equiv=\"Content-Type\" content=\"text/html; charset=UTF-8\">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
\t<link rel=\"icon\" href=\"images/favicon.ico\" type=\"image/ico\" />

    <title>";
        // line 11
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
    ";
        // line 12
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 18
        echo "  </head>

  <body>
    <div>
    
<!-- Header Start --> 

<header class=\"navigation\">
\t
\t<nav class=\"navbar navbar-expand-lg  \" id=\"navbar\" >
\t\t<div class=\"container\">
\t\t  <a class=\"navbar-brand\" href=\"\">
\t\t  \tMega<span>kit.</span>
\t\t  </a>

\t\t  <button class=\"navbar-toggler collapsed\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarsExample09\" aria-controls=\"navbarsExample09\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
\t\t\t<span class=\"fa fa-bars\"></span>
\t\t  </button>
\t  
\t\t  <div class=\"collapse navbar-collapse text-center\" id=\"navbarsExample09\">
\t\t\t<ul class=\"navbar-nav ml-auto\">
\t\t\t  <li class=\"nav-item active\">
\t\t\t\t<a class=\"nav-link size-space\" href=\"\">Besoin d'aide?</a>
\t\t\t  </li>
\t\t\t   <li class=\"nav-item size-space\"><a class=\"nav-link\" href=\"\">Nos chambres</a></li>
\t\t\t   <li class=\"nav-item size-space\"><a class=\"nav-link\" href=\"\">FR / EN</a></li>
\t\t\t   
\t\t\t   <li class=\"nav-item\"><a class=\"nav-link\" href=\"\">Se connecter</a></li>
\t\t\t</ul>

\t
\t\t  </div>
\t\t</div>
\t</nav>
</header>

<!-- Header Close --> 


<!-- Section Testimonial End -->
<section class=\"  \">
\t<div class=\"\">
\t\t<img src=\"../web/img/chambre.png\" style=\"width:100%;height:440px;\">
\t</div>
</section>

<section class=\"mt-70 position-relative\" style=\"margin-top:-110px;\">
\t<div class=\"size-border\" style=\"margin-left:250px;margin-right:250px;background-color:white;border-radius:10px;padding-top:40px;padding-bottom:30px;padding-left:90px;\">
\t    <div class=\"row\">
\t\t    <div class=\"col-md-8\">
                <div class=\"row\">
                    <div class=\"col-md-4\">
                        <div style=\"position:relative;overflow:hidden;border-radius:3px;margin-bottom:10px;margin-right:18px;\">
                            <span style=\"color:#004D8A;font-size:16px;font-weight:bold;padding:15px;\">ARRIVÉE</span>
                            <div style=\"padding:15px;margin-top:5px;background-color:#f4f4f4;font-size:10px;margin-bottom:-20px;border-radius:10px;\">
                            <div style=\"margin-bottom:-13px;\">SAMEDI</div>
                            <span style=\"font-size:50px;color:#370274;font-weight:bold;\">17</span>
                            <span style=\"font-size:11px;\">AVR 2021</span>
                            </div>
                        </div>
                    </div>

                    <div class=\"col-md-4\">
                        <div style=\"position:relative;overflow:hidden;border-radius:3px;margin-bottom:10px;margin-left:13px;margin-right:6px;\">
                            <span style=\"color:#004D8A;font-size:16px;font-weight:bold;padding:15px;\">DEPART</span>
                            <div style=\"padding:15px;margin-top:5px;background-color:#f4f4f4;font-size:10px;margin-bottom:-20px;border-radius:10px;\">
                                <div style=\"margin-bottom:-13px;\">DIMANCHE</div>
                                <span style=\"font-size:50px;color:#370274;font-weight:bold;\">18</span>
                                <span style=\"font-size:11px;margin-top:10px;\">AVR. 2021</span>
                            </div>
                        </div>
                    </div>

                    <div class=\"col-md-4\">
                        <div style=\"position:relative;overflow:hidden;border-radius:3px;margin-bottom:10px;margin-left:18px;\">
                                <span style=\"color:#004D8A;font-size:16px;font-weight:bold;padding:15px;\">INVITÉS</span>
                            <div style=\"padding:15px;margin-top:5px;background-color:#f4f4f4;font-size:10px;margin-bottom:-20px;border-radius:10px;\">
                                    <div style=\"margin-bottom:-13px;font-weight:bold;\"><span>ADULTES</span><span style=\"margin-left:20px;\">ENFANTS</span></div>
                                    <div class=\"row\">
                                            <div class=\"col-md-12\">
                                                <div style=\"margin-top:20px;margin-bottom:20px;\">
                                                <span class=\"btn\" style=\"background-color:#370274;color:white;font-weight:bold;\">2</span>
                                                <span class=\"btn\" style=\"margin-left:43px;background-color:#370274;color:white;font-weight:bold;\">1</span>
                                                </div>
                                            </div>
                                    </div>
                            </div>
                        </div>
                    </div>
  
                </div>
            </div>
            <div class=\"col-md-4\">
                <div class=\"row\">
                        <div style=\"margin-top:72px;margin-left:20px;\">
                            <span class=\"btn btn-lg\" style=\"background-color:#370274;color:white;font-size:16px;font-weight:bold;padding-top:10px;padding-bottom:10px;\">VOIR DISPONIBILITE</span>
                        </div>
                </div>
            </div>
                
        </div>
    </div>

</section>


  <div class=\"\">
  <div class=\"col-md-12\">
  <div style=\"margin-left:140px;margin-right:140px;margin-top:60px;margin-bottom:80px;\">

  <div class=\"row\">

  <div class=\"col-md-9\">
  <div style=\"padding:10px;margin-right:140px;\">
  <p style=\"font-size:50px;\">
  <span style=\"color:#c4bfbf;\">A propos de</span><br>
  <span>NovHotel Royal Suites</span>
  </p>
  <p>Mensarum enim voragines et varias voluptatum inlecebras, ne longius progrediar, praete rmitto illuc prae
  transiturus quod quidam per ampla spatia urbis subversasque silices sine periculi metu properantes equos prae
  velut publicos signatis quod dicitur calceis agitant, familiarium agmina tamquam praedatorios globos post 
  terga trahentes ne Sannione quidem, ut ait comicus, domi relicto. quos imitatae matronae complures opertis 
  capitibus et basternis per latera civitatis cuncta discurrunt.ampla spatia urbis subversasque silices sine 
  periculi metu properantes equos prae
  velut publicos signatis quod dicitur calceis agitant, familiarium agmina tamquam praedatorios globos post 
  terga trahentes ne Sannione quidem, ut ait comicus, domi relicto. 
  </p>
  </div>
  </div>

  <div class=\"col-md-3\">
  <div style=\"margin-top:60px;margin-left:-20px;\">
  <img src=\"../web/img/img_1.png\" style=\"width:100%;height:380px;\" alt=\"\">
  </div>
  </div>

  </div>

<div class=\"row\">
<div class=\"col-md-12\">
<div style=\"font-size:50px;padding:10px;margin-top:120px;\">
  <span>Nos suites</span>
  </div>
  </div>
  </div>
<div style=\"padding:10px;margin-top:50px;\">
  <div class=\"row\">
         <div class=\"col-md-4\">
\t\t\t<div class=\"size-border\" style=\"position:relative;border-radius:10px;margin-bottom:10px;\">
\t\t\t\t\t<span class=\"btn btn-success btn-sm\" style=\"position:absolute;top:10px;left:10px;background-color:#8ac501;border:1px solid transparent;\"><i class=\"fa fa-home\"></i></span>
\t\t\t\t\t<img src=\"../web/img/img_2.png\" style=\"width:100%;height:170px;\">
\t\t\t\t  
                        <div class=\"\" style=\"padding:20px;\">
                                <div style=\"margin-bottom:-13px;color:grey;\"><span>ASSINIE, Ivory Cost</span><span style=\"margin-left:80px;color:#004D8A;\">Luxury Villa</span></div>
                        </div>\t
\t\t\t       
                </div>

  </div>
</div>
</div>
  </div>
  </div>
  </div>

  </div>
   </body>
</html>
  ";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 11
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

    // line 12
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 13
        echo "    <!-- Bootstrap -->
    <link href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("web/css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("web/css/custum.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("web/css/styles.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "front/index.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  281 => 16,  277 => 15,  273 => 14,  270 => 13,  260 => 12,  241 => 11,  63 => 18,  61 => 12,  57 => 11,  45 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
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
    <link href=\"{{ asset('web/css/custum.css') }}\" rel=\"stylesheet\">
    <link href=\"{{ asset('web/css/styles.css') }}\" rel=\"stylesheet\">
    {% endblock %}
  </head>

  <body>
    <div>
    
<!-- Header Start --> 

<header class=\"navigation\">
\t
\t<nav class=\"navbar navbar-expand-lg  \" id=\"navbar\" >
\t\t<div class=\"container\">
\t\t  <a class=\"navbar-brand\" href=\"\">
\t\t  \tMega<span>kit.</span>
\t\t  </a>

\t\t  <button class=\"navbar-toggler collapsed\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarsExample09\" aria-controls=\"navbarsExample09\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
\t\t\t<span class=\"fa fa-bars\"></span>
\t\t  </button>
\t  
\t\t  <div class=\"collapse navbar-collapse text-center\" id=\"navbarsExample09\">
\t\t\t<ul class=\"navbar-nav ml-auto\">
\t\t\t  <li class=\"nav-item active\">
\t\t\t\t<a class=\"nav-link size-space\" href=\"\">Besoin d'aide?</a>
\t\t\t  </li>
\t\t\t   <li class=\"nav-item size-space\"><a class=\"nav-link\" href=\"\">Nos chambres</a></li>
\t\t\t   <li class=\"nav-item size-space\"><a class=\"nav-link\" href=\"\">FR / EN</a></li>
\t\t\t   
\t\t\t   <li class=\"nav-item\"><a class=\"nav-link\" href=\"\">Se connecter</a></li>
\t\t\t</ul>

\t
\t\t  </div>
\t\t</div>
\t</nav>
</header>

<!-- Header Close --> 


<!-- Section Testimonial End -->
<section class=\"  \">
\t<div class=\"\">
\t\t<img src=\"../web/img/chambre.png\" style=\"width:100%;height:440px;\">
\t</div>
</section>

<section class=\"mt-70 position-relative\" style=\"margin-top:-110px;\">
\t<div class=\"size-border\" style=\"margin-left:250px;margin-right:250px;background-color:white;border-radius:10px;padding-top:40px;padding-bottom:30px;padding-left:90px;\">
\t    <div class=\"row\">
\t\t    <div class=\"col-md-8\">
                <div class=\"row\">
                    <div class=\"col-md-4\">
                        <div style=\"position:relative;overflow:hidden;border-radius:3px;margin-bottom:10px;margin-right:18px;\">
                            <span style=\"color:#004D8A;font-size:16px;font-weight:bold;padding:15px;\">ARRIVÉE</span>
                            <div style=\"padding:15px;margin-top:5px;background-color:#f4f4f4;font-size:10px;margin-bottom:-20px;border-radius:10px;\">
                            <div style=\"margin-bottom:-13px;\">SAMEDI</div>
                            <span style=\"font-size:50px;color:#370274;font-weight:bold;\">17</span>
                            <span style=\"font-size:11px;\">AVR 2021</span>
                            </div>
                        </div>
                    </div>

                    <div class=\"col-md-4\">
                        <div style=\"position:relative;overflow:hidden;border-radius:3px;margin-bottom:10px;margin-left:13px;margin-right:6px;\">
                            <span style=\"color:#004D8A;font-size:16px;font-weight:bold;padding:15px;\">DEPART</span>
                            <div style=\"padding:15px;margin-top:5px;background-color:#f4f4f4;font-size:10px;margin-bottom:-20px;border-radius:10px;\">
                                <div style=\"margin-bottom:-13px;\">DIMANCHE</div>
                                <span style=\"font-size:50px;color:#370274;font-weight:bold;\">18</span>
                                <span style=\"font-size:11px;margin-top:10px;\">AVR. 2021</span>
                            </div>
                        </div>
                    </div>

                    <div class=\"col-md-4\">
                        <div style=\"position:relative;overflow:hidden;border-radius:3px;margin-bottom:10px;margin-left:18px;\">
                                <span style=\"color:#004D8A;font-size:16px;font-weight:bold;padding:15px;\">INVITÉS</span>
                            <div style=\"padding:15px;margin-top:5px;background-color:#f4f4f4;font-size:10px;margin-bottom:-20px;border-radius:10px;\">
                                    <div style=\"margin-bottom:-13px;font-weight:bold;\"><span>ADULTES</span><span style=\"margin-left:20px;\">ENFANTS</span></div>
                                    <div class=\"row\">
                                            <div class=\"col-md-12\">
                                                <div style=\"margin-top:20px;margin-bottom:20px;\">
                                                <span class=\"btn\" style=\"background-color:#370274;color:white;font-weight:bold;\">2</span>
                                                <span class=\"btn\" style=\"margin-left:43px;background-color:#370274;color:white;font-weight:bold;\">1</span>
                                                </div>
                                            </div>
                                    </div>
                            </div>
                        </div>
                    </div>
  
                </div>
            </div>
            <div class=\"col-md-4\">
                <div class=\"row\">
                        <div style=\"margin-top:72px;margin-left:20px;\">
                            <span class=\"btn btn-lg\" style=\"background-color:#370274;color:white;font-size:16px;font-weight:bold;padding-top:10px;padding-bottom:10px;\">VOIR DISPONIBILITE</span>
                        </div>
                </div>
            </div>
                
        </div>
    </div>

</section>


  <div class=\"\">
  <div class=\"col-md-12\">
  <div style=\"margin-left:140px;margin-right:140px;margin-top:60px;margin-bottom:80px;\">

  <div class=\"row\">

  <div class=\"col-md-9\">
  <div style=\"padding:10px;margin-right:140px;\">
  <p style=\"font-size:50px;\">
  <span style=\"color:#c4bfbf;\">A propos de</span><br>
  <span>NovHotel Royal Suites</span>
  </p>
  <p>Mensarum enim voragines et varias voluptatum inlecebras, ne longius progrediar, praete rmitto illuc prae
  transiturus quod quidam per ampla spatia urbis subversasque silices sine periculi metu properantes equos prae
  velut publicos signatis quod dicitur calceis agitant, familiarium agmina tamquam praedatorios globos post 
  terga trahentes ne Sannione quidem, ut ait comicus, domi relicto. quos imitatae matronae complures opertis 
  capitibus et basternis per latera civitatis cuncta discurrunt.ampla spatia urbis subversasque silices sine 
  periculi metu properantes equos prae
  velut publicos signatis quod dicitur calceis agitant, familiarium agmina tamquam praedatorios globos post 
  terga trahentes ne Sannione quidem, ut ait comicus, domi relicto. 
  </p>
  </div>
  </div>

  <div class=\"col-md-3\">
  <div style=\"margin-top:60px;margin-left:-20px;\">
  <img src=\"../web/img/img_1.png\" style=\"width:100%;height:380px;\" alt=\"\">
  </div>
  </div>

  </div>

<div class=\"row\">
<div class=\"col-md-12\">
<div style=\"font-size:50px;padding:10px;margin-top:120px;\">
  <span>Nos suites</span>
  </div>
  </div>
  </div>
<div style=\"padding:10px;margin-top:50px;\">
  <div class=\"row\">
         <div class=\"col-md-4\">
\t\t\t<div class=\"size-border\" style=\"position:relative;border-radius:10px;margin-bottom:10px;\">
\t\t\t\t\t<span class=\"btn btn-success btn-sm\" style=\"position:absolute;top:10px;left:10px;background-color:#8ac501;border:1px solid transparent;\"><i class=\"fa fa-home\"></i></span>
\t\t\t\t\t<img src=\"../web/img/img_2.png\" style=\"width:100%;height:170px;\">
\t\t\t\t  
                        <div class=\"\" style=\"padding:20px;\">
                                <div style=\"margin-bottom:-13px;color:grey;\"><span>ASSINIE, Ivory Cost</span><span style=\"margin-left:80px;color:#004D8A;\">Luxury Villa</span></div>
                        </div>\t
\t\t\t       
                </div>

  </div>
</div>
</div>
  </div>
  </div>
  </div>

  </div>
   </body>
</html>
  ", "front/index.html.twig", "/Users/angendri/Sites/Flackbook/templates/front/index.html.twig");
    }
}
