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

/* gestor_tienda/buscarTickets.html.twig */
class __TwigTemplate_1d6a39aa843ada83b77f35ace4e4ba39ce4730ca40e14035ae924fbeefbd84fd extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "gestor_tienda/buscarTickets.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "gestor_tienda/buscarTickets.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "gestor_tienda/buscarTickets.html.twig", 1);
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
\t
<body class ='fondoGris'>
<div class='container fondoBlanco bordesRedondos'>
    <div class='row mt-3'>
        <div class=\"col-12 mt-4 text-left\"><p class=\"h3\">Filtros de b??squeda:</p></div>
    </div>
    <hr>
    <div class=\"row mt-3\">
    <p id='error' hidden>Debes rellenar el campo de b??squeda</p>
        <div class=\"col-md-4\">
            <div class=\"row\">
                <div class=\"col-12\">
                    <p>Id del Ticket:</p>
                </div>
            </div>
            <div class=\"row\">
                <div class=\"col-12\">
                    <input type=\"text\" onkeypress=\"return (event.charCode >= 48 && event.charCode <= 57)\" class='idTicketText'>
                </div>
            </div>
        </div>
";
        // line 38
        echo "    </div>
    <div class='row mt-4 pb-2'>
         <div class=\"col-12 text-right\">
            <button type=\"button\" class=\"btn btn-primary buscar mb-3\"><svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" fill=\"currentColor\" class=\"bi bi-search\" viewBox=\"0 0 16 16\">
                <path d=\"M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z\"/>
              </svg>  Buscar</button>
        </div>
    </div>
</div>
<div class='container fondoBlanco bordesRedondos resultados' hidden>
    <div class='row mt-3'>
        <div class=\"col-12 mt-4 text-left\"><p class=\"h3\">Resultados:</p></div>
    </div>
    <hr>
    <div class=\"row mt-3\">
        <div class='col-12'>
            <p class='error mt-4 mb-4 ms-2' hidden>El ID introducido no coincide con ning??n ticket</p>
            <p class='mt-4 ms-2 idTicket' hidden></p>
            <p class='ms-2 fechaTicket' hidden></p>
            <p class='mb-4 ms-2 totalTicket' hidden></p>
            <form action=\"";
        // line 58
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_ver_ticket_id");
        echo "\" method=\"post\">
                <input type='text' id='enviarId' name=\"id\" hidden></p>
                <button class='btn btn-primary mb-4 btnVer' type='submit'>Ver ticket</button>
            </form>
             <form action=\"";
        // line 62
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_get_ticket_devolucion");
        echo "\" method=\"post\">
                <input type='text' id='enviarId2' name=\"id\" hidden></p>
                <button class=\"btn btn-danger mb-4 btnDevolucion\" id='devoluci??n'>Devoluci??n</button>
            </form>
            
        </div>
    </div>
