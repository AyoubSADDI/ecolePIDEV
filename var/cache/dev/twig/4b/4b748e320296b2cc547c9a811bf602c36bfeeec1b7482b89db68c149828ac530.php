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

/* @FOSUser/Security/login_content.html.twig */
class __TwigTemplate_631900042a6e0685f778ab7c25d9911f4069569e416c60888fa1fc6d3eb19655 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@FOSUser/Security/login_content.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@FOSUser/Security/login_content.html.twig"));

        // line 2
        echo "
";
        // line 3
        if ((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error"))) {
            // line 4
            echo "    <div>";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageKey", []), $this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageData", []), "security"), "html", null, true);
            echo "</div>
";
        }
        // line 6
        echo "
<!DOCTYPE html>
<html lang=\"en\">
<head>
    <title>Login V9</title>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <!--===============================================================================================-->
    <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Login/images/icons/favicon.ico"), "html", null, true);
        echo "\"/>
    <!--===============================================================================================-->
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Login/vendor/bootstrap/css/bootstrap.min.css"), "html", null, true);
        echo "\">
    <!--===============================================================================================-->
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Login/fonts/font-awesome-4.7.0/css/font-awesome.min.css"), "html", null, true);
        echo "\">
    <!--===============================================================================================-->
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Login/fonts/iconic/css/material-design-iconic-font.min.css"), "html", null, true);
        echo "\">
    <!--===============================================================================================-->
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Login/vendor/animate/animate.css"), "html", null, true);
        echo "\">
    <!--===============================================================================================-->
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Login/vendor/css-hamburgers/hamburgers.min.css"), "html", null, true);
        echo "\">
    <!--===============================================================================================-->
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Login/vendor/animsition/css/animsition.min.css"), "html", null, true);
        echo "\">
    <!--===============================================================================================-->
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Login/vendor/select2/select2.min.css"), "html", null, true);
        echo "\">
    <!--===============================================================================================-->
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Login/vendor/daterangepicker/daterangepicker.css"), "html", null, true);
        echo "\">
    <!--===============================================================================================-->
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Login/css/util.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Login/css/main.css"), "html", null, true);
        echo "\">
    <!--===============================================================================================-->
</head>
<body>


<div class=\"container-login100\" style=\"background-image: url('";
        // line 39
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Login/images/bg-01.jpg"), "html", null, true);
        echo "');\">
    <div class=\"wrap-login100 p-l-55 p-r-55 p-t-80 p-b-30\">
        <form action=\"";
        // line 41
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_check");
        echo "\" method=\"post\">
            ";
        // line 42
        if ((isset($context["csrf_token"]) ? $context["csrf_token"] : $this->getContext($context, "csrf_token"))) {
            // line 43
            echo "                <input type=\"hidden\" name=\"_csrf_token\" value=\"";
            echo twig_escape_filter($this->env, (isset($context["csrf_token"]) ? $context["csrf_token"] : $this->getContext($context, "csrf_token")), "html", null, true);
            echo "\" />
            ";
        }
        // line 45
        echo "
            <span class=\"login100-form-title p-b-37\">
\t\t\t\t\tSign In
\t\t\t\t</span>

            <div class=\"wrap-input100 validate-input m-b-20\" data-validate=\"Enter username or email\">
                <input class=\"input100\" type=\"text\" id=\"username\" name=\"_username\"  required=\"required\" autocomplete=\"username\" />
                <span class=\"focus-input100\"></span>
            </div>

            <div class=\"wrap-input100 validate-input m-b-25\" data-validate = \"Enter password\">
                <input class=\"input100\" type=\"password\" id=\"password\" name=\"_password\" required=\"required\" autocomplete=\"current-password\" />
                <span class=\"focus-input100\"></span>
            </div>

            <div class=\"container-login100-form-btn\">
                <input type=\"submit\" id=\"_submit\" name=\"_submit\" value=\"Connexion\" class=\"btn btn-primary btn-user btn-block\" />
            </div>

            <div class=\"text-center p-t-57 p-b-20\">
