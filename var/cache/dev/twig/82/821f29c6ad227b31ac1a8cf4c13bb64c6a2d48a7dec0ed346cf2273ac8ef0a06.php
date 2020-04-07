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

/* UserBundle:Admin:AjoutEmployer.html.twig */
class __TwigTemplate_c7158f5796361fc24d1f18934f2032d494d6f4fa2864027ccc2a485828d6419e extends \Twig\Template
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
        return "@User/Page_Admin.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "UserBundle:Admin:AjoutEmployer.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "UserBundle:Admin:AjoutEmployer.html.twig"));

        $this->parent = $this->loadTemplate("@User/Page_Admin.html.twig", "UserBundle:Admin:AjoutEmployer.html.twig", 1);
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
        echo "    ";
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start', ["method" => "post", "action" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("Ajouter_Employer"), "attr" => ["class" => "register-form"]]);
        echo "


    <div class=\"col-12 grid-margin stretch-card\">
    <div class=\"card\">
        <div class=\"card-body\">
            <h4 class=\"card-title\">Ajouter Employer</h4>
            <p class=\"card-description\">
            </p>
            <div class=\"form-group\">
                <label for=\"name\">Nom :</label>
                ";
        // line 14
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "username", []), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "

            </div>
            <div class=\"form-group\">
                <label for=\"father_name\">Prenom :</label>
                ";
        // line 19
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "prenom", []), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
            </div>
        <div class=\"form-group\">
            <label for=\"address\">Email :</label>
            ";
        // line 23
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "email", []), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
        </div>
        <div class=\"form-group\">
            <label for=\"father_name\">Cin :</label>
            ";
        // line 27
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "cin", []), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
        </div>
        <div class=\"form-group\">
            <label for=\"address\">Date De Naisssance :</label>
            ";
        // line 31
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "dateNaissance", []), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
        </div>
        <div class=\"form-group\">
            <label for=\"address\">Tel :</label>
            ";
        // line 35
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "tel", []), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
        </div>
        <div class=\"form-group\">
            <label for=\"gender\" class=\"radio-label\">Sex :</label>
            ";
        // line 39
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "sexe", []), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "

        </div>
        <div class=\"form-group\">
            <label for=\"gender\" class=\"radio-label\">Password :</label>
            ";
        // line 44
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "plainPassword", []), "first", []), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "

        </div>
        <div class=\"form-group\">
            <label for=\"gender\" class=\"radio-label\">confirmer :</label>
            ";
        // line 49
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "plainPassword", []), "second", []), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "

        </div>


        <input type=\"submit\" value=\"Envoyer\" class=\" btn btn-primary mr-2\"/>

    </div>
    ";
        // line 57
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "


    </div>
    </div>


";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "UserBundle:Admin:AjoutEmployer.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  145 => 57,  134 => 49,  126 => 44,  118 => 39,  111 => 35,  104 => 31,  97 => 27,  90 => 23,  83 => 19,  75 => 14,  60 => 3,  51 => 2,  29 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"@User/Page_Admin.html.twig\" %}
{% block body %}
    {{ form_start(form, {'method': 'post', 'action': path('Ajouter_Employer'), 'attr': {'class': 'register-form'}}) }}


    <div class=\"col-12 grid-margin stretch-card\">
    <div class=\"card\">
        <div class=\"card-body\">
            <h4 class=\"card-title\">Ajouter Employer</h4>
            <p class=\"card-description\">
            </p>
            <div class=\"form-group\">
                <label for=\"name\">Nom :</label>
                {{ form_widget(form.username, { 'attr': {'class': 'form-control'} }) }}

            </div>
            <div class=\"form-group\">
                <label for=\"father_name\">Prenom :</label>
                {{ form_widget(form.prenom, { 'attr': {'class': 'form-control'} }) }}
            </div>
        <div class=\"form-group\">
            <label for=\"address\">Email :</label>
            {{ form_widget(form.email, { 'attr': {'class': 'form-control'} }) }}
        </div>
        <div class=\"form-group\">
            <label for=\"father_name\">Cin :</label>
            {{ form_widget(form.cin, { 'attr': {'class': 'form-control'} }) }}
        </div>
        <div class=\"form-group\">
            <label for=\"address\">Date De Naisssance :</label>
            {{ form_widget(form.dateNaissance, { 'attr': {'class': 'form-control'} }) }}
        </div>
        <div class=\"form-group\">
            <label for=\"address\">Tel :</label>
            {{ form_widget(form.tel, { 'attr': {'class': 'form-control'} }) }}
        </div>
        <div class=\"form-group\">
            <label for=\"gender\" class=\"radio-label\">Sex :</label>
            {{ form_widget(form.sexe, { 'attr': {'class': 'form-control'} }) }}

        </div>
        <div class=\"form-group\">
            <label for=\"gender\" class=\"radio-label\">Password :</label>
            {{ form_widget(form.plainPassword.first, { 'attr': {'class': 'form-control'} }) }}

        </div>
        <div class=\"form-group\">
            <label for=\"gender\" class=\"radio-label\">confirmer :</label>
            {{ form_widget(form.plainPassword.second, { 'attr': {'class': 'form-control'} }) }}

        </div>


        <input type=\"submit\" value=\"Envoyer\" class=\" btn btn-primary mr-2\"/>

    </div>
    {{ form_end(form) }}


    </div>
    </div>


{% endblock %}", "UserBundle:Admin:AjoutEmployer.html.twig", "C:\\wamp64\\www\\Ecole\\src\\UserBundle/Resources/views/Admin/AjoutEmployer.html.twig");
    }
}