</div>
</body>
<script>

    \$('.buscar').on('click', function(){
        \$('#error').attr('hidden', true);
        if(\$('.idTicketText').val() == ''){
            \$('#error').removeAttr('hidden');
        }else{
            \$.ajax({
\t\ttype: \"POST\",
\t\turl: \"";
        // line 80
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_get_ticketBy");
        echo "\",
\t\tasync: false,
\t\tdata: {
            'fecha': \$('.fecha').val(),
            'id': \$('.idTicketText').val(),
            },
\t\tsuccess: function (result) {

            if(result == 0){
                \$('.resultados').removeAttr('hidden');
                \$('.error').removeAttr('hidden');
                \$('.idTicket').attr('hidden', true);
                \$('.fechaTicket').attr('hidden', true);
                \$('.totalTicket').attr('hidden', true);
                \$('.btnVer').attr('hidden', true);
                \$('.btnDevolucion').attr('hidden', true);
            }else{
                ticket = JSON.parse(result);
                \$('.error').attr('hidden', true);
                \$('.resultados').removeAttr('hidden');
                \$('.idTicket').html('Ticket ID: ' + ticket.id);
                \$('.idTicket').removeAttr('hidden');
                \$('.fechaTicket').html('Fecha: ' + ticket.fecha.date);
                \$('.fechaTicket').removeAttr('hidden');
                \$('.totalTicket').html('Total: ' + ticket.total + '???');
                \$('.totalTicket').removeAttr('hidden');
                \$('#enviarId').val(ticket.id);
                \$('#enviarId2').val(ticket.id);
                \$('.btnVer').removeAttr('hidden');
                \$('.btnDevolucion').removeAttr('hidden');
            }
\t\t\t

\t\t},
\t\terror: function (result) {
\t\t\tconsole.log(\"error: \", result);
\t\t}
\t});
        }
    })
    \$('.nav-bTicket').addClass('active');
</script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "gestor_tienda/buscarTickets.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  142 => 80,  121 => 62,  114 => 58,  92 => 38,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block body %}

\t
<body class ='fondoGris'>
<div class='container fondoBlanco bordesRedondos'>
    <div class='row mt-3'>
        <div class=\"col-12 mt-4 text-left\"><p class=\"h3\">Filtros de b??squeda:</p></div>
    </div>
    <hr>
    <div class=\"row mt-3\">
    <p id='error' hidden>Debes rellenar el campo de b??squeda</p>
        <div class=\"col-md-4\">
            <div class=\"row\">
                <div class=\"col-12\">
                    <p>Id del Ticket:</p>
                </div>
            </div>
            <div class=\"row\">
                <div class=\"col-12\">
                    <input type=\"text\" onkeypress=\"return (event.charCode >= 48 && event.charCode <= 57)\" class='idTicketText'>
                </div>
            </div>
        </div>
{#         <div class=\"col-md-4\">
            <div class=\"row\">
                <div class=\"col-12\">
                    <p>Fecha del Ticket:</p>
                </div>
            </div>
            <div class=\"row\">
                <div class=\"col-12\">
                    <input type=\"date\" class=\"fecha\">
                </div>
            </div>
        </div> #}
    </div>
    <div class='row mt-4 pb-2'>
         <div class=\"col-12 text-right\">
            <button type=\"button\" class=\"btn btn-primary buscar mb-3\"><svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" fill=\"currentColor\" class=\"bi bi-search\" viewBox=\"0 0 16 16\">
                <path d=\"M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z\"/>
              </svg>  Buscar</button>
        </div>
    </div>
</div>
<div class='container fondoBlanco bordesRedondos resultados' hidden>
    <div class='row mt-3'>
        <div class=\"col-12 mt-4 text-left\"><p class=\"h3\">Resultados:</p></div>
    </div>
    <hr>
    <div class=\"row mt-3\">
        <div class='col-12'>
            <p class='error mt-4 mb-4 ms-2' hidden>El ID introducido no coincide con ning??n ticket</p>
            <p class='mt-4 ms-2 idTicket' hidden></p>
            <p class='ms-2 fechaTicket' hidden></p>
            <p class='mb-4 ms-2 totalTicket' hidden></p>
            <form action=\"{{ path('app_ver_ticket_id') }}\" method=\"post\">
                <input type='text' id='enviarId' name=\"id\" hidden></p>
                <button class='btn btn-primary mb-4 btnVer' type='submit'>Ver ticket</button>
            </form>
             <form action=\"{{ path('app_get_ticket_devolucion') }}\" method=\"post\">
                <input type='text' id='enviarId2' name=\"id\" hidden></p>
                <button class=\"btn btn-danger mb-4 btnDevolucion\" id='devoluci??n'>Devoluci??n</button>
            </form>
            
        </div>
    </div>
</div>
</body>
<script>

    \$('.buscar').on('click', function(){
        \$('#error').attr('hidden', true);
        if(\$('.idTicketText').val() == ''){
            \$('#error').removeAttr('hidden');
        }else{
            \$.ajax({
\t\ttype: \"POST\",
\t\turl: \"{{ path('app_get_ticketBy') }}\",
\t\tasync: false,
\t\tdata: {
            'fecha': \$('.fecha').val(),
            'id': \$('.idTicketText').val(),
            },
\t\tsuccess: function (result) {

            if(result == 0){
                \$('.resultados').removeAttr('hidden');
                \$('.error').removeAttr('hidden');
                \$('.idTicket').attr('hidden', true);
                \$('.fechaTicket').attr('hidden', true);
                \$('.totalTicket').attr('hidden', true);
                \$('.btnVer').attr('hidden', true);
                \$('.btnDevolucion').attr('hidden', true);
            }else{
                ticket = JSON.parse(result);
                \$('.error').attr('hidden', true);
                \$('.resultados').removeAttr('hidden');
                \$('.idTicket').html('Ticket ID: ' + ticket.id);
                \$('.idTicket').removeAttr('hidden');
                \$('.fechaTicket').html('Fecha: ' + ticket.fecha.date);
                \$('.fechaTicket').removeAttr('hidden');
                \$('.totalTicket').html('Total: ' + ticket.total + '???');
                \$('.totalTicket').removeAttr('hidden');
                \$('#enviarId').val(ticket.id);
                \$('#enviarId2').val(ticket.id);
                \$('.btnVer').removeAttr('hidden');
                \$('.btnDevolucion').removeAttr('hidden');
            }
\t\t\t

\t\t},
\t\terror: function (result) {
\t\t\tconsole.log(\"error: \", result);
\t\t}
\t});
        }
    })
    \$('.nav-bTicket').addClass('active');
</script>
{% endblock %}", "gestor_tienda/buscarTickets.html.twig", "/opt/lampp/htdocs/GestorTienda/templates/gestor_tienda/buscarTickets.html.twig");
    }
}