\t\t\t\t\t<span class=\"txt1\">
\t\t\t\t\t\tOr login with
\t\t\t\t\t</span>
            </div>

            <div class=\"flex-c p-b-112\">
                <a href=\"#\" class=\"login100-social-item\">
                    <i class=\"fa fa-facebook-f\"></i>
                </a>

                <a href=\"#\" class=\"login100-social-item\">
                    <img src=\"";
        // line 76
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Login/images/icons/icon-google.png"), "html", null, true);
        echo "\" alt=\"GOOGLE\">
                </a>
            </div>

            <div class=\"text-center\">
                <a href=\"#\" class=\"txt2 hov1\">
                    Sign Up
                </a>
            </div>
        </form>


    </div>
</div>



<div id=\"dropDownSelect1\"></div>

<!--===============================================================================================-->
<script src=\"";
        // line 96
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Login/vendor/jquery/jquery-3.2.1.min.js"), "html", null, true);
        echo "\"></script>
<!--===============================================================================================-->
<script src=\"";
        // line 98
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Login/vendor/animsition/js/animsition.min.js"), "html", null, true);
        echo "\"></script>
<!--===============================================================================================-->
<script src=\"";
        // line 100
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Login/vendor/bootstrap/js/popper.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 101
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Login/vendor/bootstrap/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
<!--===============================================================================================-->
<script src=\"";
        // line 103
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Login/vendor/select2/select2.min.js"), "html", null, true);
        echo "\"></script>
<!--===============================================================================================-->
<script src=\"";
        // line 105
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Login/vendor/daterangepicker/moment.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 106
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Login/vendor/daterangepicker/daterangepicker.js"), "html", null, true);
        echo "\"></script>
<!--===============================================================================================-->
<script src=\"";
        // line 108
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Login/vendor/countdowntime/countdowntime.js"), "html", null, true);
        echo "\"></script>
<!--===============================================================================================-->
<script src=\"";
        // line 110
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Login/js/main.js"), "html", null, true);
        echo "\"></script>

</body>
</html>

";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Security/login_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  226 => 110,  221 => 108,  216 => 106,  212 => 105,  207 => 103,  202 => 101,  198 => 100,  193 => 98,  188 => 96,  165 => 76,  132 => 45,  126 => 43,  124 => 42,  120 => 41,  115 => 39,  106 => 33,  102 => 32,  97 => 30,  92 => 28,  87 => 26,  82 => 24,  77 => 22,  72 => 20,  67 => 18,  62 => 16,  57 => 14,  47 => 6,  41 => 4,  39 => 3,  36 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% trans_default_domain 'FOSUserBundle' %}

{% if error %}
    <div>{{ error.messageKey|trans(error.messageData, 'security') }}</div>
{% endif %}

<!DOCTYPE html>
<html lang=\"en\">
<head>
    <title>Login V9</title>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <!--===============================================================================================-->
    <link rel=\"icon\" type=\"image/png\" href=\"{{ asset('Login/images/icons/favicon.ico') }}\"/>
    <!--===============================================================================================-->
    <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('Login/vendor/bootstrap/css/bootstrap.min.css') }}\">
    <!--===============================================================================================-->
    <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('Login/fonts/font-awesome-4.7.0/css/font-awesome.min.css') }}\">
    <!--===============================================================================================-->
    <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('Login/fonts/iconic/css/material-design-iconic-font.min.css') }}\">
    <!--===============================================================================================-->
    <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('Login/vendor/animate/animate.css') }}\">
    <!--===============================================================================================-->
    <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('Login/vendor/css-hamburgers/hamburgers.min.css') }}\">
    <!--===============================================================================================-->
    <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('Login/vendor/animsition/css/animsition.min.css') }}\">
    <!--===============================================================================================-->
    <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('Login/vendor/select2/select2.min.css') }}\">
    <!--===============================================================================================-->
    <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('Login/vendor/daterangepicker/daterangepicker.css') }}\">
    <!--===============================================================================================-->
    <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('Login/css/util.css') }}\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('Login/css/main.css') }}\">
    <!--===============================================================================================-->
