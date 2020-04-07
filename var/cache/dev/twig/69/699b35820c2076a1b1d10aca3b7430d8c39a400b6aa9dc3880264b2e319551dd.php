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

/* MatierBundle:Emploi:AffichierEmploiEnseignant.html.twig */
class __TwigTemplate_3ef7f98535fcd5fc5754c24e8940b65509449c1ed575bcfed4b94fa86499bd0f extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "MatierBundle:Emploi:AffichierEmploiEnseignant.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "MatierBundle:Emploi:AffichierEmploiEnseignant.html.twig"));

        $this->parent = $this->loadTemplate("@User/Page_Employer.html.twig", "MatierBundle:Emploi:AffichierEmploiEnseignant.html.twig", 1);
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
                <h4 class=\"card-title\">Liste Emplois Enseignant</h4>

                <div class=\"table-responsive pt-3\">
                    <table class=\"table table-bordered\">
                        <thead>
                        <tr>
                            <th>
                                id
                            </th>
                            <th>
                                Enseignant
                            </th>
                            <th>
                                Nom Emploi
                            </th>

                            <th>
                                Action
                            </th>
                        </tr>
                        </thead>
                        <tbody>
                        ";
        // line 29
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["empl"] ?? $this->getContext($context, "empl")));
        foreach ($context['_seq'] as $context["_key"] => $context["s"]) {
            // line 30
            echo "                            ";
            if (($this->getAttribute($context["s"], "classe", []) == null)) {
                // line 31
                echo "
                            <tr>
                                <td>
                                    ";
                // line 34
                echo twig_escape_filter($this->env, $this->getAttribute($context["s"], "id", []), "html", null, true);
                echo "
                                </td>
                                <td>
                                    ";
                // line 37
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["s"], "user", []), "username", []), "html", null, true);
                echo "
                                </td>
                                <td><a href=\"";
                // line 39
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(("Upload/" . $this->getAttribute($context["s"], "emploit", []))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["s"], "nEmploi", []), "html", null, true);
                echo "</a></td>

                                <td>
                                    <a href=\"";
                // line 42
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("Emploi_Enseigant_delete", ["id" => $this->getAttribute($context["s"], "id", [])]), "html", null, true);
                echo "\">Supprimer</a><br>
                                </td>



                            </tr>
                                ";
            } else {
                // line 49
                echo "                                ";
            }
            // line 50
            echo "                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['s'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 51
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
        return "MatierBundle:Emploi:AffichierEmploiEnseignant.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 51,  132 => 50,  129 => 49,  119 => 42,  111 => 39,  106 => 37,  100 => 34,  95 => 31,  92 => 30,  88 => 29,  60 => 3,  51 => 2,  29 => 1,);
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
                <h4 class=\"card-title\">Liste Emplois Enseignant</h4>

                <div class=\"table-responsive pt-3\">
                    <table class=\"table table-bordered\">
                        <thead>
                        <tr>
                            <th>
                                id
                            </th>
                            <th>
                                Enseignant
                            </th>
                            <th>
                                Nom Emploi
                            </th>

                            <th>
                                Action
                            </th>
                        </tr>
                        </thead>
                        <tbody>
                        {% for s in empl %}
                            {% if s.classe == null  %}

                            <tr>
                                <td>
                                    {{ s.id }}
                                </td>
                                <td>
                                    {{ s.user.username }}
                                </td>
                                <td><a href=\"{{ asset('Upload/' ~ s.emploit) }}\">{{ s.nEmploi }}</a></td>

                                <td>
                                    <a href=\"{{ path('Emploi_Enseigant_delete',{'id':s.id}) }}\">Supprimer</a><br>
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
{% endblock %}", "MatierBundle:Emploi:AffichierEmploiEnseignant.html.twig", "C:\\wamp64\\www\\Ecole\\src\\MatierBundle/Resources/views/Emploi/AffichierEmploiEnseignant.html.twig");
    }
}
