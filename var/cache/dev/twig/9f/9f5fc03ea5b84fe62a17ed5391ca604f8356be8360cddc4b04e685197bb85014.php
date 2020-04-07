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

/* ClasseBundle:Front:AffichierMyInfo.html.twig */
class __TwigTemplate_919111e7523ef2404d5f735ece107cfa9fc77e91ff8297a8bdbafc2ebebd4bdd extends \Twig\Template
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
        return "@User/Page_Apprenant.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "ClasseBundle:Front:AffichierMyInfo.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "ClasseBundle:Front:AffichierMyInfo.html.twig"));

        $this->parent = $this->loadTemplate("@User/Page_Apprenant.html.twig", "ClasseBundle:Front:AffichierMyInfo.html.twig", 1);
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

        echo "  Kids's Note ";
        
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
                <h4 class=\"card-title\">Absence : ";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute(($context["absence"] ?? $this->getContext($context, "absence")), "nbAbsence", []), "html", null, true);
        echo "</h4>
                <h4 class=\"card-title\">Emploi : ";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["emploi"] ?? $this->getContext($context, "emploi")));
        foreach ($context['_seq'] as $context["_key"] => $context["e"]) {
            // line 11
            echo "                    ";
            if (($this->getAttribute($context["e"], "classe", []) == $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "classe", []))) {
                // line 12
                echo "                    <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(("Upload/" . $this->getAttribute($context["e"], "emploit", []))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["e"], "nEmploi", []), "html", null, true);
                echo "</a></h4>
                ";
            }
            // line 14
            echo "                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['e'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 15
        echo "


                <div class=\"table-responsive pt-3\">
                    <table class=\"table table-bordered\">
                        <thead>
                        <tr>

                            <th>
                                Matiére
                            </th>
                            <th>
                                coefficient
                            </th>
                            <th>
                                Note Orale
                            </th>

                            <th>
                                Note Ecrit
                            </th>
                            <th>
                                Moyenne
                            </th>

                        </tr>
                        </thead>
                        <tbody>
                        ";
        // line 43
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["note"] ?? $this->getContext($context, "note")));
        foreach ($context['_seq'] as $context["_key"] => $context["s"]) {
            // line 44
            echo "                            <tr>
                                <td>
                                    ";
            // line 46
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["s"], "matiere", []), "nomMatiere", []), "html", null, true);
            echo "
                                </td>
                                <td>
                                    ";
            // line 49
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["s"], "matiere", []), "coefficient", []), "html", null, true);
            echo "
                                </td>
                                <td>
                                    ";
            // line 52
            echo twig_escape_filter($this->env, $this->getAttribute($context["s"], "noteOrale", []), "html", null, true);
            echo "
                                </td>
                                <td>
                                    ";
            // line 55
            echo twig_escape_filter($this->env, $this->getAttribute($context["s"], "noteEcrit", []), "html", null, true);
            echo "

                                </td>
                                <td>
                                    ";
            // line 59
            echo twig_escape_filter($this->env, $this->getAttribute($context["s"], "moyenne", []), "html", null, true);
            echo "

                                </td>

                            </tr>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['s'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 65
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
        return "ClasseBundle:Front:AffichierMyInfo.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  186 => 65,  174 => 59,  167 => 55,  161 => 52,  155 => 49,  149 => 46,  145 => 44,  141 => 43,  111 => 15,  105 => 14,  97 => 12,  94 => 11,  90 => 10,  86 => 9,  79 => 4,  70 => 3,  52 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"@User/Page_Apprenant.html.twig\" %}
{% block titre  %}  Kids's Note {% endblock %}
{% block body %}


    <div class=\"col-lg-20 grid-margin stretch-card\">
        <div class=\"card\">
            <div class=\"card-body\">
                <h4 class=\"card-title\">Absence : {{ absence.nbAbsence }}</h4>
                <h4 class=\"card-title\">Emploi : {% for e in emploi %}
                    {% if e.classe == user.classe %}
                    <a href=\"{{ asset('Upload/' ~ e.emploit) }}\">{{ e.nEmploi }}</a></h4>
                {% endif %}
                {% endfor %}



                <div class=\"table-responsive pt-3\">
                    <table class=\"table table-bordered\">
                        <thead>
                        <tr>

                            <th>
                                Matiére
                            </th>
                            <th>
                                coefficient
                            </th>
                            <th>
                                Note Orale
                            </th>

                            <th>
                                Note Ecrit
                            </th>
                            <th>
                                Moyenne
                            </th>

                        </tr>
                        </thead>
                        <tbody>
                        {% for s in note %}
                            <tr>
                                <td>
                                    {{ s.matiere.nomMatiere }}
                                </td>
                                <td>
                                    {{ s.matiere.coefficient }}
                                </td>
                                <td>
                                    {{ s.noteOrale }}
                                </td>
                                <td>
                                    {{ s.noteEcrit }}

                                </td>
                                <td>
                                    {{ s.moyenne }}

                                </td>

                            </tr>
                        {% endfor %}
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

{% endblock %}", "ClasseBundle:Front:AffichierMyInfo.html.twig", "C:\\wamp64\\www\\Ecole\\src\\ClasseBundle/Resources/views/Front/AffichierMyInfo.html.twig");
    }
}
