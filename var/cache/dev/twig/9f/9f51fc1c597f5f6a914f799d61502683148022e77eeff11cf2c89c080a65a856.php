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

/* ClasseBundle:Classe:AllUser.html.twig */
class __TwigTemplate_ed225aa280965e600bbe5d8d4e13e156b01432d3278ead458fcc8c38cdc170a0 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "ClasseBundle:Classe:AllUser.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "ClasseBundle:Classe:AllUser.html.twig"));

        $this->parent = $this->loadTemplate("@User/Page_Employer.html.twig", "ClasseBundle:Classe:AllUser.html.twig", 1);
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
                <h4 class=\"card-title\">Liste Eleve Non Affecter</h4>

                <div class=\"table-responsive pt-3\">
                    <table class=\"table table-bordered\">
                        <thead>
                        <tr>
                            <th>
                                id
                            </th>
                            <th>
                                Cin
                            </th>
                            <th>
                                Nom
                            </th>

                            <th>
                                Prenom
                            </th>
                            <th>
                                email
                            </th>
                            <th>
                                date de Naissance
                            </th>

                            <th>
                                niveau
                            </th>
                            <th>
                            Action
                            </th>
                        </tr>
                        </thead>
                        <tbody>
                        ";
        // line 42
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["user"] ?? $this->getContext($context, "user")));
        foreach ($context['_seq'] as $context["_key"] => $context["s"]) {
            // line 43
            echo "                            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["s"], "roles", []));
            foreach ($context['_seq'] as $context["_key"] => $context["role"]) {
                // line 44
                echo "                                ";
                if ((($context["role"] == "ROLE_APPRENANT") && ($this->getAttribute($context["s"], "affecter", []) == 0))) {
                    // line 45
                    echo "                            <tr>
                                <td>
                                    ";
                    // line 47
                    echo twig_escape_filter($this->env, $this->getAttribute($context["s"], "id", []), "html", null, true);
                    echo "
                                </td>
                                <td>
                                    ";
                    // line 50
                    echo twig_escape_filter($this->env, $this->getAttribute($context["s"], "cin", []), "html", null, true);
                    echo "
                                </td>
                                <td>
                                    ";
                    // line 53
                    echo twig_escape_filter($this->env, $this->getAttribute($context["s"], "username", []), "html", null, true);
                    echo "

                                </td>
                                <td>
                                    ";
                    // line 57
                    echo twig_escape_filter($this->env, $this->getAttribute($context["s"], "prenom", []), "html", null, true);
                    echo "

                                </td>
                                <td>
                                    ";
                    // line 61
                    echo twig_escape_filter($this->env, $this->getAttribute($context["s"], "email", []), "html", null, true);
                    echo "

                                </td>
                                <td>
                                    ";
                    // line 65
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["s"], "DateNaissance", [])), "html", null, true);
                    echo "

                                </td>

                                    <td>
                                        ";
                    // line 70
                    echo twig_escape_filter($this->env, $this->getAttribute($context["s"], "niveau", []), "html", null, true);
                    echo "
                                    </td>

                                <td>
                                    <a href=\"";
                    // line 74
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("classe_Supprimer", ["id" => $this->getAttribute($context["s"], "id", [])]), "html", null, true);
                    echo "\">Supprimer</a><br>
                                    <a href=\"";
                    // line 75
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("classe_Modifier", ["id" => $this->getAttribute($context["s"], "id", [])]), "html", null, true);
                    echo "\">Modifier</a><br>
                                    <a href=\"";
                    // line 76
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ClasseByNiveau", ["id" => $this->getAttribute($context["s"], "id", [])]), "html", null, true);
                    echo "\">Affecter Au classe</a>
                                </td>

";
                }
                // line 80
                echo "                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['role'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 81
            echo "
                            </tr>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['s'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 84
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
        return "ClasseBundle:Classe:AllUser.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  194 => 84,  186 => 81,  180 => 80,  173 => 76,  169 => 75,  165 => 74,  158 => 70,  150 => 65,  143 => 61,  136 => 57,  129 => 53,  123 => 50,  117 => 47,  113 => 45,  110 => 44,  105 => 43,  101 => 42,  60 => 3,  51 => 2,  29 => 1,);
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
                <h4 class=\"card-title\">Liste Eleve Non Affecter</h4>

                <div class=\"table-responsive pt-3\">
                    <table class=\"table table-bordered\">
                        <thead>
                        <tr>
                            <th>
                                id
                            </th>
                            <th>
                                Cin
                            </th>
                            <th>
                                Nom
                            </th>

                            <th>
                                Prenom
                            </th>
                            <th>
                                email
                            </th>
                            <th>
                                date de Naissance
                            </th>

                            <th>
                                niveau
                            </th>
                            <th>
                            Action
                            </th>
                        </tr>
                        </thead>
                        <tbody>
                        {% for s in user %}
                            {% for role in s.roles %}
                                {% if role == 'ROLE_APPRENANT' and s.affecter == 0 %}
                            <tr>
                                <td>
                                    {{ s.id }}
                                </td>
                                <td>
                                    {{ s.cin }}
                                </td>
                                <td>
                                    {{ s.username }}

                                </td>
                                <td>
                                    {{ s.prenom }}

                                </td>
                                <td>
                                    {{ s.email }}

                                </td>
                                <td>
                                    {{ s.DateNaissance|date }}

                                </td>

                                    <td>
                                        {{ s.niveau }}
                                    </td>

                                <td>
                                    <a href=\"{{ path('classe_Supprimer',{'id':s.id}) }}\">Supprimer</a><br>
                                    <a href=\"{{ path('classe_Modifier',{'id':s.id}) }}\">Modifier</a><br>
                                    <a href=\"{{ path('ClasseByNiveau',{'id':s.id}) }}\">Affecter Au classe</a>
                                </td>

{% endif %}
                                {% endfor %}

                            </tr>
                        {% endfor %}
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
{% endblock %}", "ClasseBundle:Classe:AllUser.html.twig", "C:\\wamp64\\www\\Ecole\\src\\ClasseBundle/Resources/views/Classe/AllUser.html.twig");
    }
}
