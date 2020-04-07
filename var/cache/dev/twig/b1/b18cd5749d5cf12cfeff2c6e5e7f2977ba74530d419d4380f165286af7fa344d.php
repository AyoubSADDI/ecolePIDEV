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

/* MatierBundle:Matiere:ModifierMatiere.html.twig */
class __TwigTemplate_aa6c56262d58947c7c39c026b3397a93355faf435c8c6c1d9ceec7bc9dec24fa extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "MatierBundle:Matiere:ModifierMatiere.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "MatierBundle:Matiere:ModifierMatiere.html.twig"));

        $this->parent = $this->loadTemplate("@User/Page_Employer.html.twig", "MatierBundle:Matiere:ModifierMatiere.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

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
    ";
        // line 5
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start', ["attr" => ["id" => "form"]]);
        echo "
    <div class=\"col-12 grid-margin stretch-card\">
        <div class=\"card\">
            <div class=\"card-body\">
                <h4 class=\"card-title\">Classe</h4>
                <p class=\"card-description\">
                </p>
                <div class=\"form-group\">
                    <label for=\"exampleInputName1\">Matiére :</label>
                    ";
        // line 14
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "nomMatiere", []), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                </div>
                <div class=\"form-group\">
                    <label for=\"exampleInputEmail3\">Coefficient</label>
                    ";
        // line 18
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "coefficient", []), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                </div>

                <input type=\"submit\" value=\"Envoyer\" class=\" btn btn-primary mr-2\"/>
                ";
        // line 22
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "

            </div>
        </div>
    </div>
    <script>


        const form= document.getElementById('form');

        form.addEventListener('submit',(e)=> {
            let message = [];

            const matiere= document.getElementById('matierbundle_matiere_coefficient').value;

            console.log(matiere,'hyyy')

            if((matiere <= 0)||(matiere>10)){
                alert('verifier votre coefficient')
                message.push('Vérifier Votre date')


            }


            if(message.length> 0){

                e.preventDefault();
                errorElement.innerText = message.join(', ')
            }

        })





    </script>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "MatierBundle:Matiere:ModifierMatiere.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 22,  82 => 18,  75 => 14,  63 => 5,  60 => 4,  51 => 3,  29 => 1,);
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

    {{ form_start(form, {'attr': {'id': 'form'}}) }}
    <div class=\"col-12 grid-margin stretch-card\">
        <div class=\"card\">
            <div class=\"card-body\">
                <h4 class=\"card-title\">Classe</h4>
                <p class=\"card-description\">
                </p>
                <div class=\"form-group\">
                    <label for=\"exampleInputName1\">Matiére :</label>
                    {{ form_widget(form.nomMatiere\t, { 'attr': {'class': 'form-control'} }) }}
                </div>
                <div class=\"form-group\">
                    <label for=\"exampleInputEmail3\">Coefficient</label>
                    {{ form_widget(form.coefficient, { 'attr': {'class': 'form-control'} }) }}
                </div>

                <input type=\"submit\" value=\"Envoyer\" class=\" btn btn-primary mr-2\"/>
                {{ form_end(form) }}

            </div>
        </div>
    </div>
    <script>


        const form= document.getElementById('form');

        form.addEventListener('submit',(e)=> {
            let message = [];

            const matiere= document.getElementById('matierbundle_matiere_coefficient').value;

            console.log(matiere,'hyyy')

            if((matiere <= 0)||(matiere>10)){
                alert('verifier votre coefficient')
                message.push('Vérifier Votre date')


            }


            if(message.length> 0){

                e.preventDefault();
                errorElement.innerText = message.join(', ')
            }

        })





    </script>

{% endblock %}
", "MatierBundle:Matiere:ModifierMatiere.html.twig", "C:\\wamp64\\www\\Ecole\\src\\MatierBundle/Resources/views/Matiere/ModifierMatiere.html.twig");
    }
}
