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

/* gestor_tienda/ticketDevuelto.html.twig */
class __TwigTemplate_9a894b0f20bf16ad00ef26f889b132cd8d17b448afe6a4fdf746b00e759c04d8 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "gestor_tienda/ticketDevuelto.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "gestor_tienda/ticketDevuelto.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "gestor_tienda/ticketDevuelto.html.twig", 1);
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
        echo "<style type=\"text/css\" media=\"print\">
\t@print {
\t\t@page :footer {
\t\t\tdisplay: none
\t\t}

\t\t@page :header {
\t\t\tdisplay: none
\t\t}
\t}
</style>
<div class='container'>

\t<div id='aImprimir'>
\t\t<h2 class='text-center mt-4'>VereComponentes</h2>
\t\t<p class='text-center'> Carrer d'Emilia Pardo Bazán, 46185 La Pobla de Vallbona, Valencia</p>
\t\t<p class='text-center'> Telf: 999-999-999</p>
\t\t";
        // line 21
        $context["total"] = 0;
        // line 22
        echo "\t\t<table class=\"table\">
\t\t\t<thead>
\t\t\t\t<tr>
\t\t\t\t\t<th scope=\"col\">#</th>
\t\t\t\t\t<th scope=\"col\">Articulo</th>
\t\t\t\t\t<th scope=\"col\">Cantidad</th>
\t\t\t\t\t<th scope=\"col\">Precio Unitario</th>
\t\t\t\t\t<th scope=\"col\">Precio</th>
\t\t\t\t</tr>
\t\t\t</thead>
\t\t\t<tbody>
\t\t\t\t<tr>
\t\t\t\t\t<th scope=\"row\">0</th>
\t\t\t\t\t<td>";
        // line 35
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["articulo"]) || array_key_exists("articulo", $context) ? $context["articulo"] : (function () { throw new RuntimeError('Variable "articulo" does not exist.', 35, $this->source); })()), "nombre", [], "any", false, false, false, 35), "html", null, true);
        echo "</td>
\t\t\t\t\t<td>";
        // line 36
        echo twig_escape_filter($this->env, (isset($context["cantidad"]) || array_key_exists("cantidad", $context) ? $context["cantidad"] : (function () { throw new RuntimeError('Variable "cantidad" does not exist.', 36, $this->source); })()), "html", null, true);
        echo "</td>
\t\t\t\t\t<td>";
        // line 37
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["articulo"]) || array_key_exists("articulo", $context) ? $context["articulo"] : (function () { throw new RuntimeError('Variable "articulo" does not exist.', 37, $this->source); })()), "precio", [], "any", false, false, false, 37), "html", null, true);
        echo "€</td>
\t\t\t\t\t<td>";
        // line 38
        echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, (isset($context["articulo"]) || array_key_exists("articulo", $context) ? $context["articulo"] : (function () { throw new RuntimeError('Variable "articulo" does not exist.', 38, $this->source); })()), "precio", [], "any", false, false, false, 38) * (isset($context["cantidad"]) || array_key_exists("cantidad", $context) ? $context["cantidad"] : (function () { throw new RuntimeError('Variable "cantidad" does not exist.', 38, $this->source); })())), "html", null, true);
        echo "€</td>
\t\t\t\t</tr>
\t\t\t\t";
        // line 40
        $context["total"] = ((isset($context["total"]) || array_key_exists("total", $context) ? $context["total"] : (function () { throw new RuntimeError('Variable "total" does not exist.', 40, $this->source); })()) + (twig_get_attribute($this->env, $this->source, (isset($context["articulo"]) || array_key_exists("articulo", $context) ? $context["articulo"] : (function () { throw new RuntimeError('Variable "articulo" does not exist.', 40, $this->source); })()), "precio", [], "any", false, false, false, 40) * (isset($context["cantidad"]) || array_key_exists("cantidad", $context) ? $context["cantidad"] : (function () { throw new RuntimeError('Variable "cantidad" does not exist.', 40, $this->source); })())));
        // line 41
        echo "\t\t\t</tbody>
\t\t</table>
\t\t<div class='row justify-content-right'>
\t\t\t<div class='col-12 text-end'>
\t\t\t\t<h4>Total</h4>
\t\t\t\t<p>";
        // line 46
        echo twig_escape_filter($this->env, (isset($context["total"]) || array_key_exists("total", $context) ? $context["total"] : (function () { throw new RuntimeError('Variable "total" does not exist.', 46, $this->source); })()), "html", null, true);
        echo "€</p>
\t\t\t\t<p class='text-center'>Devolución de Artículo</p>
\t\t\t</div>
\t\t</div>
\t</div>

\t<button type=\"button\" class=\"btn btn-primary mt-2 mb-4\" id='imprimir'><svg xmlns=\"http://www.w3.org/2000/svg\"
\t\t\twidth=\"16\" height=\"16\" fill=\"currentColor\" class=\"bi bi-printer\" viewBox=\"0 0 16 16\">

