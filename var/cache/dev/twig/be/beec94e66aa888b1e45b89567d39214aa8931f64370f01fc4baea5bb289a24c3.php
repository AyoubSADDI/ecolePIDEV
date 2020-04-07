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

/* GarderieBundle:Reservation:AllReservation.html.twig */
class __TwigTemplate_e5a62b1e6b5213ea7cfdcaebde1c160eca75d62ee4ffdfeb3e6c3db6e727a40e extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "@User/Page_Employer.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "GarderieBundle:Reservation:AllReservation.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "GarderieBundle:Reservation:AllReservation.html.twig"));

        $this->parent = $this->loadTemplate("@User/Page_Employer.html.twig", "GarderieBundle:Reservation:AllReservation.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 2
    public function block_body($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "
    <div class=\"col-lg-20 grid-margin stretch-card\">
        <div class=\"card\">
            <div class=\"card-body\">
                <h4 class=\"card-title\">Liste Classe</h4>

                <div class=\"table-responsive pt-3\">
                    <table class=\"table table-bordered\">
                        <thead>
                        <tr>
                            <th>
                                id
                            </th>
                            <th>
                                Parent
                            </th>
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
                                Date De Reservation
                            </th>
                            <th>
                                Prix
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
        // line 44
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["res"] ?? $this->getContext($context, "res")));
        foreach ($context['_seq'] as $context["_key"] => $context["s"]) {
            // line 45
            echo "                            ";
            if (($this->getAttribute($context["s"], "etat", []) == "En cours")) {
                // line 46
                echo "
                            <tr>
                                <td>
                                    ";
                // line 49
                echo twig_escape_filter($this->env, $this->getAttribute($context["s"], "id", []), "html", null, true);
                echo "
                                </td>
                                <td>
                                    ";
                // line 52
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["s"], "parent", []), "username", []), "html", null, true);
                echo "
                                </td>
                                <td>
                                    ";
                // line 55
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["s"], "nbenfants", []), "username", []), "html", null, true);
                echo "
                                </td>
                                <td>
                                    ";
                // line 58
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["s"], "activityType", []), "type", []), "html", null, true);
                echo "
                                </td>
                                <td>
                                    ";
                // line 61
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["s"], "dateRes", [])), "html", null, true);
                echo "
                                </td>
                                <td>
                                    ";
                // line 64
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["s"], "dateGar", [])), "html", null, true);
                echo "

                                </td>
                                <td>
                                    ";
                // line 68
                echo twig_escape_filter($this->env, $this->getAttribute($context["s"], "prix", []), "html", null, true);
                echo " TND

                                </td>

                                <td>
                                    ";
                // line 73
                echo twig_escape_filter($this->env, $this->getAttribute($context["s"], "etat", []), "html", null, true);
                echo "
                                </td>
                                <td>
                                <a href=\"";
                // line 76
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("AccepterRes", ["id" => $this->getAttribute($context["s"], "id", []), "idu" => $this->getAttribute($this->getAttribute($context["s"], "parent", []), "id", [])]), "html", null, true);
                echo "\">Accepter</a><br><br>
                                <a href=\"";
                // line 77
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("RefesuerRes", ["id" => $this->getAttribute($context["s"], "id", [])]), "html", null, true);
                echo "\">Refuser</a><br>
                                </td>
                            </tr>
                                ";
            } else {
                // line 81
                echo "                                ";
            }
            // line 82
            echo "                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['s'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 83
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
        return "GarderieBundle:Reservation:AllReservation.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  186 => 83,  180 => 82,  177 => 81,  170 => 77,  166 => 76,  160 => 73,  152 => 68,  145 => 64,  139 => 61,  133 => 58,  127 => 55,  121 => 52,  115 => 49,  110 => 46,  107 => 45,  103 => 44,  60 => 3,  51 => 2,  29 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"@User/Page_Employer.html.twig\" %}
{% block body %}

    <div class=\"col-lg-20 grid-margin stretch-card\">
        <div class=\"card\">
            <div class=\"card-body\">
                <h4 class=\"card-title\">Liste Classe</h4>

                <div class=\"table-responsive pt-3\">
                    <table class=\"table table-bordered\">
                        <thead>
                        <tr>
                            <th>
                                id
                            </th>
                            <th>
                                Parent
                            </th>
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
                                Date De Reservation
                            </th>
                            <th>
                                Prix
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
                            {% if s.etat == \"En cours\" %}

                            <tr>
                                <td>
                                    {{ s.id }}
                                </td>
                                <td>
                                    {{ s.parent.username }}
                                </td>
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
                                <a href=\"{{ path('AccepterRes',{'id':s.id,'idu':s.parent.id}) }}\">Accepter</a><br><br>
                                <a href=\"{{ path('RefesuerRes',{'id':s.id}) }}\">Refuser</a><br>
                                </td>
                            </tr>
                                {% else %}
                                {% endif %}
                        {% endfor %}
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
{% endblock %}", "GarderieBundle:Reservation:AllReservation.html.twig", "C:\\wamp64\\www\\Ecole\\src\\GarderieBundle/Resources/views/Reservation/AllReservation.html.twig");
    }
}
