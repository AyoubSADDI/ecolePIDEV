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

/* @User/Registre.html.twig */
class __TwigTemplate_bb79988be82079c3f3de3816059f0b514a01507c4e3d14fa4bfa93cd1244e660 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@User/Registre.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@User/Registre.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"ie=edge\">
    <title>Sign Up Form by Colorlib</title>

    <!-- Font Icon -->
    <link rel=\"stylesheet\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Registre/fonts/material-icon/css/material-design-iconic-font.min.css"), "html", null, true);
        echo "\">

    <!-- Main css -->
    <link rel=\"stylesheet\" href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Registre/css/style.css"), "html", null, true);
        echo "\">
</head>
<body>

<div class=\"main\">
    <div class=\"container\">
        <div class=\"signup-content\">
            <div class=\"signup-img\">
                <img src=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Registre/images/signup-img.jpg"), "html", null, true);
        echo "\" alt=\"\">
            </div>
            <div class=\"signup-form\">
                ";
        // line 24
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start', ["method" => "post", "action" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_registration_register"), "attr" => ["class" => "register-form"]]);
        echo "
                    <h2>student registration form</h2>
                    <div class=\"form-row\">
                        <div class=\"form-group\">
                            <label for=\"name\">Nom :</label>
                            ";
        // line 29
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "username", []), 'widget', ["attr" => ["class" => "input--style-3"]]);
        echo "

                        </div>
                        <div class=\"form-group\">
                            <label for=\"father_name\">Prenom :</label>
                            ";
        // line 34
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "prenom", []), 'widget', ["attr" => ["class" => "input--style-3"]]);
        echo "
                        </div>
                    </div>
                <div class=\"form-group\">
                    <label for=\"address\">Email :</label>
                    ";
        // line 39
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "email", []), 'widget', ["attr" => ["class" => "input--style-3"]]);
        echo "
                </div>
                <div class=\"form-group\">
                    <label for=\"address\">Cin :</label>
                    ";
        // line 43
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "cin", []), 'widget', ["attr" => ["class" => "input--style-3"]]);
        echo "
                </div>
                <div class=\"form-group\">
                    <label for=\"address\">Date De Naisssance :</label>
                    ";
        // line 47
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "dateNaissance", []), 'widget', ["attr" => ["class" => "input--style-3"]]);
        echo "
                </div>
                <div class=\"form-group\">
                    <label for=\"address\">Tel :</label>
                    ";
        // line 51
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "tel", []), 'widget', ["attr" => ["class" => "input--style-3"]]);
        echo "
                </div>
                    <div class=\"form-group\">
                        <label for=\"gender\" class=\"radio-label\">Sex :</label>
                        ";
        // line 55
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "sexe", []), 'widget', ["attr" => ["class" => "input--style-3"]]);
        echo "

                    </div>
                <div class=\"form-group\">
                    <label for=\"gender\" class=\"radio-label\">Password :</label>
                    ";
        // line 60
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "plainPassword", []), "first", []), 'widget', ["attr" => ["class" => "input--style-3"]]);
        echo "

                </div>
                <div class=\"form-group\">
                    <label for=\"gender\" class=\"radio-label\">confirmer :</label>
                    ";
        // line 65
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "plainPassword", []), "second", []), 'widget', ["attr" => ["class" => "input--style-3"]]);
        echo "

                </div>


                <div class=\"form-submit\">
                        <input type=\"submit\" value=\"Reset All\" class=\"submit\" name=\"reset\" id=\"reset\" />
                        <input type=\"submit\" value=\"Submit Form\" class=\"submit\" name=\"submit\" id=\"submit\" />
                    </div>
                ";
        // line 74
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "
            </div>
        </div>
    </div>

</div>

<!-- JS -->
<script src=\"";
        // line 82
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Registre/vendor/jquery/jquery.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 83
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Registre/js/main.js"), "html", null, true);
        echo "\"></script>
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@User/Registre.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  165 => 83,  161 => 82,  150 => 74,  138 => 65,  130 => 60,  122 => 55,  115 => 51,  108 => 47,  101 => 43,  94 => 39,  86 => 34,  78 => 29,  70 => 24,  64 => 21,  53 => 13,  47 => 10,  36 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"ie=edge\">
    <title>Sign Up Form by Colorlib</title>

    <!-- Font Icon -->
    <link rel=\"stylesheet\" href=\"{{ asset('Registre/fonts/material-icon/css/material-design-iconic-font.min.css') }}\">

    <!-- Main css -->
    <link rel=\"stylesheet\" href=\"{{ asset('Registre/css/style.css') }}\">
</head>
<body>

<div class=\"main\">
    <div class=\"container\">
        <div class=\"signup-content\">
            <div class=\"signup-img\">
                <img src=\"{{ asset('Registre/images/signup-img.jpg') }}\" alt=\"\">
            </div>
            <div class=\"signup-form\">
                {{ form_start(form, {'method': 'post', 'action': path('fos_user_registration_register'), 'attr': {'class': 'register-form'}}) }}
                    <h2>student registration form</h2>
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
                    <label for=\"address\">Cin :</label>
                    {{ form_widget(form.cin, { 'attr': {'class': 'input--style-3'} }) }}
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
                    <label for=\"gender\" class=\"radio-label\">Password :</label>
                    {{ form_widget(form.plainPassword.first, { 'attr': {'class': 'input--style-3'} }) }}

                </div>
                <div class=\"form-group\">
                    <label for=\"gender\" class=\"radio-label\">confirmer :</label>
                    {{ form_widget(form.plainPassword.second, { 'attr': {'class': 'input--style-3'} }) }}

                </div>


                <div class=\"form-submit\">
                        <input type=\"submit\" value=\"Reset All\" class=\"submit\" name=\"reset\" id=\"reset\" />
                        <input type=\"submit\" value=\"Submit Form\" class=\"submit\" name=\"submit\" id=\"submit\" />
                    </div>
                {{ form_end(form) }}
            </div>
        </div>
    </div>

</div>

<!-- JS -->
<script src=\"{{ asset('Registre/vendor/jquery/jquery.min.js') }}\"></script>
<script src=\"{{ asset('Registre/js/main.js') }}\"></script>
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>", "@User/Registre.html.twig", "C:\\wamp64\\www\\Ecole\\src\\UserBundle\\Resources\\views\\Registre.html.twig");
    }
}
