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

/* gestor_tienda/nuevoArticulo.html.twig */
class __TwigTemplate_4f65e37a14995c8eb32e638ac6446798e1e7282e8fa5c3f57b959f75d9c58dfc extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
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
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "gestor_tienda/nuevoArticulo.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "gestor_tienda/nuevoArticulo.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "gestor_tienda/nuevoArticulo.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
\t<div class=\"container\">
\t\t<div class=\"row justify-content-center\">
\t\t\t<div
\t\t\t\tclass=\"col-2 contenedor2\">
\t\t\t\t";
        // line 15
        echo "\t\t\t\t<form enctype=\"multipart/form-data\" action=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_procesa_nuevo_articulo");
        echo "\" method=\"POST\">
\t\t\t\t\t<h2>Añadir nuevo regalo</h2>
\t\t\t\t\t<h3>Nombre:
\t\t\t\t\t</h3>
\t\t\t\t\t<input type=\"text\" id=\"nombre\" name=\"nombre\">
\t\t\t\t\t<h3>Descripción:</h3>
\t\t\t\t\t<textarea id=\"descripcion\" name=\"descripcion\"></textarea>
\t\t\t\t\t<h3>Precio Compra:</h3>
\t\t\t\t\t<input type=\"text\" id=\"precio_compra\" name=\"precio_compra\" onkeypress=\"return (event.charCode >= 48 && event.charCode <= 57)\">
\t\t\t\t\t<h3>Precio Base:</h3>
\t\t\t\t\t<input type=\"text\" id=\"precio_base\" name=\"precio_base\" onkeypress=\"return (event.charCode >= 48 && event.charCode <= 57)\">
\t\t\t\t\t<h3>Stock:</h3>
\t\t\t\t\t<input type=\"text\" id=\"stock\" name=\"stock\" onkeypress=\"return (event.charCode >= 48 && event.charCode <= 57)\">
\t\t\t\t\t<h3>IVA:</h3>
\t\t\t\t\t<select id=\"iva\" name=\"iva\">
\t\t\t\t\t\t<option value=\"4\">4%</option>
\t\t\t\t\t\t<option value=\"10\">10%</option>
\t\t\t\t\t\t<option value=\"21\">21%</option>
\t\t\t\t\t</select>
\t\t\t\t\t<h3>Foto:</h3>
\t\t\t\t\t<div>
\t\t\t\t\t\t<input type=\"file\" class=\"form-control\" id=\"image\" name=\"image\" multiple accept=\"image/*\">
\t\t\t\t\t</div>
\t\t\t\t\t";
        // line 38
        if ((isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 38, $this->source); })())) {
            // line 39
            echo "\t\t\t\t\t\t<div class=\"error_registrer\">";
            echo twig_escape_filter($this->env, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 39, $this->source); })()), "html", null, true);
            echo "</div>
\t\t\t\t\t";
        }
        // line 41
        echo "\t\t\t\t\t<button id=\"boton\" type=\"submit\">Añadir</button>
\t\t\t\t</form>
\t\t\t</div>
\t\t</div>
\t</div>


";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "gestor_tienda/nuevoArticulo.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  110 => 41,  104 => 39,  102 => 38,  75 => 15,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block body %}

\t<div class=\"container\">
\t\t<div class=\"row justify-content-center\">
\t\t\t<div
\t\t\t\tclass=\"col-2 contenedor2\">
\t\t\t\t{# {{form_start(form, {'label_attr': {'enctype': 'multipart/form-data' }} )}}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{{form_widget(form)}}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{{form_end(form)}}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{% if error %}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"error_registrer\">{{error}}</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{% endif %} #}
\t\t\t\t<form enctype=\"multipart/form-data\" action=\"{{ path('app_procesa_nuevo_articulo') }}\" method=\"POST\">
\t\t\t\t\t<h2>Añadir nuevo regalo</h2>
\t\t\t\t\t<h3>Nombre:
\t\t\t\t\t</h3>
\t\t\t\t\t<input type=\"text\" id=\"nombre\" name=\"nombre\">
\t\t\t\t\t<h3>Descripción:</h3>
\t\t\t\t\t<textarea id=\"descripcion\" name=\"descripcion\"></textarea>
\t\t\t\t\t<h3>Precio Compra:</h3>
\t\t\t\t\t<input type=\"text\" id=\"precio_compra\" name=\"precio_compra\" onkeypress=\"return (event.charCode >= 48 && event.charCode <= 57)\">
\t\t\t\t\t<h3>Precio Base:</h3>
\t\t\t\t\t<input type=\"text\" id=\"precio_base\" name=\"precio_base\" onkeypress=\"return (event.charCode >= 48 && event.charCode <= 57)\">
\t\t\t\t\t<h3>Stock:</h3>
\t\t\t\t\t<input type=\"text\" id=\"stock\" name=\"stock\" onkeypress=\"return (event.charCode >= 48 && event.charCode <= 57)\">
\t\t\t\t\t<h3>IVA:</h3>
\t\t\t\t\t<select id=\"iva\" name=\"iva\">
\t\t\t\t\t\t<option value=\"4\">4%</option>
\t\t\t\t\t\t<option value=\"10\">10%</option>
\t\t\t\t\t\t<option value=\"21\">21%</option>
\t\t\t\t\t</select>
\t\t\t\t\t<h3>Foto:</h3>
\t\t\t\t\t<div>
\t\t\t\t\t\t<input type=\"file\" class=\"form-control\" id=\"image\" name=\"image\" multiple accept=\"image/*\">
\t\t\t\t\t</div>
\t\t\t\t\t{% if error %}
\t\t\t\t\t\t<div class=\"error_registrer\">{{error}}</div>
\t\t\t\t\t{% endif %}
\t\t\t\t\t<button id=\"boton\" type=\"submit\">Añadir</button>
\t\t\t\t</form>
\t\t\t</div>
\t\t</div>
\t</div>


{% endblock %}
", "gestor_tienda/nuevoArticulo.html.twig", "/opt/lampp/htdocs/GestorTienda/templates/gestor_tienda/nuevoArticulo.html.twig");
    }
}
