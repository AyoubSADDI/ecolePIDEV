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

/* UserBundle::Page_Apprenant.html.twig */
class __TwigTemplate_0ea0f9959deaec18d2d9528f68d254e503f42464160693eb3e7cf19ac59911d0 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'titre' => [$this, 'block_titre'],
            'body' => [$this, 'block_body'],
            'js' => [$this, 'block_js'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "UserBundle::Page_Apprenant.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "UserBundle::Page_Apprenant.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en-US\">


<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, maximum-scale=1\">
    <link rel=\"shortcut icon\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Front/img/cropped-favicon-192x192.png"), "html", null, true);
        echo "\" />
    <title>Kiddy - Children HTML Template</title>
    <link rel='stylesheet' href='";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Front/revslider/css/settings.css"), "html", null, true);
        echo "' type='text/css' media='all' />
    <link rel=\"stylesheet\" type=\"text/css\" href=\"https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.10.0/fullcalendar.min.css\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.10.0/fullcalendar.print.css\">

    <link rel='stylesheet' href='";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Front/css/font-awesome.css"), "html", null, true);
        echo "' type='text/css' media='all' />
    <link rel='stylesheet' href='";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Front/css/jquery.fancybox.css"), "html", null, true);
        echo "' type='text/css' media='all' />
    <link rel='stylesheet' href='";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Front/css/select2.css"), "html", null, true);
        echo "' type='text/css' media='all' />
    <link rel='stylesheet' href='";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Front/css/animate.css"), "html", null, true);
        echo "' type='text/css' media='all' />
    <link rel='stylesheet' href='";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Front/css/main.css"), "html", null, true);
        echo "' type='text/css' media='all' />
    <link rel='stylesheet' href='";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Front/css/shop.css"), "html", null, true);
        echo "' type='text/css' media='all' />
    <link rel='stylesheet' href='";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Front/tuner/style.css"), "html", null, true);
        echo "' type='text/css' media='all' />
    <script type='text/javascript' src='";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Front/js/jquery.js"), "html", null, true);
        echo "'></script>
    <script type='text/javascript' src='";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Front/js/jquery-migrate.min.js"), "html", null, true);
        echo "'></script>
    <script type='text/javascript' src='";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Front/revslider/js/jquery.themepunch.tools.min.js"), "html", null, true);
        echo "'></script>
    <script type='text/javascript' src='";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Front/revslider/js/jquery.themepunch.revolution.min.js"), "html", null, true);
        echo "'></script>
    <script type=\"text/javascript\" src=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Front/revslider/js/extensions/revolution.extension.slideanims.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Front/revslider/js/extensions/revolution.extension.layeranimation.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Front/revslider/js/extensions/revolution.extension.navigation.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Front/revslider/js/extensions/revolution.extension.parallax.min.js"), "html", null, true);
        echo "\"></script>
    <link rel=\"icon\" href=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Front/img/cropped-favicon-32x32.png"), "html", null, true);
        echo "\" sizes=\"32x32\" />
    <link rel=\"icon\" href=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Front/img/cropped-favicon-192x192.png"), "html", null, true);
        echo "\" sizes=\"192x192\" />
    <link rel=\"stylesheet\" type=\"text/css\" href=\"https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.10.0/fullcalendar.min.css\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.10.0/fullcalendar.print.css\">
    <link rel=\"apple-touch-icon-precomposed\" href=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Front/img/cropped-favicon-180x180.png"), "html", null, true);
        echo "\">
    <meta name=\"msapplication-TileImage\" content=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Front/img/cropped-favicon-270x270.png"), "html", null, true);
        echo "\">

</head>

