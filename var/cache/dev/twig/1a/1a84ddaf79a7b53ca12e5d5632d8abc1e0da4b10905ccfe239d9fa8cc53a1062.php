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

/* MatierBundle:Cour:AfficherCour.html.twig */
class __TwigTemplate_0b9b5e7485f800cafdf7ce835ce269e93add2a72f862f8f7d5a74dfe2da98c8c extends \Twig\Template
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
        return "@User/Page_Enseignant.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "MatierBundle:Cour:AfficherCour.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "MatierBundle:Cour:AfficherCour.html.twig"));

        $this->parent = $this->loadTemplate("@User/Page_Enseignant.html.twig", "MatierBundle:Cour:AfficherCour.html.twig", 1);
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
                <h4 class=\"card-title\">Liste Cour</h4>
                <input class=\"form-control\" id=\"myInput\" type=\"text\" id=\"navbar-search-input\" placeholder=\"Search now\" aria-label=\"search\" aria-describedby=\"search\">

                <div class=\"table-responsive pt-3\">
                    <table class=\"table table-bordered\">
                        <thead>
                        <tr>
                            <th>
                                id
                            </th>
                            <th>
                                Class
                            </th>
                            <th>
                                Matier
                            </th>
                            <th>
                                Cours
                            </th>
                            <th>
                                Action
                            </th>
                        </tr>
                        </thead>
                        <tbody id=\"hi\">
                        ";
        // line 32
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["cour"] ?? $this->getContext($context, "cour")));
        foreach ($context['_seq'] as $context["_key"] => $context["s"]) {
            // line 33
            echo "
                            <tr>
                                <td>
                                    ";
            // line 36
            echo twig_escape_filter($this->env, $this->getAttribute($context["s"], "id", []), "html", null, true);
            echo "
                                </td>
                                <td>
                                    ";
            // line 39
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["s"], "classe", []), "niveau", []), "html", null, true);
            echo "/";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["s"], "classe", []), "type", []), "html", null, true);
            echo "
                                </td>
                                <td>
                                    ";
            // line 42
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["s"], "matiere", []), "nomMatiere", []), "html", null, true);
            echo "
                                </td>

                                <td><a href=\"";
            // line 45
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(("Upload/" . $this->getAttribute($context["s"], "courPdf", []))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["s"], "nom", []), "html", null, true);
            echo "</a></td>
                                <td>
                                    <a href=\"";
            // line 47
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("delete_Cour", ["id" => $this->getAttribute($context["s"], "id", [])]), "html", null, true);
            echo "\">Supprimer</a><br>
                                    <a href=\"";
            // line 48
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("Modifier_Cour", ["id" => $this->getAttribute($context["s"], "id", [])]), "html", null, true);
            echo "\">Modifier</a><br>

                                </td>



                            </tr>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['s'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 56
        echo "                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js\"></script>
    <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js\"></script>
    <script>
        \$(document).ready(function(){
            \$(\"#myInput\").on(\"keyup\", function() {
                var value = \$(this).val().toLowerCase();
                \$(\"#hi tr\").filter(function() {
                    \$(this).toggle(\$(this).text().toLowerCase().indexOf(value) > -1)
                });
            });
        });
    </script>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "MatierBundle:Cour:AfficherCour.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  145 => 56,  131 => 48,  127 => 47,  120 => 45,  114 => 42,  106 => 39,  100 => 36,  95 => 33,  91 => 32,  60 => 3,  51 => 2,  29 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"@User/Page_Enseignant.html.twig\" %}
{% block body %}

    <div class=\"col-lg-20 grid-margin stretch-card\">
        <div class=\"card\">
            <div class=\"card-body\">
                <h4 class=\"card-title\">Liste Cour</h4>
                <input class=\"form-control\" id=\"myInput\" type=\"text\" id=\"navbar-search-input\" placeholder=\"Search now\" aria-label=\"search\" aria-describedby=\"search\">

                <div class=\"table-responsive pt-3\">
                    <table class=\"table table-bordered\">
                        <thead>
                        <tr>
                            <th>
                                id
                            </th>
                            <th>
                                Class
                            </th>
                            <th>
                                Matier
                            </th>
                            <th>
                                Cours
                            </th>
                            <th>
                                Action
                            </th>
                        </tr>
                        </thead>
                        <tbody id=\"hi\">
                        {% for s in cour %}

                            <tr>
                                <td>
                                    {{ s.id }}
                                </td>
                                <td>
                                    {{ s.classe.niveau }}/{{ s.classe.type }}
                                </td>
                                <td>
                                    {{ s.matiere.nomMatiere }}
                                </td>

                                <td><a href=\"{{ asset('Upload/' ~ s.courPdf) }}\">{{ s.nom }}</a></td>
                                <td>
                                    <a href=\"{{ path('delete_Cour',{'id':s.id}) }}\">Supprimer</a><br>
                                    <a href=\"{{ path('Modifier_Cour',{'id':s.id}) }}\">Modifier</a><br>

                                </td>



                            </tr>
                        {% endfor %}
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js\"></script>
    <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js\"></script>
    <script>
        \$(document).ready(function(){
            \$(\"#myInput\").on(\"keyup\", function() {
                var value = \$(this).val().toLowerCase();
                \$(\"#hi tr\").filter(function() {
                    \$(this).toggle(\$(this).text().toLowerCase().indexOf(value) > -1)
                });
            });
        });
    </script>

{% endblock %}", "MatierBundle:Cour:AfficherCour.html.twig", "C:\\wamp64\\www\\Ecole\\src\\MatierBundle/Resources/views/Cour/AfficherCour.html.twig");
    }
}
