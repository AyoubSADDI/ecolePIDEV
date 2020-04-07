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

/* MonLivreBundle:Front:AfficherMatiereDetailsFront.html.twig */
class __TwigTemplate_0e0ad51058db380e072eb7b42a730f6a1196173b808b1be368dcf265b7b9bb3c extends \Twig\Template
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
        // line 2
        return "@User/Page_Apprenant.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "MonLivreBundle:Front:AfficherMatiereDetailsFront.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "MonLivreBundle:Front:AfficherMatiereDetailsFront.html.twig"));

        $this->parent = $this->loadTemplate("@User/Page_Apprenant.html.twig", "MonLivreBundle:Front:AfficherMatiereDetailsFront.html.twig", 2);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 4
    public function block_titre($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "titre"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "titre"));

        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["mat"]) ? $context["mat"] : $this->getContext($context, "mat")), "matiere", []), "html", null, true);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <!-- steps -->
    <div class='grid_row clearfix' style='padding-top: 50px;padding-bottom: 50px;'>
        <div class='grid_col grid_col_6'>
            <div class='ce clearfix'>
                <div>
                    <ul class=\"checkmarks_style\">
                        <li>Nbr d'heure : ";
        // line 12
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["mat"]) ? $context["mat"] : $this->getContext($context, "mat")), "nbheure", []), "html", null, true);
        echo "</li>
                        <li> Categorie : ";
        // line 13
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["mat"]) ? $context["mat"] : $this->getContext($context, "mat")), "Categorie", []), "nomCat", []), "html", null, true);
        echo " </li>
    ";
        // line 14
        if (((isset($context["insc"]) ? $context["insc"] : $this->getContext($context, "insc")) == null)) {
            // line 15
            echo "        <p class=\"mb-0\"><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("PaticiperCour", ["id" => $this->getAttribute((isset($context["mat"]) ? $context["mat"] : $this->getContext($context, "mat")), "id", [])]), "html", null, true);
            echo "\" class=\"btn btn-success\">Inscrire <span class=\"ion-ios-arrow-round-forward\"></span></a></p>
    ";
        } else {
            // line 17
            echo "
        <p class=\"mb-0\"><a href=\"";
            // line 18
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("DésinscriptionCour", ["id" => $this->getAttribute((isset($context["mat"]) ? $context["mat"] : $this->getContext($context, "mat")), "id", [])]), "html", null, true);
            echo "\" class=\"btn btn-danger\">Désinscrire <span class=\"ion-ios-arrow-round-forward\"></span></a></p>
";
        }
        // line 20
        echo "
        </ul>
                </div>
            </div>
        </div>
        <div class='grid_col grid_col_6'>
            <div class='ce clearfix'>
                <div>
                    <p><img class=\"aligncenter size-full image-type noborder\" src=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Upload/"), "html", null, true);
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["mat"]) ? $context["mat"] : $this->getContext($context, "mat")), "nomfile", []), "html", null, true);
        echo "\" alt=\"nanny\" width=\"1100\" height=\"550\" /></p>
                </div>
            </div>
        </div>
    </div>

    ";
        // line 34
        if (((isset($context["insc"]) ? $context["insc"] : $this->getContext($context, "insc")) == null)) {
            // line 35
            echo "        ";
        } else {
            // line 36
            echo "
            <div class='grid_row clearfix'>
            <!-- sevice item -->
            ";
            // line 39
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["livre"]) ? $context["livre"] : $this->getContext($context, "livre")));
            foreach ($context['_seq'] as $context["_key"] => $context["e"]) {
                // line 40
                echo "                <div class='grid_col grid_col_4'>

                    <div class='ce clearfix'>

                        <div>
                            <h2 class=\"ce_title heading\" style=\"text-align: center;\"><a href=\"";
                // line 45
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(("Upload/" . $this->getAttribute($context["e"], "video", []))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["e"], "NomCour", []), "html", null, true);
                echo "</a> </h2>
                            <p style=\"text-align: center;\">  Description :";
                // line 46
                echo twig_escape_filter($this->env, $this->getAttribute($context["e"], "description", []), "html", null, true);
                echo "</p>
                        </div>

                    </div>

                </div>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['e'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 52
            echo "    ";
        }
        // line 53
        echo "



";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "MonLivreBundle:Front:AfficherMatiereDetailsFront.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  175 => 53,  172 => 52,  159 => 46,  153 => 45,  146 => 40,  142 => 39,  137 => 36,  134 => 35,  132 => 34,  122 => 28,  112 => 20,  107 => 18,  104 => 17,  98 => 15,  96 => 14,  92 => 13,  88 => 12,  80 => 6,  71 => 5,  52 => 4,  30 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("
{% extends \"@User/Page_Apprenant.html.twig\" %}

{% block titre %} {{ mat.matiere}}{% endblock %}
{% block body %}
    <!-- steps -->
    <div class='grid_row clearfix' style='padding-top: 50px;padding-bottom: 50px;'>
        <div class='grid_col grid_col_6'>
            <div class='ce clearfix'>
                <div>
                    <ul class=\"checkmarks_style\">
                        <li>Nbr d'heure : {{ mat.nbheure }}</li>
                        <li> Categorie : {{ mat.Categorie.nomCat }} </li>
    {% if insc == null %}
        <p class=\"mb-0\"><a href=\"{{ path('PaticiperCour',{'id':mat.id}) }}\" class=\"btn btn-success\">Inscrire <span class=\"ion-ios-arrow-round-forward\"></span></a></p>
    {% else %}

        <p class=\"mb-0\"><a href=\"{{ path('DésinscriptionCour',{'id':mat.id}) }}\" class=\"btn btn-danger\">Désinscrire <span class=\"ion-ios-arrow-round-forward\"></span></a></p>
{% endif %}

        </ul>
                </div>
            </div>
        </div>
        <div class='grid_col grid_col_6'>
            <div class='ce clearfix'>
                <div>
                    <p><img class=\"aligncenter size-full image-type noborder\" src=\"{{ asset('Upload/')}}{{ mat.nomfile }}\" alt=\"nanny\" width=\"1100\" height=\"550\" /></p>
                </div>
            </div>
        </div>
    </div>

    {% if insc == null %}
        {% else %}

            <div class='grid_row clearfix'>
            <!-- sevice item -->
            {% for e in livre  %}
                <div class='grid_col grid_col_4'>

                    <div class='ce clearfix'>

                        <div>
                            <h2 class=\"ce_title heading\" style=\"text-align: center;\"><a href=\"{{ asset('Upload/' ~ e.video) }}\">{{ e.NomCour }}</a> </h2>
                            <p style=\"text-align: center;\">  Description :{{ e.description }}</p>
                        </div>

                    </div>

                </div>
            {% endfor %}    {% endif %}




{% endblock %}", "MonLivreBundle:Front:AfficherMatiereDetailsFront.html.twig", "C:\\wamp64\\www\\Ecole\\src\\MonLivreBundle/Resources/views/Front/AfficherMatiereDetailsFront.html.twig");
    }
}