\t\t\t<path d=\"M2.5 8a.5.5 0 1 0 0-1 .5.5 0 0 0 0 1z\" />
\t\t\t<path
\t\t\t\td=\"M5 1a2 2 0 0 0-2 2v2H2a2 2 0 0 0-2 2v3a2 2 0 0 0 2 2h1v1a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2v-1h1a2 2 0 0 0 2-2V7a2 2 0 0 0-2-2h-1V3a2 2 0 0 0-2-2H5zM4 3a1 1 0 0 1 1-1h6a1 1 0 0 1 1 1v2H4V3zm1 5a2 2 0 0 0-2 2v1H2a1 1 0 0 1-1-1V7a1 1 0 0 1 1-1h12a1 1 0 0 1 1 1v3a1 1 0 0 1-1 1h-1v-1a2 2 0 0 0-2-2H5zm7 2v3a1 1 0 0 1-1 1H5a1 1 0 0 1-1-1v-3a1 1 0 0 1 1-1h6a1 1 0 0 1 1 1z\" />
\t\t</svg> Imprimir</button>
</div>
<script>
\tfunction imprimirElemento(elemento) {
\t\tvar ventana = window.open('', 'PRINT', 'height=400,width=600');
\t\tventana.document.write('<html><head><title>' + document.title + '</title>');
\t\tventana.document.write('<link rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css\" integrity=\"sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3\" crossorigin=\"anonymous\">')
\t\tventana.document.write('</head><body >');
\t\tventana.document.write(document.getElementById('aImprimir').innerHTML);
\t\tventana.document.write('</body></html>');
\t\tventana.document.close();
\t\tventana.focus();
\t\tventana.print();
\t\tventana.close();
\t\treturn true;
\t}

\t\$('#imprimir').on('click', function () {
\t\timprimirElemento('aImprimir');
\t})
</script>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "gestor_tienda/ticketDevuelto.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  130 => 46,  123 => 41,  121 => 40,  116 => 38,  112 => 37,  108 => 36,  104 => 35,  89 => 22,  87 => 21,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block body %}
<style type=\"text/css\" media=\"print\">
\t@print {
\t\t@page :footer {
\t\t\tdisplay: none
\t\t}

\t\t@page :header {
\t\t\tdisplay: none
\t\t}
\t}
</style>
<div class='container'>

\t<div id='aImprimir'>
\t\t<h2 class='text-center mt-4'>VereComponentes</h2>
\t\t<p class='text-center'> Carrer d'Emilia Pardo Bazán, 46185 La Pobla de Vallbona, Valencia</p>
\t\t<p class='text-center'> Telf: 999-999-999</p>
\t\t{% set total = 0 %}
\t\t<table class=\"table\">
\t\t\t<thead>
\t\t\t\t<tr>
\t\t\t\t\t<th scope=\"col\">#</th>
\t\t\t\t\t<th scope=\"col\">Articulo</th>
\t\t\t\t\t<th scope=\"col\">Cantidad</th>
\t\t\t\t\t<th scope=\"col\">Precio Unitario</th>
\t\t\t\t\t<th scope=\"col\">Precio</th>
\t\t\t\t</tr>
\t\t\t</thead>
\t\t\t<tbody>
\t\t\t\t<tr>
\t\t\t\t\t<th scope=\"row\">0</th>
\t\t\t\t\t<td>{{articulo.nombre}}</td>
\t\t\t\t\t<td>{{cantidad}}</td>
\t\t\t\t\t<td>{{articulo.precio}}€</td>
\t\t\t\t\t<td>{{articulo.precio * cantidad}}€</td>
\t\t\t\t</tr>
\t\t\t\t{% set total = total + (articulo.precio * cantidad) %}
\t\t\t</tbody>
\t\t</table>
\t\t<div class='row justify-content-right'>
\t\t\t<div class='col-12 text-end'>
\t\t\t\t<h4>Total</h4>
\t\t\t\t<p>{{total}}€</p>
\t\t\t\t<p class='text-center'>Devolución de Artículo</p>
\t\t\t</div>
\t\t</div>
\t</div>

\t<button type=\"button\" class=\"btn btn-primary mt-2 mb-4\" id='imprimir'><svg xmlns=\"http://www.w3.org/2000/svg\"
\t\t\twidth=\"16\" height=\"16\" fill=\"currentColor\" class=\"bi bi-printer\" viewBox=\"0 0 16 16\">

\t\t\t<path d=\"M2.5 8a.5.5 0 1 0 0-1 .5.5 0 0 0 0 1z\" />
\t\t\t<path
\t\t\t\td=\"M5 1a2 2 0 0 0-2 2v2H2a2 2 0 0 0-2 2v3a2 2 0 0 0 2 2h1v1a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2v-1h1a2 2 0 0 0 2-2V7a2 2 0 0 0-2-2h-1V3a2 2 0 0 0-2-2H5zM4 3a1 1 0 0 1 1-1h6a1 1 0 0 1 1 1v2H4V3zm1 5a2 2 0 0 0-2 2v1H2a1 1 0 0 1-1-1V7a1 1 0 0 1 1-1h12a1 1 0 0 1 1 1v3a1 1 0 0 1-1 1h-1v-1a2 2 0 0 0-2-2H5zm7 2v3a1 1 0 0 1-1 1H5a1 1 0 0 1-1-1v-3a1 1 0 0 1 1-1h6a1 1 0 0 1 1 1z\" />
\t\t</svg> Imprimir</button>
</div>
<script>
\tfunction imprimirElemento(elemento) {
\t\tvar ventana = window.open('', 'PRINT', 'height=400,width=600');
\t\tventana.document.write('<html><head><title>' + document.title + '</title>');
\t\tventana.document.write('<link rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css\" integrity=\"sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3\" crossorigin=\"anonymous\">')
\t\tventana.document.write('</head><body >');
\t\tventana.document.write(document.getElementById('aImprimir').innerHTML);
\t\tventana.document.write('</body></html>');
\t\tventana.document.close();
\t\tventana.focus();
\t\tventana.print();
\t\tventana.close();
\t\treturn true;
\t}

\t\$('#imprimir').on('click', function () {
\t\timprimirElemento('aImprimir');
\t})
</script>

{% endblock %}", "gestor_tienda/ticketDevuelto.html.twig", "/opt/lampp/htdocs/GestorTienda/templates/gestor_tienda/ticketDevuelto.html.twig");
    }
}
