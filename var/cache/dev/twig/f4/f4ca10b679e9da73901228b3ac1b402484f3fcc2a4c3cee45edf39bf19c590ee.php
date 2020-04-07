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

/* GarderieBundle:Front:ReserverGarderie.html.twig */
class __TwigTemplate_939c4014cf52f0c2645fb2481c76a79b7bf8f7a40a2ff42efae8c00536e45d76 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "GarderieBundle:Front:ReserverGarderie.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "GarderieBundle:Front:ReserverGarderie.html.twig"));

        $this->parent = $this->loadTemplate("@User/Page_Parent.html.twig", "GarderieBundle:Front:ReserverGarderie.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_titre($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "titre"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "titre"));

        echo " Reservez <br>
    <div id=\"errorElement\"></div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 7
    public function block_body($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "

    ";
        // line 10
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start', ["attr" => ["id" => "form"]]);
        echo "
    <div class=\"col-12 grid-margin stretch-card\">
        <div class=\"card\">
            <div class=\"card-body\">
                <p class=\"card-description\">
                </p>
                <div class=\"form-group\">
                    <label for=\"exampleInputName1\">Date</label>
                    ";
        // line 18
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "dateGar", []), 'widget', ["attr" => ["id" => "date"]]);
        echo "
                </div>
                <div class=\"form-group\">
                    <label for=\"exampleInputEmail3\">Votre Enfant</label>
                    ";
        // line 22
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "nbenfants", []), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                </div>
                <div class=\"form-group\">
                    <label for=\"exampleInputEmail3\">Activite</label>
                    ";
        // line 26
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "activityType", []), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                </div>

                <input type=\"submit\" value=\"Envoyer\" class=\" btn btn-primary mr-2\"/>
                ";
        // line 30
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "

            </div>
        </div>
    </div>
<script>


    const form= document.getElementById('form');
    const errorElement= document.getElementById('errorElement');
    var now = new Date();
    form.addEventListener('submit',(e)=> {
        let message = [];
        const year= document.getElementById('garderiebundle_reservation_dateGar_year').value;
        const month= document.getElementById('garderiebundle_reservation_dateGar_month').value;
        const day= document.getElementById('garderiebundle_reservation_dateGar_day').value;
        var date = new Date(year,month-1,day);
        console.log(date , ' ', now)
        if(date < now){
            alert('verifier votre date')
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
        return "GarderieBundle:Front:ReserverGarderie.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 30,  110 => 26,  103 => 22,  96 => 18,  85 => 10,  81 => 8,  72 => 7,  52 => 3,  30 => 1,);
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

{% block titre %} Reservez <br>
    <div id=\"errorElement\"></div>
{% endblock %}

{% block body %}


    {{ form_start(form , {'attr': {'id': 'form'}}) }}
    <div class=\"col-12 grid-margin stretch-card\">
        <div class=\"card\">
            <div class=\"card-body\">
                <p class=\"card-description\">
                </p>
                <div class=\"form-group\">
                    <label for=\"exampleInputName1\">Date</label>
                    {{ form_widget(form.dateGar,{'attr': {'id': 'date'}}) }}
                </div>
                <div class=\"form-group\">
                    <label for=\"exampleInputEmail3\">Votre Enfant</label>
                    {{ form_widget(form.nbenfants, { 'attr': {'class': 'form-control'}}) }}
                </div>
                <div class=\"form-group\">
                    <label for=\"exampleInputEmail3\">Activite</label>
                    {{ form_widget(form.activityType, { 'attr': {'class': 'form-control'} }) }}
                </div>

                <input type=\"submit\" value=\"Envoyer\" class=\" btn btn-primary mr-2\"/>
                {{ form_end(form) }}

            </div>
        </div>
    </div>
<script>


    const form= document.getElementById('form');
    const errorElement= document.getElementById('errorElement');
    var now = new Date();
    form.addEventListener('submit',(e)=> {
        let message = [];
        const year= document.getElementById('garderiebundle_reservation_dateGar_year').value;
        const month= document.getElementById('garderiebundle_reservation_dateGar_month').value;
        const day= document.getElementById('garderiebundle_reservation_dateGar_day').value;
        var date = new Date(year,month-1,day);
        console.log(date , ' ', now)
        if(date < now){
            alert('verifier votre date')
          message.push('Vérifier Votre date')
        }

        if(message.length> 0){

            e.preventDefault();
            errorElement.innerText = message.join(', ')
        }

    })





</script>

{% endblock %}
", "GarderieBundle:Front:ReserverGarderie.html.twig", "C:\\wamp64\\www\\Ecole\\src\\GarderieBundle/Resources/views/Front/ReserverGarderie.html.twig");
    }
}
