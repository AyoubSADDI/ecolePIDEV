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

/* @User/Page_Enseignant.html.twig */
class __TwigTemplate_0bf6e288ce0b71d85fc65dc9e6506f8d087527e681743b174a226d4886836f46 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@User/Page_Enseignant.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@User/Page_Enseignant.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">

<head>
    <!-- Required meta tags -->
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
    <title>RoyalUI Admin</title>
    <!-- plugins:css -->
    <link rel=\"stylesheet\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Back/vendors/ti-icons/css/themify-icons.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Back/vendors/base/vendor.bundle.base.css"), "html", null, true);
        echo "\">
    <!-- endinject -->
    <!-- inject:css -->
    <link rel=\"stylesheet\" href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Back/css/style.css"), "html", null, true);
        echo "\">
    <!-- endinject -->
    <link rel=\"shortcut icon\" href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Back/images/favicon.png"), "html", null, true);
        echo "\" />
</head>

<body>
<div class=\"container-scroller\">
    <!-- partial:../../partials/_navbar.html -->
    <nav class=\"navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row\">
        <div class=\"text-center navbar-brand-wrapper d-flex align-items-center justify-content-center\">
            <a class=\"navbar-brand brand-logo mr-5\" href=\"../../index.html\"><img src=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Back/images/logo.svg"), "html", null, true);
        echo "\" class=\"mr-2\" alt=\"logo\"/></a>
            <a class=\"navbar-brand brand-logo-mini\" href=\"../../index.html\"><img src=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Back/images/logo-mini.svg"), "html", null, true);
        echo "\" alt=\"logo\"/></a>
        </div>
        <div class=\"navbar-menu-wrapper d-flex align-items-center justify-content-end\">
            <button class=\"navbar-toggler navbar-toggler align-self-center\" type=\"button\" data-toggle=\"minimize\">
                <span class=\"ti-view-list\"></span>
            </button>
            <ul class=\"navbar-nav mr-lg-2\">
                <li class=\"nav-item nav-search d-none d-lg-block\">
                    <div class=\"input-group\">
                        <div class=\"input-group-prepend hover-cursor\" id=\"navbar-search-icon\">
                <span class=\"input-group-text\" id=\"search\">
                  <i class=\"ti-search\"></i>
                </span>
                        </div>
                        <input type=\"text\" class=\"form-control\" id=\"navbar-search-input\" placeholder=\"Search now\" aria-label=\"search\" aria-describedby=\"search\">
                    </div>
                </li>
            </ul>
            <ul class=\"navbar-nav navbar-nav-right\">
                <li class=\"nav-item dropdown mr-1\">
                    <a class=\"nav-link count-indicator dropdown-toggle d-flex justify-content-center align-items-center\" id=\"messageDropdown\" href=\"#\" data-toggle=\"dropdown\">
                        <i class=\"ti-email mx-0\"></i>
                    </a>
                    <div class=\"dropdown-menu dropdown-menu-right navbar-dropdown\" aria-labelledby=\"messageDropdown\">
                        <p class=\"mb-0 font-weight-normal float-left dropdown-header\">Messages</p>
                        <a class=\"dropdown-item\">
                            <div class=\"item-thumbnail\">
                                <img src=\"";
        // line 52
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Back/images/faces/face4.jpg"), "html", null, true);
        echo "\" alt=\"image\" class=\"profile-pic\">
                            </div>
                            <div class=\"item-content flex-grow\">
                                <h6 class=\"ellipsis font-weight-normal\">David Grey
                                </h6>
                                <p class=\"font-weight-light small-text text-muted mb-0\">
                                    The meeting is cancelled
                                </p>
                            </div>
                        </a>
                        <a class=\"dropdown-item\">
                            <div class=\"item-thumbnail\">
                                <img src=\"";
        // line 64
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Back/images/faces/face2.jpg"), "html", null, true);
        echo "\" alt=\"image\" class=\"profile-pic\">
                            </div>
                            <div class=\"item-content flex-grow\">
                                <h6 class=\"ellipsis font-weight-normal\">Tim Cook
                                </h6>
                                <p class=\"font-weight-light small-text text-muted mb-0\">
                                    New product launch
                                </p>
                            </div>
                        </a>
                        <a class=\"dropdown-item\">
                            <div class=\"item-thumbnail\">
                                <img src=\"";
        // line 76
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Back/images/faces/face3.jpg"), "html", null, true);
        echo "\" alt=\"image\" class=\"profile-pic\">
                            </div>
                            <div class=\"item-content flex-grow\">
                                <h6 class=\"ellipsis font-weight-normal\"> Johnson
                                </h6>
                                <p class=\"font-weight-light small-text text-muted mb-0\">
                                    Upcoming board meeting
                                </p>
                            </div>
                        </a>
                    </div>
                </li>
                <li class=\"nav-item dropdown\">
                    <a class=\"nav-link count-indicator dropdown-toggle\" id=\"notificationDropdown\" href=\"#\" data-toggle=\"dropdown\">
                        <i class=\"ti-bell mx-0\"></i>
                        <span class=\"count\"></span>
                    </a>
                    <div class=\"dropdown-menu dropdown-menu-right navbar-dropdown\" aria-labelledby=\"notificationDropdown\">
                        <p class=\"mb-0 font-weight-normal float-left dropdown-header\">Notifications</p>
                        <a class=\"dropdown-item\">
                            <div class=\"item-thumbnail\">
                                <div class=\"item-icon bg-success\">
                                    <i class=\"ti-info-alt mx-0\"></i>
                                </div>
                            </div>
                            <div class=\"item-content\">
                                <h6 class=\"font-weight-normal\">Application Error</h6>
                                <p class=\"font-weight-light small-text mb-0 text-muted\">
                                    Just now
                                </p>
                            </div>
                        </a>
                        <a class=\"dropdown-item\">
                            <div class=\"item-thumbnail\">
                                <div class=\"item-icon bg-warning\">
                                    <i class=\"ti-settings mx-0\"></i>
                                </div>
                            </div>
                            <div class=\"item-content\">
                                <h6 class=\"font-weight-normal\">Settings</h6>
                                <p class=\"font-weight-light small-text mb-0 text-muted\">
                                    Private message
                                </p>
                            </div>
                        </a>
                        <a class=\"dropdown-item\">
                            <div class=\"item-thumbnail\">
                                <div class=\"item-icon bg-info\">
                                    <i class=\"ti-user mx-0\"></i>
                                </div>
                            </div>
                            <div class=\"item-content\">
                                <h6 class=\"font-weight-normal\">New user registration</h6>
                                <p class=\"font-weight-light small-text mb-0 text-muted\">
                                    2 days ago
                                </p>
                            </div>
                        </a>
                    </div>
                </li>
                <li class=\"nav-item nav-profile dropdown\">
                    <a class=\"nav-link dropdown-toggle\" href=\"#\" data-toggle=\"dropdown\" id=\"profileDropdown\">
                        <img src=\"";
        // line 138
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Back/images/faces/face28.jpg"), "html", null, true);
        echo "\" alt=\"profile\"/>
                    </a>
                    <div class=\"dropdown-menu dropdown-menu-right navbar-dropdown\" aria-labelledby=\"profileDropdown\">
                        <a class=\"dropdown-item\">
                            <i class=\"ti-settings text-primary\"></i>
                            Settings
                        </a>
                        <a class=\"dropdown-item\">
                            <i class=\"ti-power-off text-primary\"></i>
                            Logout
                        </a>
                    </div>
                </li>
            </ul>
            <button class=\"navbar-toggler navbar-toggler-right d-lg-none align-self-center\" type=\"button\" data-toggle=\"offcanvas\">
                <span class=\"ti-view-list\"></span>
            </button>
        </div>
    </nav>
    <!-- partial -->
    <div class=\"container-fluid page-body-wrapper\">
        <!-- partial:../../partials/_sidebar.html -->
        <nav class=\"sidebar sidebar-offcanvas\" id=\"sidebar\">
            <ul class=\"nav\">
                <li class=\"nav-item\">
                    <a class=\"nav-link\" href=\"";
        // line 163
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("Page_Admin");
        echo "\">
                        <i class=\"ti-shield menu-icon\"></i>
                        <span class=\"menu-title\">Acceuil</span>
                    </a>
                </li>
                <li class=\"nav-item\">
                    <a class=\"nav-link\" data-toggle=\"collapse\" href=\"#ui-basic\" aria-expanded=\"false\" aria-controls=\"ui-basic\">
                        <i class=\"ti-palette menu-icon\"></i>
                        <span class=\"menu-title\">Gestion Cour</span>
                        <i class=\"menu-arrow\"></i>
                    </a>
                    <div class=\"collapse\" id=\"ui-basic\">
                        <ul class=\"nav flex-column sub-menu\">
                            <li class=\"nav-item\"> <a class=\"nav-link\" href=\"";
        // line 176
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("Affichier_ClassEnseignant");
        echo "\">Ajouter Cour</a></li>
                            <li class=\"nav-item\"> <a class=\"nav-link\" href=\"";
        // line 177
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("Affichier_Cour");
        echo "\">Affichier Cours</a></li>

                        </ul>
                    </div>
                </li>
                <li class=\"nav-item\">
                    <a class=\"nav-link\" href=\"";
        // line 183
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("Emploi_EnseignantAfficheback");
        echo "\">
                        <i class=\"ti-layout-list-post menu-icon\"></i>
                        <span class=\"menu-title\">Consulter Emploi</span>
                    </a>
                </li>


            </ul>
        </nav>
        ";
        // line 192
        $this->displayBlock('body', $context, $blocks);
        // line 193
        echo "    </div>
    <!-- content-wrapper ends -->
    <!-- partial:../../partials/_footer.html -->
    <footer class=\"footer\">
        <div class=\"d-sm-flex justify-content-center justify-content-sm-between\">
            <span class=\"text-muted text-center text-sm-left d-block d-sm-inline-block\">Copyright © 2018 <a href=\"https://www.templatewatch.com/\" target=\"_blank\">Templatewatch</a>. All rights reserved.</span>
            <span class=\"float-none float-sm-right d-block mt-1 mt-sm-0 text-center\">Hand-crafted & made with <i class=\"ti-heart text-danger ml-1\"></i></span>
        </div>
    </footer>
    <!-- partial -->
