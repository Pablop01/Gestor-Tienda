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

/* gestor_tienda/stock.html.twig */
class __TwigTemplate_7737ac5ff3008da21ef8d776543a5c36c61fbfb2cd0c2374e6f64225aaf04603 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "gestor_tienda/stock.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "gestor_tienda/stock.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "gestor_tienda/stock.html.twig", 1);
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
<div class=\"modal fade\" id=\"staticBackdrop\" data-bs-backdrop=\"static\" data-bs-keyboard=\"false\" tabindex=\"-1\"
\taria-labelledby=\"staticBackdropLabel\" aria-hidden=\"true\">
\t<div class=\"modal-dialog modal-dialog-centered\">
\t\t<div class=\"modal-content\">
\t\t\t<div class=\"modal-header\">
\t\t\t\t<h5 class=\"modal-title\" id=\"staticBackdropLabel\">Añadir Stock</h5>
\t\t\t\t<button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
\t\t\t</div>
\t\t\t<div class=\"modal-body\">
\t\t\t\t<p id='tituloModal'></p>
\t\t\t\t<img id='imgModal' width='100px'>
\t\t\t\t<p hidden id='idModal'></p>
\t\t\t\t<input type=\"number\" id=\"cantidadModal\"
\t\t\t\t\tonkeypress=\"return (event.charCode >= 48 && event.charCode <= 57)\" value='1' min='0'>
\t\t\t\t<p hidden id='errorStock'></p>

\t\t\t</div>
\t\t\t<div class=\"modal-footer\">
\t\t\t\t<button type=\"button\" class=\"btn btn-secondary\" data-bs-dismiss=\"modal\">Cancelar</button>
\t\t\t\t<button type=\"button\" class=\"btn btn-primary\" id='añadirCarrito'>Añadir Stock</button>
\t\t\t</div>
\t\t</div>
\t</div>
</div>
<div class=\"container\">

<div class=\"input-group flex-nowrap mt-4 mb-4\">
  <span class=\"input-group-text\" id=\"addon-wrapping\"><svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" fill=\"currentColor\" class=\"bi bi-search\" viewBox=\"0 0 16 16\">
  <path d=\"M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z\"/>
</svg></span>
  <input type=\"text\" class=\"form-control buscador\" placeholder=\"Buscar Articulo\" aria-label=\"Username\" aria-describedby=\"addon-wrapping\">
</div>
<div class=\"row justify-content-center\">
";
        // line 38
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["articulos"]) || array_key_exists("articulos", $context) ? $context["articulos"] : (function () { throw new RuntimeError('Variable "articulos" does not exist.', 38, $this->source); })()));
        foreach ($context['_seq'] as $context["key"] => $context["articulo"]) {
            // line 39
            echo "<div class='articulo col-md-3 fondoBlanco m-3 text-center bordesRedondos' id='articulo-";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["articulo"], "id", [], "any", false, false, false, 39), "html", null, true);
            echo "'>
<p>

<svg xmlns=\"http://www.w3.org/2000/svg\" width=\"32\" height=\"32\" fill=\"currentColor\" class=\"bi bi-plus mt-4\" viewBox=\"0 0 16 16\">
  <path d=\"M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z\"/>
</svg>
</p>
\t<h3 class='nombre-";
            // line 46
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["articulo"], "id", [], "any", false, false, false, 46), "html", null, true);
            echo " mt-3'>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["articulo"], "nombre", [], "any", false, false, false, 46), "html", null, true);
            echo "</h3>
\t<img src=\"data:image/png;base64,";
            // line 47
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["images"]) || array_key_exists("images", $context) ? $context["images"] : (function () { throw new RuntimeError('Variable "images" does not exist.', 47, $this->source); })()), $context["key"], [], "array", false, false, false, 47), "html", null, true);
            echo "\" class='img-";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["articulo"], "id", [], "any", false, false, false, 47), "html", null, true);
            echo " img-fluid mt-0'/>