<body class=\"home page wide wave-style\">
<div class=\"page\">
    <!-- top panel -->
    <div class='site_top_panel wave slider'>
        <!-- canvas -->
        <div class='top_half_sin_wrapper'>
            <canvas class='top_half_sin' data-bg-color='#ffffff' data-line-color='#ffffff'></canvas>
        </div>
        <!-- / canvas -->
        <div class='container'>
            <div class='row_text_search'>
                <div id='top_panel_text'><a href=\"tel:1-800-123-45678\"><i class=\"fa fa-phone-square\"></i> 1-800-123-45678 </a>;
                    <a href=\"mailto:mail@mail.com\"> <i class=\"fa fa-envelope-o\"></i>mail@mail.com</a>
                </div>
                <form method=\"get\" class=\"search-form\" action=\"#\">
                    <label>
                        <span class=\"screen-reader-text\">Search for:</span>
                        <input type=\"text\" class=\"search-field vova\" value=\"\" name=\"s\" title=\"Search for:\" />
                    </label>
                    <input type=\"submit\" class=\"search-submit\" value=\"Search\" />
                    <input type='hidden' name='lang' value='en' />
                </form>
            </div>
            <div id='top_panel_links'>
                <div class='search_icon'></div>
                <div id='top_social_links_wrapper'>
                    <div class='share-toggle-button'><i class='share-icon fa fa-share-alt'></i></div>
                    <div class='cws_social_links'><a href='http://twitter.com/' class='cws_social_link' title='Twitter'><i class='share-icon fa fa-twitter'></i></a><a href='http://facebook.com/' class='cws_social_link' title='Facebook'><i class='share-icon fa fa-facebook'></i></a><a href='http://dribbble.com/' class='cws_social_link' title='Dribbble'><i class='share-icon fa fa-dribbble'></i></a><a href='https://plus.google.com/' class='cws_social_link' title='Google'><i class='share-icon fa fa-google-plus'></i></a></div>
                </div>
                <div class='mini-cart'> <a class=\"woo_icon\" href=\"features-shop-cart.html\" title=\"View your shopping cart\"><i class='woo_mini-count fa fa-shopping-cart'><span>2</span></i></a>
                    <div class=\"woo_mini_cart\">
                        <!-- start product list -->
                        <ul class=\"cart_list product_list_widget\">
                            <li>
                                <a href=\"#\" class=\"remove\" title=\"Remove this item\">×</a>
                                <a href=\"shop-single-product.html\">
                                    <img width=\"180\" height=\"180\" src=\"";
        // line 74
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Front/pic/shop/58x58-bag.jpg"), "html", null, true);
        echo "\" class=\"attachment-shop_thumbnail\" alt=\"poster_2_up\">Bag&nbsp; </a>
                                <span class=\"quantity\">1 × <span class=\"amount\">£12.00</span></span>
                            </li>
                            <li>
                                <a href=\"#\" class=\"remove\" title=\"Remove this item\">×</a>
                                <a href=\"shop-single-product.html\">
                                    <img width=\"180\" height=\"180\" src=\"";
        // line 80
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Front/pic/shop/58x58-basket.jpg"), "html", null, true);
        echo "\" class=\"attachment-shop_thumbnail\" alt=\"T_7_front\">Basket&nbsp; </a>
                                <span class=\"quantity\">1 × <span class=\"amount\">£18.00</span></span>
                            </li>
                        </ul>
                        <!-- end product list -->
                        <p class=\"total\"><strong>Subtotal:</strong> <span class=\"amount\">£30.00</span></p>
                        <p class=\"buttons\">
                            <a href=\"features-shop-cart.html\" class=\"button wc-forward\">View Cart</a>
                            <a href=\"features-shop-checkout.html\" class=\"button checkout wc-forward\">Checkout</a>
                        </p>
                    </div>
                </div>
                <div class=\"lang_bar\">
                    <div>
                        <ul>
                            <li>
                                <a href=\"#\" class=\"lang_sel_sel icl-en\"><img class=\"iclflag\" src=\" ";
        // line 96
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Front/img/en.png"), "html", null, true);
        echo "\" alt=\"en\" title=\"English\" /> &nbsp;English
                                </a>
                                <ul>
                                    <li class=\"icl-fr\">
                                        <a href=\"#\"><img class=\"iclflag\" src=\"";
        // line 100
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Front/img/fr.png"), "html", null, true);
        echo "\" alt=\"fr\" title=\"Français\" />&nbsp;Français</a>
                                    </li>
                                    <li class=\"icl-de\">
                                        <a href=\"#\"><img class=\"iclflag\" src=\"";
        // line 103
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Front/img/fr.png"), "html", null, true);
        echo "\" alt=\"de\" title=\"Deutsch\" />&nbsp;Deutsch</a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class=\"site_top_panel_toggle\"></div>
        </div>
    </div>
    <!-- / top panel -->
    <!-- slider and menu container -->
    <div class='slider_vs_menu'>
        <div class='header_cont'>
            <div class='header_mask'>
                <div class='header_pattern'></div>
            </div>
            <header class='site_header logo-in-menu' data-menu-after=\"3\">
                <div class=\"header_box\">
                    <div class=\"container\">
                        <!-- logo -->
                        <div class=\"header_logo_part with_border\" role=\"banner\">
                            <a class=\"logo\" href=\"index-2.html\"><img src='";
        // line 126
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Front/img/logo1-304vqrnv7ccxz47xp4tw5m.png"), "html", null, true);
        echo "' data-at2x='img/logo1-304vqrnv7ccxz47xp4tw5m@2x.png' alt /></a>
                        </div>
                        <!-- / logo -->
                        <!-- menu -->
                        <div class=\"header_nav_part\">
                            <nav class=\"main-nav-container a-right\">
                                <div class=\"mobile_menu_header\">
                                    <i class=\"mobile_menu_switcher\"><span></span><span></span><span></span></i>
                                </div>
                                <ul id=\"menu-main-menu\" class=\"main-menu menu-bees\">
                                    <!-- menu item -->
                                    <li class=\"menu-item current-menu-item page_item current_page_item current-menu-ancestor current-menu-parent current_page_parent current_page_ancestor menu-item-has-children bees-start\">
                                        <a href=\"index-2.html\">
                                            <div class=\"bees bees-start\"><span></span>
                                                <div class=\"line-one\"></div>
                                                <div class=\"line-two\"></div>
                                            </div>Home
                                            <div class=\"canvas_wrapper\">
                                                <canvas class=\"menu_dashed\"></canvas>
                                            </div>
                                        </a>
                                        <span class='button_open'></span>
                                        <ul class=\"sub-menu\">
                                            <li class=\"menu-item back\"><a href=\"#\"><em>←</em>&nbsp;BACK</a>
                                            </li>
                                            <li class=\"menu-item current-menu-item page_item current_page_item\"><a href=\"index-2.html\">Learn&#038;Play</a></li>
                                            <li class=\"menu-item\"><a href=\"babysitter.html\">Babysitter</a></li>
                                            <li class=\"menu-item\"><a href=\"store.html\">Store</a></li>
                                        </ul>
                                    </li>
                                    <!-- / menu item -->
                                    <!-- menu item -->
                                    <li class=\"menu-item menu-item-has-children\"><a href=\"";
        // line 158
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("Front_AfficheMonCour");
        echo "\">Cours Livre<div class=\"canvas_wrapper\"><canvas class=\"menu_dashed\"></canvas></div></a>

                                    </li>
                                    <!-- / menu item -->
                                    <!-- menu item -->
                                    <li class=\"menu-item menu-item-has-children\"><a href=\"";
        // line 163
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("See_Cour");
        echo "\">Mes Cours<div class=\"canvas_wrapper\"><canvas class=\"menu_dashed\"></canvas></div></a>
                                        <span class='button_open'></span>

                                    </li>
                                    <!-- / menu item -->
                                    <!-- menu item -->
                                    <li class=\"menu-item menu-item-has-children right\"><a href=\"portfolio-four-columns.html\">Portfolio<div class=\"canvas_wrapper\"><canvas class=\"menu_dashed\"></canvas></div></a>
                                        <span class='button_open'></span>
                                        <ul class=\"sub-menu\">
                                            <li class=\"menu-item back\"><a href=\"#\"><em>←</em>&nbsp;BACK</a>
                                            </li>
                                            <li class=\"menu-item\"><a href=\"portfolio-one-column.html\">One Column</a></li>
                                            <li class=\"menu-item\"><a href=\"portfolio-two-columns.html\">Two Columns</a></li>
                                            <li class=\"menu-item\"><a href=\"portfolio-three-columns.html\">Three Columns</a></li>
                                            <li class=\"menu-item\"><a href=\"portfolio-four-columns.html\">Four Columns</a></li>
                                            <li class=\"menu-item\"><a href=\"portfolio-filtered.html\">With Sidebar</a></li>
                                            <li class=\"menu-item\"><a href=\"portfolio-gallery.html\">Gallery</a></li>
                                        </ul>
                                    </li>
                                    <!-- / menu item -->
                                    <!-- menu item -->
                                    <li class=\"menu-item menu-item-has-children right\"><a href=\"#\">Evenements<div class=\"canvas_wrapper\"><canvas class=\"menu_dashed\"></canvas></div></a>
                                        <span class='button_open'></span>
                                        <ul class=\"sub-menu\">
                                            <li class=\"menu-item back\"><a href=\"#\"><em>←</em>&nbsp;BACK</a>
                                            </li>
                                            <li class=\"menu-item\"><a href=\"";
        // line 189
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("Front_Evenet");
        echo "\">OUR Event</a></li>
                                            <li class=\"menu-item\"><a href=\"";
        // line 190
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("Calendre");
        echo "\">Our Calendre</a></li>
                                        </ul>
                                    </li>
                                    <!-- / menu item -->
                                    <!-- menu item -->
                                    <li class=\"menu-item right bees-end\">
                                        <a href=\"";
        // line 196
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("FrontMyInfo");
        echo "\">
                                            <div class=\"bees bees-end\"><span></span>
                                                <div class=\"line-one\"></div>
                                                <div class=\"line-two\"></div>
                                            </div>Profil
                                            <div class=\"canvas_wrapper\">
                                                <canvas class=\"menu_dashed\"></canvas>
                                            </div>
                                        </a>
                                    </li>
                                    <!-- / menu item -->
                                </ul>
                            </nav>
                        </div>
                        <!-- / menu -->
                    </div>
                </div>
            </header>
            <!-- #masthead -->
        </div>
        <div id=\"rev_slider_1_1_wrapper\" class=\"rev_slider_wrapper fullwidthbanner-container\">
            <!-- START REVOLUTION SLIDER 5.0.9 fullwidth mode -->
            <div id=\"rev_slider_1_1\" class=\"rev_slider fullwidthabanner\" style=\"display:none;\" data-version=\"5.0.9\">
                <ul>
                    <!-- SLIDE  -->
                    <li data-index=\"rs-1\" data-transition=\"random,fade\" data-slotamount=\"7,7\" data-easein=\"default,default\" data-easeout=\"default,default\" data-masterspeed=\"300,500\" data-thumb=\"pic/2015/09/dots-pattern-100x50.png\" data-rotate=\"0,0\" data-saveperformance=\"off\" data-title=\"Slide\" data-description=\"\">
                        <!-- MAIN IMAGE -->
                        <img src=\"";
        // line 223
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Front/img/dots-pattern.png"), "html", null, true);
        echo "\" alt=\"\" width=\"43\" height=\"24\" data-bgposition=\"center center\" data-bgfit=\"normal\" data-bgrepeat=\"repeat\" data-bgparallax=\"1\" class=\"rev-slidebg\" data-no-retina>
                        <!-- LAYERS -->
                        <!-- LAYER NR. 1 -->
                        <div class=\"tp-caption   tp-resizeme rs-parallaxlevel-0\" id=\"slide-1-layer-23\" data-x=\"center\" data-hoffset=\"\" data-y=\"center\" data-voffset=\"\" data-width=\"['none','none','none','none']\" data-height=\"['none','none','none','none']\" data-transform_idle=\"o:1;\" data-transform_in=\"opacity:0;s:300;e:Power2.easeInOut;\" data-transform_out=\"opacity:0;s:300;s:300;\" data-start=\"990\" data-responsive_offset=\"on\" style=\"z-index: 5;\"><img src=\"";
        // line 226
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Front/pic/revslider/general/sunshine_home1.png"), "html", null, true);
        echo "\" alt=\"\" width=\"1920\" height=\"650\" data-ww=\"1920px\" data-hh=\"650px\" data-no-retina>
                        </div>
                        <!-- LAYER NR. 2 -->
                        <div class=\"tp-caption home-h2   tp-resizeme rs-parallaxlevel-9\" id=\"slide-1-layer-1\" data-x=\"30\" data-y=\"213\" data-width=\"['auto']\" data-height=\"['auto']\" data-transform_idle=\"o:1;\" data-transform_in=\"y:50px;z:0;rX:0;rY:0;rZ:0;sX:0.9;sY:0.9;skX:0;skY:0;opacity:0;s:1500;e:Power3.easeInOut;\" data-transform_out=\"auto:auto;s:300;\" data-start=\"500\" data-splitin=\"none\" data-splitout=\"none\" data-responsive_offset=\"on\" style=\"z-index: 6; white-space: nowrap;\">Welcome to
                        </div>
                        <!-- LAYER NR. 3 -->
                        <div class=\"tp-caption home-h1   tp-resizeme rs-parallaxlevel-9\" id=\"slide-1-layer-2\" data-x=\"30\" data-y=\"275\" data-width=\"['auto']\" data-height=\"['auto']\" data-transform_idle=\"o:1;\" data-transform_in=\"y:50px;z:0;rX:0;rY:0;rZ:0;sX:0.9;sY:0.9;skX:0;skY:0;opacity:0;s:1500;e:Power3.easeInOut;\" data-transform_out=\"auto:auto;s:300;\" data-start=\"500\" data-splitin=\"none\" data-splitout=\"none\" data-responsive_offset=\"on\" style=\"z-index: 7; white-space: nowrap;\">KIDDY!
                        </div>
                        <!-- LAYER NR. 4 -->
                        <div class=\"tp-caption home-general-font   tp-resizeme rs-parallaxlevel-9 none-visible-mobile\" id=\"slide-1-layer-22\" data-x=\"30\" data-y=\"345\" data-width=\"['none','none','none','none']\" data-height=\"['none','none','none','none']\" data-transform_idle=\"o:1;\" data-transform_in=\"y:50px;opacity:0;s:1500;e:Power3.easeInOut;\" data-transform_out=\"auto:auto;s:300;\" data-start=\"500\" data-responsive_offset=\"on\" style=\"z-index: 8;border-color:rgba(0, 0, 0, 1.00);\"><img src=\"";
        // line 235
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Front/pic/revslider/general/slider_devider.png"), "html", null, true);
        echo "\" alt=\"\" width=\"300\" height=\"8\" data-ww=\"300px\" data-hh=\"8px\" data-no-retina>
                        </div>
                        <!-- LAYER NR. 5 -->
                        <div class=\"tp-caption home-general-font   tp-resizeme rs-parallaxlevel-9 none-visible-mobile\" id=\"slide-1-layer-3\" data-x=\"30\" data-y=\"385\" data-width=\"['auto']\" data-height=\"['auto']\" data-transform_idle=\"o:1;\" data-transform_in=\"y:50px;z:0;rX:0;rY:0;rZ:0;sX:0.9;sY:0.9;skX:0;skY:0;opacity:0;s:1500;e:Power3.easeInOut;\" data-transform_out=\"auto:auto;s:300;\" data-start=\"500\" data-splitin=\"none\" data-splitout=\"none\" data-responsive_offset=\"on\" style=\"z-index: 9; white-space: nowrap; color: rgba(255, 255, 255, 1.00);font-family:Patrick Hand;border-color:rgba(0, 0, 0, 1.00);\">A perfect learning center
                        </div>
                        <!-- LAYER NR. 6 -->
                        <div class=\"tp-caption home-general-font   tp-resizeme rs-parallaxlevel-9 none-visible-mobile\" id=\"slide-1-layer-4\" data-x=\"29\" data-y=\"413\" data-width=\"['auto']\" data-height=\"['auto']\" data-transform_idle=\"o:1;\" data-transform_in=\"y:50px;z:0;rX:0;rY:0;rZ:0;sX:0.9;sY:0.9;skX:0;skY:0;opacity:0;s:1500;e:Power3.easeInOut;\" data-transform_out=\"auto:auto;s:300;\" data-start=\"500\" data-splitin=\"none\" data-splitout=\"none\" data-responsive_offset=\"on\" style=\"z-index: 10; white-space: nowrap; color: rgba(255, 255, 255, 1.00);font-family:Patrick Hand;border-color:rgba(0, 0, 0, 1.00);\">for your kids
                        </div>
                        <!-- LAYER NR. 7 -->
                        <div class=\"tp-caption   tp-resizeme rs-parallaxlevel-10\" id=\"slide-1-layer-5\" data-x=\"-36\" data-y=\"589\" data-width=\"['none','none','none','none']\" data-height=\"['none','none','none','none']\" data-transform_idle=\"o:1;\" data-transform_in=\"opacity:0;s:290;e:Power2.easeInOut;\" data-transform_out=\"opacity:0;s:300;s:300;\" data-start=\"500\" data-responsive_offset=\"on\" style=\"z-index: 11;\"><img src=\"";
        // line 244
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Front/pic/revslider/general/grass.png"), "html", null, true);
        echo "\" alt=\"\" width=\"1469\" height=\"162\" data-ww=\"1484px\" data-hh=\"130px\" data-no-retina>
                        </div>
                        <!-- LAYER NR. 8 -->
                        <div class=\"tp-caption   tp-resizeme rs-parallaxlevel-8\" id=\"slide-1-layer-7\" data-x=\"761\" data-y=\"186\" data-width=\"['none','none','none','none']\" data-height=\"['none','none','none','none']\" data-transform_idle=\"o:1;\" data-transform_in=\"opacity:0;s:300;e:Power2.easeInOut;\" data-transform_out=\"opacity:0;s:300;s:300;\" data-start=\"500\" data-responsive_offset=\"on\" style=\"z-index: 12;\"><img src=\"";
        // line 247
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Front/pic/revslider/general/rainbow.png"), "html", null, true);
        echo "\" alt=\"\" width=\"421\" height=\"424\" data-ww=\"398px\" data-hh=\"424px\" data-no-retina>
                        </div>
                        <!-- LAYER NR. 9 -->
                        <div class=\"tp-caption   tp-resizeme rs-parallaxlevel-9\" id=\"slide-1-layer-6\" data-x=\"362\" data-y=\"181\" data-width=\"['none','none','none','none']\" data-height=\"['none','none','none','none']\" data-transform_idle=\"o:1;\" data-transform_in=\"opacity:0;s:300;e:Power2.easeInOut;\" data-transform_out=\"opacity:0;s:300;s:300;\" data-start=\"570\" data-responsive_offset=\"on\" style=\"z-index: 13;\"><img src=\"";
        // line 250
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Front/pic/revslider/general/children.png"), "html", null, true);
        echo "\" alt=\"\" width=\"662\" height=\"484\" data-ww=\"662px\" data-hh=\"484px\" data-no-retina>
                        </div>
                        <!-- LAYER NR. 10 -->
                        <div class=\"tp-caption   tp-resizeme rs-parallaxlevel-8\" id=\"slide-1-layer-9\" data-x=\"325\" data-y=\"132\" data-width=\"['none','none','none','none']\" data-height=\"['none','none','none','none']\" data-transform_idle=\"o:1;\" data-transform_in=\"x:0;y:0;z:0;rX:0;rY:0;rZ:0;sX:0;sY:0;skX:0;skY:0;opacity:0;s:300;e:Power2.easeInOut;\" data-transform_out=\"opacity:0;s:300;s:300;\" data-start=\"990\" data-responsive_offset=\"on\" style=\"z-index: 14;\">
                            <div class=\"rs-looped rs-wave\" data-speed=\"9\" data-angle=\"0\" data-radius=\"5px\" data-origin=\"50% 50%\"><img src=\"";
        // line 254
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Front/pic/revslider/general/cloud-1.png"), "html", null, true);
        echo "\" alt=\"\" width=\"91\" height=\"37\" data-ww=\"91px\" data-hh=\"37px\" data-no-retina>
                            </div>
                        </div>
                        <!-- LAYER NR. 11 -->
                        <div class=\"tp-caption   tp-resizeme rs-parallaxlevel-7\" id=\"slide-1-layer-10\" data-x=\"-117\" data-y=\"311\" data-width=\"['none','none','none','none']\" data-height=\"['none','none','none','none']\" data-transform_idle=\"o:1;\" data-transform_in=\"x:0;y:0;z:0;rX:0;rY:0;rZ:0;sX:0;sY:0;skX:0;skY:0;opacity:0;s:300;e:Power2.easeInOut;\" data-transform_out=\"x:0;y:0;z:0;rX:0;rY:0;rZ:0;sX:0;sY:0;skX:0;skY:0;opacity:0;s:300;s:300;\" data-start=\"580\" data-responsive_offset=\"on\" style=\"z-index: 15;\">
                            <div class=\"rs-looped rs-wave\" data-speed=\"9\" data-angle=\"0\" data-radius=\"5px\" data-origin=\"50% 10%\"><img src=\"";
        // line 259
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Front/pic/revslider/general/cloud-2.png"), "html", null, true);
        echo "\" alt=\"\" width=\"90\" height=\"40\" data-ww=\"90px\" data-hh=\"40px\" data-no-retina>
                            </div>
                        </div>
                        <!-- LAYER NR. 12 -->
                        <div class=\"tp-caption   tp-resizeme rs-parallaxlevel-8\" id=\"slide-1-layer-13\" data-x=\"1122\" data-y=\"69\" data-width=\"['none','none','none','none']\" data-height=\"['none','none','none','none']\" data-transform_idle=\"o:1;\" data-transform_in=\"x:0;y:0;z:0;rX:0;rY:0;rZ:0;sX:0;sY:0;skX:0;skY:0;opacity:0;s:300;e:Power2.easeInOut;\" data-transform_out=\"opacity:0;s:300;s:300;\" data-start=\"790\" data-responsive_offset=\"on\" style=\"z-index: 16;\">
                            <div class=\"rs-looped rs-wave\" data-speed=\"11\" data-angle=\"0\" data-radius=\"5px\" data-origin=\"50% 50%\"><img src=\"";
        // line 264
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Front/pic/revslider/general/cloud-5.png"), "html", null, true);
        echo "\" alt=\"\" width=\"180\" height=\"72\" data-ww=\"180px\" data-hh=\"72px\" data-no-retina>
                            </div>
                        </div>
                        <!-- LAYER NR. 13 -->
                        <div class=\"tp-caption   tp-resizeme rs-parallaxlevel-8\" id=\"slide-1-layer-14\" data-x=\"-127\" data-y=\"70\" data-width=\"['none','none','none','none']\" data-height=\"['none','none','none','none']\" data-transform_idle=\"o:1;\" data-transform_in=\"x:0;y:0;z:0;rX:0;rY:0;rZ:0;sX:0;sY:0;skX:0;skY:0;opacity:0;s:300;e:Power2.easeInOut;\" data-transform_out=\"opacity:0;s:300;s:300;\" data-start=\"710\" data-responsive_offset=\"on\" style=\"z-index: 17;\">
                            <div class=\"rs-looped rs-wave\" data-speed=\"9\" data-angle=\"0\" data-radius=\"5px\" data-origin=\"50% 10%\"><img src=\"";
        // line 269
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Front/pic/revslider/general/cloud-6.png"), "html", null, true);
        echo "\" alt=\"\" width=\"180\" height=\"72\" data-ww=\"180px\" data-hh=\"72px\" data-no-retina>
                            </div>
                        </div>
                        <!-- LAYER NR. 14 -->
                        <div class=\"tp-caption   tp-resizeme rs-parallaxlevel-6\" id=\"slide-1-layer-18\" data-x=\"898\" data-y=\"50\" data-width=\"['none','none','none','none']\" data-height=\"['none','none','none','none']\" data-transform_idle=\"o:1;\" data-transform_in=\"x:0;y:0;z:0;rX:0;rY:0;rZ:0;sX:0;sY:0;skX:0;skY:0;opacity:0;s:300;e:Power2.easeInOut;\" data-transform_out=\"opacity:0;s:300;s:300;\" data-start=\"590\" data-responsive_offset=\"on\" style=\"z-index: 18;\">
                            <div class=\"rs-looped rs-wave\" data-speed=\"9\" data-angle=\"0\" data-radius=\"10\" data-origin=\"50% 50%\"><img src=\"";
        // line 274
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Front/pic/revslider/general/cloud-2.png"), "html", null, true);
        echo "\" alt=\"\" width=\"90\" height=\"40\" data-ww=\"90px\" data-hh=\"40px\" data-no-retina>
                            </div>
                        </div>
                        <!-- LAYER NR. 15 -->
                        <div class=\"tp-caption   tp-resizeme rs-parallaxlevel-8\" id=\"slide-1-layer-19\" data-x=\"1259\" data-y=\"528\" data-width=\"['none','none','none','none']\" data-height=\"['none','none','none','none']\" data-transform_idle=\"o:1;\" data-transform_in=\"x:0;y:0;z:0;rX:0;rY:0;rZ:0;sX:0;sY:0;skX:0;skY:0;opacity:0;s:300;e:Power2.easeInOut;\" data-transform_out=\"opacity:0;s:300;s:300;\" data-start=\"920\" data-responsive_offset=\"on\" style=\"z-index: 19;\">
                            <div class=\"rs-looped rs-wave\" data-speed=\"12\" data-angle=\"0\" data-radius=\"10\" data-origin=\"50% 50%\"><img src=\"";
        // line 279
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Front/pic/revslider/general/cloud-1.png"), "html", null, true);
        echo "\" alt=\"\" width=\"91\" height=\"37\" data-ww=\"91px\" data-hh=\"37px\" data-no-retina>
                            </div>
                        </div>
                        <!-- LAYER NR. 16 -->
                        <div class=\"tp-caption   tp-resizeme rs-parallaxlevel-9\" id=\"slide-1-layer-20\" data-x=\"-243\" data-y=\"478\" data-width=\"['none','none','none','none']\" data-height=\"['none','none','none','none']\" data-transform_idle=\"o:1;\" data-transform_in=\"x:0;y:0;z:0;rX:0;rY:0;rZ:0;sX:0;sY:0;skX:0;skY:0;opacity:0;s:300;e:Power2.easeInOut;\" data-transform_out=\"opacity:0;s:300;s:300;\" data-start=\"780\" data-responsive_offset=\"on\" style=\"z-index: 20;\">
                            <div class=\"rs-looped rs-wave\" data-speed=\"11\" data-angle=\"0\" data-radius=\"5px\" data-origin=\"50% 1%\"><img src=\"";
        // line 284
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Front/pic/revslider/general/cloud-1.png"), "html", null, true);
        echo "\" alt=\"\" width=\"271\" height=\"108\" data-ww=\"271px\" data-hh=\"108px\" data-no-retina>
                            </div>
                        </div>
                        <!-- LAYER NR. 17 -->
                        <div class=\"tp-caption   tp-resizeme rs-parallaxlevel-8\" id=\"slide-1-layer-21\" data-x=\"1150\" data-y=\"328\" data-width=\"['none','none','none','none']\" data-height=\"['none','none','none','none']\" data-transform_idle=\"o:1;\" data-transform_in=\"x:0;y:0;z:0;rX:0;rY:0;rZ:0;sX:0;sY:0;skX:0;skY:0;opacity:0;s:300;e:Power2.easeInOut;\" data-transform_out=\"opacity:0;s:300;s:300;\" data-start=\"990\" data-responsive_offset=\"on\" style=\"z-index: 21;\">
                            <div class=\"rs-looped rs-wave\" data-speed=\"11\" data-angle=\"0\" data-radius=\"5px\" data-origin=\"50% 50%\"><img src=\"";
        // line 289
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Front/pic/revslider/general/cloud-4.png"), "html", null, true);
        echo "\" alt=\"\" width=\"271\" height=\"108\" data-ww=\"271px\" data-hh=\"108px\" data-no-retina>
                            </div>
                        </div>
                    </li>
                    <!-- SLIDE  -->
                    <li data-index=\"rs-2\" data-transition=\"random,fade\" data-slotamount=\"7,7\" data-easein=\"default,default\" data-easeout=\"default,default\" data-masterspeed=\"300,500\" data-thumb=\"pic/2015/09/dots-pattern-100x50.png\" data-rotate=\"0,0\" data-saveperformance=\"off\" data-title=\"Slide\" data-description=\"\">
                        <!-- MAIN IMAGE -->
                        <img src=\"";
        // line 296
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Front/img/dots-pattern.png"), "html", null, true);
        echo "\" alt=\"\" width=\"43\" height=\"24\" data-bgposition=\"center center\" data-bgfit=\"normal\" data-bgrepeat=\"repeat\" data-bgparallax=\"1\" class=\"rev-slidebg\" data-no-retina>
                        <!-- LAYERS -->
                        <!-- LAYER NR. 1 -->
                        <div class=\"tp-caption   tp-resizeme rs-parallaxlevel-0\" id=\"slide-2-layer-24\" data-x=\"center\" data-hoffset=\"-340\" data-y=\"center\" data-voffset=\"\" data-width=\"['none','none','none','none']\" data-height=\"['none','none','none','none']\" data-transform_idle=\"o:1;\" data-transform_in=\"opacity:0;s:300;e:Power2.easeInOut;\" data-transform_out=\"opacity:0;s:300;s:300;\" data-start=\"570\" data-responsive_offset=\"on\" style=\"z-index: 5;\"><img src=\"";
        // line 299
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Front/pic/revslider/general/sunshine_home1.png"), "html", null, true);
        echo "\" alt=\"\" width=\"1920\" height=\"650\" data-ww=\"1920px\" data-hh=\"650px\" data-no-retina>
                        </div>
                        <!-- LAYER NR. 2 -->
                        <div class=\"tp-caption   tp-resizeme rs-parallaxlevel-10\" id=\"slide-2-layer-23\" data-x=\"center\" data-hoffset=\"\" data-y=\"bottom\" data-voffset=\"10\" data-width=\"['none','none','none','none']\" data-height=\"['none','none','none','none']\" data-transform_idle=\"o:1;\" data-transform_in=\"opacity:0;s:300;e:Power2.easeInOut;\" data-transform_out=\"opacity:0;s:300;s:300;\" data-start=\"570\" data-responsive_offset=\"on\" style=\"z-index: 6;\"><img src=\"";
        // line 302
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Front/pic/revslider/general/objects1.png"), "html", null, true);
        echo "\" alt=\"\" width=\"1892\" height=\"474\" data-ww=\"1892px\" data-hh=\"474px\" data-no-retina>
                        </div>
                        <!-- LAYER NR. 3 -->
                        <div class=\"tp-caption home-h2   tp-resizeme rs-parallaxlevel-9\" id=\"slide-2-layer-1\" data-x=\"450\" data-y=\"195\" data-width=\"['auto']\" data-height=\"['auto']\" data-transform_idle=\"o:1;\" data-transform_in=\"y:50px;z:0;rX:0;rY:0;rZ:0;sX:0.9;sY:0.9;skX:0;skY:0;opacity:0;s:1500;e:Power3.easeInOut;\" data-transform_out=\"auto:auto;s:300;\" data-start=\"500\" data-splitin=\"none\" data-splitout=\"none\" data-responsive_offset=\"on\" style=\"z-index: 7; white-space: nowrap;\">Our goal is
                        </div>
                        <!-- LAYER NR. 4 -->
                        <div class=\"tp-caption home-h1   tp-resizeme rs-parallaxlevel-9\" id=\"slide-2-layer-2\" data-x=\"450\" data-y=\"260\" data-width=\"['auto']\" data-height=\"['auto']\" data-transform_idle=\"o:1;\" data-transform_in=\"y:50px;z:0;rX:0;rY:0;rZ:0;sX:0.9;sY:0.9;skX:0;skY:0;opacity:0;s:1500;e:Power3.easeInOut;\" data-transform_out=\"auto:auto;s:300;\" data-start=\"500\" data-splitin=\"none\" data-splitout=\"none\" data-responsive_offset=\"on\" style=\"z-index: 8; white-space: nowrap;\">to Provide
                        </div>
                        <!-- LAYER NR. 5 -->
                        <div class=\"tp-caption home-general-font   tp-resizeme rs-parallaxlevel-9 none-visible-mobile\" id=\"slide-2-layer-22\" data-x=\"450\" data-y=\"330\" data-width=\"['none','none','none','none']\" data-height=\"['none','none','none','none']\" data-transform_idle=\"o:1;\" data-transform_in=\"y:50px;opacity:0;s:1500;e:Power3.easeInOut;\" data-transform_out=\"auto:auto;s:300;\" data-start=\"500\" data-responsive_offset=\"on\" style=\"z-index: 9;border-color:rgba(0, 0, 0, 1.00);\"><img src=\"";
        // line 311
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Front/pic/revslider/general/slider_devider.png"), "html", null, true);
        echo "\" alt=\"\" width=\"300\" height=\"8\" data-ww=\"300px\" data-hh=\"8px\" data-no-retina>
                        </div>
                        <!-- LAYER NR. 6 -->
                        <div class=\"tp-caption home-general-font   tp-resizeme rs-parallaxlevel-9 none-visible-mobile\" id=\"slide-2-layer-4\" data-x=\"450\" data-y=\"360\" data-width=\"['338']\" data-height=\"['106']\" data-transform_idle=\"o:1;\" data-transform_in=\"y:50px;z:0;rX:0;rY:0;rZ:0;sX:0.9;sY:0.9;skX:0;skY:0;opacity:0;s:1500;e:Power3.easeInOut;\" data-transform_out=\"auto:auto;s:300;\" data-start=\"500\" data-splitin=\"none\" data-splitout=\"none\" data-responsive_offset=\"on\" style=\"z-index: 10; min-width: 338px; max-width: 338px; max-width: 106px; max-width: 106px; white-space: normal; color: rgba(255, 255, 255, 1.00);font-family:Patrick Hand;border-color:rgba(0, 0, 0, 1.00);\">a complete nurturing environment for the growth and development of the whole child
                        </div>
                        <!-- LAYER NR. 7 -->
                        <div class=\"tp-caption   tp-resizeme rs-parallaxlevel-8\" id=\"slide-2-layer-7\" data-x=\"right\" data-hoffset=\"10\" data-y=\"bottom\" data-voffset=\"-56\" data-width=\"['none','none','none','none']\" data-height=\"['none','none','none','none']\" data-transform_idle=\"o:1;\" data-transform_in=\"opacity:0;s:300;e:Power2.easeInOut;\" data-transform_out=\"opacity:0;s:300;s:300;\" data-start=\"500\" data-responsive_offset=\"on\" style=\"z-index: 11;\"><img src=\"";
        // line 317
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Front/pic/revslider/general/kid-right.png"), "html", null, true);
        echo "\" alt=\"\" width=\"384\" height=\"538\" data-ww=\"384px\" data-hh=\"538px\" data-no-retina>
                        </div>
                        <!-- LAYER NR. 8 -->
                        <div class=\"tp-caption   tp-resizeme rs-parallaxlevel-9\" id=\"slide-2-layer-6\" data-x=\"10\" data-y=\"181\" data-width=\"['none','none','none','none']\" data-height=\"['none','none','none','none']\" data-transform_idle=\"o:1;\" data-transform_in=\"opacity:0;s:300;e:Power2.easeInOut;\" data-transform_out=\"opacity:0;s:300;s:300;\" data-start=\"500\" data-responsive_offset=\"on\" style=\"z-index: 12;\"><img src=\"";
        // line 320
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Front/pic/revslider/general/kid-left.png"), "html", null, true);
        echo "\" alt=\"\" width=\"459\" height=\"501\" data-ww=\"459px\" data-hh=\"501px\" data-no-retina>
                        </div>
                    </li>
                    <!-- SLIDE  -->
                    <li data-index=\"rs-3\" data-transition=\"random,fade\" data-slotamount=\"7,7\" data-easein=\"default,default\" data-easeout=\"default,default\" data-masterspeed=\"300,500\" data-thumb=\"pic/2015/09/dots-pattern-100x50.png\" data-rotate=\"0,0\" data-saveperformance=\"off\" data-title=\"Slide\" data-description=\"\">
                        <!-- MAIN IMAGE -->
                        <img src=\"";
        // line 326
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Front/img/dots-pattern.png"), "html", null, true);
        echo "\" alt=\"\" width=\"43\" height=\"24\" data-bgposition=\"center center\" data-bgfit=\"normal\" data-bgrepeat=\"repeat\" data-bgparallax=\"1\" class=\"rev-slidebg\" data-no-retina>
                        <!-- LAYERS -->
                        <!-- LAYER NR. 1 -->
                        <div class=\"tp-caption   tp-resizeme rs-parallaxlevel-0\" id=\"slide-3-layer-24\" data-x=\"center\" data-hoffset=\"-237\" data-y=\"center\" data-voffset=\"\" data-width=\"['none','none','none','none']\" data-height=\"['none','none','none','none']\" data-transform_idle=\"o:1;\" data-transform_in=\"opacity:0;s:300;e:Power2.easeInOut;\" data-transform_out=\"opacity:0;s:300;s:300;\" data-start=\"570\" data-responsive_offset=\"on\" style=\"z-index: 5;\"><img src=\"";
        // line 329
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Front/pic/revslider/general/sunshine_home1.png"), "html", null, true);
        echo "\" alt=\"\" width=\"1920\" height=\"650\" data-ww=\"1920px\" data-hh=\"650px\" data-no-retina>
                        </div>
                        <!-- LAYER NR. 2 -->
                        <div class=\"tp-caption   tp-resizeme rs-parallaxlevel-10\" id=\"slide-3-layer-23\" data-x=\"center\" data-hoffset=\"\" data-y=\"bottom\" data-voffset=\"10\" data-width=\"['none','none','none','none']\" data-height=\"['none','none','none','none']\" data-transform_idle=\"o:1;\" data-transform_in=\"opacity:0;s:300;e:Power2.easeInOut;\" data-transform_out=\"opacity:0;s:300;s:300;\" data-start=\"570\" data-responsive_offset=\"on\" style=\"z-index: 6;\"><img src=\"";
        // line 332
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Front/pic/revslider/general/objects.png"), "html", null, true);
        echo "\" alt=\"\" width=\"1859\" height=\"491\" data-ww=\"1859px\" data-hh=\"491px\" data-no-retina>
                        </div>
                        <!-- LAYER NR. 3 -->
                        <div class=\"tp-caption home-h2   tp-resizeme rs-parallaxlevel-9\" id=\"slide-3-layer-1\" data-x=\"750\" data-y=\"213\" data-width=\"['auto']\" data-height=\"['auto']\" data-transform_idle=\"o:1;\" data-transform_in=\"y:50px;z:0;rX:0;rY:0;rZ:0;sX:0.9;sY:0.9;skX:0;skY:0;opacity:0;s:1500;e:Power3.easeInOut;\" data-transform_out=\"auto:auto;s:300;\" data-start=\"500\" data-splitin=\"none\" data-splitout=\"none\" data-responsive_offset=\"on\" style=\"z-index: 7; white-space: nowrap;\">Learning
                        </div>
                        <!-- LAYER NR. 4 -->
                        <div class=\"tp-caption home-h1   tp-resizeme rs-parallaxlevel-9\" id=\"slide-3-layer-2\" data-x=\"750\" data-y=\"276\" data-width=\"['auto']\" data-height=\"['auto']\" data-transform_idle=\"o:1;\" data-transform_in=\"y:50px;z:0;rX:0;rY:0;rZ:0;sX:0.9;sY:0.9;skX:0;skY:0;opacity:0;s:1500;e:Power3.easeInOut;\" data-transform_out=\"auto:auto;s:300;\" data-start=\"500\" data-splitin=\"none\" data-splitout=\"none\" data-responsive_offset=\"on\" style=\"z-index: 8; white-space: nowrap;\">Is Fun
                        </div>
                        <!-- LAYER NR. 5 -->
                        <div class=\"tp-caption home-general-font   tp-resizeme rs-parallaxlevel-9 none-visible-mobile\" id=\"slide-3-layer-22\" data-x=\"750\" data-y=\"345\" data-width=\"['none','none','none','none']\" data-height=\"['none','none','none','none']\" data-transform_idle=\"o:1;\" data-transform_in=\"y:50px;opacity:0;s:1500;e:Power3.easeInOut;\" data-transform_out=\"auto:auto;s:300;\" data-start=\"500\" data-responsive_offset=\"on\" style=\"z-index: 9;border-color:rgba(0, 0, 0, 1.00);\"><img src=\"";
        // line 341
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Front/pic/revslider/general/slider_devider.png"), "html", null, true);
        echo "\" alt=\"\" width=\"300\" height=\"8\" data-ww=\"300px\" data-hh=\"8px\" data-no-retina>
                        </div>
                        <!-- LAYER NR. 6 -->
                        <div class=\"tp-caption home-general-font   tp-resizeme rs-parallaxlevel-9 none-visible-mobile\" id=\"slide-3-layer-3\" data-x=\"750\" data-y=\"385\" data-width=\"['372']\" data-height=\"['144']\" data-transform_idle=\"o:1;\" data-transform_in=\"y:50px;z:0;rX:0;rY:0;rZ:0;sX:0.9;sY:0.9;skX:0;skY:0;opacity:0;s:1500;e:Power3.easeInOut;\" data-transform_out=\"auto:auto;s:300;\" data-start=\"500\" data-splitin=\"none\" data-splitout=\"none\" data-responsive_offset=\"on\" style=\"z-index: 10; min-width: 372px; max-width: 372px; max-width: 144px; max-width: 144px; white-space: normal; color: rgba(255, 255, 255, 1.00);font-family:Patrick Hand;border-color:rgba(0, 0, 0, 1.00);\">Through play, children learn about themselves, their environment, people and the world around them
                        </div>
                        <!-- LAYER NR. 7 -->
                        <div class=\"tp-caption   tp-resizeme rs-parallaxlevel-8\" id=\"slide-3-layer-7\" data-x=\"\" data-y=\"184\" data-width=\"['none','none','none','none']\" data-height=\"['none','none','none','none']\" data-transform_idle=\"o:1;\" data-transform_in=\"opacity:0;s:300;e:Power2.easeInOut;\" data-transform_out=\"opacity:0;s:300;s:300;\" data-start=\"500\" data-responsive_offset=\"on\" style=\"z-index: 11;\"><img src=\"";
        // line 347
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Front/pic/revslider/general/blackboard.png"), "html", null, true);
        echo "\" alt=\"\" width=\"670\" height=\"393\" data-ww=\"670px\" data-hh=\"393px\" data-no-retina>
                        </div>
                        <!-- LAYER NR. 8 -->
                        <div class=\"tp-caption   tp-resizeme rs-parallaxlevel-9\" id=\"slide-3-layer-6\" data-x=\"10\" data-y=\"181\" data-width=\"['none','none','none','none']\" data-height=\"['none','none','none','none']\" data-transform_idle=\"o:1;\" data-transform_in=\"opacity:0;s:300;e:Power2.easeInOut;\" data-transform_out=\"opacity:0;s:300;s:300;\" data-start=\"500\" data-responsive_offset=\"on\" style=\"z-index: 12;\"><img src=\"";
        // line 350
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Front/pic/revslider/general/blackboard.png"), "html", null, true);
        echo "\" alt=\"\" width=\"356\" height=\"552\" data-ww=\"356px\" data-hh=\"552px\" data-no-retina>
                        </div>
                    </li>
                </ul>
                <div class=\"tp-static-layers\">
                </div>
                <div class=\"tp-bannertimer tp-bottom\" style=\"visibility: hidden !important;\"></div>
            </div>
        </div>
        <!-- END REVOLUTION SLIDER -->
    </div>
    <!-- / slider and menu container -->
    <div class='benefits_area wave'>
        <!-- canvas -->
        <!-- / canvas -->
        <div class='container'>
            <!-- benefits container -->
            <div class='benefits_container'>
                <!-- benefits item -->

                <!-- / benefits item -->
                <!-- benefits item -->

                <!-- / benefits item -->
                <!-- benefits item -->
                <!-- / benefits item -->
            </div>
            <!-- / benefits container -->
        </div>
    </div>
    <!-- canvas -->
    <div class=\"cloud_wrapper\">
        <canvas class=\"white_cloud\"></canvas>
    </div>
    <!-- / canvas -->
    <!-- main container -->
    <div id=\"main\" class=\"site-main\">
        <div class=\"page_content\">
            <!-- pattern conatainer / -->
            <div class='left-pattern pattern pattern-2'></div>
            <main>
                <!-- section -->

                <!-- / section -->
                <!-- divider -->
                <div class='grid_row clearfix'>
                    <div class='grid_col grid_col_12'>
                        <div class='ce clearfix'>
                            <div>
                                <hr>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- / divider -->
                <!-- heading section -->
                <div class='grid_row clearfix'>
                    <div class='grid_col grid_col_12'>
                        <div class='ce clearfix'>
                            <div>
                                <h3 class=\"ce_title\" style=\"text-align: center;\">";
        // line 410
        $this->displayBlock('titre', $context, $blocks);
        echo "</h3>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- / heading section -->
                <!-- section -->
                <div class='grid_row clearfix'>

                    ";
        // line 419
        $this->displayBlock('body', $context, $blocks);
        // line 420
        echo "                </div>
                <!-- / section -->
                <!-- divider -->
                <div class='grid_row clearfix' style='padding-bottom: 50px;'>
                    <div class='grid_col grid_col_12'>
                        <div class='ce clearfix'>
                            <div>
                                <hr>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- / divider -->
                <!-- section -->

                <!-- / section -->
                <!-- section gallery -->
                <!-- / gallery section -->
                <!-- section -->
                <div class='grid_row clearfix' style='padding-top: 50px;padding-bottom: 50px;'>
                    <div class='grid_col grid_col_12'>
                        <div class='ce clearfix'>
                            <div class='cws_callout'>
                                <div class='content_section'>
                                    <div class='callout_title'>
                                        <div class=\"bees bees-end\"><span></span></div>STILL NOT CONVINCED?</div>
                                    <div class='separate'></div>
                                    <div class='callout_text'>
                                        <p>Want to get more information about our learning center or would like to see it inside, feel free to schedule&nbsp;a tour.
                                            <br /> Come visit us today!</p>
                                    </div>
                                </div>
                                <div class='button_section'><a href='#' class='cws_button xlarge'>Schedule a Tour Now<div class='button-shadow'></div></a></div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- / section -->
            </main>
            <!-- pettaren container / -->
            <div class='right-pattern pattern pattern-2'></div>
            <!-- footer image container / -->
            <div class=\"footer_image\"></div>
        </div>
        <!-- svg filter -->
        <svg xmlns=\"http://www.w3.org/2000/svg\" version=\"1.1\" width=\"0\" style='display:none;'>
            <defs>
                <filter id=\"goo\">
                    <feGaussianBlur in=\"SourceGraphic\" stdDeviation=\"6\" result=\"blur\" />
                    <feColorMatrix in=\"blur\" type=\"matrix\" values=\"1 0 0 0 0  0 1 0 0 0  0 0 1 0 0  0 0 0 19 -9\" result=\"goo\" />
                    <feComposite in=\"SourceGraphic\" in2=\"goo\" operator=\"atop\" />
                </filter>
            </defs>
        </svg>
        <!-- / svg filter -->
    </div>
    <!-- #main -->
    <!-- footer -->
    <div class='footer_wrapper_copyright'>
        <!-- canvas -->
        <div class='half_sin_wrapper'>
            <canvas class='half_sin' data-bg-color='23,108,129' data-line-color='23,108,129'></canvas>
        </div>
        <!-- / canvas -->
        <!-- copyright -->
        <!-- / copyright -->
    </div>