</div>
<!-- main-panel ends --><!-- page-body-wrapper ends -->

<!-- container-scroller -->
<!-- plugins:js -->
<script src=\"";
        // line 208
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Back/vendors/base/vendor.bundle.base.js"), "html", null, true);
        echo "\"></script>
<!-- endinject -->
<!-- Plugin js for this page-->
<script src=\"";
        // line 211
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Back/vendors/chart.js/Chart.min.js"), "html", null, true);
        echo "\"></script>
<!-- End plugin js for this page-->
<!-- inject:js -->
<script src=\"";
        // line 214
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Back/js/off-canvas.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 215
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Back/js/hoverable-collapse.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 216
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Back/js/template.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 217
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Back/js/todolist.js"), "html", null, true);
        echo "\"></script>
<!-- endinject -->
<!-- Custom js for this page-->
<script src=\"";
        // line 220
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Back/js/todolist.js"), "html", null, true);
        echo "\"></script>
<!-- End custom js for this page-->
</body>

</html>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 192
    public function block_body($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        echo "  ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@User/Page_Enseignant.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  337 => 192,  321 => 220,  315 => 217,  311 => 216,  307 => 215,  303 => 214,  297 => 211,  291 => 208,  274 => 193,  272 => 192,  260 => 183,  251 => 177,  247 => 176,  231 => 163,  203 => 138,  138 => 76,  123 => 64,  108 => 52,  78 => 25,  74 => 24,  63 => 16,  58 => 14,  52 => 11,  48 => 10,  37 => 1,);
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
    <!-- Required meta tags -->
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
    <title>RoyalUI Admin</title>
    <!-- plugins:css -->
    <link rel=\"stylesheet\" href=\"{{ asset('Back/vendors/ti-icons/css/themify-icons.css') }}\">
    <link rel=\"stylesheet\" href=\"{{ asset('Back/vendors/base/vendor.bundle.base.css') }}\">
    <!-- endinject -->
    <!-- inject:css -->
    <link rel=\"stylesheet\" href=\"{{ asset('Back/css/style.css') }}\">
    <!-- endinject -->
    <link rel=\"shortcut icon\" href=\"{{ asset('Back/images/favicon.png') }}\" />
</head>

<body>
<div class=\"container-scroller\">
    <!-- partial:../../partials/_navbar.html -->
    <nav class=\"navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row\">
        <div class=\"text-center navbar-brand-wrapper d-flex align-items-center justify-content-center\">
            <a class=\"navbar-brand brand-logo mr-5\" href=\"../../index.html\"><img src=\"{{ asset('Back/images/logo.svg') }}\" class=\"mr-2\" alt=\"logo\"/></a>
            <a class=\"navbar-brand brand-logo-mini\" href=\"../../index.html\"><img src=\"{{ asset('Back/images/logo-mini.svg') }}\" alt=\"logo\"/></a>
        </div>
        <div class=\"navbar-menu-wrapper d-flex align-items-center justify-content-end\">
            <button class=\"navbar-toggler navbar-toggler align-self-center\" type=\"button\" data-toggle=\"minimize\">
                <span class=\"ti-view-list\"></span>
            </button>
            <ul class=\"navbar-nav mr-lg-2\">
                <li class=\"nav-item nav-search d-none d-lg-block\">
                    <div class=\"input-group\">
                        <div class=\"input-group-prepend hover-cursor\" id=\"navbar-search-icon\">
                <span class=\"input-group-text\" id=\"search\">
                  <i class=\"ti-search\"></i>
                </span>
                        </div>
                        <input type=\"text\" class=\"form-control\" id=\"navbar-search-input\" placeholder=\"Search now\" aria-label=\"search\" aria-describedby=\"search\">
                    </div>
                </li>
            </ul>
            <ul class=\"navbar-nav navbar-nav-right\">
                <li class=\"nav-item dropdown mr-1\">
                    <a class=\"nav-link count-indicator dropdown-toggle d-flex justify-content-center align-items-center\" id=\"messageDropdown\" href=\"#\" data-toggle=\"dropdown\">
                        <i class=\"ti-email mx-0\"></i>
                    </a>
                    <div class=\"dropdown-menu dropdown-menu-right navbar-dropdown\" aria-labelledby=\"messageDropdown\">
                        <p class=\"mb-0 font-weight-normal float-left dropdown-header\">Messages</p>
                        <a class=\"dropdown-item\">
                            <div class=\"item-thumbnail\">
                                <img src=\"{{ asset('Back/images/faces/face4.jpg') }}\" alt=\"image\" class=\"profile-pic\">
                            </div>
                            <div class=\"item-content flex-grow\">
                                <h6 class=\"ellipsis font-weight-normal\">David Grey
                                </h6>
                                <p class=\"font-weight-light small-text text-muted mb-0\">
                                    The meeting is cancelled
                                </p>
                            </div>
                        </a>
                        <a class=\"dropdown-item\">
                            <div class=\"item-thumbnail\">
                                <img src=\"{{ asset('Back/images/faces/face2.jpg') }}\" alt=\"image\" class=\"profile-pic\">
                            </div>
                            <div class=\"item-content flex-grow\">
                                <h6 class=\"ellipsis font-weight-normal\">Tim Cook
                                </h6>
                                <p class=\"font-weight-light small-text text-muted mb-0\">
                                    New product launch
                                </p>
                            </div>
                        </a>
                        <a class=\"dropdown-item\">
                            <div class=\"item-thumbnail\">
                                <img src=\"{{ asset('Back/images/faces/face3.jpg') }}\" alt=\"image\" class=\"profile-pic\">
                            </div>
                            <div class=\"item-content flex-grow\">
                                <h6 class=\"ellipsis font-weight-normal\"> Johnson
                                </h6>
                                <p class=\"font-weight-light small-text text-muted mb-0\">
                                    Upcoming board meeting
                                </p>
                            </div>
                        </a>
                    </div>
                </li>
                <li class=\"nav-item dropdown\">
                    <a class=\"nav-link count-indicator dropdown-toggle\" id=\"notificationDropdown\" href=\"#\" data-toggle=\"dropdown\">
                        <i class=\"ti-bell mx-0\"></i>
                        <span class=\"count\"></span>
                    </a>
                    <div class=\"dropdown-menu dropdown-menu-right navbar-dropdown\" aria-labelledby=\"notificationDropdown\">
                        <p class=\"mb-0 font-weight-normal float-left dropdown-header\">Notifications</p>
                        <a class=\"dropdown-item\">
                            <div class=\"item-thumbnail\">
                                <div class=\"item-icon bg-success\">
                                    <i class=\"ti-info-alt mx-0\"></i>
                                </div>
                            </div>
                            <div class=\"item-content\">
                                <h6 class=\"font-weight-normal\">Application Error</h6>
                                <p class=\"font-weight-light small-text mb-0 text-muted\">
                                    Just now
                                </p>
                            </div>
                        </a>
                        <a class=\"dropdown-item\">
                            <div class=\"item-thumbnail\">
                                <div class=\"item-icon bg-warning\">
                                    <i class=\"ti-settings mx-0\"></i>
                                </div>
                            </div>
                            <div class=\"item-content\">
                                <h6 class=\"font-weight-normal\">Settings</h6>
                                <p class=\"font-weight-light small-text mb-0 text-muted\">
                                    Private message
                                </p>
                            </div>
                        </a>
                        <a class=\"dropdown-item\">
                            <div class=\"item-thumbnail\">
                                <div class=\"item-icon bg-info\">
                                    <i class=\"ti-user mx-0\"></i>
                                </div>
                            </div>
                            <div class=\"item-content\">
                                <h6 class=\"font-weight-normal\">New user registration</h6>
                                <p class=\"font-weight-light small-text mb-0 text-muted\">
                                    2 days ago
                                </p>
                            </div>
                        </a>
                    </div>
                </li>
                <li class=\"nav-item nav-profile dropdown\">
                    <a class=\"nav-link dropdown-toggle\" href=\"#\" data-toggle=\"dropdown\" id=\"profileDropdown\">
                        <img src=\"{{ asset('Back/images/faces/face28.jpg') }}\" alt=\"profile\"/>
                    </a>
                    <div class=\"dropdown-menu dropdown-menu-right navbar-dropdown\" aria-labelledby=\"profileDropdown\">
                        <a class=\"dropdown-item\">
                            <i class=\"ti-settings text-primary\"></i>
                            Settings
                        </a>
                        <a class=\"dropdown-item\">
                            <i class=\"ti-power-off text-primary\"></i>
                            Logout
                        </a>
                    </div>
                </li>
            </ul>
            <button class=\"navbar-toggler navbar-toggler-right d-lg-none align-self-center\" type=\"button\" data-toggle=\"offcanvas\">
                <span class=\"ti-view-list\"></span>
            </button>
        </div>
    </nav>
    <!-- partial -->
    <div class=\"container-fluid page-body-wrapper\">
        <!-- partial:../../partials/_sidebar.html -->
        <nav class=\"sidebar sidebar-offcanvas\" id=\"sidebar\">
            <ul class=\"nav\">
                <li class=\"nav-item\">
                    <a class=\"nav-link\" href=\"{{ path('Page_Admin') }}\">
                        <i class=\"ti-shield menu-icon\"></i>
                        <span class=\"menu-title\">Acceuil</span>
                    </a>
                </li>
                <li class=\"nav-item\">
                    <a class=\"nav-link\" data-toggle=\"collapse\" href=\"#ui-basic\" aria-expanded=\"false\" aria-controls=\"ui-basic\">
                        <i class=\"ti-palette menu-icon\"></i>
                        <span class=\"menu-title\">Gestion Cour</span>
                        <i class=\"menu-arrow\"></i>
                    </a>
                    <div class=\"collapse\" id=\"ui-basic\">
                        <ul class=\"nav flex-column sub-menu\">
                            <li class=\"nav-item\"> <a class=\"nav-link\" href=\"{{ path('Affichier_ClassEnseignant') }}\">Ajouter Cour</a></li>
                            <li class=\"nav-item\"> <a class=\"nav-link\" href=\"{{ path('Affichier_Cour') }}\">Affichier Cours</a></li>

                        </ul>
                    </div>
                </li>
                <li class=\"nav-item\">
                    <a class=\"nav-link\" href=\"{{ path('Emploi_EnseignantAfficheback') }}\">
                        <i class=\"ti-layout-list-post menu-icon\"></i>
                        <span class=\"menu-title\">Consulter Emploi</span>
                    </a>
                </li>


            </ul>
        </nav>
        {% block body  %}  {% endblock %}
    </div>
    <!-- content-wrapper ends -->
    <!-- partial:../../partials/_footer.html -->
    <footer class=\"footer\">
        <div class=\"d-sm-flex justify-content-center justify-content-sm-between\">
            <span class=\"text-muted text-center text-sm-left d-block d-sm-inline-block\">Copyright © 2018 <a href=\"https://www.templatewatch.com/\" target=\"_blank\">Templatewatch</a>. All rights reserved.</span>
            <span class=\"float-none float-sm-right d-block mt-1 mt-sm-0 text-center\">Hand-crafted & made with <i class=\"ti-heart text-danger ml-1\"></i></span>
        </div>
    </footer>
    <!-- partial -->
</div>
<!-- main-panel ends --><!-- page-body-wrapper ends -->

<!-- container-scroller -->
<!-- plugins:js -->
<script src=\"{{ asset('Back/vendors/base/vendor.bundle.base.js') }}\"></script>
<!-- endinject -->
<!-- Plugin js for this page-->
<script src=\"{{ asset('Back/vendors/chart.js/Chart.min.js') }}\"></script>
<!-- End plugin js for this page-->
<!-- inject:js -->
<script src=\"{{ asset('Back/js/off-canvas.js') }}\"></script>
<script src=\"{{ asset('Back/js/hoverable-collapse.js') }}\"></script>
<script src=\"{{ asset('Back/js/template.js') }}\"></script>
<script src=\"{{ asset('Back/js/todolist.js') }}\"></script>
<!-- endinject -->
<!-- Custom js for this page-->
<script src=\"{{ asset('Back/js/todolist.js') }}\"></script>
<!-- End custom js for this page-->
</body>

</html>
", "@User/Page_Enseignant.html.twig", "C:\\wamp64\\www\\Ecole\\src\\UserBundle\\Resources\\views\\Page_Enseignant.html.twig");
    }
}
