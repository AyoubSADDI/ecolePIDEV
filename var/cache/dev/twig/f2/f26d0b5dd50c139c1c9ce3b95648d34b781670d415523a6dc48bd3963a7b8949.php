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

/* MonLivreBundle:Categorie:AfficherCategorie.html.twig */
class __TwigTemplate_1576904dbcbdea5f85bb13dd7360a59061ccb17962ef59ed1c835cf3aca9df93 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "MonLivreBundle:Categorie:AfficherCategorie.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "MonLivreBundle:Categorie:AfficherCategorie.html.twig"));

        $this->parent = $this->loadTemplate("@User/Page_Employer.html.twig", "MonLivreBundle:Categorie:AfficherCategorie.html.twig", 1);
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

    <div class=\"col-lg-12 grid-margin stretch-card\">
        <div class=\"card\">
            <div class=\"card-body\">
                <h4 class=\"card-title\">Liste Categories</h4>

                <div class=\"table-responsive pt-3\">

                    <table class=\"table table-bordered\">
                        <thead>
                        <tr class=\"bg-primary change\">
                            <th>
                                id
                            </th>
                            <th>
                                Nom
                            </th>

                            <th>
                                Action
                            </th>
                        </tr>
                        </thead>
                        <tbody id=\"amine\">

                        ";
        // line 29
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["cat"]) ? $context["cat"] : $this->getContext($context, "cat")));
        foreach ($context['_seq'] as $context["_key"] => $context["c"]) {
            // line 30
            echo "                            <tr>
                                <td>
                                    ";
            // line 32
            echo twig_escape_filter($this->env, $this->getAttribute($context["c"], "id", []), "html", null, true);
            echo "
                                </td>
                                <td>
                                    ";
            // line 35
            echo twig_escape_filter($this->env, $this->getAttribute($context["c"], "nomCat", []), "html", null, true);
            echo "
                                </td>

                                <td>
                                <a class=\"btn btn-danger a-btn-slide-text\" href=\"";
            // line 39
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("categorie_delete", ["id" => $this->getAttribute($context["c"], "id", [])]), "html", null, true);
            echo "\">
                                    <span class=\"fas fa-minus-circle\" aria-hidden=\"true\"></span>
                                    <span><strong> Supprimer</strong></span></a>
                                </td>

                            </tr>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['c'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 46
        echo "                        </tbody>
                    </table>
                    <div class=\"navigation text-center\" >
                    </div>
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
        return "MonLivreBundle:Categorie:AfficherCategorie.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  122 => 46,  109 => 39,  102 => 35,  96 => 32,  92 => 30,  88 => 29,  60 => 3,  51 => 2,  29 => 1,);
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


    <div class=\"col-lg-12 grid-margin stretch-card\">
        <div class=\"card\">
            <div class=\"card-body\">
                <h4 class=\"card-title\">Liste Categories</h4>

                <div class=\"table-responsive pt-3\">

                    <table class=\"table table-bordered\">
                        <thead>
                        <tr class=\"bg-primary change\">
                            <th>
                                id
                            </th>
                            <th>
                                Nom
                            </th>

                            <th>
                                Action
                            </th>
                        </tr>
                        </thead>
                        <tbody id=\"amine\">

                        {% for c in cat %}
                            <tr>
                                <td>
                                    {{ c.id }}
                                </td>
                                <td>
                                    {{ c.nomCat }}
                                </td>

                                <td>
                                <a class=\"btn btn-danger a-btn-slide-text\" href=\"{{ path('categorie_delete',{'id':c.id}) }}\">
                                    <span class=\"fas fa-minus-circle\" aria-hidden=\"true\"></span>
                                    <span><strong> Supprimer</strong></span></a>
                                </td>

                            </tr>
                        {% endfor %}
                        </tbody>
                    </table>
                    <div class=\"navigation text-center\" >
                    </div>
                </div>
            </div>
        </div>
    </div>
{% endblock %}", "MonLivreBundle:Categorie:AfficherCategorie.html.twig", "C:\\wamp64\\www\\Ecole\\src\\MonLivreBundle/Resources/views/Categorie/AfficherCategorie.html.twig");
    }
}
