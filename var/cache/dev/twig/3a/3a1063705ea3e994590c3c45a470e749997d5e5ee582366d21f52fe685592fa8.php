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

/* gestor_tienda/articulos.html.twig */
class __TwigTemplate_ffb6442eb34a6086c7a559be71dd2514086e71477824573632309fd4ab7f3041 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "gestor_tienda/articulos.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "gestor_tienda/articulos.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "gestor_tienda/articulos.html.twig", 1);
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
        echo "<style>
\t.example-wrapper {
\t\tmargin: 1em auto;
\t\tmax-width: 800px;
\t\twidth: 95%;
\t\tfont: 18px / 1.5 sans-serif;
\t}

\t.example-wrapper code {
\t\tbackground: #F5F5F5;
\t\tpadding: 2px 6px;
\t}
</style>
<div class=\"modal fade\" id=\"staticBackdrop\" data-bs-backdrop=\"static\" data-bs-keyboard=\"false\" tabindex=\"-1\"
\taria-labelledby=\"staticBackdropLabel\" aria-hidden=\"true\">
\t<div class=\"modal-dialog modal-dialog-centered\">
\t\t<div class=\"modal-content\">
\t\t\t<div class=\"modal-header\">
\t\t\t\t<h5 class=\"modal-title\" id=\"staticBackdropLabel\">Añadir Articulo</h5>
\t\t\t\t<button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
\t\t\t</div>
\t\t\t<div class=\"modal-body\">
\t\t\t\t<p id='tituloModal'></p>
\t\t\t\t<img id='imgModal' width='100px'>
\t\t\t\t<p hidden id='idModal'></p>
\t\t\t\t<input type=\"text\" id=\"cantidadModal\" onkeypress=\"return (event.charCode >= 48 && event.charCode <= 57)\"
\t\t\t\t\tvalue='1'>
\t\t\t</div>
\t\t\t<div class=\"modal-footer\">
\t\t\t\t<button type=\"button\" class=\"btn btn-secondary\" data-bs-dismiss=\"modal\">Cancelar</button>
\t\t\t\t<button type=\"button\" class=\"btn btn-primary\" id='añadirCarrito'>Añadir al Carrito</button>
\t\t\t</div>
\t\t</div>
\t</div>
</div>
";
        // line 39
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["articulos"]) || array_key_exists("articulos", $context) ? $context["articulos"] : (function () { throw new RuntimeError('Variable "articulos" does not exist.', 39, $this->source); })()));
        foreach ($context['_seq'] as $context["key"] => $context["articulo"]) {
            // line 40
            echo "<div class='articulo' id='articulo-";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["articulo"], "id", [], "any", false, false, false, 40), "html", null, true);
            echo "'>
\t<p class='nombre-";
            // line 41
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["articulo"], "id", [], "any", false, false, false, 41), "html", null, true);
            echo "'>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["articulo"], "nombre", [], "any", false, false, false, 41), "html", null, true);
            echo "</p>
\t<img src=\"data:image/png;base64,";
            // line 42
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["images"]) || array_key_exists("images", $context) ? $context["images"] : (function () { throw new RuntimeError('Variable "images" does not exist.', 42, $this->source); })()), $context["key"], [], "array", false, false, false, 42), "html", null, true);
            echo "\" class='img-";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["articulo"], "id", [], "any", false, false, false, 42), "html", null, true);
            echo "' />