\t<p class='stock-";
            // line 48
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["articulo"], "id", [], "any", false, false, false, 48), "html", null, true);
            echo "'>
\t\t";
            // line 49
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["articulo"], "stock", [], "any", false, false, false, 49), "html", null, true);
            echo " Unidades Disponibles</p>
</div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['articulo'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 52
        echo "</div>
</body>
<script>
\t\$('.nav-Stock').addClass('active');\t
\tarticulos = document.getElementsByClassName('articulo');

\t\$('.buscador').keyup(function (e) { 
\t\tfor (i = 0; i < articulos.length; i++) {
\t\t\tarticulo = articulos[i];
\t\t\tselector = '.nombre-' + articulo.id.substr(9);
\t\t\t//console.log(\$(selector));
\t\t\t
\t\t\t\tif(!\$(selector).html().toLowerCase().includes((\$('.buscador').val().toLowerCase()))){
\t\t\t\t\t\$(selector).parent().attr('hidden',true);
\t\t\t\t}
\t\t\tif(\$('.buscador').val() == ''){
\t\t\t\t\$(selector).parent().attr('hidden',false);
\t\t\t}
\t\t}
\t});

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
\t\tselectorStock = \".stock-\" + id;
\t\tstock = \$(selectorStock).html().substr(7);
\t\t\$('#tituloModal').html(nombre.html());
\t\t\$('#imgModal').attr('src', img.attr('src'));
\t\t\$('#cantidadModal').val(1);
\t\t\$('#idModal').html(id);
\t\t\$('#staticBackdrop').modal('show');
\t\t\$('#cantidadModal').val();
\t\t\$('#añadirCarrito').attr(\"onclick\", \"anyadirStock(\" + id + \")\");

\t}

\tfunction anyadirStock(id){
\t
\t\t\$.ajax({
\t\t\ttype: \"POST\",
\t\t\turl: \"";
        // line 102
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_añadir_stock");
        echo "\",
\t\t\tdata: {
\t\t\t\t'id': id,
\t\t\t\t'stock': \$('#cantidadModal').val(),
\t\t\t},
\t\t\tsuccess: function (result) {
\t\t\t\tconsole.log(result);
\t\t\t\t\$('#staticBackdrop').modal('hide');
\t\t\t\tif(result == 0){
\t\t\t\t\tlocation.reload();
\t\t\t\t}
\t\t\t\t
\t\t\t},
\t\t\terror: function (result) {
\t\t\t\tconsole.log(\"error: \", result);
\t\t\t}
\t\t}); 
\t}

</script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "gestor_tienda/stock.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  196 => 102,  144 => 52,  135 => 49,  131 => 48,  125 => 47,  119 => 46,  108 => 39,  104 => 38,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block body %}
<body class='fondoGris'>
<div class=\"modal fade\" id=\"staticBackdrop\" data-bs-backdrop=\"static\" data-bs-keyboard=\"false\" tabindex=\"-1\"
\taria-labelledby=\"staticBackdropLabel\" aria-hidden=\"true\">
\t<div class=\"modal-dialog modal-dialog-centered\">
\t\t<div class=\"modal-content\">
\t\t\t<div class=\"modal-header\">
\t\t\t\t<h5 class=\"modal-title\" id=\"staticBackdropLabel\">Añadir Stock</h5>
\t\t\t\t<button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
\t\t\t</div>
\t\t\t<div class=\"modal-body\">
\t\t\t\t<p id='tituloModal'></p>
\t\t\t\t<img id='imgModal' width='100px'>
\t\t\t\t<p hidden id='idModal'></p>
\t\t\t\t<input type=\"number\" id=\"cantidadModal\"
\t\t\t\t\tonkeypress=\"return (event.charCode >= 48 && event.charCode <= 57)\" value='1' min='0'>
\t\t\t\t<p hidden id='errorStock'></p>

\t\t\t</div>
\t\t\t<div class=\"modal-footer\">
\t\t\t\t<button type=\"button\" class=\"btn btn-secondary\" data-bs-dismiss=\"modal\">Cancelar</button>
\t\t\t\t<button type=\"button\" class=\"btn btn-primary\" id='añadirCarrito'>Añadir Stock</button>
\t\t\t</div>
\t\t</div>
\t</div>
</div>
<div class=\"container\">

<div class=\"input-group flex-nowrap mt-4 mb-4\">
  <span class=\"input-group-text\" id=\"addon-wrapping\"><svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" fill=\"currentColor\" class=\"bi bi-search\" viewBox=\"0 0 16 16\">
  <path d=\"M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z\"/>
</svg></span>
  <input type=\"text\" class=\"form-control buscador\" placeholder=\"Buscar Articulo\" aria-label=\"Username\" aria-describedby=\"addon-wrapping\">
</div>
<div class=\"row justify-content-center\">
{% for key ,articulo in articulos %}
<div class='articulo col-md-3 fondoBlanco m-3 text-center bordesRedondos' id='articulo-{{articulo.id}}'>
<p>

<svg xmlns=\"http://www.w3.org/2000/svg\" width=\"32\" height=\"32\" fill=\"currentColor\" class=\"bi bi-plus mt-4\" viewBox=\"0 0 16 16\">
  <path d=\"M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z\"/>
</svg>
</p>
\t<h3 class='nombre-{{articulo.id}} mt-3'>{{articulo.nombre}}</h3>
\t<img src=\"data:image/png;base64,{{ images[key] }}\" class='img-{{articulo.id}} img-fluid mt-0'/>
\t<p class='stock-{{articulo.id}}'>
\t\t{{articulo.stock}} Unidades Disponibles</p>
</div>
{% endfor %}
</div>
</body>
<script>
\t\$('.nav-Stock').addClass('active');\t
\tarticulos = document.getElementsByClassName('articulo');

\t\$('.buscador').keyup(function (e) { 
\t\tfor (i = 0; i < articulos.length; i++) {
\t\t\tarticulo = articulos[i];
\t\t\tselector = '.nombre-' + articulo.id.substr(9);
\t\t\t//console.log(\$(selector));
\t\t\t
\t\t\t\tif(!\$(selector).html().toLowerCase().includes((\$('.buscador').val().toLowerCase()))){
\t\t\t\t\t\$(selector).parent().attr('hidden',true);
\t\t\t\t}
\t\t\tif(\$('.buscador').val() == ''){
\t\t\t\t\$(selector).parent().attr('hidden',false);
\t\t\t}
\t\t}
\t});

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
\t\tselectorStock = \".stock-\" + id;
\t\tstock = \$(selectorStock).html().substr(7);
\t\t\$('#tituloModal').html(nombre.html());
\t\t\$('#imgModal').attr('src', img.attr('src'));
\t\t\$('#cantidadModal').val(1);
\t\t\$('#idModal').html(id);
\t\t\$('#staticBackdrop').modal('show');
\t\t\$('#cantidadModal').val();
\t\t\$('#añadirCarrito').attr(\"onclick\", \"anyadirStock(\" + id + \")\");

\t}

\tfunction anyadirStock(id){
\t
\t\t\$.ajax({
\t\t\ttype: \"POST\",
\t\t\turl: \"{{ path('app_añadir_stock') }}\",
\t\t\tdata: {
\t\t\t\t'id': id,
\t\t\t\t'stock': \$('#cantidadModal').val(),
\t\t\t},
\t\t\tsuccess: function (result) {
\t\t\t\tconsole.log(result);
\t\t\t\t\$('#staticBackdrop').modal('hide');
\t\t\t\tif(result == 0){
\t\t\t\t\tlocation.reload();
\t\t\t\t}
\t\t\t\t
\t\t\t},
\t\t\terror: function (result) {
\t\t\t\tconsole.log(\"error: \", result);
\t\t\t}
\t\t}); 
\t}

</script>
{% endblock %}", "gestor_tienda/stock.html.twig", "/opt/lampp/htdocs/GestorTienda/templates/gestor_tienda/stock.html.twig");
    }
}
