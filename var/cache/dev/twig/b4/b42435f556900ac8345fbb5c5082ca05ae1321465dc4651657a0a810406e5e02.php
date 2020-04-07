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

/* UserBundle::AjoutMonEnfant.html.twig */
class __TwigTemplate_f6a28c8b014f9aa4b3787706ed5fc4ac0e86a4a551340bf854cd605ba58336be extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "UserBundle::AjoutMonEnfant.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "UserBundle::AjoutMonEnfant.html.twig"));

        $this->parent = $this->loadTemplate("@User/Page_Parent.html.twig", "UserBundle::AjoutMonEnfant.html.twig", 1);
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

        echo "  Inscrez Votre Enfant ";
        
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
        echo "    ";
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start', ["method" => "post", "action" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("Ajouter_Enfant"), "attr" => ["class" => "register-form"]]);
        echo "


    <div class=\"signup-form\">
        <div class=\"form-row\">
            <div class=\"form-group\">
                <label for=\"name\">Nom :</label>
                ";
        // line 11
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "username", []), 'widget', ["attr" => ["class" => "input--style-3"]]);
        echo "

            </div>
            <div class=\"form-group\">
                <label for=\"father_name\">Prenom :</label>
                ";
        // line 16
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "prenom", []), 'widget', ["attr" => ["class" => "input--style-3"]]);
        echo "
            </div>
        </div>
        <div class=\"form-group\">
            <label for=\"address\">Email :</label>
            ";
        // line 21
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "email", []), 'widget', ["attr" => ["class" => "input--style-3"]]);
        echo "
        </div>
        <div class=\"form-group\">
            <label for=\"address\">Date De Naisssance :</label>
            ";
        // line 25
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "dateNaissance", []), 'widget', ["attr" => ["class" => "input--style-3"]]);
        echo "
        </div>
        <div class=\"form-group\">
            <label for=\"address\">Tel :</label>
            ";
        // line 29
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "tel", []), 'widget', ["attr" => ["class" => "input--style-3"]]);
        echo "
        </div>
        <div class=\"form-group\">
            <label for=\"gender\" class=\"radio-label\">Sex :</label>
            ";
        // line 33
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "sexe", []), 'widget', ["attr" => ["class" => "input--style-3"]]);
        echo "

        </div>
        <div class=\"form-group\">
            <label for=\"gender\" class=\"radio-label\">Niveau :</label>
            ";
        // line 38
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "niveau", []), 'widget', ["attr" => ["class" => "input--style-3"]]);
        echo "

        </div>
        <div class=\"form-group\">
            <label for=\"gender\" class=\"radio-label\">Password :</label>
            ";
        // line 43
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "plainPassword", []), "first", []), 'widget', ["attr" => ["class" => "input--style-3"]]);
        echo "

        </div>
        <div class=\"form-group\">
            <label for=\"gender\" class=\"radio-label\">confirmer :</label>
            ";
        // line 48
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "plainPassword", []), "second", []), 'widget', ["attr" => ["class" => "input--style-3"]]);
        echo "

        </div>


        <input type=\"submit\" value=\"Envoyer\" class=\" btn btn-primary mr-2\"/>

    </div>
    ";
        // line 56
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "UserBundle::AjoutMonEnfant.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  162 => 56,  151 => 48,  143 => 43,  135 => 38,  127 => 33,  120 => 29,  113 => 25,  106 => 21,  98 => 16,  90 => 11,  79 => 4,  70 => 3,  52 => 2,  30 => 1,);
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
{% block titre  %}  Inscrez Votre Enfant {% endblock %}
{% block body %}
    {{ form_start(form, {'method': 'post', 'action': path('Ajouter_Enfant'), 'attr': {'class': 'register-form'}}) }}


    <div class=\"signup-form\">
        <div class=\"form-row\">
            <div class=\"form-group\">
                <label for=\"name\">Nom :</label>
                {{ form_widget(form.username, { 'attr': {'class': 'input--style-3'} }) }}

            </div>
            <div class=\"form-group\">
                <label for=\"father_name\">Prenom :</label>
                {{ form_widget(form.prenom, { 'attr': {'class': 'input--style-3'} }) }}
            </div>
        </div>
        <div class=\"form-group\">
            <label for=\"address\">Email :</label>
            {{ form_widget(form.email, { 'attr': {'class': 'input--style-3'} }) }}
        </div>
        <div class=\"form-group\">
            <label for=\"address\">Date De Naisssance :</label>
            {{ form_widget(form.dateNaissance, { 'attr': {'class': 'input--style-3'} }) }}
        </div>
        <div class=\"form-group\">
            <label for=\"address\">Tel :</label>
            {{ form_widget(form.tel, { 'attr': {'class': 'input--style-3'} }) }}
        </div>
        <div class=\"form-group\">
            <label for=\"gender\" class=\"radio-label\">Sex :</label>
            {{ form_widget(form.sexe, { 'attr': {'class': 'input--style-3'} }) }}

        </div>
        <div class=\"form-group\">
            <label for=\"gender\" class=\"radio-label\">Niveau :</label>
            {{ form_widget(form.niveau, { 'attr': {'class': 'input--style-3'} }) }}

        </div>
        <div class=\"form-group\">
            <label for=\"gender\" class=\"radio-label\">Password :</label>
            {{ form_widget(form.plainPassword.first, { 'attr': {'class': 'input--style-3'} }) }}

        </div>
        <div class=\"form-group\">
            <label for=\"gender\" class=\"radio-label\">confirmer :</label>
            {{ form_widget(form.plainPassword.second, { 'attr': {'class': 'input--style-3'} }) }}

        </div>


        <input type=\"submit\" value=\"Envoyer\" class=\" btn btn-primary mr-2\"/>

    </div>
    {{ form_end(form) }}

{% endblock %}", "UserBundle::AjoutMonEnfant.html.twig", "C:\\wamp64\\www\\Ecole\\src\\UserBundle/Resources/views/AjoutMonEnfant.html.twig");
    }
}
