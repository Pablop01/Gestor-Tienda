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

/* gestor_tienda/devolucion.html.twig */
class __TwigTemplate_d085c6aee829224028643739e520c0105d175a4f40b2da6ba9b91e8e03cecdcf extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "gestor_tienda/devolucion.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "gestor_tienda/devolucion.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "gestor_tienda/devolucion.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 2
        echo "
<body class='fondoGris'>

    <div class=\"modal fade\" id=\"staticBackdrop\" data-bs-backdrop=\"static\" data-bs-keyboard=\"false\" tabindex=\"-1\" aria-labelledby=\"staticBackdropLabel\" aria-hidden=\"true\">
        <div class=\"modal-dialog modal-dialog-centered\">
            <div class=\"modal-content\">
                <div class=\"modal-header\">
                    <h5 class=\"modal-title\" id=\"staticBackdropLabel\">Devolver Articulo</h5>
                    <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
                </div>
                <div class=\"modal-body\">
                    <p id='tituloModal'></p>
                    <img id='imgModal' width='100px'>
                    <p hidden id='idModal'></p>
                    <p hidden id='errorStock' class='error'></p>

                </div>
                <div class=\"modal-footer\">
                    <button type=\"button\" class=\"btn btn-secondary\" data-bs-dismiss=\"modal\">Cancelar</button>
                    <button type=\"button\" class=\"btn btn-danger\" id='devolverArticulo'>Devolver Articulo</button>
                </div>
            </div>
        </div>
    </div>
    <div class=\"container\">

        <div class=\"input-group flex-nowrap mt-4 mb-4\">
            <span class=\"input-group-text\" id=\"addon-wrapping\"><svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\"
\t\t\t\t\theight=\"16\" fill=\"currentColor\" class=\"bi bi-search\" viewBox=\"0 0 16 16\">
\t\t\t\t\t<path
\t\t\t\t\t\td=\"M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z\" />
\t\t\t\t</svg></span>
            <input type=\"text\" class=\"form-control buscador\" placeholder=\"Buscar Articulo\" aria-label=\"Username\" aria-describedby=\"addon-wrapping\">
        </div>
        <div class=\"row justify-content-center mb-4\">
            ";
        // line 37
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["articulos"]) || array_key_exists("articulos", $context) ? $context["articulos"] : (function () { throw new RuntimeError('Variable "articulos" does not exist.', 37, $this->source); })()));
        foreach ($context['_seq'] as $context["key"] => $context["articulo"]) {
            echo " ";
            if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["articulo"], "activo", [], "any", false, false, false, 37), 1))) {
                // line 38
                echo "            <div class='articulo col-md-3 fondoBlanco m-3 text-center bordesRedondos' id='articulo-";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["articulo"], "id", [], "any", false, false, false, 38), "html", null, true);
                echo "'>
                <h3 class='nombre-";
                // line 39
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["articulo"], "id", [], "any", false, false, false, 39), "html", null, true);
                echo " mt-3'>";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["articulo"], "nombre", [], "any", false, false, false, 39), "html", null, true);
                echo "</h3>
                <img src=\"data:image/png;base64,";
                // line 40
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["images"]) || array_key_exists("images", $context) ? $context["images"] : (function () { throw new RuntimeError('Variable "images" does not exist.', 40, $this->source); })()), $context["key"], [], "array", false, false, false, 40), "html", null, true);
                echo "\" class='img-";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["articulo"], "id", [], "any", false, false, false, 40), "html", null, true);
                echo " img-fluid mt-0' />
                <p>";
                // line 41
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["articulo"], "descripcion", [], "any", false, false, false, 41), "html", null, true);
                echo "</p>
            </div>
            ";
            }
            // line 43
            echo " ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['articulo'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 44
        echo "        </div>
    </div>