</div>
<!-- #page -->
<div class='scroll_top animated'></div>

<script type='text/javascript' src='";
        // line 491
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Front/tuner/tuner/js/colorpicker.js"), "html", null, true);
        echo "'></script>
<script type='text/javascript' src='";
        // line 492
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Front/tuner/tuner/js/scripts.js"), "html", null, true);
        echo "'></script>
<script type='text/javascript' src='";
        // line 493
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Front/js/retina_1.3.0.js"), "html", null, true);
        echo "'></script>
<script type='text/javascript' src='";
        // line 494
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Front/js/modernizr.js"), "html", null, true);
        echo "'></script>
<script type='text/javascript' src='";
        // line 495
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Front/js/owl.carousel.js"), "html", null, true);
        echo "'></script>
<script type='text/javascript' src='";
        // line 496
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Front/js/TweenMax.min.js"), "html", null, true);
        echo "'></script>
<script type='text/javascript' src='";
        // line 497
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Front/js/jquery.isotope.min.js"), "html", null, true);
        echo "'></script>
<script type='text/javascript' src='";
        // line 498
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Front/js/jquery.fancybox.js"), "html", null, true);
        echo "'></script>
<script type='text/javascript' src='";
        // line 499
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Front/js/select2.min.js"), "html", null, true);
        echo "'></script>
