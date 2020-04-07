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

/* MatierBundle:Front:AfficherCourFront.html.twig */
class __TwigTemplate_86ccd7ae89552119cb0990dd99cadb3d6abfa33e3c237d717c0f64f21563968b extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "MatierBundle:Front:AfficherCourFront.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "MatierBundle:Front:AfficherCourFront.html.twig"));

        $this->parent = $this->loadTemplate("@User/Page_Apprenant.html.twig", "MatierBundle:Front:AfficherCourFront.html.twig", 1);
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

        echo "  Mon Cour<br><div class=\"navigation\">
    ";
        // line 3
        echo $this->env->getExtension('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension')->render($this->env, ($context["cour"] ?? $this->getContext($context, "cour")));
        echo "
</div> ";
        
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
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["cour"] ?? $this->getContext($context, "cour")));
        foreach ($context['_seq'] as $context["_key"] => $context["c"]) {
            // line 7
            echo "        ";
            if (($this->getAttribute($context["c"], "classe", []) == $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "classe", []))) {
                // line 8
                echo "            <div class='benefits_area wave'>
            <div class='cloud_wrapper'>
                <canvas class='cloud' data-bg-color='#f9e8b2' data-line-color='#ffffff' data-pattern-src='";
                // line 10
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Front/img/dots-pattern.png"), "html", null, true);
                echo "'></canvas>
            </div>
<div class='container'>
    <div class='benefits_container'>
        <!-- benefits item -->
        <div class=\"cws-widget\">
            <div class=\"widget-title\">
                <div class='widget_title_box'>
                    <div class='widget_title_text_section'>";
                // line 18
                echo twig_escape_filter($this->env, $this->getAttribute($context["c"], "nom", []), "html", null, true);
                echo "</div>
                </div>
            </div>
            <div class='cws_textwidget_content'>
                <div class='text'>";
                // line 22
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["c"], "matiere", []), "nomMatiere", []), "html", null, true);
                echo "</div>
                <div class='link'><a href='";
                // line 23
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(("Upload/" . $this->getAttribute($context["c"], "courPdf", []))), "html", null, true);
                echo "' class='cws_button small'>See Cour</a></div>
            </div>
        </div>
        </div>
    </div>

            ";
            }
            // line 30
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['c'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 31
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "MatierBundle:Front:AfficherCourFront.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  134 => 31,  128 => 30,  118 => 23,  114 => 22,  107 => 18,  96 => 10,  92 => 8,  89 => 7,  84 => 6,  75 => 5,  63 => 3,  52 => 2,  30 => 1,);
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
{% block titre  %}  Mon Cour<br><div class=\"navigation\">
    {{ knp_pagination_render(cour) }}
</div> {% endblock %}
{% block body %}
    {% for c in cour %}
        {% if c.classe == user.classe %}
            <div class='benefits_area wave'>
            <div class='cloud_wrapper'>
                <canvas class='cloud' data-bg-color='#f9e8b2' data-line-color='#ffffff' data-pattern-src='{{ asset('Front/img/dots-pattern.png') }}'></canvas>
            </div>
<div class='container'>
    <div class='benefits_container'>
        <!-- benefits item -->
        <div class=\"cws-widget\">
            <div class=\"widget-title\">
                <div class='widget_title_box'>
                    <div class='widget_title_text_section'>{{ c.nom}}</div>
                </div>
            </div>
            <div class='cws_textwidget_content'>
                <div class='text'>{{ c.matiere.nomMatiere }}</div>
                <div class='link'><a href='{{ asset('Upload/' ~ c.courPdf) }}' class='cws_button small'>See Cour</a></div>
            </div>
        </div>
        </div>
    </div>

            {% endif %}
        {% endfor %}

{% endblock %}", "MatierBundle:Front:AfficherCourFront.html.twig", "C:\\wamp64\\www\\Ecole\\src\\MatierBundle/Resources/views/Front/AfficherCourFront.html.twig");
    }
}