</body>
<script>

    articulos = document.getElementsByClassName('articulo');

    \$('.buscador').keyup(function(e) {
        for (i = 0; i < articulos.length; i++) {
            articulo = articulos[i];
            selector = '.nombre-' + articulo.id.substr(9);

            if (!\$(selector).html().toLowerCase().includes((\$('.buscador').val().toLowerCase()))) {
                \$(selector).parent().attr('hidden', true);
            } else {
                \$(selector).parent().attr('hidden', false);
            }
            if (\$('.buscador').val() == '') {
                \$(selector).parent().attr('hidden', false);
            }
        }
    });

    for (i = 0; i < articulos.length; i++) {
        articulo = articulos[i];
        selector = '#' + articulo.id;
        id = articulo.id.split('-')[1];
        \$(selector).attr(\"onclick\", \"pulsado(\" + id + \")\");
        
    }

    function pulsado(id) {

        claseNombre = '.nombre-' + id;
        claseImg = '.img-' + id;
        nombre = \$(claseNombre);
        img = \$(claseImg);
        \$('#tituloModal').html(nombre.html());
        \$('#imgModal').attr('src', img.attr('src'));
        \$('#cantidadModal').val(1);
        \$('#idModal').html(id);
        \$('#staticBackdrop').modal('show');
        \$('#añadirCarrito').attr(\"onclick\", \"añadirCarrito(\" + id + \")\");

    }

    \$('#devolverArticulo').on('click', function(){
        
            \$.ajax({
                type: \"POST\",
                url: \"";
        // line 94
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_procesa_devolucion");
        echo "\",
                data: {
                    'id': \$('#idModal').html(),
                    'ticket': ";
        // line 97
        echo twig_escape_filter($this->env, (isset($context["ticket"]) || array_key_exists("ticket", $context) ? $context["ticket"] : (function () { throw new RuntimeError('Variable "ticket" does not exist.', 97, $this->source); })()), "html", null, true);
        echo ",
                },
                success: function(result) {
                    if(result == 0){
                        location.href = 'verTicketDevuelto';
                    }
                    
                },
                error: function(result) {
                    console.log(\"error: \", result);
                }
            });

    })

</script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "gestor_tienda/devolucion.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  197 => 97,  191 => 94,  139 => 44,  133 => 43,  127 => 41,  121 => 40,  115 => 39,  110 => 38,  104 => 37,  67 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %} {% block body %}

<body class='fondoGris'>

    <div class=\"modal fade\" id=\"staticBackdrop\" data-bs-backdrop=\"static\" data-bs-keyboard=\"false\" tabindex=\"-1\" aria-labelledby=\"staticBackdropLabel\" aria-hidden=\"true\">
        <div class=\"modal-dialog modal-dialog-centered\">
            <div class=\"modal-content\">
                <div class=\"modal-header\">
                    <h5 class=\"modal-title\" id=\"staticBackdropLabel\">Devolver Articulo</h5>
                    <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
                </div>
                <div class=\"modal-body\">
                    <p id='tituloModal'></p>
                    <img id='imgModal' width='100px'>
                    <p hidden id='idModal'></p>
                    <p hidden id='errorStock' class='error'></p>

                </div>
                <div class=\"modal-footer\">
                    <button type=\"button\" class=\"btn btn-secondary\" data-bs-dismiss=\"modal\">Cancelar</button>
                    <button type=\"button\" class=\"btn btn-danger\" id='devolverArticulo'>Devolver Articulo</button>
                </div>
            </div>
        </div>
    </div>
    <div class=\"container\">

        <div class=\"input-group flex-nowrap mt-4 mb-4\">
            <span class=\"input-group-text\" id=\"addon-wrapping\"><svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\"
\t\t\t\t\theight=\"16\" fill=\"currentColor\" class=\"bi bi-search\" viewBox=\"0 0 16 16\">
\t\t\t\t\t<path
\t\t\t\t\t\td=\"M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z\" />
\t\t\t\t</svg></span>
            <input type=\"text\" class=\"form-control buscador\" placeholder=\"Buscar Articulo\" aria-label=\"Username\" aria-describedby=\"addon-wrapping\">
        </div>
        <div class=\"row justify-content-center mb-4\">
            {% for key ,articulo in articulos %} {% if articulo.activo == 1 %}
            <div class='articulo col-md-3 fondoBlanco m-3 text-center bordesRedondos' id='articulo-{{articulo.id}}'>
                <h3 class='nombre-{{articulo.id}} mt-3'>{{articulo.nombre}}</h3>
                <img src=\"data:image/png;base64,{{ images[key] }}\" class='img-{{articulo.id}} img-fluid mt-0' />
                <p>{{articulo.descripcion}}</p>
            </div>
            {% endif %} {% endfor %}
        </div>
    </div>
</body>
<script>

    articulos = document.getElementsByClassName('articulo');

    \$('.buscador').keyup(function(e) {
        for (i = 0; i < articulos.length; i++) {
            articulo = articulos[i];
            selector = '.nombre-' + articulo.id.substr(9);

            if (!\$(selector).html().toLowerCase().includes((\$('.buscador').val().toLowerCase()))) {
                \$(selector).parent().attr('hidden', true);
            } else {
                \$(selector).parent().attr('hidden', false);
            }
            if (\$('.buscador').val() == '') {
                \$(selector).parent().attr('hidden', false);
            }
        }
    });

    for (i = 0; i < articulos.length; i++) {
        articulo = articulos[i];
        selector = '#' + articulo.id;
        id = articulo.id.split('-')[1];
        \$(selector).attr(\"onclick\", \"pulsado(\" + id + \")\");
        
    }

    function pulsado(id) {

        claseNombre = '.nombre-' + id;
        claseImg = '.img-' + id;
        nombre = \$(claseNombre);
        img = \$(claseImg);
        \$('#tituloModal').html(nombre.html());
        \$('#imgModal').attr('src', img.attr('src'));
        \$('#cantidadModal').val(1);
        \$('#idModal').html(id);
        \$('#staticBackdrop').modal('show');
        \$('#añadirCarrito').attr(\"onclick\", \"añadirCarrito(\" + id + \")\");

    }

    \$('#devolverArticulo').on('click', function(){
        
            \$.ajax({
                type: \"POST\",
                url: \"{{ path('app_procesa_devolucion') }}\",
                data: {
                    'id': \$('#idModal').html(),
                    'ticket': {{ticket}},
                },
                success: function(result) {
                    if(result == 0){
                        location.href = 'verTicketDevuelto';
                    }
                    
                },
                error: function(result) {
                    console.log(\"error: \", result);
                }
            });

    })

</script>
{% endblock %}", "gestor_tienda/devolucion.html.twig", "/opt/lampp/htdocs/GestorTienda/templates/gestor_tienda/devolucion.html.twig");
    }
}