<script type='text/javascript' src='";
        // line 500
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Front/js/wow.min.js"), "html", null, true);
        echo "'></script>
<script type='text/javascript' src='";
        // line 501
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Front/js/jquery.validate.min.js"), "html", null, true);
        echo "'></script>
<script type='text/javascript' src=\"";
        // line 502
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Front/js/jquery.form.min.js"), "html", null, true);
        echo "\"></script>
<script type='text/javascript' src='";
        // line 503
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Front/js/scripts.js"), "html", null, true);
        echo "'></script>
<script type='text/javascript' src=\"";
        // line 504
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Front/js/jquery.tweet.js"), "html", null, true);
        echo "\"></script>



</body>
";
        // line 509
        $this->displayBlock('js', $context, $blocks);
        // line 512
        echo "
</html>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 410
    public function block_titre($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "titre"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "titre"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 419
    public function block_body($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        echo " ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 509
    public function block_js($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "js"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "js"));

        // line 510
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "UserBundle::Page_Apprenant.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  829 => 510,  820 => 509,  802 => 419,  785 => 410,  773 => 512,  771 => 509,  763 => 504,  759 => 503,  755 => 502,  751 => 501,  747 => 500,  743 => 499,  739 => 498,  735 => 497,  731 => 496,  727 => 495,  723 => 494,  719 => 493,  715 => 492,  711 => 491,  638 => 420,  636 => 419,  624 => 410,  561 => 350,  555 => 347,  546 => 341,  534 => 332,  528 => 329,  522 => 326,  513 => 320,  507 => 317,  498 => 311,  486 => 302,  480 => 299,  474 => 296,  464 => 289,  456 => 284,  448 => 279,  440 => 274,  432 => 269,  424 => 264,  416 => 259,  408 => 254,  401 => 250,  395 => 247,  389 => 244,  377 => 235,  365 => 226,  359 => 223,  329 => 196,  320 => 190,  316 => 189,  287 => 163,  279 => 158,  244 => 126,  218 => 103,  212 => 100,  205 => 96,  186 => 80,  177 => 74,  134 => 34,  130 => 33,  124 => 30,  120 => 29,  116 => 28,  112 => 27,  108 => 26,  104 => 25,  100 => 24,  96 => 23,  92 => 22,  88 => 21,  84 => 20,  80 => 19,  76 => 18,  72 => 17,  68 => 16,  64 => 15,  60 => 14,  53 => 10,  48 => 8,  39 => 1,);
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
<html lang=\"en-US\">


<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, maximum-scale=1\">
    <link rel=\"shortcut icon\" href=\"{{ asset('Front/img/cropped-favicon-192x192.png') }}\" />
    <title>Kiddy - Children HTML Template</title>
    <link rel='stylesheet' href='{{ asset('Front/revslider/css/settings.css') }}' type='text/css' media='all' />
    <link rel=\"stylesheet\" type=\"text/css\" href=\"https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.10.0/fullcalendar.min.css\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.10.0/fullcalendar.print.css\">

    <link rel='stylesheet' href='{{ asset('Front/css/font-awesome.css') }}' type='text/css' media='all' />
    <link rel='stylesheet' href='{{ asset('Front/css/jquery.fancybox.css') }}' type='text/css' media='all' />
    <link rel='stylesheet' href='{{ asset('Front/css/select2.css') }}' type='text/css' media='all' />
    <link rel='stylesheet' href='{{ asset('Front/css/animate.css') }}' type='text/css' media='all' />
    <link rel='stylesheet' href='{{ asset('Front/css/main.css') }}' type='text/css' media='all' />
    <link rel='stylesheet' href='{{ asset('Front/css/shop.css') }}' type='text/css' media='all' />
    <link rel='stylesheet' href='{{ asset('Front/tuner/style.css') }}' type='text/css' media='all' />
    <script type='text/javascript' src='{{ asset('Front/js/jquery.js') }}'></script>
    <script type='text/javascript' src='{{ asset('Front/js/jquery-migrate.min.js') }}'></script>
    <script type='text/javascript' src='{{ asset('Front/revslider/js/jquery.themepunch.tools.min.js') }}'></script>
    <script type='text/javascript' src='{{ asset('Front/revslider/js/jquery.themepunch.revolution.min.js') }}'></script>
    <script type=\"text/javascript\" src=\"{{ asset('Front/revslider/js/extensions/revolution.extension.slideanims.min.js') }}\"></script>
    <script type=\"text/javascript\" src=\"{{ asset('Front/revslider/js/extensions/revolution.extension.layeranimation.min.js') }}\"></script>
    <script type=\"text/javascript\" src=\"{{ asset('Front/revslider/js/extensions/revolution.extension.navigation.min.js') }}\"></script>
    <script type=\"text/javascript\" src=\"{{ asset('Front/revslider/js/extensions/revolution.extension.parallax.min.js') }}\"></script>
    <link rel=\"icon\" href=\"{{ asset('Front/img/cropped-favicon-32x32.png') }}\" sizes=\"32x32\" />
    <link rel=\"icon\" href=\"{{ asset('Front/img/cropped-favicon-192x192.png') }}\" sizes=\"192x192\" />
    <link rel=\"stylesheet\" type=\"text/css\" href=\"https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.10.0/fullcalendar.min.css\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.10.0/fullcalendar.print.css\">
    <link rel=\"apple-touch-icon-precomposed\" href=\"{{ asset('Front/img/cropped-favicon-180x180.png') }}\">
    <meta name=\"msapplication-TileImage\" content=\"{{ asset('Front/img/cropped-favicon-270x270.png') }}\">

</head>

<body class=\"home page wide wave-style\">
<div class=\"page\">
    <!-- top panel -->
    <div class='site_top_panel wave slider'>
        <!-- canvas -->
        <div class='top_half_sin_wrapper'>
            <canvas class='top_half_sin' data-bg-color='#ffffff' data-line-color='#ffffff'></canvas>
        </div>
        <!-- / canvas -->
        <div class='container'>
            <div class='row_text_search'>
                <div id='top_panel_text'><a href=\"tel:1-800-123-45678\"><i class=\"fa fa-phone-square\"></i> 1-800-123-45678 </a>;
                    <a href=\"mailto:mail@mail.com\"> <i class=\"fa fa-envelope-o\"></i>mail@mail.com</a>
                </div>
                <form method=\"get\" class=\"search-form\" action=\"#\">
                    <label>
                        <span class=\"screen-reader-text\">Search for:</span>
                        <input type=\"text\" class=\"search-field vova\" value=\"\" name=\"s\" title=\"Search for:\" />
                    </label>
                    <input type=\"submit\" class=\"search-submit\" value=\"Search\" />
                    <input type='hidden' name='lang' value='en' />
                </form>
            </div>
            <div id='top_panel_links'>
                <div class='search_icon'></div>
                <div id='top_social_links_wrapper'>
                    <div class='share-toggle-button'><i class='share-icon fa fa-share-alt'></i></div>
                    <div class='cws_social_links'><a href='http://twitter.com/' class='cws_social_link' title='Twitter'><i class='share-icon fa fa-twitter'></i></a><a href='http://facebook.com/' class='cws_social_link' title='Facebook'><i class='share-icon fa fa-facebook'></i></a><a href='http://dribbble.com/' class='cws_social_link' title='Dribbble'><i class='share-icon fa fa-dribbble'></i></a><a href='https://plus.google.com/' class='cws_social_link' title='Google'><i class='share-icon fa fa-google-plus'></i></a></div>
                </div>
                <div class='mini-cart'> <a class=\"woo_icon\" href=\"features-shop-cart.html\" title=\"View your shopping cart\"><i class='woo_mini-count fa fa-shopping-cart'><span>2</span></i></a>
                    <div class=\"woo_mini_cart\">
                        <!-- start product list -->
                        <ul class=\"cart_list product_list_widget\">
                            <li>
                                <a href=\"#\" class=\"remove\" title=\"Remove this item\">×</a>
                                <a href=\"shop-single-product.html\">
                                    <img width=\"180\" height=\"180\" src=\"{{ asset('Front/pic/shop/58x58-bag.jpg') }}\" class=\"attachment-shop_thumbnail\" alt=\"poster_2_up\">Bag&nbsp; </a>
                                <span class=\"quantity\">1 × <span class=\"amount\">£12.00</span></span>
                            </li>
                            <li>
                                <a href=\"#\" class=\"remove\" title=\"Remove this item\">×</a>
                                <a href=\"shop-single-product.html\">
                                    <img width=\"180\" height=\"180\" src=\"{{ asset('Front/pic/shop/58x58-basket.jpg') }}\" class=\"attachment-shop_thumbnail\" alt=\"T_7_front\">Basket&nbsp; </a>
                                <span class=\"quantity\">1 × <span class=\"amount\">£18.00</span></span>
                            </li>
                        </ul>
                        <!-- end product list -->
                        <p class=\"total\"><strong>Subtotal:</strong> <span class=\"amount\">£30.00</span></p>
                        <p class=\"buttons\">
                            <a href=\"features-shop-cart.html\" class=\"button wc-forward\">View Cart</a>
                            <a href=\"features-shop-checkout.html\" class=\"button checkout wc-forward\">Checkout</a>
                        </p>
                    </div>
                </div>
                <div class=\"lang_bar\">
                    <div>
                        <ul>
                            <li>
                                <a href=\"#\" class=\"lang_sel_sel icl-en\"><img class=\"iclflag\" src=\" {{ asset('Front/img/en.png') }}\" alt=\"en\" title=\"English\" /> &nbsp;English
                                </a>
                                <ul>
                                    <li class=\"icl-fr\">
                                        <a href=\"#\"><img class=\"iclflag\" src=\"{{ asset('Front/img/fr.png') }}\" alt=\"fr\" title=\"Français\" />&nbsp;Français</a>
                                    </li>
                                    <li class=\"icl-de\">
                                        <a href=\"#\"><img class=\"iclflag\" src=\"{{ asset('Front/img/fr.png') }}\" alt=\"de\" title=\"Deutsch\" />&nbsp;Deutsch</a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class=\"site_top_panel_toggle\"></div>
        </div>
    </div>
    <!-- / top panel -->
    <!-- slider and menu container -->
    <div class='slider_vs_menu'>
        <div class='header_cont'>
            <div class='header_mask'>
                <div class='header_pattern'></div>
            </div>
            <header class='site_header logo-in-menu' data-menu-after=\"3\">
                <div class=\"header_box\">
                    <div class=\"container\">
                        <!-- logo -->
                        <div class=\"header_logo_part with_border\" role=\"banner\">
                            <a class=\"logo\" href=\"index-2.html\"><img src='{{ asset('Front/img/logo1-304vqrnv7ccxz47xp4tw5m.png') }}' data-at2x='img/logo1-304vqrnv7ccxz47xp4tw5m@2x.png' alt /></a>
                        </div>
                        <!-- / logo -->
                        <!-- menu -->
                        <div class=\"header_nav_part\">
                            <nav class=\"main-nav-container a-right\">
                                <div class=\"mobile_menu_header\">
                                    <i class=\"mobile_menu_switcher\"><span></span><span></span><span></span></i>
                                </div>
                                <ul id=\"menu-main-menu\" class=\"main-menu menu-bees\">
                                    <!-- menu item -->
                                    <li class=\"menu-item current-menu-item page_item current_page_item current-menu-ancestor current-menu-parent current_page_parent current_page_ancestor menu-item-has-children bees-start\">
                                        <a href=\"index-2.html\">
                                            <div class=\"bees bees-start\"><span></span>
                                                <div class=\"line-one\"></div>
                                                <div class=\"line-two\"></div>
                                            </div>Home
                                            <div class=\"canvas_wrapper\">
                                                <canvas class=\"menu_dashed\"></canvas>
                                            </div>
                                        </a>
                                        <span class='button_open'></span>
                                        <ul class=\"sub-menu\">
                                            <li class=\"menu-item back\"><a href=\"#\"><em>←</em>&nbsp;BACK</a>
                                            </li>
                                            <li class=\"menu-item current-menu-item page_item current_page_item\"><a href=\"index-2.html\">Learn&#038;Play</a></li>
                                            <li class=\"menu-item\"><a href=\"babysitter.html\">Babysitter</a></li>
                                            <li class=\"menu-item\"><a href=\"store.html\">Store</a></li>
                                        </ul>
                                    </li>
                                    <!-- / menu item -->
                                    <!-- menu item -->
                                    <li class=\"menu-item menu-item-has-children\"><a href=\"{{ path('Front_AfficheMonCour') }}\">Cours Livre<div class=\"canvas_wrapper\"><canvas class=\"menu_dashed\"></canvas></div></a>

                                    </li>
                                    <!-- / menu item -->
                                    <!-- menu item -->
                                    <li class=\"menu-item menu-item-has-children\"><a href=\"{{ path('See_Cour') }}\">Mes Cours<div class=\"canvas_wrapper\"><canvas class=\"menu_dashed\"></canvas></div></a>
                                        <span class='button_open'></span>

                                    </li>
                                    <!-- / menu item -->
                                    <!-- menu item -->
                                    <li class=\"menu-item menu-item-has-children right\"><a href=\"portfolio-four-columns.html\">Portfolio<div class=\"canvas_wrapper\"><canvas class=\"menu_dashed\"></canvas></div></a>
                                        <span class='button_open'></span>
                                        <ul class=\"sub-menu\">
                                            <li class=\"menu-item back\"><a href=\"#\"><em>←</em>&nbsp;BACK</a>
                                            </li>
                                            <li class=\"menu-item\"><a href=\"portfolio-one-column.html\">One Column</a></li>
                                            <li class=\"menu-item\"><a href=\"portfolio-two-columns.html\">Two Columns</a></li>
                                            <li class=\"menu-item\"><a href=\"portfolio-three-columns.html\">Three Columns</a></li>
                                            <li class=\"menu-item\"><a href=\"portfolio-four-columns.html\">Four Columns</a></li>
                                            <li class=\"menu-item\"><a href=\"portfolio-filtered.html\">With Sidebar</a></li>
                                            <li class=\"menu-item\"><a href=\"portfolio-gallery.html\">Gallery</a></li>
                                        </ul>
                                    </li>
                                    <!-- / menu item -->
                                    <!-- menu item -->
                                    <li class=\"menu-item menu-item-has-children right\"><a href=\"#\">Evenements<div class=\"canvas_wrapper\"><canvas class=\"menu_dashed\"></canvas></div></a>
                                        <span class='button_open'></span>
                                        <ul class=\"sub-menu\">
                                            <li class=\"menu-item back\"><a href=\"#\"><em>←</em>&nbsp;BACK</a>
                                            </li>
                                            <li class=\"menu-item\"><a href=\"{{ path('Front_Evenet') }}\">OUR Event</a></li>
                                            <li class=\"menu-item\"><a href=\"{{ path('Calendre') }}\">Our Calendre</a></li>
                                        </ul>
                                    </li>
                                    <!-- / menu item -->
                                    <!-- menu item -->
                                    <li class=\"menu-item right bees-end\">
                                        <a href=\"{{ path('FrontMyInfo') }}\">
                                            <div class=\"bees bees-end\"><span></span>
                                                <div class=\"line-one\"></div>
                                                <div class=\"line-two\"></div>
                                            </div>Profil
                                            <div class=\"canvas_wrapper\">
                                                <canvas class=\"menu_dashed\"></canvas>
                                            </div>
                                        </a>
                                    </li>
                                    <!-- / menu item -->
                                </ul>
                            </nav>
                        </div>
                        <!-- / menu -->
                    </div>
                </div>
            </header>
            <!-- #masthead -->
        </div>
        <div id=\"rev_slider_1_1_wrapper\" class=\"rev_slider_wrapper fullwidthbanner-container\">
            <!-- START REVOLUTION SLIDER 5.0.9 fullwidth mode -->
            <div id=\"rev_slider_1_1\" class=\"rev_slider fullwidthabanner\" style=\"display:none;\" data-version=\"5.0.9\">
                <ul>
                    <!-- SLIDE  -->
                    <li data-index=\"rs-1\" data-transition=\"random,fade\" data-slotamount=\"7,7\" data-easein=\"default,default\" data-easeout=\"default,default\" data-masterspeed=\"300,500\" data-thumb=\"pic/2015/09/dots-pattern-100x50.png\" data-rotate=\"0,0\" data-saveperformance=\"off\" data-title=\"Slide\" data-description=\"\">
                        <!-- MAIN IMAGE -->
                        <img src=\"{{ asset('Front/img/dots-pattern.png') }}\" alt=\"\" width=\"43\" height=\"24\" data-bgposition=\"center center\" data-bgfit=\"normal\" data-bgrepeat=\"repeat\" data-bgparallax=\"1\" class=\"rev-slidebg\" data-no-retina>
                        <!-- LAYERS -->
                        <!-- LAYER NR. 1 -->
                        <div class=\"tp-caption   tp-resizeme rs-parallaxlevel-0\" id=\"slide-1-layer-23\" data-x=\"center\" data-hoffset=\"\" data-y=\"center\" data-voffset=\"\" data-width=\"['none','none','none','none']\" data-height=\"['none','none','none','none']\" data-transform_idle=\"o:1;\" data-transform_in=\"opacity:0;s:300;e:Power2.easeInOut;\" data-transform_out=\"opacity:0;s:300;s:300;\" data-start=\"990\" data-responsive_offset=\"on\" style=\"z-index: 5;\"><img src=\"{{ asset('Front/pic/revslider/general/sunshine_home1.png') }}\" alt=\"\" width=\"1920\" height=\"650\" data-ww=\"1920px\" data-hh=\"650px\" data-no-retina>
                        </div>
                        <!-- LAYER NR. 2 -->
                        <div class=\"tp-caption home-h2   tp-resizeme rs-parallaxlevel-9\" id=\"slide-1-layer-1\" data-x=\"30\" data-y=\"213\" data-width=\"['auto']\" data-height=\"['auto']\" data-transform_idle=\"o:1;\" data-transform_in=\"y:50px;z:0;rX:0;rY:0;rZ:0;sX:0.9;sY:0.9;skX:0;skY:0;opacity:0;s:1500;e:Power3.easeInOut;\" data-transform_out=\"auto:auto;s:300;\" data-start=\"500\" data-splitin=\"none\" data-splitout=\"none\" data-responsive_offset=\"on\" style=\"z-index: 6; white-space: nowrap;\">Welcome to
                        </div>
                        <!-- LAYER NR. 3 -->
                        <div class=\"tp-caption home-h1   tp-resizeme rs-parallaxlevel-9\" id=\"slide-1-layer-2\" data-x=\"30\" data-y=\"275\" data-width=\"['auto']\" data-height=\"['auto']\" data-transform_idle=\"o:1;\" data-transform_in=\"y:50px;z:0;rX:0;rY:0;rZ:0;sX:0.9;sY:0.9;skX:0;skY:0;opacity:0;s:1500;e:Power3.easeInOut;\" data-transform_out=\"auto:auto;s:300;\" data-start=\"500\" data-splitin=\"none\" data-splitout=\"none\" data-responsive_offset=\"on\" style=\"z-index: 7; white-space: nowrap;\">KIDDY!
                        </div>
                        <!-- LAYER NR. 4 -->
                        <div class=\"tp-caption home-general-font   tp-resizeme rs-parallaxlevel-9 none-visible-mobile\" id=\"slide-1-layer-22\" data-x=\"30\" data-y=\"345\" data-width=\"['none','none','none','none']\" data-height=\"['none','none','none','none']\" data-transform_idle=\"o:1;\" data-transform_in=\"y:50px;opacity:0;s:1500;e:Power3.easeInOut;\" data-transform_out=\"auto:auto;s:300;\" data-start=\"500\" data-responsive_offset=\"on\" style=\"z-index: 8;border-color:rgba(0, 0, 0, 1.00);\"><img src=\"{{ asset('Front/pic/revslider/general/slider_devider.png') }}\" alt=\"\" width=\"300\" height=\"8\" data-ww=\"300px\" data-hh=\"8px\" data-no-retina>
                        </div>
                        <!-- LAYER NR. 5 -->
                        <div class=\"tp-caption home-general-font   tp-resizeme rs-parallaxlevel-9 none-visible-mobile\" id=\"slide-1-layer-3\" data-x=\"30\" data-y=\"385\" data-width=\"['auto']\" data-height=\"['auto']\" data-transform_idle=\"o:1;\" data-transform_in=\"y:50px;z:0;rX:0;rY:0;rZ:0;sX:0.9;sY:0.9;skX:0;skY:0;opacity:0;s:1500;e:Power3.easeInOut;\" data-transform_out=\"auto:auto;s:300;\" data-start=\"500\" data-splitin=\"none\" data-splitout=\"none\" data-responsive_offset=\"on\" style=\"z-index: 9; white-space: nowrap; color: rgba(255, 255, 255, 1.00);font-family:Patrick Hand;border-color:rgba(0, 0, 0, 1.00);\">A perfect learning center
                        </div>
                        <!-- LAYER NR. 6 -->
                        <div class=\"tp-caption home-general-font   tp-resizeme rs-parallaxlevel-9 none-visible-mobile\" id=\"slide-1-layer-4\" data-x=\"29\" data-y=\"413\" data-width=\"['auto']\" data-height=\"['auto']\" data-transform_idle=\"o:1;\" data-transform_in=\"y:50px;z:0;rX:0;rY:0;rZ:0;sX:0.9;sY:0.9;skX:0;skY:0;opacity:0;s:1500;e:Power3.easeInOut;\" data-transform_out=\"auto:auto;s:300;\" data-start=\"500\" data-splitin=\"none\" data-splitout=\"none\" data-responsive_offset=\"on\" style=\"z-index: 10; white-space: nowrap; color: rgba(255, 255, 255, 1.00);font-family:Patrick Hand;border-color:rgba(0, 0, 0, 1.00);\">for your kids
                        </div>
                        <!-- LAYER NR. 7 -->
                        <div class=\"tp-caption   tp-resizeme rs-parallaxlevel-10\" id=\"slide-1-layer-5\" data-x=\"-36\" data-y=\"589\" data-width=\"['none','none','none','none']\" data-height=\"['none','none','none','none']\" data-transform_idle=\"o:1;\" data-transform_in=\"opacity:0;s:290;e:Power2.easeInOut;\" data-transform_out=\"opacity:0;s:300;s:300;\" data-start=\"500\" data-responsive_offset=\"on\" style=\"z-index: 11;\"><img src=\"{{ asset('Front/pic/revslider/general/grass.png') }}\" alt=\"\" width=\"1469\" height=\"162\" data-ww=\"1484px\" data-hh=\"130px\" data-no-retina>
                        </div>
                        <!-- LAYER NR. 8 -->
                        <div class=\"tp-caption   tp-resizeme rs-parallaxlevel-8\" id=\"slide-1-layer-7\" data-x=\"761\" data-y=\"186\" data-width=\"['none','none','none','none']\" data-height=\"['none','none','none','none']\" data-transform_idle=\"o:1;\" data-transform_in=\"opacity:0;s:300;e:Power2.easeInOut;\" data-transform_out=\"opacity:0;s:300;s:300;\" data-start=\"500\" data-responsive_offset=\"on\" style=\"z-index: 12;\"><img src=\"{{ asset('Front/pic/revslider/general/rainbow.png') }}\" alt=\"\" width=\"421\" height=\"424\" data-ww=\"398px\" data-hh=\"424px\" data-no-retina>
                        </div>
                        <!-- LAYER NR. 9 -->
                        <div class=\"tp-caption   tp-resizeme rs-parallaxlevel-9\" id=\"slide-1-layer-6\" data-x=\"362\" data-y=\"181\" data-width=\"['none','none','none','none']\" data-height=\"['none','none','none','none']\" data-transform_idle=\"o:1;\" data-transform_in=\"opacity:0;s:300;e:Power2.easeInOut;\" data-transform_out=\"opacity:0;s:300;s:300;\" data-start=\"570\" data-responsive_offset=\"on\" style=\"z-index: 13;\"><img src=\"{{ asset('Front/pic/revslider/general/children.png') }}\" alt=\"\" width=\"662\" height=\"484\" data-ww=\"662px\" data-hh=\"484px\" data-no-retina>
                        </div>
                        <!-- LAYER NR. 10 -->
                        <div class=\"tp-caption   tp-resizeme rs-parallaxlevel-8\" id=\"slide-1-layer-9\" data-x=\"325\" data-y=\"132\" data-width=\"['none','none','none','none']\" data-height=\"['none','none','none','none']\" data-transform_idle=\"o:1;\" data-transform_in=\"x:0;y:0;z:0;rX:0;rY:0;rZ:0;sX:0;sY:0;skX:0;skY:0;opacity:0;s:300;e:Power2.easeInOut;\" data-transform_out=\"opacity:0;s:300;s:300;\" data-start=\"990\" data-responsive_offset=\"on\" style=\"z-index: 14;\">
                            <div class=\"rs-looped rs-wave\" data-speed=\"9\" data-angle=\"0\" data-radius=\"5px\" data-origin=\"50% 50%\"><img src=\"{{ asset('Front/pic/revslider/general/cloud-1.png') }}\" alt=\"\" width=\"91\" height=\"37\" data-ww=\"91px\" data-hh=\"37px\" data-no-retina>
                            </div>
                        </div>
                        <!-- LAYER NR. 11 -->
                        <div class=\"tp-caption   tp-resizeme rs-parallaxlevel-7\" id=\"slide-1-layer-10\" data-x=\"-117\" data-y=\"311\" data-width=\"['none','none','none','none']\" data-height=\"['none','none','none','none']\" data-transform_idle=\"o:1;\" data-transform_in=\"x:0;y:0;z:0;rX:0;rY:0;rZ:0;sX:0;sY:0;skX:0;skY:0;opacity:0;s:300;e:Power2.easeInOut;\" data-transform_out=\"x:0;y:0;z:0;rX:0;rY:0;rZ:0;sX:0;sY:0;skX:0;skY:0;opacity:0;s:300;s:300;\" data-start=\"580\" data-responsive_offset=\"on\" style=\"z-index: 15;\">
                            <div class=\"rs-looped rs-wave\" data-speed=\"9\" data-angle=\"0\" data-radius=\"5px\" data-origin=\"50% 10%\"><img src=\"{{ asset('Front/pic/revslider/general/cloud-2.png') }}\" alt=\"\" width=\"90\" height=\"40\" data-ww=\"90px\" data-hh=\"40px\" data-no-retina>
                            </div>
                        </div>
                        <!-- LAYER NR. 12 -->
                        <div class=\"tp-caption   tp-resizeme rs-parallaxlevel-8\" id=\"slide-1-layer-13\" data-x=\"1122\" data-y=\"69\" data-width=\"['none','none','none','none']\" data-height=\"['none','none','none','none']\" data-transform_idle=\"o:1;\" data-transform_in=\"x:0;y:0;z:0;rX:0;rY:0;rZ:0;sX:0;sY:0;skX:0;skY:0;opacity:0;s:300;e:Power2.easeInOut;\" data-transform_out=\"opacity:0;s:300;s:300;\" data-start=\"790\" data-responsive_offset=\"on\" style=\"z-index: 16;\">
                            <div class=\"rs-looped rs-wave\" data-speed=\"11\" data-angle=\"0\" data-radius=\"5px\" data-origin=\"50% 50%\"><img src=\"{{ asset('Front/pic/revslider/general/cloud-5.png') }}\" alt=\"\" width=\"180\" height=\"72\" data-ww=\"180px\" data-hh=\"72px\" data-no-retina>
                            </div>
                        </div>
                        <!-- LAYER NR. 13 -->
                        <div class=\"tp-caption   tp-resizeme rs-parallaxlevel-8\" id=\"slide-1-layer-14\" data-x=\"-127\" data-y=\"70\" data-width=\"['none','none','none','none']\" data-height=\"['none','none','none','none']\" data-transform_idle=\"o:1;\" data-transform_in=\"x:0;y:0;z:0;rX:0;rY:0;rZ:0;sX:0;sY:0;skX:0;skY:0;opacity:0;s:300;e:Power2.easeInOut;\" data-transform_out=\"opacity:0;s:300;s:300;\" data-start=\"710\" data-responsive_offset=\"on\" style=\"z-index: 17;\">
                            <div class=\"rs-looped rs-wave\" data-speed=\"9\" data-angle=\"0\" data-radius=\"5px\" data-origin=\"50% 10%\"><img src=\"{{ asset('Front/pic/revslider/general/cloud-6.png') }}\" alt=\"\" width=\"180\" height=\"72\" data-ww=\"180px\" data-hh=\"72px\" data-no-retina>
                            </div>
                        </div>
                        <!-- LAYER NR. 14 -->
                        <div class=\"tp-caption   tp-resizeme rs-parallaxlevel-6\" id=\"slide-1-layer-18\" data-x=\"898\" data-y=\"50\" data-width=\"['none','none','none','none']\" data-height=\"['none','none','none','none']\" data-transform_idle=\"o:1;\" data-transform_in=\"x:0;y:0;z:0;rX:0;rY:0;rZ:0;sX:0;sY:0;skX:0;skY:0;opacity:0;s:300;e:Power2.easeInOut;\" data-transform_out=\"opacity:0;s:300;s:300;\" data-start=\"590\" data-responsive_offset=\"on\" style=\"z-index: 18;\">
                            <div class=\"rs-looped rs-wave\" data-speed=\"9\" data-angle=\"0\" data-radius=\"10\" data-origin=\"50% 50%\"><img src=\"{{ asset('Front/pic/revslider/general/cloud-2.png') }}\" alt=\"\" width=\"90\" height=\"40\" data-ww=\"90px\" data-hh=\"40px\" data-no-retina>
                            </div>
                        </div>
                        <!-- LAYER NR. 15 -->
                        <div class=\"tp-caption   tp-resizeme rs-parallaxlevel-8\" id=\"slide-1-layer-19\" data-x=\"1259\" data-y=\"528\" data-width=\"['none','none','none','none']\" data-height=\"['none','none','none','none']\" data-transform_idle=\"o:1;\" data-transform_in=\"x:0;y:0;z:0;rX:0;rY:0;rZ:0;sX:0;sY:0;skX:0;skY:0;opacity:0;s:300;e:Power2.easeInOut;\" data-transform_out=\"opacity:0;s:300;s:300;\" data-start=\"920\" data-responsive_offset=\"on\" style=\"z-index: 19;\">
                            <div class=\"rs-looped rs-wave\" data-speed=\"12\" data-angle=\"0\" data-radius=\"10\" data-origin=\"50% 50%\"><img src=\"{{ asset('Front/pic/revslider/general/cloud-1.png') }}\" alt=\"\" width=\"91\" height=\"37\" data-ww=\"91px\" data-hh=\"37px\" data-no-retina>
                            </div>
                        </div>
                        <!-- LAYER NR. 16 -->
                        <div class=\"tp-caption   tp-resizeme rs-parallaxlevel-9\" id=\"slide-1-layer-20\" data-x=\"-243\" data-y=\"478\" data-width=\"['none','none','none','none']\" data-height=\"['none','none','none','none']\" data-transform_idle=\"o:1;\" data-transform_in=\"x:0;y:0;z:0;rX:0;rY:0;rZ:0;sX:0;sY:0;skX:0;skY:0;opacity:0;s:300;e:Power2.easeInOut;\" data-transform_out=\"opacity:0;s:300;s:300;\" data-start=\"780\" data-responsive_offset=\"on\" style=\"z-index: 20;\">
                            <div class=\"rs-looped rs-wave\" data-speed=\"11\" data-angle=\"0\" data-radius=\"5px\" data-origin=\"50% 1%\"><img src=\"{{ asset('Front/pic/revslider/general/cloud-1.png') }}\" alt=\"\" width=\"271\" height=\"108\" data-ww=\"271px\" data-hh=\"108px\" data-no-retina>
                            </div>
                        </div>
                        <!-- LAYER NR. 17 -->
                        <div class=\"tp-caption   tp-resizeme rs-parallaxlevel-8\" id=\"slide-1-layer-21\" data-x=\"1150\" data-y=\"328\" data-width=\"['none','none','none','none']\" data-height=\"['none','none','none','none']\" data-transform_idle=\"o:1;\" data-transform_in=\"x:0;y:0;z:0;rX:0;rY:0;rZ:0;sX:0;sY:0;skX:0;skY:0;opacity:0;s:300;e:Power2.easeInOut;\" data-transform_out=\"opacity:0;s:300;s:300;\" data-start=\"990\" data-responsive_offset=\"on\" style=\"z-index: 21;\">
                            <div class=\"rs-looped rs-wave\" data-speed=\"11\" data-angle=\"0\" data-radius=\"5px\" data-origin=\"50% 50%\"><img src=\"{{ asset('Front/pic/revslider/general/cloud-4.png') }}\" alt=\"\" width=\"271\" height=\"108\" data-ww=\"271px\" data-hh=\"108px\" data-no-retina>
                            </div>
                        </div>
                    </li>
                    <!-- SLIDE  -->
                    <li data-index=\"rs-2\" data-transition=\"random,fade\" data-slotamount=\"7,7\" data-easein=\"default,default\" data-easeout=\"default,default\" data-masterspeed=\"300,500\" data-thumb=\"pic/2015/09/dots-pattern-100x50.png\" data-rotate=\"0,0\" data-saveperformance=\"off\" data-title=\"Slide\" data-description=\"\">
                        <!-- MAIN IMAGE -->
                        <img src=\"{{ asset('Front/img/dots-pattern.png') }}\" alt=\"\" width=\"43\" height=\"24\" data-bgposition=\"center center\" data-bgfit=\"normal\" data-bgrepeat=\"repeat\" data-bgparallax=\"1\" class=\"rev-slidebg\" data-no-retina>
                        <!-- LAYERS -->
                        <!-- LAYER NR. 1 -->
                        <div class=\"tp-caption   tp-resizeme rs-parallaxlevel-0\" id=\"slide-2-layer-24\" data-x=\"center\" data-hoffset=\"-340\" data-y=\"center\" data-voffset=\"\" data-width=\"['none','none','none','none']\" data-height=\"['none','none','none','none']\" data-transform_idle=\"o:1;\" data-transform_in=\"opacity:0;s:300;e:Power2.easeInOut;\" data-transform_out=\"opacity:0;s:300;s:300;\" data-start=\"570\" data-responsive_offset=\"on\" style=\"z-index: 5;\"><img src=\"{{ asset('Front/pic/revslider/general/sunshine_home1.png') }}\" alt=\"\" width=\"1920\" height=\"650\" data-ww=\"1920px\" data-hh=\"650px\" data-no-retina>
                        </div>
                        <!-- LAYER NR. 2 -->
                        <div class=\"tp-caption   tp-resizeme rs-parallaxlevel-10\" id=\"slide-2-layer-23\" data-x=\"center\" data-hoffset=\"\" data-y=\"bottom\" data-voffset=\"10\" data-width=\"['none','none','none','none']\" data-height=\"['none','none','none','none']\" data-transform_idle=\"o:1;\" data-transform_in=\"opacity:0;s:300;e:Power2.easeInOut;\" data-transform_out=\"opacity:0;s:300;s:300;\" data-start=\"570\" data-responsive_offset=\"on\" style=\"z-index: 6;\"><img src=\"{{ asset('Front/pic/revslider/general/objects1.png') }}\" alt=\"\" width=\"1892\" height=\"474\" data-ww=\"1892px\" data-hh=\"474px\" data-no-retina>
                        </div>
                        <!-- LAYER NR. 3 -->
                        <div class=\"tp-caption home-h2   tp-resizeme rs-parallaxlevel-9\" id=\"slide-2-layer-1\" data-x=\"450\" data-y=\"195\" data-width=\"['auto']\" data-height=\"['auto']\" data-transform_idle=\"o:1;\" data-transform_in=\"y:50px;z:0;rX:0;rY:0;rZ:0;sX:0.9;sY:0.9;skX:0;skY:0;opacity:0;s:1500;e:Power3.easeInOut;\" data-transform_out=\"auto:auto;s:300;\" data-start=\"500\" data-splitin=\"none\" data-splitout=\"none\" data-responsive_offset=\"on\" style=\"z-index: 7; white-space: nowrap;\">Our goal is
                        </div>
                        <!-- LAYER NR. 4 -->
                        <div class=\"tp-caption home-h1   tp-resizeme rs-parallaxlevel-9\" id=\"slide-2-layer-2\" data-x=\"450\" data-y=\"260\" data-width=\"['auto']\" data-height=\"['auto']\" data-transform_idle=\"o:1;\" data-transform_in=\"y:50px;z:0;rX:0;rY:0;rZ:0;sX:0.9;sY:0.9;skX:0;skY:0;opacity:0;s:1500;e:Power3.easeInOut;\" data-transform_out=\"auto:auto;s:300;\" data-start=\"500\" data-splitin=\"none\" data-splitout=\"none\" data-responsive_offset=\"on\" style=\"z-index: 8; white-space: nowrap;\">to Provide
                        </div>
                        <!-- LAYER NR. 5 -->
                        <div class=\"tp-caption home-general-font   tp-resizeme rs-parallaxlevel-9 none-visible-mobile\" id=\"slide-2-layer-22\" data-x=\"450\" data-y=\"330\" data-width=\"['none','none','none','none']\" data-height=\"['none','none','none','none']\" data-transform_idle=\"o:1;\" data-transform_in=\"y:50px;opacity:0;s:1500;e:Power3.easeInOut;\" data-transform_out=\"auto:auto;s:300;\" data-start=\"500\" data-responsive_offset=\"on\" style=\"z-index: 9;border-color:rgba(0, 0, 0, 1.00);\"><img src=\"{{ asset('Front/pic/revslider/general/slider_devider.png') }}\" alt=\"\" width=\"300\" height=\"8\" data-ww=\"300px\" data-hh=\"8px\" data-no-retina>
                        </div>
                        <!-- LAYER NR. 6 -->
                        <div class=\"tp-caption home-general-font   tp-resizeme rs-parallaxlevel-9 none-visible-mobile\" id=\"slide-2-layer-4\" data-x=\"450\" data-y=\"360\" data-width=\"['338']\" data-height=\"['106']\" data-transform_idle=\"o:1;\" data-transform_in=\"y:50px;z:0;rX:0;rY:0;rZ:0;sX:0.9;sY:0.9;skX:0;skY:0;opacity:0;s:1500;e:Power3.easeInOut;\" data-transform_out=\"auto:auto;s:300;\" data-start=\"500\" data-splitin=\"none\" data-splitout=\"none\" data-responsive_offset=\"on\" style=\"z-index: 10; min-width: 338px; max-width: 338px; max-width: 106px; max-width: 106px; white-space: normal; color: rgba(255, 255, 255, 1.00);font-family:Patrick Hand;border-color:rgba(0, 0, 0, 1.00);\">a complete nurturing environment for the growth and development of the whole child
                        </div>
                        <!-- LAYER NR. 7 -->
                        <div class=\"tp-caption   tp-resizeme rs-parallaxlevel-8\" id=\"slide-2-layer-7\" data-x=\"right\" data-hoffset=\"10\" data-y=\"bottom\" data-voffset=\"-56\" data-width=\"['none','none','none','none']\" data-height=\"['none','none','none','none']\" data-transform_idle=\"o:1;\" data-transform_in=\"opacity:0;s:300;e:Power2.easeInOut;\" data-transform_out=\"opacity:0;s:300;s:300;\" data-start=\"500\" data-responsive_offset=\"on\" style=\"z-index: 11;\"><img src=\"{{ asset('Front/pic/revslider/general/kid-right.png') }}\" alt=\"\" width=\"384\" height=\"538\" data-ww=\"384px\" data-hh=\"538px\" data-no-retina>
                        </div>
                        <!-- LAYER NR. 8 -->
                        <div class=\"tp-caption   tp-resizeme rs-parallaxlevel-9\" id=\"slide-2-layer-6\" data-x=\"10\" data-y=\"181\" data-width=\"['none','none','none','none']\" data-height=\"['none','none','none','none']\" data-transform_idle=\"o:1;\" data-transform_in=\"opacity:0;s:300;e:Power2.easeInOut;\" data-transform_out=\"opacity:0;s:300;s:300;\" data-start=\"500\" data-responsive_offset=\"on\" style=\"z-index: 12;\"><img src=\"{{ asset('Front/pic/revslider/general/kid-left.png') }}\" alt=\"\" width=\"459\" height=\"501\" data-ww=\"459px\" data-hh=\"501px\" data-no-retina>
                        </div>
                    </li>
                    <!-- SLIDE  -->
                    <li data-index=\"rs-3\" data-transition=\"random,fade\" data-slotamount=\"7,7\" data-easein=\"default,default\" data-easeout=\"default,default\" data-masterspeed=\"300,500\" data-thumb=\"pic/2015/09/dots-pattern-100x50.png\" data-rotate=\"0,0\" data-saveperformance=\"off\" data-title=\"Slide\" data-description=\"\">
                        <!-- MAIN IMAGE -->
                        <img src=\"{{ asset('Front/img/dots-pattern.png') }}\" alt=\"\" width=\"43\" height=\"24\" data-bgposition=\"center center\" data-bgfit=\"normal\" data-bgrepeat=\"repeat\" data-bgparallax=\"1\" class=\"rev-slidebg\" data-no-retina>
                        <!-- LAYERS -->
                        <!-- LAYER NR. 1 -->
                        <div class=\"tp-caption   tp-resizeme rs-parallaxlevel-0\" id=\"slide-3-layer-24\" data-x=\"center\" data-hoffset=\"-237\" data-y=\"center\" data-voffset=\"\" data-width=\"['none','none','none','none']\" data-height=\"['none','none','none','none']\" data-transform_idle=\"o:1;\" data-transform_in=\"opacity:0;s:300;e:Power2.easeInOut;\" data-transform_out=\"opacity:0;s:300;s:300;\" data-start=\"570\" data-responsive_offset=\"on\" style=\"z-index: 5;\"><img src=\"{{ asset('Front/pic/revslider/general/sunshine_home1.png') }}\" alt=\"\" width=\"1920\" height=\"650\" data-ww=\"1920px\" data-hh=\"650px\" data-no-retina>
                        </div>
                        <!-- LAYER NR. 2 -->
                        <div class=\"tp-caption   tp-resizeme rs-parallaxlevel-10\" id=\"slide-3-layer-23\" data-x=\"center\" data-hoffset=\"\" data-y=\"bottom\" data-voffset=\"10\" data-width=\"['none','none','none','none']\" data-height=\"['none','none','none','none']\" data-transform_idle=\"o:1;\" data-transform_in=\"opacity:0;s:300;e:Power2.easeInOut;\" data-transform_out=\"opacity:0;s:300;s:300;\" data-start=\"570\" data-responsive_offset=\"on\" style=\"z-index: 6;\"><img src=\"{{ asset('Front/pic/revslider/general/objects.png') }}\" alt=\"\" width=\"1859\" height=\"491\" data-ww=\"1859px\" data-hh=\"491px\" data-no-retina>
                        </div>
                        <!-- LAYER NR. 3 -->
                        <div class=\"tp-caption home-h2   tp-resizeme rs-parallaxlevel-9\" id=\"slide-3-layer-1\" data-x=\"750\" data-y=\"213\" data-width=\"['auto']\" data-height=\"['auto']\" data-transform_idle=\"o:1;\" data-transform_in=\"y:50px;z:0;rX:0;rY:0;rZ:0;sX:0.9;sY:0.9;skX:0;skY:0;opacity:0;s:1500;e:Power3.easeInOut;\" data-transform_out=\"auto:auto;s:300;\" data-start=\"500\" data-splitin=\"none\" data-splitout=\"none\" data-responsive_offset=\"on\" style=\"z-index: 7; white-space: nowrap;\">Learning
                        </div>
                        <!-- LAYER NR. 4 -->
                        <div class=\"tp-caption home-h1   tp-resizeme rs-parallaxlevel-9\" id=\"slide-3-layer-2\" data-x=\"750\" data-y=\"276\" data-width=\"['auto']\" data-height=\"['auto']\" data-transform_idle=\"o:1;\" data-transform_in=\"y:50px;z:0;rX:0;rY:0;rZ:0;sX:0.9;sY:0.9;skX:0;skY:0;opacity:0;s:1500;e:Power3.easeInOut;\" data-transform_out=\"auto:auto;s:300;\" data-start=\"500\" data-splitin=\"none\" data-splitout=\"none\" data-responsive_offset=\"on\" style=\"z-index: 8; white-space: nowrap;\">Is Fun
                        </div>
                        <!-- LAYER NR. 5 -->
                        <div class=\"tp-caption home-general-font   tp-resizeme rs-parallaxlevel-9 none-visible-mobile\" id=\"slide-3-layer-22\" data-x=\"750\" data-y=\"345\" data-width=\"['none','none','none','none']\" data-height=\"['none','none','none','none']\" data-transform_idle=\"o:1;\" data-transform_in=\"y:50px;opacity:0;s:1500;e:Power3.easeInOut;\" data-transform_out=\"auto:auto;s:300;\" data-start=\"500\" data-responsive_offset=\"on\" style=\"z-index: 9;border-color:rgba(0, 0, 0, 1.00);\"><img src=\"{{ asset('Front/pic/revslider/general/slider_devider.png') }}\" alt=\"\" width=\"300\" height=\"8\" data-ww=\"300px\" data-hh=\"8px\" data-no-retina>
                        </div>
                        <!-- LAYER NR. 6 -->
                        <div class=\"tp-caption home-general-font   tp-resizeme rs-parallaxlevel-9 none-visible-mobile\" id=\"slide-3-layer-3\" data-x=\"750\" data-y=\"385\" data-width=\"['372']\" data-height=\"['144']\" data-transform_idle=\"o:1;\" data-transform_in=\"y:50px;z:0;rX:0;rY:0;rZ:0;sX:0.9;sY:0.9;skX:0;skY:0;opacity:0;s:1500;e:Power3.easeInOut;\" data-transform_out=\"auto:auto;s:300;\" data-start=\"500\" data-splitin=\"none\" data-splitout=\"none\" data-responsive_offset=\"on\" style=\"z-index: 10; min-width: 372px; max-width: 372px; max-width: 144px; max-width: 144px; white-space: normal; color: rgba(255, 255, 255, 1.00);font-family:Patrick Hand;border-color:rgba(0, 0, 0, 1.00);\">Through play, children learn about themselves, their environment, people and the world around them
                        </div>
                        <!-- LAYER NR. 7 -->
                        <div class=\"tp-caption   tp-resizeme rs-parallaxlevel-8\" id=\"slide-3-layer-7\" data-x=\"\" data-y=\"184\" data-width=\"['none','none','none','none']\" data-height=\"['none','none','none','none']\" data-transform_idle=\"o:1;\" data-transform_in=\"opacity:0;s:300;e:Power2.easeInOut;\" data-transform_out=\"opacity:0;s:300;s:300;\" data-start=\"500\" data-responsive_offset=\"on\" style=\"z-index: 11;\"><img src=\"{{ asset('Front/pic/revslider/general/blackboard.png') }}\" alt=\"\" width=\"670\" height=\"393\" data-ww=\"670px\" data-hh=\"393px\" data-no-retina>
                        </div>
                        <!-- LAYER NR. 8 -->
                        <div class=\"tp-caption   tp-resizeme rs-parallaxlevel-9\" id=\"slide-3-layer-6\" data-x=\"10\" data-y=\"181\" data-width=\"['none','none','none','none']\" data-height=\"['none','none','none','none']\" data-transform_idle=\"o:1;\" data-transform_in=\"opacity:0;s:300;e:Power2.easeInOut;\" data-transform_out=\"opacity:0;s:300;s:300;\" data-start=\"500\" data-responsive_offset=\"on\" style=\"z-index: 12;\"><img src=\"{{ asset('Front/pic/revslider/general/blackboard.png') }}\" alt=\"\" width=\"356\" height=\"552\" data-ww=\"356px\" data-hh=\"552px\" data-no-retina>
                        </div>
                    </li>
                </ul>
                <div class=\"tp-static-layers\">
                </div>
                <div class=\"tp-bannertimer tp-bottom\" style=\"visibility: hidden !important;\"></div>
            </div>
        </div>
        <!-- END REVOLUTION SLIDER -->
    </div>
    <!-- / slider and menu container -->
    <div class='benefits_area wave'>
        <!-- canvas -->
        <!-- / canvas -->
        <div class='container'>
            <!-- benefits container -->
            <div class='benefits_container'>
                <!-- benefits item -->

                <!-- / benefits item -->
                <!-- benefits item -->

                <!-- / benefits item -->
                <!-- benefits item -->
                <!-- / benefits item -->
            </div>
            <!-- / benefits container -->
        </div>
    </div>
    <!-- canvas -->
    <div class=\"cloud_wrapper\">
        <canvas class=\"white_cloud\"></canvas>
    </div>
    <!-- / canvas -->
    <!-- main container -->
    <div id=\"main\" class=\"site-main\">
        <div class=\"page_content\">
            <!-- pattern conatainer / -->
            <div class='left-pattern pattern pattern-2'></div>
            <main>
                <!-- section -->

                <!-- / section -->
                <!-- divider -->
                <div class='grid_row clearfix'>
                    <div class='grid_col grid_col_12'>
                        <div class='ce clearfix'>
                            <div>
                                <hr>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- / divider -->
                <!-- heading section -->
                <div class='grid_row clearfix'>
                    <div class='grid_col grid_col_12'>
                        <div class='ce clearfix'>
                            <div>
                                <h3 class=\"ce_title\" style=\"text-align: center;\">{% block titre %}{% endblock %}</h3>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- / heading section -->
                <!-- section -->
                <div class='grid_row clearfix'>

                    {% block body  %} {% endblock %}
                </div>
                <!-- / section -->
                <!-- divider -->
                <div class='grid_row clearfix' style='padding-bottom: 50px;'>
                    <div class='grid_col grid_col_12'>
                        <div class='ce clearfix'>
                            <div>
                                <hr>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- / divider -->
                <!-- section -->

                <!-- / section -->
                <!-- section gallery -->
                <!-- / gallery section -->
                <!-- section -->
                <div class='grid_row clearfix' style='padding-top: 50px;padding-bottom: 50px;'>
                    <div class='grid_col grid_col_12'>
                        <div class='ce clearfix'>
                            <div class='cws_callout'>
                                <div class='content_section'>
                                    <div class='callout_title'>
                                        <div class=\"bees bees-end\"><span></span></div>STILL NOT CONVINCED?</div>
                                    <div class='separate'></div>
                                    <div class='callout_text'>
                                        <p>Want to get more information about our learning center or would like to see it inside, feel free to schedule&nbsp;a tour.
                                            <br /> Come visit us today!</p>
                                    </div>
                                </div>
                                <div class='button_section'><a href='#' class='cws_button xlarge'>Schedule a Tour Now<div class='button-shadow'></div></a></div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- / section -->
            </main>
            <!-- pettaren container / -->
            <div class='right-pattern pattern pattern-2'></div>
            <!-- footer image container / -->
            <div class=\"footer_image\"></div>
        </div>
        <!-- svg filter -->
        <svg xmlns=\"http://www.w3.org/2000/svg\" version=\"1.1\" width=\"0\" style='display:none;'>
            <defs>
                <filter id=\"goo\">
                    <feGaussianBlur in=\"SourceGraphic\" stdDeviation=\"6\" result=\"blur\" />
                    <feColorMatrix in=\"blur\" type=\"matrix\" values=\"1 0 0 0 0  0 1 0 0 0  0 0 1 0 0  0 0 0 19 -9\" result=\"goo\" />
                    <feComposite in=\"SourceGraphic\" in2=\"goo\" operator=\"atop\" />
                </filter>
            </defs>
        </svg>
        <!-- / svg filter -->
    </div>
    <!-- #main -->
    <!-- footer -->
    <div class='footer_wrapper_copyright'>
        <!-- canvas -->
        <div class='half_sin_wrapper'>
            <canvas class='half_sin' data-bg-color='23,108,129' data-line-color='23,108,129'></canvas>
        </div>
        <!-- / canvas -->
        <!-- copyright -->
        <!-- / copyright -->
    </div>
</div>
<!-- #page -->
<div class='scroll_top animated'></div>

<script type='text/javascript' src='{{ asset('Front/tuner/tuner/js/colorpicker.js') }}'></script>
<script type='text/javascript' src='{{ asset('Front/tuner/tuner/js/scripts.js') }}'></script>
<script type='text/javascript' src='{{ asset('Front/js/retina_1.3.0.js') }}'></script>
<script type='text/javascript' src='{{ asset('Front/js/modernizr.js') }}'></script>
<script type='text/javascript' src='{{ asset('Front/js/owl.carousel.js') }}'></script>
<script type='text/javascript' src='{{ asset('Front/js/TweenMax.min.js') }}'></script>
<script type='text/javascript' src='{{ asset('Front/js/jquery.isotope.min.js') }}'></script>
<script type='text/javascript' src='{{ asset('Front/js/jquery.fancybox.js') }}'></script>
<script type='text/javascript' src='{{ asset('Front/js/select2.min.js') }}'></script>
<script type='text/javascript' src='{{ asset('Front/js/wow.min.js') }}'></script>
<script type='text/javascript' src='{{ asset('Front/js/jquery.validate.min.js') }}'></script>
<script type='text/javascript' src=\"{{ asset('Front/js/jquery.form.min.js') }}\"></script>
<script type='text/javascript' src='{{ asset('Front/js/scripts.js') }}'></script>
<script type='text/javascript' src=\"{{ asset('Front/js/jquery.tweet.js') }}\"></script>



</body>
{% block js %}

{% endblock %}

</html>
", "UserBundle::Page_Apprenant.html.twig", "C:\\wamp64\\www\\Ecole\\src\\UserBundle/Resources/views/Page_Apprenant.html.twig");
    }
}
