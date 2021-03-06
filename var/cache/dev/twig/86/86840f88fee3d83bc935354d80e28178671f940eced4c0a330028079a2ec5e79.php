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

/* gestor_tienda/editar.html.twig */
class __TwigTemplate_65933783f00660abacaabd0593982e4304705fb5940e352f7fdf1db66a007a16 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "gestor_tienda/editar.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "gestor_tienda/editar.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "gestor_tienda/editar.html.twig", 1);
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
                    <h5 class=\"modal-title\" id=\"staticBackdropLabel\">Editar Articulo</h5>
                    <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
                </div>
                <form enctype=\"multipart/form-data\" action=\"";
        // line 11
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_editar_articulo");
        echo "\" method=\"POST\">
                    <div class=\"modal-body\">

                        <img id='img' width='100px'>

                        <h4>Nombre:</h3>
                        <input type=\"text\" id=\"nombre\" name=\"nombre\">

                        <h4>Descripci??n:</h3>
                        <textarea id=\"descripcion\" name=\"descripcion\"></textarea>

                        <h4>Precio Compra:</h3>
                        <input type=\"text\" id=\"precio_compra\" name=\"precio_compra\" class='decimales'>

                        <h4>Precio Base Venta:</h3>
                        <input type=\"text\" id=\"precio_base\" name=\"precio_base\" class='decimales'>

                        <h4>IVA:</h3>
                        <select id=\"iva\" name=\"iva\">
                            <option value=\"4\">4%</option>
                            <option value=\"10\">10%</option>
                             <option value=\"21\">21%</option>
                         </select>
                        <h4>Foto:</h3>
                        <div>
                        <input type=\"file\" class=\"form-control\" id=\"image\" name=\"image\" multiple accept=\"image/*\">
                        </div>

                        <h4>Activo:</h3>
                        <select id=\"activo\" name=\"activo\">
                            <option value=\"1\">S??</option>
                            <option value=\"0\">No</option>
                        </select>
                        
                        <input type='text' id='idModal' name=\"idArticulo\" hidden></p>

                    </div>
                    <div class=\"modal-footer\">
                        <button type=\"button\" class=\"btn btn-secondary\" data-bs-dismiss=\"modal\">Cancelar</button>
                        <button type=\"submit\" class=\"btn btn-primary\" id='editar'>Editar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class=\"container\">

        <div class=\"input-group flex-nowrap mt-4 mb-4\">
            <span class=\"input-group-text\" id=\"addon-wrapping\"><svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\"
                    height=\"16\" fill=\"currentColor\" class=\"bi bi-search\" viewBox=\"0 0 16 16\">
                    <path
                        d=\"M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z\" />
                </svg></span>
            <input type=\"text\" class=\"form-control buscador\" placeholder=\"Buscar Articulo\" aria-label=\"Username\" aria-describedby=\"addon-wrapping\">
        </div>
        <div class=\"row justify-content-center\">
            ";
        // line 67
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["articulos"]) || array_key_exists("articulos", $context) ? $context["articulos"] : (function () { throw new RuntimeError('Variable "articulos" does not exist.', 67, $this->source); })()));
        foreach ($context['_seq'] as $context["key"] => $context["articulo"]) {
            // line 68
            echo "            <div class='articulo col-md-3 fondoBlanco m-3 text-center bordesRedondos' id='articulo-";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["articulo"], "id", [], "any", false, false, false, 68), "html", null, true);
            echo "'>
                <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"32\" height=\"32\" fill=\"currentColor\" class=\"bi bi-pencil icono mt-4\" viewBox=\"0 0 16 16\">
                    <path
                        d=\"M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168l10-10zM11.207 2.5 13.5 4.793 14.793 3.5 12.5 1.207 11.207 2.5zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293l6.5-6.5zm-9.761 5.175-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325z\" />
                </svg>
                <h3 class='nombre-";
            // line 73
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["articulo"], "id", [], "any", false, false, false, 73), "html", null, true);
            echo " mt-3'>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["articulo"], "nombre", [], "any", false, false, false, 73), "html", null, true);
            echo "</h3>
                <img src=\"data:image/png;base64,";
            // line 74
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["images"]) || array_key_exists("images", $context) ? $context["images"] : (function () { throw new RuntimeError('Variable "images" does not exist.', 74, $this->source); })()), $context["key"], [], "array", false, false, false, 74), "html", null, true);
            echo "\" class='img-";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["articulo"], "id", [], "any", false, false, false, 74), "html", null, true);
            echo " img-fluid mt-0' />
                <p>";
            // line 75
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["articulo"], "descripcion", [], "any", false, false, false, 75), "html", null, true);
            echo "</p>
                <p class='stock-";
            // line 76
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["articulo"], "id", [], "any", false, false, false, 76), "html", null, true);
            echo "'>
                    ";
            // line 77
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["articulo"], "stock", [], "any", false, false, false, 77), "html", null, true);
            echo " Unidades Disponibles</p>
            </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['articulo'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 80
        echo "        </div>
</body>
<script>
    \$('.nav-eArticulo').addClass('active');
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

        claseImg = '.img-' + id;
        //nombre = \$(claseNombre);
        img = \$(claseImg);
        \$('#img').attr('src', img.attr('src'));

        \$.ajax({
            type: \"POST\",
            url: \"";
        // line 118
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_get_articulo");
        echo "\",
            data: {
                'id': id,
            },
            success: function(result) {
                articulo = JSON.parse(result)
                \$('#nombre').val(articulo.nombre);
                \$('#descripcion').val(articulo.descripcion);
                \$('#precio_compra').val(articulo.precio_compra);
                \$('#precio_base').val(articulo.precio_base);
                \$('#iva').val(articulo.iva).change();
                \$('#idModal').val(id);
                if (articulo.activo == true) {
                    \$('#activo').val(1).change();
                } else {
                    \$('#activo').val(0).change();
                }
                \$('#staticBackdrop').modal('show');
                //\$('#staticBackdrop').modal('hide');
                if (result == 0) {
                    location.reload();
                }


            },
            error: function(result) {
                console.log(\"error: \", result);
            }
        });

    }

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
        return "gestor_tienda/editar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  219 => 118,  179 => 80,  170 => 77,  166 => 76,  162 => 75,  156 => 74,  150 => 73,  141 => 68,  137 => 67,  78 => 11,  67 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %} {% block body %}

<body class='fondoGris'>
    <div class=\"modal fade\" id=\"staticBackdrop\" data-bs-backdrop=\"static\" data-bs-keyboard=\"false\" tabindex=\"-1\" aria-labelledby=\"staticBackdropLabel\" aria-hidden=\"true\">
        <div class=\"modal-dialog modal-dialog-centered\">
            <div class=\"modal-content\">
                <div class=\"modal-header\">
                    <h5 class=\"modal-title\" id=\"staticBackdropLabel\">Editar Articulo</h5>
                    <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
                </div>
                <form enctype=\"multipart/form-data\" action=\"{{ path('app_editar_articulo') }}\" method=\"POST\">
                    <div class=\"modal-body\">

                        <img id='img' width='100px'>

                        <h4>Nombre:</h3>
                        <input type=\"text\" id=\"nombre\" name=\"nombre\">

                        <h4>Descripci??n:</h3>
                        <textarea id=\"descripcion\" name=\"descripcion\"></textarea>

                        <h4>Precio Compra:</h3>
                        <input type=\"text\" id=\"precio_compra\" name=\"precio_compra\" class='decimales'>

                        <h4>Precio Base Venta:</h3>
                        <input type=\"text\" id=\"precio_base\" name=\"precio_base\" class='decimales'>

                        <h4>IVA:</h3>
                        <select id=\"iva\" name=\"iva\">
                            <option value=\"4\">4%</option>
                            <option value=\"10\">10%</option>
                             <option value=\"21\">21%</option>
                         </select>
                        <h4>Foto:</h3>
                        <div>
                        <input type=\"file\" class=\"form-control\" id=\"image\" name=\"image\" multiple accept=\"image/*\">
                        </div>

                        <h4>Activo:</h3>
                        <select id=\"activo\" name=\"activo\">
                            <option value=\"1\">S??</option>
                            <option value=\"0\">No</option>
                        </select>
                        
                        <input type='text' id='idModal' name=\"idArticulo\" hidden></p>

                    </div>
                    <div class=\"modal-footer\">
                        <button type=\"button\" class=\"btn btn-secondary\" data-bs-dismiss=\"modal\">Cancelar</button>
                        <button type=\"submit\" class=\"btn btn-primary\" id='editar'>Editar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class=\"container\">

        <div class=\"input-group flex-nowrap mt-4 mb-4\">
            <span class=\"input-group-text\" id=\"addon-wrapping\"><svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\"
                    height=\"16\" fill=\"currentColor\" class=\"bi bi-search\" viewBox=\"0 0 16 16\">
                    <path
                        d=\"M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z\" />
                </svg></span>
            <input type=\"text\" class=\"form-control buscador\" placeholder=\"Buscar Articulo\" aria-label=\"Username\" aria-describedby=\"addon-wrapping\">
        </div>
        <div class=\"row justify-content-center\">
            {% for key ,articulo in articulos %}
            <div class='articulo col-md-3 fondoBlanco m-3 text-center bordesRedondos' id='articulo-{{articulo.id}}'>
                <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"32\" height=\"32\" fill=\"currentColor\" class=\"bi bi-pencil icono mt-4\" viewBox=\"0 0 16 16\">
                    <path
                        d=\"M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168l10-10zM11.207 2.5 13.5 4.793 14.793 3.5 12.5 1.207 11.207 2.5zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293l6.5-6.5zm-9.761 5.175-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325z\" />
                </svg>
                <h3 class='nombre-{{articulo.id}} mt-3'>{{articulo.nombre}}</h3>
                <img src=\"data:image/png;base64,{{ images[key] }}\" class='img-{{articulo.id}} img-fluid mt-0' />
                <p>{{articulo.descripcion}}</p>
                <p class='stock-{{articulo.id}}'>
                    {{articulo.stock}} Unidades Disponibles</p>
            </div>
            {% endfor %}
        </div>
</body>
<script>
    \$('.nav-eArticulo').addClass('active');
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

        claseImg = '.img-' + id;
        //nombre = \$(claseNombre);
        img = \$(claseImg);
        \$('#img').attr('src', img.attr('src'));

        \$.ajax({
            type: \"POST\",
            url: \"{{ path('app_get_articulo') }}\",
            data: {
                'id': id,
            },
            success: function(result) {
                articulo = JSON.parse(result)
                \$('#nombre').val(articulo.nombre);
                \$('#descripcion').val(articulo.descripcion);
                \$('#precio_compra').val(articulo.precio_compra);
                \$('#precio_base').val(articulo.precio_base);
                \$('#iva').val(articulo.iva).change();
                \$('#idModal').val(id);
                if (articulo.activo == true) {
                    \$('#activo').val(1).change();
                } else {
                    \$('#activo').val(0).change();
                }
                \$('#staticBackdrop').modal('show');
                //\$('#staticBackdrop').modal('hide');
                if (result == 0) {
                    location.reload();
                }


            },
            error: function(result) {
                console.log(\"error: \", result);
            }
        });

    }

    \$('.decimales').on('input', function () {
        this.value = this.value.replace(/[^0-9,.]/g, '').replace(/,/g, '.');
    });
</script>
{% endblock %}", "gestor_tienda/editar.html.twig", "/opt/lampp/htdocs/GestorTienda/templates/gestor_tienda/editar.html.twig");
    }
}
