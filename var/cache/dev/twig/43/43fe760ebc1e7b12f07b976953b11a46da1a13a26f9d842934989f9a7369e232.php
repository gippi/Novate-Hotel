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

/* admin/index.html.twig */
class __TwigTemplate_357e30a45918d2c47073dc4368ba2f59add8d05fc7d428a45c36f6a0b2d03f67 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'content_wrapper' => [$this, 'block_content_wrapper'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "admin/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Hello CoreController!";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_content_wrapper($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content_wrapper"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content_wrapper"));

        // line 6
        echo "

        

        <!-- page content -->
        <div class=\"right_col\" role=\"main\">
        
        
          <!-- top tiles -->
          <div class=\"row\" style=\"display: inline-block;\" >
          <div class=\"tile_count\">
            <div class=\"col-md-2 col-sm-4  tile_stats_count\">
              <span class=\"count_top\"><i class=\"fa fa-user\"></i> Total Users</span>
              <div class=\"count\">2500</div>
              <span class=\"count_bottom\"><i class=\"green\">4% </i> From last Week</span>
            </div>
            <div class=\"col-md-2 col-sm-4  tile_stats_count\">
              <span class=\"count_top\"><i class=\"fa fa-clock-o\"></i> Average Time</span>
              <div class=\"count\">123.50</div>
              <span class=\"count_bottom\"><i class=\"green\"><i class=\"fa fa-sort-asc\"></i>3% </i> From last Week</span>
            </div>
            <div class=\"col-md-2 col-sm-4  tile_stats_count\">
              <span class=\"count_top\"><i class=\"fa fa-user\"></i> Total Males</span>
              <div class=\"count green\">2,500</div>
              <span class=\"count_bottom\"><i class=\"green\"><i class=\"fa fa-sort-asc\"></i>34% </i> From last Week</span>
            </div>
            <div class=\"col-md-2 col-sm-4  tile_stats_count\">
              <span class=\"count_top\"><i class=\"fa fa-user\"></i> Total Females</span>
              <div class=\"count\">4,567</div>
              <span class=\"count_bottom\"><i class=\"red\"><i class=\"fa fa-sort-desc\"></i>12% </i> From last Week</span>
            </div>
            <div class=\"col-md-2 col-sm-4  tile_stats_count\">
              <span class=\"count_top\"><i class=\"fa fa-user\"></i> Total Collections</span>
              <div class=\"count\">2,315</div>
              <span class=\"count_bottom\"><i class=\"green\"><i class=\"fa fa-sort-asc\"></i>34% </i> From last Week</span>
            </div>
            <div class=\"col-md-2 col-sm-4  tile_stats_count\">
              <span class=\"count_top\"><i class=\"fa fa-user\"></i> Total Connections</span>
              <div class=\"count\">7,325</div>
              <span class=\"count_bottom\"><i class=\"green\"><i class=\"fa fa-sort-asc\"></i>34% </i> From last Week</span>
            </div>
          </div>
        </div>
          <!-- /top tiles -->

          <div class=\"row\">
            <div class=\"col-md-12 col-sm-12 \">
              <div class=\"dashboard_graph\">

                
                <div class=\"row x_title\">
                  <div class=\"col-md-12\">
                    ok
                  </div>
                </div>

                <div class=\"col-md-9 col-sm-9 \">
                  <div id=\"chart_plot_01\" class=\"demo-placeholder\"></div>
                </div>
                <div class=\"col-md-3 col-sm-3  bg-white\">
                  <div class=\"x_title\">
                    <h2>Top Campaign Performance</h2>
                    <div class=\"clearfix\"></div>
                  </div>

                  <div class=\"col-md-12 col-sm-12 \">
                    <div>
                      <p>Facebook Campaign</p>
                      <div class=\"\">
                        <div class=\"progress progress_sm\" style=\"width: 76%;\">
                          <div class=\"progress-bar bg-green\" role=\"progressbar\" data-transitiongoal=\"80\"></div>
                        </div>
                      </div>
                    </div>
                   
                    <div>
                      <p>Bill boards</p>
                      <div class=\"\">
                        <div class=\"progress progress_sm\" style=\"width: 76%;\">
                          <div class=\"progress-bar bg-green\" role=\"progressbar\" data-transitiongoal=\"50\"></div>
                        </div>
                      </div>
                    </div>
                  </div>

                </div>

                <div class=\"clearfix\"></div>
              </div>
            </div>

          </div>
          <br />
          
          
          
          
        <!-- /page content -->
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "admin/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Hello CoreController!{% endblock %}

