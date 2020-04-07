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

/* MonLivreBundle:Front:AfficherMatiereFront.html.twig */
class __TwigTemplate_bf98731a2e75127e9636d1d9895580b579ae3d9d86a6723eb5af1ea3a6e135e3 extends \Twig\Template
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
        // line 3
        return "@User/Page_Apprenant.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "MonLivreBundle:Front:AfficherMatiereFront.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "MonLivreBundle:Front:AfficherMatiereFront.html.twig"));

        $this->parent = $this->loadTemplate("@User/Page_Apprenant.html.twig", "MonLivreBundle:Front:AfficherMatiereFront.html.twig", 3);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 5
    public function block_titre($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "titre"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "titre"));

        echo " Our Matiere ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 6
    public function block_body($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 7
        echo "
    <div class='grid_row clearfix'>
        <!-- sevice item -->
        ";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["mat"]) ? $context["mat"] : $this->getContext($context, "mat")));
        foreach ($context['_seq'] as $context["_key"] => $context["e"]) {
            // line 11
            echo "            <div class='grid_col grid_col_4'>

                <div class='ce clearfix'>

                    <div>
                        <p style=\"text-align: center;\"><img class=\"aligncenter size-full image-type noborder\" src=\"";
            // line 16
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Upload/"), "html", null, true);
            echo twig_escape_filter($this->env, $this->getAttribute($context["e"], "nomfile", []), "html", null, true);
            echo "\" alt=\"babysitting\" width=\"150\" height=\"150\" /></p>
                        <h2 class=\"ce_title heading\" style=\"text-align: center;\">Nom :";
            // line 17
            echo twig_escape_filter($this->env, $this->getAttribute($context["e"], "matiere", []), "html", null, true);
            echo " </h2>
                        <p style=\"text-align: center;\">  Nombre D'heure :";
            // line 18
            echo twig_escape_filter($this->env, $this->getAttribute($context["e"], "nbheure", []), "html", null, true);
            echo "</p>
                        <p style=\"text-align: center;\"><a href='";
            // line 19
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("Front_AfficheMonCourDetails", ["id" => $this->getAttribute($context["e"], "id", [])]), "html", null, true);
            echo "' class='cws_button mini'>Details</a>
                    </div>

                </div>

            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['e'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 26
        echo "    </div>



";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "MonLivreBundle:Front:AfficherMatiereFront.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  121 => 26,  108 => 19,  104 => 18,  100 => 17,  95 => 16,  88 => 11,  84 => 10,  79 => 7,  70 => 6,  52 => 5,  30 => 3,);
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

{% block titre %} Our Matiere {% endblock %}
{% block body %}

    <div class='grid_row clearfix'>
        <!-- sevice item -->
        {% for e in mat  %}
            <div class='grid_col grid_col_4'>

                <div class='ce clearfix'>

                    <div>
                        <p style=\"text-align: center;\"><img class=\"aligncenter size-full image-type noborder\" src=\"{{ asset('Upload/')}}{{ e.nomfile }}\" alt=\"babysitting\" width=\"150\" height=\"150\" /></p>
                        <h2 class=\"ce_title heading\" style=\"text-align: center;\">Nom :{{ e.matiere }} </h2>
                        <p style=\"text-align: center;\">  Nombre D'heure :{{ e.nbheure }}</p>
                        <p style=\"text-align: center;\"><a href='{{ path('Front_AfficheMonCourDetails',{'id':e.id}) }}' class='cws_button mini'>Details</a>
                    </div>

                </div>

            </div>
        {% endfor %}
    </div>



{% endblock %}", "MonLivreBundle:Front:AfficherMatiereFront.html.twig", "C:\\wamp64\\www\\Ecole\\src\\MonLivreBundle/Resources/views/Front/AfficherMatiereFront.html.twig");
    }
}
