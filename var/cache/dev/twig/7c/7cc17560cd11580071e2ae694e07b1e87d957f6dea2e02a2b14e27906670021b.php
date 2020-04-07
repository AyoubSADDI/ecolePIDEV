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

/* ClasseBundle:Front:AffichierEnfantParent.html.twig */
class __TwigTemplate_93678d678f931652e3164ce973b5e66699146bf254103956c369cf19e64f9caa extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "ClasseBundle:Front:AffichierEnfantParent.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "ClasseBundle:Front:AffichierEnfantParent.html.twig"));

        $this->parent = $this->loadTemplate("@User/Page_Parent.html.twig", "ClasseBundle:Front:AffichierEnfantParent.html.twig", 1);
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

        echo " Our Kids ";
        
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
<div class=\"col-lg-20 grid-margin stretch-card\" style=\"text-align: center;\">
    <div class=\"card\">
        <div class=\"card-body\">

            <div class=\"table-responsive pt-3\">
                <table class=\"table table-bordered\">
                    <thead>
                    <tr>
                        <th>
                            id
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
        // line 39
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["class"] ?? $this->getContext($context, "class")));
        foreach ($context['_seq'] as $context["_key"] => $context["s"]) {
            // line 40
            echo "
                                <tr>
                                <td>
                                    ";
            // line 43
            echo twig_escape_filter($this->env, $this->getAttribute($context["s"], "id", []), "html", null, true);
            echo "
                                </td>

                                <td>
                                    ";
            // line 47
            echo twig_escape_filter($this->env, $this->getAttribute($context["s"], "username", []), "html", null, true);
            echo "

                                </td>
                                <td>
                                    ";
            // line 51
            echo twig_escape_filter($this->env, $this->getAttribute($context["s"], "prenom", []), "html", null, true);
            echo "

                                </td>
                                <td>
                                    ";
            // line 55
            echo twig_escape_filter($this->env, $this->getAttribute($context["s"], "email", []), "html", null, true);
            echo "

                                </td>
                                <td>
                                    ";
            // line 59
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["s"], "DateNaissance", [])), "html", null, true);
            echo "

                                </td>

                                <td>
                                    ";
            // line 64
            echo twig_escape_filter($this->env, $this->getAttribute($context["s"], "niveau", []), "html", null, true);
            echo "
                                </td>

                                <td>
                                    <a href=\"";
            // line 68
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("FrontNote", ["id" => $this->getAttribute($context["s"], "id", [])]), "html", null, true);
            echo "\">Info</a><br>
                                </td>


                        </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['s'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 74
        echo "                    </tbody>
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
        return "ClasseBundle:Front:AffichierEnfantParent.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  180 => 74,  168 => 68,  161 => 64,  153 => 59,  146 => 55,  139 => 51,  132 => 47,  125 => 43,  120 => 40,  116 => 39,  79 => 4,  70 => 3,  52 => 2,  30 => 1,);
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
{% block titre  %} Our Kids {% endblock %}
{% block body %}

<div class=\"col-lg-20 grid-margin stretch-card\" style=\"text-align: center;\">
    <div class=\"card\">
        <div class=\"card-body\">

            <div class=\"table-responsive pt-3\">
                <table class=\"table table-bordered\">
                    <thead>
                    <tr>
                        <th>
                            id
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
                    {% for s in class %}

                                <tr>
                                <td>
                                    {{ s.id }}
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
                                    <a href=\"{{ path('FrontNote',{'id':s.id}) }}\">Info</a><br>
                                </td>


                        </tr>
                    {% endfor %}
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

{% endblock %}", "ClasseBundle:Front:AffichierEnfantParent.html.twig", "C:\\wamp64\\www\\Ecole\\src\\ClasseBundle/Resources/views/Front/AffichierEnfantParent.html.twig");
    }
}