{% block content_wrapper %}


        

        <!-- page content -->
        <div class=\"right_col\" role=\"main\">
        
        
          <!-- top tiles -->
          <div class=\"row\" style=\"display: inline-block;\" >
          <div class=\"tile_count\">
            <div class=\"col-md-2 col-sm-4  tile_stats_count\">
              <span class=\"count_top\"><i class=\"fa fa-user\"></i> Total Users</span>
              <div class=\"count\">2500</div>
              <span class=\"count_bottom\"><i class=\"green\">4% </i> From last Week</span>
            </div>
            <div class=\"col-md-2 col-sm-4  tile_stats_count\">
              <span class=\"count_top\"><i class=\"fa fa-clock-o\"></i> Average Time</span>
              <div class=\"count\">123.50</div>
              <span class=\"count_bottom\"><i class=\"green\"><i class=\"fa fa-sort-asc\"></i>3% </i> From last Week</span>
            </div>
            <div class=\"col-md-2 col-sm-4  tile_stats_count\">
              <span class=\"count_top\"><i class=\"fa fa-user\"></i> Total Males</span>
              <div class=\"count green\">2,500</div>
              <span class=\"count_bottom\"><i class=\"green\"><i class=\"fa fa-sort-asc\"></i>34% </i> From last Week</span>
            </div>
            <div class=\"col-md-2 col-sm-4  tile_stats_count\">
              <span class=\"count_top\"><i class=\"fa fa-user\"></i> Total Females</span>
              <div class=\"count\">4,567</div>
              <span class=\"count_bottom\"><i class=\"red\"><i class=\"fa fa-sort-desc\"></i>12% </i> From last Week</span>
            </div>
            <div class=\"col-md-2 col-sm-4  tile_stats_count\">
              <span class=\"count_top\"><i class=\"fa fa-user\"></i> Total Collections</span>
              <div class=\"count\">2,315</div>
              <span class=\"count_bottom\"><i class=\"green\"><i class=\"fa fa-sort-asc\"></i>34% </i> From last Week</span>
            </div>
            <div class=\"col-md-2 col-sm-4  tile_stats_count\">
              <span class=\"count_top\"><i class=\"fa fa-user\"></i> Total Connections</span>
              <div class=\"count\">7,325</div>
              <span class=\"count_bottom\"><i class=\"green\"><i class=\"fa fa-sort-asc\"></i>34% </i> From last Week</span>
            </div>
          </div>
        </div>
          <!-- /top tiles -->

          <div class=\"row\">
            <div class=\"col-md-12 col-sm-12 \">
              <div class=\"dashboard_graph\">

                
                <div class=\"row x_title\">
                  <div class=\"col-md-12\">
                    ok
                  </div>
                </div>

                <div class=\"col-md-9 col-sm-9 \">
                  <div id=\"chart_plot_01\" class=\"demo-placeholder\"></div>
                </div>
                <div class=\"col-md-3 col-sm-3  bg-white\">
                  <div class=\"x_title\">
                    <h2>Top Campaign Performance</h2>
                    <div class=\"clearfix\"></div>
                  </div>

                  <div class=\"col-md-12 col-sm-12 \">
                    <div>
                      <p>Facebook Campaign</p>
                      <div class=\"\">
                        <div class=\"progress progress_sm\" style=\"width: 76%;\">
                          <div class=\"progress-bar bg-green\" role=\"progressbar\" data-transitiongoal=\"80\"></div>
                        </div>
                      </div>
                    </div>
                   
                    <div>
                      <p>Bill boards</p>
                      <div class=\"\">
                        <div class=\"progress progress_sm\" style=\"width: 76%;\">
                          <div class=\"progress-bar bg-green\" role=\"progressbar\" data-transitiongoal=\"50\"></div>
                        </div>
                      </div>
                    </div>
                  </div>

                </div>

                <div class=\"clearfix\"></div>
              </div>
            </div>

          </div>
          <br />
          
          
          
          
        <!-- /page content -->
{% endblock %}
", "admin/index.html.twig", "/Users/angendri/Sites/Flackbook/templates/admin/index.html.twig");
    }
}
