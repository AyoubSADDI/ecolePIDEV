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

/* ClasseBundle:Note:AffichierNote.html.twig */
class __TwigTemplate_de4350c71f28cd46a5d9f99064af93645473200f58efcae61033ec549ece44bb extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "ClasseBundle:Note:AffichierNote.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "ClasseBundle:Note:AffichierNote.html.twig"));

        $this->parent = $this->loadTemplate("@User/Page_Employer.html.twig", "ClasseBundle:Note:AffichierNote.html.twig", 1);
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
                            <th>
                                Action
                            </th>
                        </tr>
                        </thead>
                        <tbody>
                        ";
        // line 36
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["note"] ?? $this->getContext($context, "note")));
        foreach ($context['_seq'] as $context["_key"] => $context["s"]) {
            // line 37
            echo "                            <tr>
                                <td>
                                    ";
            // line 39
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["s"], "matiere", []), "nomMatiere", []), "html", null, true);
            echo "
                                </td>
                                <td>
                                    ";
            // line 42
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["s"], "matiere", []), "coefficient", []), "html", null, true);
            echo "
                                </td>
                                <td>
                                    ";
            // line 45
            echo twig_escape_filter($this->env, $this->getAttribute($context["s"], "noteOrale", []), "html", null, true);
            echo "
                                </td>
                                <td>
                                    ";
            // line 48
            echo twig_escape_filter($this->env, $this->getAttribute($context["s"], "noteEcrit", []), "html", null, true);
            echo "

                                </td>
                                <td>
                                    ";
            // line 52
            echo twig_escape_filter($this->env, $this->getAttribute($context["s"], "moyenne", []), "html", null, true);
            echo "

                                </td>

                                <td>
                                    <a href=\"";
            // line 57
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ModifierNote", ["id" => $this->getAttribute($context["s"], "id", []), "idc" => $this->getAttribute($this->getAttribute($context["s"], "apprenant", []), "id", [])]), "html", null, true);
            echo "\">Modifier Note</a><br>
                                    <a href=\"";
            // line 58
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("deleteNote", ["id" => $this->getAttribute($context["s"], "id", [])]), "html", null, true);
            echo "\">Supprimer Note</a><br>

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
        return "ClasseBundle:Note:AffichierNote.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  153 => 65,  140 => 58,  136 => 57,  128 => 52,  121 => 48,  115 => 45,  109 => 42,  103 => 39,  99 => 37,  95 => 36,  60 => 3,  51 => 2,  29 => 1,);
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
                            <th>
                                Action
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

                                <td>
                                    <a href=\"{{ path('ModifierNote',{'id':s.id,'idc':s.apprenant.id}) }}\">Modifier Note</a><br>
                                    <a href=\"{{ path('deleteNote',{'id':s.id}) }}\">Supprimer Note</a><br>

                                </td>


                            </tr>
                        {% endfor %}
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
{% endblock %}", "ClasseBundle:Note:AffichierNote.html.twig", "C:\\wamp64\\www\\Ecole\\src\\ClasseBundle/Resources/views/Note/AffichierNote.html.twig");
    }
}