</div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['articulo'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 45
        echo "<button type=\"button\" class=\"btn btn-primary\" id='procesarCompra'>Procesar compra</button>
<script>

\tcarrito = [];
\tcontador = 0;

\tarticulos = document.getElementsByClassName('articulo');

\tfor (i = 0; i < articulos.length; i++) {
\t\tarticulo = articulos[i];
\t\tselector = '#' + articulo.id;
\t\tid = articulo.id.split('-')[1];
\t\t\$(selector).attr(\"onclick\", \"pulsado(\" + id + \")\");
\t}

\tfunction pulsado(id) {

\t\tclaseNombre = '.nombre-' + id;
\t\tclaseImg = '.img-' + id;
\t\tnombre = \$(claseNombre);
\t\timg = \$(claseImg);

\t\t\$('#tituloModal').html(nombre.html());
\t\t\$('#imgModal').attr('src', img.attr('src'));
\t\t\$('#cantidadModal').val(1);
\t\t\$('#idModal').html(id);
\t\t\$('#staticBackdrop').modal('show');
\t\t\$('#añadirCarrito').attr(\"onclick\", \"añadirCarrito(\" + id + \")\");

\t}

\tfunction añadirCarrito(id) {

\t\tif (carrito.length == 0) {
\t\t\tcarrito.push([
\t\t\t\tparseInt(\$('#idModal').html()),
\t\t\t\tparseInt(\$('#cantidadModal').val())
\t\t\t]);
\t\t}

\t\tfor (i = 0; i < carrito.length; i++) {
\t\t\tif (carrito[i].indexOf(id) != -1 && contador != 0) {
\t\t\t\tcarrito[i][1] = parseInt(carrito[i][1]) + parseInt(\$('#cantidadModal').val());
\t\t\t\tconsole.log('si');
\t\t\t\tbreak;
\t\t\t} else if (i == carrito.length - 1 && contador != 0) {
\t\t\t\tcarrito.push([
\t\t\t\t\tparseInt(\$('#idModal').html()),
\t\t\t\t\tparseInt(\$('#cantidadModal').val())
\t\t\t\t]);
\t\t\t\tbreak;
\t\t\t}
\t\t\tcontador++;
\t\t}

\t\t\$('#staticBackdrop').modal('hide');

\t}

\t\$('#procesarCompra').on('click', function () {

\t\t\$.ajax({
\t\t\ttype: \"POST\",
\t\t\turl: \"";
        // line 108
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_procesar_compra");
        echo "\",
\t\t\tdata: {'datos':carrito},
\t\t\tsuccess: function(result){
\t\t\t\tconsole.log(result);
\t\t\t},
\t\t\terror: function(result) {
\t\t\t\tconsole.log(\"error: \", result);
            }
});

\t});
</script>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "gestor_tienda/articulos.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  196 => 108,  131 => 45,  120 => 42,  114 => 41,  109 => 40,  105 => 39,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block body %}
<style>
\t.example-wrapper {
\t\tmargin: 1em auto;
\t\tmax-width: 800px;
\t\twidth: 95%;
\t\tfont: 18px / 1.5 sans-serif;
\t}

\t.example-wrapper code {
\t\tbackground: #F5F5F5;
\t\tpadding: 2px 6px;
\t}
</style>
<div class=\"modal fade\" id=\"staticBackdrop\" data-bs-backdrop=\"static\" data-bs-keyboard=\"false\" tabindex=\"-1\"
\taria-labelledby=\"staticBackdropLabel\" aria-hidden=\"true\">
\t<div class=\"modal-dialog modal-dialog-centered\">
\t\t<div class=\"modal-content\">
\t\t\t<div class=\"modal-header\">
\t\t\t\t<h5 class=\"modal-title\" id=\"staticBackdropLabel\">Añadir Articulo</h5>
\t\t\t\t<button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
\t\t\t</div>
\t\t\t<div class=\"modal-body\">
\t\t\t\t<p id='tituloModal'></p>
\t\t\t\t<img id='imgModal' width='100px'>
\t\t\t\t<p hidden id='idModal'></p>
\t\t\t\t<input type=\"text\" id=\"cantidadModal\" onkeypress=\"return (event.charCode >= 48 && event.charCode <= 57)\"
\t\t\t\t\tvalue='1'>
\t\t\t</div>
\t\t\t<div class=\"modal-footer\">
\t\t\t\t<button type=\"button\" class=\"btn btn-secondary\" data-bs-dismiss=\"modal\">Cancelar</button>
\t\t\t\t<button type=\"button\" class=\"btn btn-primary\" id='añadirCarrito'>Añadir al Carrito</button>
\t\t\t</div>
\t\t</div>
\t</div>
</div>
{% for key ,articulo in articulos %}
<div class='articulo' id='articulo-{{articulo.id}}'>
\t<p class='nombre-{{articulo.id}}'>{{articulo.nombre}}</p>
\t<img src=\"data:image/png;base64,{{ images[key] }}\" class='img-{{articulo.id}}' />
</div>
{% endfor %}
<button type=\"button\" class=\"btn btn-primary\" id='procesarCompra'>Procesar compra</button>
<script>

\tcarrito = [];
\tcontador = 0;

\tarticulos = document.getElementsByClassName('articulo');

\tfor (i = 0; i < articulos.length; i++) {
\t\tarticulo = articulos[i];
\t\tselector = '#' + articulo.id;
\t\tid = articulo.id.split('-')[1];
\t\t\$(selector).attr(\"onclick\", \"pulsado(\" + id + \")\");
\t}

\tfunction pulsado(id) {

\t\tclaseNombre = '.nombre-' + id;
\t\tclaseImg = '.img-' + id;
\t\tnombre = \$(claseNombre);
\t\timg = \$(claseImg);

\t\t\$('#tituloModal').html(nombre.html());
\t\t\$('#imgModal').attr('src', img.attr('src'));
\t\t\$('#cantidadModal').val(1);
\t\t\$('#idModal').html(id);
\t\t\$('#staticBackdrop').modal('show');
\t\t\$('#añadirCarrito').attr(\"onclick\", \"añadirCarrito(\" + id + \")\");

\t}

\tfunction añadirCarrito(id) {

\t\tif (carrito.length == 0) {
\t\t\tcarrito.push([
\t\t\t\tparseInt(\$('#idModal').html()),
\t\t\t\tparseInt(\$('#cantidadModal').val())
\t\t\t]);
\t\t}

\t\tfor (i = 0; i < carrito.length; i++) {
\t\t\tif (carrito[i].indexOf(id) != -1 && contador != 0) {
\t\t\t\tcarrito[i][1] = parseInt(carrito[i][1]) + parseInt(\$('#cantidadModal').val());
\t\t\t\tconsole.log('si');
\t\t\t\tbreak;
\t\t\t} else if (i == carrito.length - 1 && contador != 0) {
\t\t\t\tcarrito.push([
\t\t\t\t\tparseInt(\$('#idModal').html()),
\t\t\t\t\tparseInt(\$('#cantidadModal').val())
\t\t\t\t]);
\t\t\t\tbreak;
\t\t\t}
\t\t\tcontador++;
\t\t}

\t\t\$('#staticBackdrop').modal('hide');

\t}

\t\$('#procesarCompra').on('click', function () {

\t\t\$.ajax({
\t\t\ttype: \"POST\",
\t\t\turl: \"{{ path('app_procesar_compra') }}\",
\t\t\tdata: {'datos':carrito},
\t\t\tsuccess: function(result){
\t\t\t\tconsole.log(result);
\t\t\t},
\t\t\terror: function(result) {
\t\t\t\tconsole.log(\"error: \", result);
            }
});

\t});
</script>

{% endblock %}", "gestor_tienda/articulos.html.twig", "/opt/lampp/htdocs/GestorTienda/templates/gestor_tienda/articulos.html.twig");
    }
}
