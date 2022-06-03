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

/* gestor_tienda/graficos.html.twig */
class __TwigTemplate_13a43a48de4713b0e754bb6517ac4a58812bcea33e4cd232664938cdaa451252 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "gestor_tienda/graficos.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "gestor_tienda/graficos.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "gestor_tienda/graficos.html.twig", 1);
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
<body class='fondoGris'>
\t<div class='container fondoBlanco'>
\t\t<div class='row justify-content-md-between'>
\t\t\t<div class='col-md-5 col-12 mt-4'>
\t\t\t\t<canvas id=\"myChart3\" width=\"700\" height=\"500\"></canvas>
\t\t\t</div>
\t\t\t<div class='col-md-5 col-12 mt-md-4'>
\t\t\t\t<canvas id=\"myChart2\" width=\"700\" height=\"500\" class='col-md-4'></canvas>
\t\t\t</div>
\t\t</div>
\t\t<div class='row justify-content-md-center'>
\t\t\t<div class='col-md-5 col-12'>
\t\t\t\t<canvas id=\"myChart\" width=\"700\" height=\"500\" class='col-md-4'></canvas>
\t\t\t</div>
\t\t</div>
</body>
<script>

\t\$('.nav-Dashboard').addClass('active');

\t\$.ajax({
\t\ttype: \"POST\",
\t\turl: \"";
        // line 27
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_get_datos_ventas");
        echo "\",
\t\tasync: false,
\t\tdata: {},
\t\tsuccess: function (result) {

\t\t\tetiquetas = [];
\t\t\tdatos = [];

\t\t\tfor (var i = 0; i < result.length; i++) {
\t\t\t\tdatos[i] = result[i].cantidad;
\t\t\t\t\$.ajax({
\t\t\t\t\ttype: \"POST\",
\t\t\t\t\turl: \"";
        // line 39
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_get_articulo");
        echo "\",
\t\t\t\t\tasync: false,
\t\t\t\t\tdata: {
\t\t\t\t\t\t'id': result[i].id_articulo
\t\t\t\t\t},
\t\t\t\t\tsuccess: function (result2) {
\t\t\t\t\t\tetiquetas[i] = JSON.parse(result2).nombre;
\t\t\t\t\t},
\t\t\t\t\terror: function (result2) {
\t\t\t\t\t\tconsole.log(\"error: \", result2);
\t\t\t\t\t}
\t\t\t\t});
\t\t\t}
\t\t\t/* console.log(etiquetas);
\t\t\t\t\t\tconsole.log(datos); */
\t\t\tpintarGrafico(etiquetas, datos);

\t\t},
\t\terror: function (result) {
\t\t\tconsole.log(\"error: \", result);
\t\t}
\t});

\t\$.ajax({
\t\ttype: \"POST\",
\t\turl: \"";
        // line 64
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_get_tickets");
        echo "\",
\t\tdata: {},
\t\tsuccess: function (result3) {

\t\t\tetiquetas = [];
\t\t\tdatos = [];

\t\t\tobjetos = [];

\t\t\tvar today = new Date();
\t\t\tvar year = today.getFullYear();

\t\t\tvar today = new Date();
\t\t\tvar yearAnterior = today.getFullYear() - 1;

\t\t\tvar fechas = '01/01/' + year + ' - ' + '31/12/' + year;
\t\t\tvar fechasSeparadas = fechas.split(' - ');

\t\t\tvar fechas2 = '01/01/' + yearAnterior + ' - ' + '31/12/' + yearAnterior;
\t\t\tvar fechasSeparadas2 = fechas2.split(' - ');

\t\t\tfor (var i = 0; i < result3.length; i++) { // console.log(new Date(JSON.parse(result3[i]).fecha.date));
\t\t\t\tobjetos.push(JSON.parse(result3[i]));
\t\t\t}

\t\t\t// console.log(objetos);
\t\t\tdatos = (contarPorMeses(objetos, fechasSeparadas));
\t\t\tdatos2 = (contarPorMeses(objetos, fechasSeparadas2));
\t\t\tpintarGrafico2(datos[0], datos[1]);
\t\t\tpintarGrafico3(datos2[0], datos2[1]);

\t\t\t// pintarGrafico(etiquetas, datos);

\t\t},
\t\terror: function (result) {
\t\t\tconsole.log(\"error: \", result);
\t\t}
\t});


\tfunction pintarGrafico(etiquetasVisibles, datosVisibles) {

\t\tconst ctx = document.getElementById('myChart');
\t\t\$('#myChart').addClass('visible');
\t\t\$('#myChart').removeClass('invisible');
\t\tmyChart = new Chart(ctx, {
\t\t\ttype: 'bar',
\t\t\tdata: {
\t\t\t\tlabels: etiquetasVisibles,
\t\t\t\tdatasets: [
\t\t\t\t\t{
\t\t\t\t\t\tlabel: 'Top Ventas',
\t\t\t\t\t\tdata: datosVisibles,
\t\t\t\t\t\tbackgroundColor: [
\t\t\t\t\t\t\t'rgba(255, 99, 132, 0.6)',
\t\t\t\t\t\t],
\t\t\t\t\t\tborderColor: [
\t\t\t\t\t\t\t'rgba(255, 99, 132, 1)',
\t\t\t\t\t\t],
\t\t\t\t\t\tborderWidth: 1,
\t\t\t\t\t\tdatalabels: {
\t\t\t\t\t\t\tformatter: function (value, context) {
\t\t\t\t\t\t\t\treturn value;
\t\t\t\t\t\t\t},
\t\t\t\t\t\t\tcolor: 'black',
\t\t\t\t\t\t\tanchor: 'end',
\t\t\t\t\t\t\talign: 'top'
\t\t\t\t\t\t}
\t\t\t\t\t}
\t\t\t\t]
\t\t\t},
\t\t\tplugins: [ChartDataLabels],
\t\t\toptions: {
\t\t\t\tresponsive: true
\t\t\t}
\t\t});
\t}

\tfunction pintarGrafico2(etiquetasVisibles, datosVisibles) {

\t\tconst ctx2 = document.getElementById('myChart2');
\t\t\$('#myChart2').addClass('visible');
\t\t\$('#myChart2').removeClass('invisible');
\t\tmyChart2 = new Chart(ctx2, {
\t\t\ttype: 'bar',
\t\t\tdata: {
\t\t\t\tlabels: etiquetasVisibles,
\t\t\t\tdatasets: [
\t\t\t\t\t{
\t\t\t\t\t\tlabel: 'Facturación Año Actual',
\t\t\t\t\t\tdata: datosVisibles,
\t\t\t\t\t\tbackgroundColor: [
\t\t\t\t\t\t\t'rgba(255, 99, 132, 0.6)',
\t\t\t\t\t\t],
\t\t\t\t\t\tborderColor: [
\t\t\t\t\t\t\t'rgba(255, 99, 132, 1)',
\t\t\t\t\t\t],
\t\t\t\t\t\tborderWidth: 1,
\t\t\t\t\t\tdatalabels: {
\t\t\t\t\t\t\tformatter: function (value, context) {
\t\t\t\t\t\t\t\tif (value != 0) {
\t\t\t\t\t\t\t\t\treturn value.toLocaleString('es-ES', {
\t\t\t\t\t\t\t\t\t\tstyle: 'currency',
\t\t\t\t\t\t\t\t\t\tcurrency: 'EUR',
\t\t\t\t\t\t\t\t\t\tminimumFractionDigits: 2
\t\t\t\t\t\t\t\t\t});
\t\t\t\t\t\t\t\t} else {
\t\t\t\t\t\t\t\t\treturn null
\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t},
\t\t\t\t\t\t\tcolor: 'black',
\t\t\t\t\t\t\tanchor: 'end',
\t\t\t\t\t\t\talign: 'top'
\t\t\t\t\t\t}
\t\t\t\t\t}
\t\t\t\t]
\t\t\t},
\t\t\tplugins: [ChartDataLabels],
\t\t\toptions: {
\t\t\t\tresponsive: true
\t\t\t}
\t\t});
\t}


\tfunction pintarGrafico3(etiquetasVisibles, datosVisibles) {

\t\tconst ctx3 = document.getElementById('myChart3');
\t\t\$('#myChart3').addClass('visible');
\t\t\$('#myChart3').removeClass('invisible');
\t\tmyChart3 = new Chart(ctx3, {
\t\t\ttype: 'bar',
\t\t\tdata: {
\t\t\t\tlabels: etiquetasVisibles,
\t\t\t\tdatasets: [
\t\t\t\t\t{
\t\t\t\t\t\tlabel: 'Facturación Año Anterior',
\t\t\t\t\t\tdata: datosVisibles,
\t\t\t\t\t\tbackgroundColor: [
\t\t\t\t\t\t\t'rgba(255, 99, 132, 0.6)',
\t\t\t\t\t\t],
\t\t\t\t\t\tborderColor: [
\t\t\t\t\t\t\t'rgba(255, 99, 132, 1)',
\t\t\t\t\t\t],
\t\t\t\t\t\tborderWidth: 1,
\t\t\t\t\t\tdatalabels: {
\t\t\t\t\t\t\tformatter: function (value, context) {
\t\t\t\t\t\t\t\tif (value != 0) {
\t\t\t\t\t\t\t\t\treturn value.toLocaleString('es-ES', {
\t\t\t\t\t\t\t\t\t\tstyle: 'currency',
\t\t\t\t\t\t\t\t\t\tcurrency: 'EUR',
\t\t\t\t\t\t\t\t\t\tminimumFractionDigits: 2
\t\t\t\t\t\t\t\t\t});
\t\t\t\t\t\t\t\t} else {
\t\t\t\t\t\t\t\t\treturn null
\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t},
\t\t\t\t\t\t\tcolor: 'black',
\t\t\t\t\t\t\tanchor: 'end',
\t\t\t\t\t\t\talign: 'top'
\t\t\t\t\t\t}
\t\t\t\t\t}
\t\t\t\t]
\t\t\t},
\t\t\tplugins: [ChartDataLabels],
\t\t\toptions: {
\t\t\t\tresponsive: true
\t\t\t}
\t\t});
\t}

\tfunction contarPorMeses(result, fechasSeparadas) { // console.log(result);

\t\tvar etiquetas = [
\t\t\t'Enero',
\t\t\t'Febrero',
\t\t\t'Marzo',
\t\t\t'Abril',
\t\t\t'Mayo',
\t\t\t'Junio',
\t\t\t'Julio',
\t\t\t'Agosto',
\t\t\t'Septiembre',
\t\t\t'Octubre',
\t\t\t'Noviembre',
\t\t\t'Diciembre'
\t\t];
\t\tvar anyoInicio = fechasSeparadas[0].split('/')[2];
\t\tvar anyoFin = fechasSeparadas[1].split('/')[2];
\t\tvar fechaInicio = fechasSeparadas[0];
\t\tvar inicio = fechaInicio.split('/')[1];
\t\tvar fechaFin = fechasSeparadas[1];
\t\tvar fin = fechaFin.split('/')[1];
\t\tvar fecha1 = fechaInicio.split('/');
\t\tvar fecha2 = fechaFin.split('/');
\t\tvar today = new Date();
\t\tvar year = today.getFullYear();
\t\tvar diferenciaMeses = monthDiff(new Date(fecha1[2], fecha1[1], '01'), new Date(fecha2[2], fecha2[1], '01'));

\t\tvar contador = 0;
\t\tvar mesArray = parseInt(fecha1[1]) - 1;
\t\tvar anyoEtiqueta = parseInt(fecha1[2]);
\t\tvar etiquetasVisibles = [];
\t\tvar comprobarMes = [];
\t\tvar datos = [];

\t\tfor (var i = 0; i < diferenciaMeses; i++) {
\t\t\tetiquetasVisibles[i] = etiquetas[mesArray] + \" \" + anyoEtiqueta;
\t\t\tcomprobarMes[i] = mesArray + 1;
\t\t\tif (mesArray == 11) {
\t\t\t\tmesArray = -1;
\t\t\t\tanyoEtiqueta++;
\t\t\t}
\t\t\tmesArray++;
\t\t\tdatos[i] = 0;
\t\t}

\t\tfor (var i = 0; i < result.length; i++) {
\t\t\tfor (var j = 0; j < etiquetasVisibles.length; j++) {

\t\t\t\tvar fechaComprobacion1 = new Date(result[i].fecha.date.split('-')[0], result[i].fecha.date.split('-')[1], '01');
\t\t\t\tvar fechaComprobacion2 = new Date(etiquetasVisibles[j].split(' ')[1], comprobarMes[j], '01');
\t\t\t\t
\t\t\t\tif (fechaComprobacion1.getTime() == fechaComprobacion2.getTime()) {

\t\t\t\t\tdatos[j] += result[i].total;

\t\t\t\t}
\t\t\t}
\t\t}
\t\treturn [etiquetasVisibles, datos];
\t}


\tfunction monthDiff(date1, date2) {
\t\tvar year1 = date1.getFullYear();
\t\tvar year2 = date2.getFullYear();
\t\tvar month1 = date1.getMonth();
\t\tvar month2 = date2.getMonth();
\t\tif (month1 === 0) {
\t\t\tmonth1++;
\t\t\tmonth2++;
\t\t}
\t\tvar numberOfMonths = (year2 - year1) * 12 + (month2 - month1) + 1;
\t\treturn numberOfMonths;
\t}
</script>
</body>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "gestor_tienda/graficos.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  136 => 64,  108 => 39,  93 => 27,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block body %}

<body class='fondoGris'>
\t<div class='container fondoBlanco'>
\t\t<div class='row justify-content-md-between'>
\t\t\t<div class='col-md-5 col-12 mt-4'>
\t\t\t\t<canvas id=\"myChart3\" width=\"700\" height=\"500\"></canvas>
\t\t\t</div>
\t\t\t<div class='col-md-5 col-12 mt-md-4'>
\t\t\t\t<canvas id=\"myChart2\" width=\"700\" height=\"500\" class='col-md-4'></canvas>
\t\t\t</div>
\t\t</div>
\t\t<div class='row justify-content-md-center'>
\t\t\t<div class='col-md-5 col-12'>
\t\t\t\t<canvas id=\"myChart\" width=\"700\" height=\"500\" class='col-md-4'></canvas>
\t\t\t</div>
\t\t</div>
</body>
<script>

\t\$('.nav-Dashboard').addClass('active');

\t\$.ajax({
\t\ttype: \"POST\",
\t\turl: \"{{ path('app_get_datos_ventas') }}\",
\t\tasync: false,
\t\tdata: {},
\t\tsuccess: function (result) {

\t\t\tetiquetas = [];
\t\t\tdatos = [];

\t\t\tfor (var i = 0; i < result.length; i++) {
\t\t\t\tdatos[i] = result[i].cantidad;
\t\t\t\t\$.ajax({
\t\t\t\t\ttype: \"POST\",
\t\t\t\t\turl: \"{{ path('app_get_articulo') }}\",
\t\t\t\t\tasync: false,
\t\t\t\t\tdata: {
\t\t\t\t\t\t'id': result[i].id_articulo
\t\t\t\t\t},
\t\t\t\t\tsuccess: function (result2) {
\t\t\t\t\t\tetiquetas[i] = JSON.parse(result2).nombre;
\t\t\t\t\t},
\t\t\t\t\terror: function (result2) {
\t\t\t\t\t\tconsole.log(\"error: \", result2);
\t\t\t\t\t}
\t\t\t\t});
\t\t\t}
\t\t\t/* console.log(etiquetas);
\t\t\t\t\t\tconsole.log(datos); */
\t\t\tpintarGrafico(etiquetas, datos);

\t\t},
\t\terror: function (result) {
\t\t\tconsole.log(\"error: \", result);
\t\t}
\t});

\t\$.ajax({
\t\ttype: \"POST\",
\t\turl: \"{{ path('app_get_tickets') }}\",
\t\tdata: {},
\t\tsuccess: function (result3) {

\t\t\tetiquetas = [];
\t\t\tdatos = [];

\t\t\tobjetos = [];

\t\t\tvar today = new Date();
\t\t\tvar year = today.getFullYear();

\t\t\tvar today = new Date();
\t\t\tvar yearAnterior = today.getFullYear() - 1;

\t\t\tvar fechas = '01/01/' + year + ' - ' + '31/12/' + year;
\t\t\tvar fechasSeparadas = fechas.split(' - ');

\t\t\tvar fechas2 = '01/01/' + yearAnterior + ' - ' + '31/12/' + yearAnterior;
\t\t\tvar fechasSeparadas2 = fechas2.split(' - ');

\t\t\tfor (var i = 0; i < result3.length; i++) { // console.log(new Date(JSON.parse(result3[i]).fecha.date));
\t\t\t\tobjetos.push(JSON.parse(result3[i]));
\t\t\t}

\t\t\t// console.log(objetos);
\t\t\tdatos = (contarPorMeses(objetos, fechasSeparadas));
\t\t\tdatos2 = (contarPorMeses(objetos, fechasSeparadas2));
\t\t\tpintarGrafico2(datos[0], datos[1]);
\t\t\tpintarGrafico3(datos2[0], datos2[1]);

\t\t\t// pintarGrafico(etiquetas, datos);

\t\t},
\t\terror: function (result) {
\t\t\tconsole.log(\"error: \", result);
\t\t}
\t});


\tfunction pintarGrafico(etiquetasVisibles, datosVisibles) {

\t\tconst ctx = document.getElementById('myChart');
\t\t\$('#myChart').addClass('visible');
\t\t\$('#myChart').removeClass('invisible');
\t\tmyChart = new Chart(ctx, {
\t\t\ttype: 'bar',
\t\t\tdata: {
\t\t\t\tlabels: etiquetasVisibles,
\t\t\t\tdatasets: [
\t\t\t\t\t{
\t\t\t\t\t\tlabel: 'Top Ventas',
\t\t\t\t\t\tdata: datosVisibles,
\t\t\t\t\t\tbackgroundColor: [
\t\t\t\t\t\t\t'rgba(255, 99, 132, 0.6)',
\t\t\t\t\t\t],
\t\t\t\t\t\tborderColor: [
\t\t\t\t\t\t\t'rgba(255, 99, 132, 1)',
\t\t\t\t\t\t],
\t\t\t\t\t\tborderWidth: 1,
\t\t\t\t\t\tdatalabels: {
\t\t\t\t\t\t\tformatter: function (value, context) {
\t\t\t\t\t\t\t\treturn value;
\t\t\t\t\t\t\t},
\t\t\t\t\t\t\tcolor: 'black',
\t\t\t\t\t\t\tanchor: 'end',
\t\t\t\t\t\t\talign: 'top'
\t\t\t\t\t\t}
\t\t\t\t\t}
\t\t\t\t]
\t\t\t},
\t\t\tplugins: [ChartDataLabels],
\t\t\toptions: {
\t\t\t\tresponsive: true
\t\t\t}
\t\t});
\t}

\tfunction pintarGrafico2(etiquetasVisibles, datosVisibles) {

\t\tconst ctx2 = document.getElementById('myChart2');
\t\t\$('#myChart2').addClass('visible');
\t\t\$('#myChart2').removeClass('invisible');
\t\tmyChart2 = new Chart(ctx2, {
\t\t\ttype: 'bar',
\t\t\tdata: {
\t\t\t\tlabels: etiquetasVisibles,
\t\t\t\tdatasets: [
\t\t\t\t\t{
\t\t\t\t\t\tlabel: 'Facturación Año Actual',
\t\t\t\t\t\tdata: datosVisibles,
\t\t\t\t\t\tbackgroundColor: [
\t\t\t\t\t\t\t'rgba(255, 99, 132, 0.6)',
\t\t\t\t\t\t],
\t\t\t\t\t\tborderColor: [
\t\t\t\t\t\t\t'rgba(255, 99, 132, 1)',
\t\t\t\t\t\t],
\t\t\t\t\t\tborderWidth: 1,
\t\t\t\t\t\tdatalabels: {
\t\t\t\t\t\t\tformatter: function (value, context) {
\t\t\t\t\t\t\t\tif (value != 0) {
\t\t\t\t\t\t\t\t\treturn value.toLocaleString('es-ES', {
\t\t\t\t\t\t\t\t\t\tstyle: 'currency',
\t\t\t\t\t\t\t\t\t\tcurrency: 'EUR',
\t\t\t\t\t\t\t\t\t\tminimumFractionDigits: 2
\t\t\t\t\t\t\t\t\t});
\t\t\t\t\t\t\t\t} else {
\t\t\t\t\t\t\t\t\treturn null
\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t},
\t\t\t\t\t\t\tcolor: 'black',
\t\t\t\t\t\t\tanchor: 'end',
\t\t\t\t\t\t\talign: 'top'
\t\t\t\t\t\t}
\t\t\t\t\t}
\t\t\t\t]
\t\t\t},
\t\t\tplugins: [ChartDataLabels],
\t\t\toptions: {
\t\t\t\tresponsive: true
\t\t\t}
\t\t});
\t}


\tfunction pintarGrafico3(etiquetasVisibles, datosVisibles) {

\t\tconst ctx3 = document.getElementById('myChart3');
\t\t\$('#myChart3').addClass('visible');
\t\t\$('#myChart3').removeClass('invisible');
\t\tmyChart3 = new Chart(ctx3, {
\t\t\ttype: 'bar',
\t\t\tdata: {
\t\t\t\tlabels: etiquetasVisibles,
\t\t\t\tdatasets: [
\t\t\t\t\t{
\t\t\t\t\t\tlabel: 'Facturación Año Anterior',
\t\t\t\t\t\tdata: datosVisibles,
\t\t\t\t\t\tbackgroundColor: [
\t\t\t\t\t\t\t'rgba(255, 99, 132, 0.6)',
\t\t\t\t\t\t],
\t\t\t\t\t\tborderColor: [
\t\t\t\t\t\t\t'rgba(255, 99, 132, 1)',
\t\t\t\t\t\t],
\t\t\t\t\t\tborderWidth: 1,
\t\t\t\t\t\tdatalabels: {
\t\t\t\t\t\t\tformatter: function (value, context) {
\t\t\t\t\t\t\t\tif (value != 0) {
\t\t\t\t\t\t\t\t\treturn value.toLocaleString('es-ES', {
\t\t\t\t\t\t\t\t\t\tstyle: 'currency',
\t\t\t\t\t\t\t\t\t\tcurrency: 'EUR',
\t\t\t\t\t\t\t\t\t\tminimumFractionDigits: 2
\t\t\t\t\t\t\t\t\t});
\t\t\t\t\t\t\t\t} else {
\t\t\t\t\t\t\t\t\treturn null
\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t},
\t\t\t\t\t\t\tcolor: 'black',
\t\t\t\t\t\t\tanchor: 'end',
\t\t\t\t\t\t\talign: 'top'
\t\t\t\t\t\t}
\t\t\t\t\t}
\t\t\t\t]
\t\t\t},
\t\t\tplugins: [ChartDataLabels],
\t\t\toptions: {
\t\t\t\tresponsive: true
\t\t\t}
\t\t});
\t}

\tfunction contarPorMeses(result, fechasSeparadas) { // console.log(result);

\t\tvar etiquetas = [
\t\t\t'Enero',
\t\t\t'Febrero',
\t\t\t'Marzo',
\t\t\t'Abril',
\t\t\t'Mayo',
\t\t\t'Junio',
\t\t\t'Julio',
\t\t\t'Agosto',
\t\t\t'Septiembre',
\t\t\t'Octubre',
\t\t\t'Noviembre',
\t\t\t'Diciembre'
\t\t];
\t\tvar anyoInicio = fechasSeparadas[0].split('/')[2];
\t\tvar anyoFin = fechasSeparadas[1].split('/')[2];
\t\tvar fechaInicio = fechasSeparadas[0];
\t\tvar inicio = fechaInicio.split('/')[1];
\t\tvar fechaFin = fechasSeparadas[1];
\t\tvar fin = fechaFin.split('/')[1];
\t\tvar fecha1 = fechaInicio.split('/');
\t\tvar fecha2 = fechaFin.split('/');
\t\tvar today = new Date();
\t\tvar year = today.getFullYear();
\t\tvar diferenciaMeses = monthDiff(new Date(fecha1[2], fecha1[1], '01'), new Date(fecha2[2], fecha2[1], '01'));

\t\tvar contador = 0;
\t\tvar mesArray = parseInt(fecha1[1]) - 1;
\t\tvar anyoEtiqueta = parseInt(fecha1[2]);
\t\tvar etiquetasVisibles = [];
\t\tvar comprobarMes = [];
\t\tvar datos = [];

\t\tfor (var i = 0; i < diferenciaMeses; i++) {
\t\t\tetiquetasVisibles[i] = etiquetas[mesArray] + \" \" + anyoEtiqueta;
\t\t\tcomprobarMes[i] = mesArray + 1;
\t\t\tif (mesArray == 11) {
\t\t\t\tmesArray = -1;
\t\t\t\tanyoEtiqueta++;
\t\t\t}
\t\t\tmesArray++;
\t\t\tdatos[i] = 0;
\t\t}

\t\tfor (var i = 0; i < result.length; i++) {
\t\t\tfor (var j = 0; j < etiquetasVisibles.length; j++) {

\t\t\t\tvar fechaComprobacion1 = new Date(result[i].fecha.date.split('-')[0], result[i].fecha.date.split('-')[1], '01');
\t\t\t\tvar fechaComprobacion2 = new Date(etiquetasVisibles[j].split(' ')[1], comprobarMes[j], '01');
\t\t\t\t
\t\t\t\tif (fechaComprobacion1.getTime() == fechaComprobacion2.getTime()) {

\t\t\t\t\tdatos[j] += result[i].total;

\t\t\t\t}
\t\t\t}
\t\t}
\t\treturn [etiquetasVisibles, datos];
\t}


\tfunction monthDiff(date1, date2) {
\t\tvar year1 = date1.getFullYear();
\t\tvar year2 = date2.getFullYear();
\t\tvar month1 = date1.getMonth();
\t\tvar month2 = date2.getMonth();
\t\tif (month1 === 0) {
\t\t\tmonth1++;
\t\t\tmonth2++;
\t\t}
\t\tvar numberOfMonths = (year2 - year1) * 12 + (month2 - month1) + 1;
\t\treturn numberOfMonths;
\t}
</script>
</body>
{% endblock %}
", "gestor_tienda/graficos.html.twig", "/opt/lampp/htdocs/GestorTienda/templates/gestor_tienda/graficos.html.twig");
    }
}