</head>
<body>


<div class=\"container-login100\" style=\"background-image: url('{{ asset('Login/images/bg-01.jpg') }}');\">
    <div class=\"wrap-login100 p-l-55 p-r-55 p-t-80 p-b-30\">
        <form action=\"{{ path(\"fos_user_security_check\") }}\" method=\"post\">
            {% if csrf_token %}
                <input type=\"hidden\" name=\"_csrf_token\" value=\"{{ csrf_token }}\" />
            {% endif %}

            <span class=\"login100-form-title p-b-37\">
\t\t\t\t\tSign In
\t\t\t\t</span>

            <div class=\"wrap-input100 validate-input m-b-20\" data-validate=\"Enter username or email\">
                <input class=\"input100\" type=\"text\" id=\"username\" name=\"_username\"  required=\"required\" autocomplete=\"username\" />
                <span class=\"focus-input100\"></span>
            </div>

            <div class=\"wrap-input100 validate-input m-b-25\" data-validate = \"Enter password\">
                <input class=\"input100\" type=\"password\" id=\"password\" name=\"_password\" required=\"required\" autocomplete=\"current-password\" />
                <span class=\"focus-input100\"></span>
            </div>

            <div class=\"container-login100-form-btn\">
                <input type=\"submit\" id=\"_submit\" name=\"_submit\" value=\"Connexion\" class=\"btn btn-primary btn-user btn-block\" />
            </div>

            <div class=\"text-center p-t-57 p-b-20\">
\t\t\t\t\t<span class=\"txt1\">
\t\t\t\t\t\tOr login with
\t\t\t\t\t</span>
            </div>

            <div class=\"flex-c p-b-112\">
                <a href=\"#\" class=\"login100-social-item\">
                    <i class=\"fa fa-facebook-f\"></i>
                </a>

                <a href=\"#\" class=\"login100-social-item\">
                    <img src=\"{{ asset('Login/images/icons/icon-google.png') }}\" alt=\"GOOGLE\">
                </a>
            </div>

            <div class=\"text-center\">
                <a href=\"#\" class=\"txt2 hov1\">
                    Sign Up
                </a>
            </div>
        </form>


    </div>
</div>



<div id=\"dropDownSelect1\"></div>

<!--===============================================================================================-->
<script src=\"{{ asset('Login/vendor/jquery/jquery-3.2.1.min.js') }}\"></script>
<!--===============================================================================================-->
<script src=\"{{ asset('Login/vendor/animsition/js/animsition.min.js') }}\"></script>
<!--===============================================================================================-->
<script src=\"{{ asset('Login/vendor/bootstrap/js/popper.js') }}\"></script>
<script src=\"{{ asset('Login/vendor/bootstrap/js/bootstrap.min.js') }}\"></script>
<!--===============================================================================================-->
<script src=\"{{ asset('Login/vendor/select2/select2.min.js') }}\"></script>
<!--===============================================================================================-->
<script src=\"{{ asset('Login/vendor/daterangepicker/moment.min.js') }}\"></script>
<script src=\"{{ asset('Login/vendor/daterangepicker/daterangepicker.js') }}\"></script>
<!--===============================================================================================-->
<script src=\"{{ asset('Login/vendor/countdowntime/countdowntime.js') }}\"></script>
<!--===============================================================================================-->
<script src=\"{{ asset('Login/js/main.js') }}\"></script>

</body>
</html>

", "@FOSUser/Security/login_content.html.twig", "C:\\wamp64\\www\\Ecole\\vendor\\friendsofsymfony\\user-bundle\\Resources\\views\\Security\\login_content.html.twig");
    }
}
