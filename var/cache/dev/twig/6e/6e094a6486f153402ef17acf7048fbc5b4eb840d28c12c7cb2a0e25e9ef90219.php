<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* GarderieBundle:Front:MyReservation.html.twig */
class __TwigTemplate_fc9bbee0b394e090fbfb3bea8110aaaef6231883dc2c571a87b9cdf876342ace extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'titre' => [$this, 'block_titre'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "@User/Page_Parent.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "GarderieBundle:Front:MyReservation.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "GarderieBundle:Front:MyReservation.html.twig"));

        $this->parent = $this->loadTemplate("@User/Page_Parent.html.twig", "GarderieBundle:Front:MyReservation.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 2
    public function block_titre($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "titre"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "titre"));

        echo "  Mes Reservations ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 3
    public function block_body($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "

    <div class=\"col-lg-20 grid-margin stretch-card\">
        <div class=\"card\">
            <div class=\"card-body\">

                <div class=\"table-responsive pt-3\">
                    <table class=\"table table-bordered\">
                        <thead>
                        <tr>

                            <th>
                                Enfant
                            </th>
                            <th>
                                Activite
                            </th>
                            <th>
                                Date Reserver
                            </th>

                            <th>
                                Date De Resevation
                            </th>
                            <th>
                                Pix
                            </th>
                            <th>
                                Etat
                            </th>
                            <th>
                                Action
                            </th>

                        </tr>
                        </thead>
                        <tbody>
                        ";
        // line 41
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["res"] ?? $this->getContext($context, "res")));
        foreach ($context['_seq'] as $context["_key"] => $context["s"]) {
            // line 42
            echo "                            <tr>
                                <td>
                                    ";
            // line 44
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["s"], "nbenfants", []), "username", []), "html", null, true);
            echo "
                                </td>
                                <td>
                                    ";
            // line 47
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["s"], "activityType", []), "type", []), "html", null, true);
            echo "
                                </td>
                                <td>
                                    ";
            // line 50
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["s"], "dateRes", [])), "html", null, true);
            echo "
                                </td>
                                <td>
                                    ";
            // line 53
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["s"], "dateGar", [])), "html", null, true);
            echo "

                                </td>
                                <td>
                                    ";
            // line 57
            echo twig_escape_filter($this->env, $this->getAttribute($context["s"], "prix", []), "html", null, true);
            echo " TND

                                </td>

                                <td>
                              ";
            // line 62
            echo twig_escape_filter($this->env, $this->getAttribute($context["s"], "etat", []), "html", null, true);
            echo "
                                </td>
                                <td>

                                    <a href=\"";
            // line 66
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("Reservation_delete", ["id" => $this->getAttribute($context["s"], "id", [])]), "html", null, true);
            echo "\">Delete</a><br><br>
                                    <a href=\"";
            // line 67
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("Reservation_modifier", ["id" => $this->getAttribute($context["s"], "id", [])]), "html", null, true);
            echo "\">Modifier</a><br><br>

                                </td>

                            </tr>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['s'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 73
        echo "                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "GarderieBundle:Front:MyReservation.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  182 => 73,  170 => 67,  166 => 66,  159 => 62,  151 => 57,  144 => 53,  138 => 50,  132 => 47,  126 => 44,  122 => 42,  118 => 41,  79 => 4,  70 => 3,  52 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"@User/Page_Parent.html.twig\" %}
{% block titre  %}  Mes Reservations {% endblock %}
{% block body %}


    <div class=\"col-lg-20 grid-margin stretch-card\">
        <div class=\"card\">
            <div class=\"card-body\">

                <div class=\"table-responsive pt-3\">
                    <table class=\"table table-bordered\">
                        <thead>
                        <tr>

                            <th>
                                Enfant
                            </th>
                            <th>
                                Activite
                            </th>
                            <th>
                                Date Reserver
                            </th>

                            <th>
                                Date De Resevation
                            </th>
                            <th>
                                Pix
                            </th>
                            <th>
                                Etat
                            </th>
                            <th>
                                Action
                            </th>

                        </tr>
                        </thead>
                        <tbody>
                        {% for s in res %}
                            <tr>
                                <td>
                                    {{ s.nbenfants.username }}
                                </td>
                                <td>
                                    {{ s.activityType.type }}
                                </td>
                                <td>
                                    {{ s.dateRes|date }}
                                </td>
                                <td>
                                    {{ s.dateGar|date }}

                                </td>
                                <td>
                                    {{ s.prix }} TND

                                </td>

                                <td>
                              {{ s.etat }}
                                </td>
                                <td>

                                    <a href=\"{{ path('Reservation_delete',{'id':s.id}) }}\">Delete</a><br><br>
                                    <a href=\"{{ path('Reservation_modifier',{'id':s.id}) }}\">Modifier</a><br><br>

                                </td>

                            </tr>
                        {% endfor %}
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

{% endblock %}", "GarderieBundle:Front:MyReservation.html.twig", "C:\\wamp64\\www\\Ecole\\src\\GarderieBundle/Resources/views/Front/MyReservation.html.twig");
    }
}
