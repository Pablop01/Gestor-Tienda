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

/* gestor_tienda/cambioPass.html.twig */
class __TwigTemplate_578870786bc5bbf1334110bb566677b04c42d2d4722b597fd9d7ca0b3c01da4a extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "gestor_tienda/cambioPass.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "gestor_tienda/cambioPass.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "gestor_tienda/cambioPass.html.twig", 1);
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
    <div class=\"container\">
        <div class=\"row justify-content-center align-items-center mt-5\">
            <div class='col-3 fondoBlanco bordesRedondos mt-4 bordeAzul'>
                <div class='row justify-content-center'>
                    <div class='col-4'>
                        <img src='img/logo.png' class='img-fluid' width='100px'>
                    </div>
                </div>

                <form action=\"";
        // line 13
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_procesa_cambio_pass");
        echo "\" method=\"post\" class=\"mt-5 contenedor text-center\">
                    <label for=\"password\">Nueva Contraseña:</label><br><br>
                    <div class=\"input-group mb-3\">
                        <div class=\"input-group-prepend\">
                            <span class=\"input-group-text\" id=\"basic-addon1\"><svg xmlns=\"http://www.w3.org/2000/svg\"
                                    width=\"23\" height=\"24\" fill=\"currentColor\" class=\"bi bi-key\" viewBox=\"0 0 16 16\">
                                    <path
                                        d=\"M0 8a4 4 0 0 1 7.465-2H14a.5.5 0 0 1 .354.146l1.5 1.5a.5.5 0 0 1 0 .708l-1.5 1.5a.5.5 0 0 1-.708 0L13 9.207l-.646.647a.5.5 0 0 1-.708 0L11 9.207l-.646.647a.5.5 0 0 1-.708 0L9 9.207l-.646.647A.5.5 0 0 1 8 10h-.535A4 4 0 0 1 0 8zm4-3a3 3 0 1 0 2.712 4.285A.5.5 0 0 1 7.163 9h.63l.853-.854a.5.5 0 0 1 .708 0l.646.647.646-.647a.5.5 0 0 1 .708 0l.646.647.646-.647a.5.5 0 0 1 .708 0l.646.647.793-.793-1-1h-6.63a.5.5 0 0 1-.451-.285A3 3 0 0 0 4 5z\" />
                                    <path d=\"M4 8a1 1 0 1 1-2 0 1 1 0 0 1 2 0z\" />
                                </svg></span>
                        </div>
                        <input type=\"password\" class=\"form-control\" placeholder=\"Nueva contraseña\" aria-label=\"Username\" aria-describedby=\"basic-addon1\" id=\"password\" name=\"password\">
                    </div>
                    <label for=\"password\">Repetir Contraseña:</label><br><br>
                    <div class=\"input-group mb-3\">
                        <div class=\"input-group-prepend\">
                            <span class=\"input-group-text\" id=\"basic-addon1\"><svg xmlns=\"http://www.w3.org/2000/svg\"
                                    width=\"23\" height=\"24\" fill=\"currentColor\" class=\"bi bi-key\" viewBox=\"0 0 16 16\">
                                    <path
                                        d=\"M0 8a4 4 0 0 1 7.465-2H14a.5.5 0 0 1 .354.146l1.5 1.5a.5.5 0 0 1 0 .708l-1.5 1.5a.5.5 0 0 1-.708 0L13 9.207l-.646.647a.5.5 0 0 1-.708 0L11 9.207l-.646.647a.5.5 0 0 1-.708 0L9 9.207l-.646.647A.5.5 0 0 1 8 10h-.535A4 4 0 0 1 0 8zm4-3a3 3 0 1 0 2.712 4.285A.5.5 0 0 1 7.163 9h.63l.853-.854a.5.5 0 0 1 .708 0l.646.647.646-.647a.5.5 0 0 1 .708 0l.646.647.646-.647a.5.5 0 0 1 .708 0l.646.647.793-.793-1-1h-6.63a.5.5 0 0 1-.451-.285A3 3 0 0 0 4 5z\" />
                                    <path d=\"M4 8a1 1 0 1 1-2 0 1 1 0 0 1 2 0z\" />
                                </svg></span>
                        </div>
                        <input type=\"password\" class=\"form-control\" placeholder=\"Repetir contraseña\" aria-label=\"Username\" aria-describedby=\"basic-addon1\" id=\"password\" name=\"password2\">
                    </div>
                    <br><br>
                    <button type=\"submit\" class='btn btn-primary mb-3'>Cambiar Contraseña</button>
                     ";
        // line 40
        if ((isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 40, $this->source); })())) {
            // line 41
            echo "                    <div class=\"error mb-2\">";
            echo twig_escape_filter($this->env, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 41, $this->source); })()), "html", null, true);
            echo "</div>
                    ";
        }
        // line 43
        echo "                </form>
            </div>
        </div>
    </div>
