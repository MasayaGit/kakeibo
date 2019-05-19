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

/* show_cost/result.html.twig */
class __TwigTemplate_1260e1a4984484fa606a189e9a4c7c804bcf21c09f12c9d8b9ba69f5e7f232f5 extends \Twig\Template
{
    private $source;

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'page' => [$this, 'block_page'],
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "show_cost/result.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "show_cost/result.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "show_cost/result.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_page($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page"));

        echo twig_escape_filter($this->env, (isset($context["title"]) || array_key_exists("title", $context) ? $context["title"] : (function () { throw new RuntimeError('Variable "title" does not exist.', 3, $this->source); })()), "html", null, true);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 4
    public function block_title($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo twig_escape_filter($this->env, (isset($context["title"]) || array_key_exists("title", $context) ? $context["title"] : (function () { throw new RuntimeError('Variable "title" does not exist.', 4, $this->source); })()), "html", null, true);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 6
    public function block_body($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 7
        echo "
    <nav class=\"navbar navbar-expand-lg navbar-light\"style=\"background-color:#CED8F6;\">
        <div class=\"navbar-nav\" id=\"navbarSupportedContent\">
            <div class=\"container\">
                <div class=\"row\">
                    <a class=\"nav-link\" href=/><div class=\"col-xs-12 col-sm-6 col-md-1 header\">Logout</div></a>
                </div>
            </div>
        </div>
    </nav>

    ";
        // line 18
        $context["sumFoodPrice"] = 0;
        // line 19
        echo "    ";
        $context["sumFunPrice"] = 0;
        // line 20
        echo "    ";
        $context["sumTrafficPrice"] = 0;
        // line 21
        echo "

    <table class=\"table\">
        <thead>
            <tr>
                <th>costname</th>
                <th>price</th>
                <th>category</th>
            </tr>
        </thead>

        <tbody>
        ";
        // line 33
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["cost"]) || array_key_exists("cost", $context) ? $context["cost"] : (function () { throw new RuntimeError('Variable "cost" does not exist.', 33, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 34
            echo "            <tr>
                <th>";
            // line 35
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "costname", [], "any", false, false, false, 35), "html", null, true);
            echo "</th>
                <th>";
            // line 36
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "price", [], "any", false, false, false, 36), "html", null, true);
            echo "</th>
                <th>";
            // line 37
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "category", [], "any", false, false, false, 37), "html", null, true);
            echo "</th>
            </tr>
            ";
            // line 39
            if ((twig_get_attribute($this->env, $this->source, $context["item"], "category", [], "any", false, false, false, 39) == "食費")) {
                // line 40
                echo "                ";
                $context["sumFoodPrice"] = ((isset($context["sumFoodPrice"]) || array_key_exists("sumFoodPrice", $context) ? $context["sumFoodPrice"] : (function () { throw new RuntimeError('Variable "sumFoodPrice" does not exist.', 40, $this->source); })()) + twig_get_attribute($this->env, $this->source, $context["item"], "price", [], "any", false, false, false, 40));
                // line 41
                echo "            ";
            }
            // line 42
            echo "
            ";
            // line 43
            if ((twig_get_attribute($this->env, $this->source, $context["item"], "category", [], "any", false, false, false, 43) == "娯楽")) {
                // line 44
                echo "                ";
                $context["sumFunPrice"] = ((isset($context["sumFunPrice"]) || array_key_exists("sumFunPrice", $context) ? $context["sumFunPrice"] : (function () { throw new RuntimeError('Variable "sumFunPrice" does not exist.', 44, $this->source); })()) + twig_get_attribute($this->env, $this->source, $context["item"], "price", [], "any", false, false, false, 44));
                // line 45
                echo "            ";
            }
            // line 46
            echo "
            ";
            // line 47
            if ((twig_get_attribute($this->env, $this->source, $context["item"], "category", [], "any", false, false, false, 47) == "交通費")) {
                // line 48
                echo "                ";
                $context["sumTrafficPrice"] = ((isset($context["sumTrafficPrice"]) || array_key_exists("sumTrafficPrice", $context) ? $context["sumTrafficPrice"] : (function () { throw new RuntimeError('Variable "sumTrafficPrice" does not exist.', 48, $this->source); })()) + twig_get_attribute($this->env, $this->source, $context["item"], "price", [], "any", false, false, false, 48));
                // line 49
                echo "            ";
            }
            // line 50
            echo "
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 52
        echo "        </tbody>

    </table>

    <canvas id=\"myPieChart\"></canvas>
    <!-- CDN -->
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.bundle.js\"></script>

    <script>
      var ctx = document.getElementById(\"myPieChart\");
      var myPieChart = new Chart(ctx, {
        type: 'doughnut',
        data: {
          labels: [\"食費\", \"娯楽\", \"交通費\"],
          datasets: [{
              backgroundColor: [
                  \"#BB5179\",
                  \"#FAFF67\",
                  \"#58A27C\"
              ],
              data: [";
        // line 72
        echo twig_escape_filter($this->env, (isset($context["sumFoodPrice"]) || array_key_exists("sumFoodPrice", $context) ? $context["sumFoodPrice"] : (function () { throw new RuntimeError('Variable "sumFoodPrice" does not exist.', 72, $this->source); })()), "html", null, true);
        echo ", ";
        echo twig_escape_filter($this->env, (isset($context["sumFunPrice"]) || array_key_exists("sumFunPrice", $context) ? $context["sumFunPrice"] : (function () { throw new RuntimeError('Variable "sumFunPrice" does not exist.', 72, $this->source); })()), "html", null, true);
        echo ",";
        echo twig_escape_filter($this->env, (isset($context["sumTrafficPrice"]) || array_key_exists("sumTrafficPrice", $context) ? $context["sumTrafficPrice"] : (function () { throw new RuntimeError('Variable "sumTrafficPrice" does not exist.', 72, $this->source); })()), "html", null, true);
        echo "
              ]
          }]
        },
        options: {
          title: {
            display: true,
            text: 'カテゴリー別 割合'
          }
        }
      });
      </script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "show_cost/result.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  217 => 72,  195 => 52,  188 => 50,  185 => 49,  182 => 48,  180 => 47,  177 => 46,  174 => 45,  171 => 44,  169 => 43,  166 => 42,  163 => 41,  160 => 40,  158 => 39,  153 => 37,  149 => 36,  145 => 35,  142 => 34,  138 => 33,  124 => 21,  121 => 20,  118 => 19,  116 => 18,  103 => 7,  94 => 6,  76 => 4,  58 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block page %}{{title}}{% endblock %}
{% block title %}{{title}}{% endblock %}

{% block body %}

    <nav class=\"navbar navbar-expand-lg navbar-light\"style=\"background-color:#CED8F6;\">
        <div class=\"navbar-nav\" id=\"navbarSupportedContent\">
            <div class=\"container\">
                <div class=\"row\">
                    <a class=\"nav-link\" href=/><div class=\"col-xs-12 col-sm-6 col-md-1 header\">Logout</div></a>
                </div>
            </div>
        </div>
    </nav>

    {% set sumFoodPrice = 0 %}
    {% set sumFunPrice = 0 %}
    {% set sumTrafficPrice = 0 %}


    <table class=\"table\">
        <thead>
            <tr>
                <th>costname</th>
                <th>price</th>
                <th>category</th>
            </tr>
        </thead>

        <tbody>
        {% for item in cost %}
            <tr>
                <th>{{item.costname}}</th>
                <th>{{item.price}}</th>
                <th>{{item.category}}</th>
            </tr>
            {% if item.category == '食費' %}
                {% set sumFoodPrice = sumFoodPrice  + item.price %}
            {% endif %}

            {% if item.category == '娯楽' %}
                {% set sumFunPrice = sumFunPrice  + item.price %}
            {% endif %}

            {% if item.category == '交通費' %}
                {% set sumTrafficPrice = sumTrafficPrice  + item.price %}
            {% endif %}

        {% endfor %}
        </tbody>

    </table>

    <canvas id=\"myPieChart\"></canvas>
    <!-- CDN -->
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.bundle.js\"></script>

    <script>
      var ctx = document.getElementById(\"myPieChart\");
      var myPieChart = new Chart(ctx, {
        type: 'doughnut',
        data: {
          labels: [\"食費\", \"娯楽\", \"交通費\"],
          datasets: [{
              backgroundColor: [
                  \"#BB5179\",
                  \"#FAFF67\",
                  \"#58A27C\"
              ],
              data: [{{sumFoodPrice}}, {{ sumFunPrice }},{{ sumTrafficPrice }}
              ]
          }]
        },
        options: {
          title: {
            display: true,
            text: 'カテゴリー別 割合'
          }
        }
      });
      </script>
{% endblock %}
", "show_cost/result.html.twig", "/Users/info/PhpstormProjects/kakeibo/templates/show_cost/result.html.twig");
    }
}
