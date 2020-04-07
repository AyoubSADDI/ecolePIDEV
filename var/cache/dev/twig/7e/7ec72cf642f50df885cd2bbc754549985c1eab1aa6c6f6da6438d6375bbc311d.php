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

/* MonLivreBundle:Monlivre:AfficherMonLivre.html.twig */
class __TwigTemplate_c87c8876b2142be6d427d15d4753a8b83775a6585233042f3903f493a8b6dd14 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "MonLivreBundle:Monlivre:AfficherMonLivre.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "MonLivreBundle:Monlivre:AfficherMonLivre.html.twig"));

        $this->parent = $this->loadTemplate("@User/Page_Employer.html.twig", "MonLivreBundle:Monlivre:AfficherMonLivre.html.twig", 1);
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
                                Cour
                            </th>
                            <th>
                                Matier
                            </th>
                            <th>
                                Categorie
                            </th>
                            <th>
                              Discription
                            </th>
                            <th>
                                Action
                            </th>
                        </tr>
                        </thead>
                        <tbody id=\"hi\">
                        ";
        // line 35
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["cour"]) ? $context["cour"] : $this->getContext($context, "cour")));
        foreach ($context['_seq'] as $context["_key"] => $context["s"]) {
            // line 36
            echo "
                            <tr>
                                <td>
                                    ";
            // line 39
            echo twig_escape_filter($this->env, $this->getAttribute($context["s"], "id", []), "html", null, true);
            echo "
                                </td>
                                    <td><a href=\"";
            // line 41
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(("Upload/" . $this->getAttribute($context["s"], "video", []))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["s"], "NomCour", []), "html", null, true);
            echo "</a></td>
                                <td>
                                    ";
            // line 43
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["s"], "matiere", []), "matiere", []), "html", null, true);
            echo "
                                </td>
                                 <td>
                                        ";
            // line 46
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["s"], "matiere", []), "Categorie", []), "nomCat", []), "html", null, true);
            echo "
                                   </td>
                                         <td>
                              ";
            // line 49
            echo twig_escape_filter($this->env, $this->getAttribute($context["s"], "description", []), "html", null, true);
            echo "
                                 </td>

                                <td>
                                    <a href=\"";
            // line 53
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("CourMonLivre_delete", ["id" => $this->getAttribute($context["s"], "id", [])]), "html", null, true);
            echo "\">Supprimer</a><br>
                                    <a href=\"";
            // line 54
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("CourMonLivre_Modifier", ["id" => $this->getAttribute($context["s"], "id", [])]), "html", null, true);
            echo "\">Modifier</a><br>

                                </td>



                            </tr>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['s'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 62
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
        return "MonLivreBundle:Monlivre:AfficherMonLivre.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  152 => 62,  138 => 54,  134 => 53,  127 => 49,  121 => 46,  115 => 43,  108 => 41,  103 => 39,  98 => 36,  94 => 35,  60 => 3,  51 => 2,  29 => 1,);
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
                                Cour
                            </th>
                            <th>
                                Matier
                            </th>
                            <th>
                                Categorie
                            </th>
                            <th>
                              Discription
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
                                    <td><a href=\"{{ asset('Upload/' ~ s.video) }}\">{{ s.NomCour }}</a></td>
                                <td>
                                    {{ s.matiere.matiere }}
                                </td>
                                 <td>
                                        {{ s.matiere.Categorie.nomCat }}
                                   </td>
                                         <td>
                              {{ s.description}}
                                 </td>

                                <td>
                                    <a href=\"{{ path('CourMonLivre_delete',{'id':s.id}) }}\">Supprimer</a><br>
                                    <a href=\"{{ path('CourMonLivre_Modifier',{'id':s.id}) }}\">Modifier</a><br>

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

{% endblock %}", "MonLivreBundle:Monlivre:AfficherMonLivre.html.twig", "C:\\wamp64\\www\\Ecole\\src\\MonLivreBundle/Resources/views/Monlivre/AfficherMonLivre.html.twig");
    }
}
