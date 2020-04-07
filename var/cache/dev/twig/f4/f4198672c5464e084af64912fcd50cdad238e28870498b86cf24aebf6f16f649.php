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

/* Emails/mail.html.twig */
class __TwigTemplate_790cbe455feb5aad04be7dc0d8593e6e1555c6ec0eaefd923e4303c30892fea0 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Emails/mail.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Emails/mail.html.twig"));

        // line 1
        echo "Bonjour Mr/Mme ";
        echo twig_escape_filter($this->env, ($context["nom"] ?? $this->getContext($context, "nom")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["prenom"] ?? $this->getContext($context, "prenom")), "html", null, true);
        echo "
<br>
Nous Avons accepter votre enfant ";
        // line 3
        echo twig_escape_filter($this->env, ($context["nomEnfant"] ?? $this->getContext($context, "nomEnfant")), "html", null, true);
        echo "<br>
dans le date ";
        // line 4
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, ($context["date"] ?? $this->getContext($context, "date"))), "html", null, true);
        echo " et le prix garderie 20 TND et activité ";
        echo twig_escape_filter($this->env, ($context["prix"] ?? $this->getContext($context, "prix")), "html", null, true);
        echo " TND
Total =";
        // line 5
        echo twig_escape_filter($this->env, ($context["total"] ?? $this->getContext($context, "total")), "html", null, true);
        echo "TND
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "Emails/mail.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  54 => 5,  48 => 4,  44 => 3,  36 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("Bonjour Mr/Mme {{ nom }} {{ prenom }}
<br>
Nous Avons accepter votre enfant {{ nomEnfant }}<br>
dans le date {{ date|date }} et le prix garderie 20 TND et activité {{ prix }} TND
Total ={{ total }}TND
", "Emails/mail.html.twig", "C:\\wamp64\\www\\Ecole\\app\\Resources\\views\\Emails\\mail.html.twig");
    }
}
