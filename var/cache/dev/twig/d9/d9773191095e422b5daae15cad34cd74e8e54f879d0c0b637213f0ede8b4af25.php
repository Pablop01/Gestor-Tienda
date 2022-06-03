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
class __TwigTemplate_308633ab95f1fbd2672d02f536b4c39ce76c22219da9fb8d9492bc834c12b7c9 extends Template
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
        echo "<body class='fondoGris'>
\t<div class=\"container\">
\t\t<div class=\"row justify-content-center\">
\t\t\t<div class=\"col-4 mt-4 fondoBlanco bordesRedondos bordeAzul mb-4\">
\t\t\t\t<form enctype=\"multipart/form-data\" action=\"";
        // line 8
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_procesa_nuevo_articulo");
        echo "\" method=\"POST\">
\t\t\t\t\t<h2>Añadir nuevo articulo</h2>
\t\t\t\t\t<h3>Nombre:
\t\t\t\t\t</h3>
\t\t\t\t\t<input type=\"text\" id=\"nombre\" name=\"nombre\" required>
\t\t\t\t\t<h3>Descripción:</h3>
\t\t\t\t\t<textarea id=\"descripcion\" name=\"descripcion\" required></textarea>
\t\t\t\t\t<h3>Precio Compra:</h3>
\t\t\t\t\t<input type=\"text\" id=\"precio_compra\" name=\"precio_compra\" class='decimales' required>
\t\t\t\t\t<h3>Precio Base Venta:</h3>
\t\t\t\t\t<input type=\"text\" id=\"precio_base\" name=\"precio_base\" class='decimales' required>
\t\t\t\t\t<h3>IVA:</h3>
\t\t\t\t\t<select id=\"iva\" name=\"iva\">
\t\t\t\t\t\t<option value=\"4\">4%</option>
\t\t\t\t\t\t<option value=\"10\">10%</option>
\t\t\t\t\t\t<option value=\"21\">21%</option>
\t\t\t\t\t</select>
\t\t\t\t\t<h3>Stock:</h3>
\t\t\t\t\t<input type=\"text\" id=\"stock\" name=\"stock\" onkeypress=\"return (event.charCode >= 48 && event.charCode <= 57)\" required>
\t\t\t\t\t<h3>Foto:</h3>
\t\t\t\t\t<div>
\t\t\t\t\t\t<input type=\"file\" class=\"form-control\" id=\"image\" name=\"image\" multiple accept=\"image/*\" required>
\t\t\t\t\t</div>
\t\t\t\t\t";
        // line 31
        if ((isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 31, $this->source); })())) {
            // line 32
            echo "\t\t\t\t\t\t<div class=\"error_registrer text-center error\">";
            echo twig_escape_filter($this->env, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 32, $this->source); })()), "html", null, true);
            echo "</div>
\t\t\t\t\t";
        }
        // line 34
        echo "\t\t\t\t\t<div class='text-center'>
\t\t\t\t\t<button id=\"boton\" type=\"submit\" class='btn btn-primary mt-4 mb-4'>Añadir</button>
\t\t\t\t\t</div>
\t\t\t\t</form>
\t\t\t</div>
\t\t</div>
\t</div>
</body>
<script>
\$('.nav-nArticulo').addClass('active');
\$('.decimales').on('input', function () {
  this.value = this.value.replace(/[^0-9,.]/g, '').replace(/,/g, '.');
});
</script>
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
        return array (  108 => 34,  102 => 32,  100 => 31,  74 => 8,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block body %}
<body class='fondoGris'>
\t<div class=\"container\">
\t\t<div class=\"row justify-content-center\">
\t\t\t<div class=\"col-4 mt-4 fondoBlanco bordesRedondos bordeAzul mb-4\">
\t\t\t\t<form enctype=\"multipart/form-data\" action=\"{{ path('app_procesa_nuevo_articulo') }}\" method=\"POST\">
\t\t\t\t\t<h2>Añadir nuevo articulo</h2>
\t\t\t\t\t<h3>Nombre:
\t\t\t\t\t</h3>
\t\t\t\t\t<input type=\"text\" id=\"nombre\" name=\"nombre\" required>
\t\t\t\t\t<h3>Descripción:</h3>
\t\t\t\t\t<textarea id=\"descripcion\" name=\"descripcion\" required></textarea>
\t\t\t\t\t<h3>Precio Compra:</h3>
\t\t\t\t\t<input type=\"text\" id=\"precio_compra\" name=\"precio_compra\" class='decimales' required>
\t\t\t\t\t<h3>Precio Base Venta:</h3>
\t\t\t\t\t<input type=\"text\" id=\"precio_base\" name=\"precio_base\" class='decimales' required>
\t\t\t\t\t<h3>IVA:</h3>
\t\t\t\t\t<select id=\"iva\" name=\"iva\">
\t\t\t\t\t\t<option value=\"4\">4%</option>
\t\t\t\t\t\t<option value=\"10\">10%</option>
\t\t\t\t\t\t<option value=\"21\">21%</option>
\t\t\t\t\t</select>
\t\t\t\t\t<h3>Stock:</h3>
\t\t\t\t\t<input type=\"text\" id=\"stock\" name=\"stock\" onkeypress=\"return (event.charCode >= 48 && event.charCode <= 57)\" required>
\t\t\t\t\t<h3>Foto:</h3>
\t\t\t\t\t<div>
\t\t\t\t\t\t<input type=\"file\" class=\"form-control\" id=\"image\" name=\"image\" multiple accept=\"image/*\" required>
\t\t\t\t\t</div>
\t\t\t\t\t{% if error %}
\t\t\t\t\t\t<div class=\"error_registrer text-center error\">{{error}}</div>
\t\t\t\t\t{% endif %}
\t\t\t\t\t<div class='text-center'>
\t\t\t\t\t<button id=\"boton\" type=\"submit\" class='btn btn-primary mt-4 mb-4'>Añadir</button>
\t\t\t\t\t</div>
\t\t\t\t</form>
\t\t\t</div>
\t\t</div>
\t</div>
</body>
<script>
\$('.nav-nArticulo').addClass('active');
\$('.decimales').on('input', function () {
  this.value = this.value.replace(/[^0-9,.]/g, '').replace(/,/g, '.');
});
</script>
{% endblock %}
", "gestor_tienda/nuevoArticulo.html.twig", "/opt/lampp/htdocs/GestorTienda/templates/gestor_tienda/nuevoArticulo.html.twig");
    }
}
