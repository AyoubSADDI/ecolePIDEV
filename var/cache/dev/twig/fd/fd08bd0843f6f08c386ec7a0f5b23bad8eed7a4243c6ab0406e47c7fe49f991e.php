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

/* ClasseBundle:Classe:AffichierAffecter.html.twig */
class __TwigTemplate_196cf4e726cbb2f8d8ea0cf806129565cb1d42a4f29160e71e0233b8c2ddd228 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "ClasseBundle:Classe:AffichierAffecter.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "ClasseBundle:Classe:AffichierAffecter.html.twig"));

        $this->parent = $this->loadTemplate("@User/Page_Employer.html.twig", "ClasseBundle:Classe:AffichierAffecter.html.twig", 1);
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
                <h4 class=\"card-title\">Liste Eléve</h4>

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
                                Abscence
                            </th>
                            <th>
                                Action
                            </th>
                        </tr>
                        </thead>
                        <tbody>
                        ";
        // line 45
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["class"] ?? $this->getContext($context, "class")));
        foreach ($context['_seq'] as $context["_key"] => $context["s"]) {
            // line 46
            echo "                                    <tr>

                                    <td>
                                        ";
            // line 49
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["s"], "apprenant", []), "id", []), "html", null, true);
            echo "
                                    </td>
                                    <td>
                                        ";
            // line 52
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["s"], "apprenant", []), "cin", []), "html", null, true);
            echo "
                                    </td>
                                    <td>
                                        ";
            // line 55
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["s"], "apprenant", []), "username", []), "html", null, true);
            echo "

                                    </td>
                                    <td>
                                        ";
            // line 59
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["s"], "apprenant", []), "prenom", []), "html", null, true);
            echo "

                                    </td>
                                    <td>
                                        ";
            // line 63
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["s"], "apprenant", []), "email", []), "html", null, true);
            echo "

                                    </td>
                                    <td>
                                        ";
            // line 67
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute($context["s"], "apprenant", []), "DateNaissance", [])), "html", null, true);
            echo "

                                    </td>

                                    <td>
                                        ";
            // line 72
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["s"], "apprenant", []), "niveau", []), "html", null, true);
            echo "
                                    </td>
                                        <td>
                                            ";
            // line 75
            echo twig_escape_filter($this->env, $this->getAttribute($context["s"], "nbAbsence", []), "html", null, true);
            echo "
                                        </td>
                                    <td>
                                        <a href=\"";
            // line 78
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("AjouterNote", ["id" => $this->getAttribute($this->getAttribute($context["s"], "apprenant", []), "id", [])]), "html", null, true);
            echo "\">Note</a><br>
                                        <a href=\"";
            // line 79
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("Absence", ["id" => ($context["id"] ?? $this->getContext($context, "id")), "idu" => $this->getAttribute($this->getAttribute($context["s"], "apprenant", []), "id", [])]), "html", null, true);
            echo "\">Abscence</a><br>
                                        <a href=\"";
            // line 80
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("AfficheNote", ["id" => $this->getAttribute($this->getAttribute($context["s"], "apprenant", []), "id", [])]), "html", null, true);
            echo "\">Details</a><br>
                                        <a href=\"";
            // line 81
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("deleteAffecter", ["id" => $this->getAttribute($context["s"], "id", [])]), "html", null, true);
            echo "\">Supprimer</a><br>



                                    </td>


                            </tr>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['s'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 90
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
        return "ClasseBundle:Classe:AffichierAffecter.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  193 => 90,  178 => 81,  174 => 80,  170 => 79,  166 => 78,  160 => 75,  154 => 72,  146 => 67,  139 => 63,  132 => 59,  125 => 55,  119 => 52,  113 => 49,  108 => 46,  104 => 45,  60 => 3,  51 => 2,  29 => 1,);
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
                <h4 class=\"card-title\">Liste Eléve</h4>

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
                                Abscence
                            </th>
                            <th>
                                Action
                            </th>
                        </tr>
                        </thead>
                        <tbody>
                        {% for s in class %}
                                    <tr>

                                    <td>
                                        {{ s.apprenant.id }}
                                    </td>
                                    <td>
                                        {{ s.apprenant.cin }}
                                    </td>
                                    <td>
                                        {{ s.apprenant.username }}

                                    </td>
                                    <td>
                                        {{ s.apprenant.prenom }}

                                    </td>
                                    <td>
                                        {{ s.apprenant.email }}

                                    </td>
                                    <td>
                                        {{ s.apprenant.DateNaissance|date }}

                                    </td>

                                    <td>
                                        {{ s.apprenant.niveau }}
                                    </td>
                                        <td>
                                            {{ s.nbAbsence }}
                                        </td>
                                    <td>
                                        <a href=\"{{ path('AjouterNote',{'id':s.apprenant.id}) }}\">Note</a><br>
                                        <a href=\"{{ path('Absence',{'id':id,'idu':s.apprenant.id}) }}\">Abscence</a><br>
                                        <a href=\"{{ path('AfficheNote',{'id':s.apprenant.id}) }}\">Details</a><br>
                                        <a href=\"{{ path('deleteAffecter',{'id':s.id}) }}\">Supprimer</a><br>



                                    </td>


                            </tr>
                        {% endfor %}
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
{% endblock %}", "ClasseBundle:Classe:AffichierAffecter.html.twig", "C:\\wamp64\\www\\Ecole\\src\\ClasseBundle/Resources/views/Classe/AffichierAffecter.html.twig");
    }
}