</body>
<script>
\$('.nav-Password').addClass('active');
</script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "gestor_tienda/cambioPass.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  118 => 43,  112 => 41,  110 => 40,  80 => 13,  67 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %} {% block body %}

<body class='fondoGris'>
    <div class=\"container\">
        <div class=\"row justify-content-center align-items-center mt-5\">
            <div class='col-3 fondoBlanco bordesRedondos mt-4 bordeAzul'>
                <div class='row justify-content-center'>
                    <div class='col-4'>
                        <img src='img/logo.png' class='img-fluid' width='100px'>
                    </div>
                </div>

                <form action=\"{{ path('app_procesa_cambio_pass') }}\" method=\"post\" class=\"mt-5 contenedor text-center\">
                    <label for=\"password\">Nueva Contraseña:</label><br><br>
                    <div class=\"input-group mb-3\">
                        <div class=\"input-group-prepend\">
                            <span class=\"input-group-text\" id=\"basic-addon1\"><svg xmlns=\"http://www.w3.org/2000/svg\"
                                    width=\"23\" height=\"24\" fill=\"currentColor\" class=\"bi bi-key\" viewBox=\"0 0 16 16\">
                                    <path
                                        d=\"M0 8a4 4 0 0 1 7.465-2H14a.5.5 0 0 1 .354.146l1.5 1.5a.5.5 0 0 1 0 .708l-1.5 1.5a.5.5 0 0 1-.708 0L13 9.207l-.646.647a.5.5 0 0 1-.708 0L11 9.207l-.646.647a.5.5 0 0 1-.708 0L9 9.207l-.646.647A.5.5 0 0 1 8 10h-.535A4 4 0 0 1 0 8zm4-3a3 3 0 1 0 2.712 4.285A.5.5 0 0 1 7.163 9h.63l.853-.854a.5.5 0 0 1 .708 0l.646.647.646-.647a.5.5 0 0 1 .708 0l.646.647.646-.647a.5.5 0 0 1 .708 0l.646.647.793-.793-1-1h-6.63a.5.5 0 0 1-.451-.285A3 3 0 0 0 4 5z\" />
                                    <path d=\"M4 8a1 1 0 1 1-2 0 1 1 0 0 1 2 0z\" />
                                </svg></span>
                        </div>
                        <input type=\"password\" class=\"form-control\" placeholder=\"Nueva contraseña\" aria-label=\"Username\" aria-describedby=\"basic-addon1\" id=\"password\" name=\"password\">
                    </div>
                    <label for=\"password\">Repetir Contraseña:</label><br><br>
                    <div class=\"input-group mb-3\">
                        <div class=\"input-group-prepend\">
                            <span class=\"input-group-text\" id=\"basic-addon1\"><svg xmlns=\"http://www.w3.org/2000/svg\"
                                    width=\"23\" height=\"24\" fill=\"currentColor\" class=\"bi bi-key\" viewBox=\"0 0 16 16\">
                                    <path
                                        d=\"M0 8a4 4 0 0 1 7.465-2H14a.5.5 0 0 1 .354.146l1.5 1.5a.5.5 0 0 1 0 .708l-1.5 1.5a.5.5 0 0 1-.708 0L13 9.207l-.646.647a.5.5 0 0 1-.708 0L11 9.207l-.646.647a.5.5 0 0 1-.708 0L9 9.207l-.646.647A.5.5 0 0 1 8 10h-.535A4 4 0 0 1 0 8zm4-3a3 3 0 1 0 2.712 4.285A.5.5 0 0 1 7.163 9h.63l.853-.854a.5.5 0 0 1 .708 0l.646.647.646-.647a.5.5 0 0 1 .708 0l.646.647.646-.647a.5.5 0 0 1 .708 0l.646.647.793-.793-1-1h-6.63a.5.5 0 0 1-.451-.285A3 3 0 0 0 4 5z\" />
                                    <path d=\"M4 8a1 1 0 1 1-2 0 1 1 0 0 1 2 0z\" />
                                </svg></span>
                        </div>
                        <input type=\"password\" class=\"form-control\" placeholder=\"Repetir contraseña\" aria-label=\"Username\" aria-describedby=\"basic-addon1\" id=\"password\" name=\"password2\">
                    </div>
                    <br><br>
                    <button type=\"submit\" class='btn btn-primary mb-3'>Cambiar Contraseña</button>
                     {% if error %}
                    <div class=\"error mb-2\">{{error}}</div>
                    {% endif %}
                </form>
            </div>
        </div>
    </div>
</body>
<script>
\$('.nav-Password').addClass('active');
</script>
{% endblock %}", "gestor_tienda/cambioPass.html.twig", "/opt/lampp/htdocs/GestorTienda/templates/gestor_tienda/cambioPass.html.twig");
    }
}
