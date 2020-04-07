<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdProjectContainerUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($rawPathinfo)
    {
        $allow = [];
        $pathinfo = rawurldecode($rawPathinfo);
        $trimmedPathinfo = rtrim($pathinfo, '/');
        $context = $this->context;
        $request = $this->request ?: $this->createRequest($pathinfo);
        $requestMethod = $canonicalMethod = $context->getMethod();

        if ('HEAD' === $requestMethod) {
            $canonicalMethod = 'GET';
        }

        // matier_homepage
        if ('' === $trimmedPathinfo) {
            $ret = array (  '_controller' => 'MatierBundle\\Controller\\DefaultController::indexAction',  '_route' => 'matier_homepage',);
            if ('/' === substr($pathinfo, -1)) {
                // no-op
            } elseif ('GET' !== $canonicalMethod) {
                goto not_matier_homepage;
            } else {
                return array_replace($ret, $this->redirect($rawPathinfo.'/', 'matier_homepage'));
            }

            return $ret;
        }
        not_matier_homepage:

        // classe_homepage
        if ('' === $trimmedPathinfo) {
            $ret = array (  '_controller' => 'ClasseBundle\\Controller\\DefaultController::indexAction',  '_route' => 'classe_homepage',);
            if ('/' === substr($pathinfo, -1)) {
                // no-op
            } elseif ('GET' !== $canonicalMethod) {
                goto not_classe_homepage;
            } else {
                return array_replace($ret, $this->redirect($rawPathinfo.'/', 'classe_homepage'));
            }

            return $ret;
        }
        not_classe_homepage:

        if (0 === strpos($pathinfo, '/admin')) {
            if (0 === strpos($pathinfo, '/admin/A')) {
                // classe_Ajout
                if ('/admin/AjoutClasse' === $pathinfo) {
                    return array (  '_controller' => 'ClasseBundle\\Controller\\ClasseController::AjouterClassAction',  '_route' => 'classe_Ajout',);
                }

                // AjouterNote
                if (0 === strpos($pathinfo, '/admin/AjouterNote') && preg_match('#^/admin/AjouterNote/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, ['_route' => 'AjouterNote']), array (  '_controller' => 'ClasseBundle\\Controller\\NoteController::AjouterNoteAction',));
                }

                if (0 === strpos($pathinfo, '/admin/Affich')) {
                    // classe_Afficher
                    if ('/admin/AfficherClasse' === $pathinfo) {
                        return array (  '_controller' => 'ClasseBundle\\Controller\\ClasseController::AfficheClasseAction',  '_route' => 'classe_Afficher',);
                    }

                    // AfficheNote
                    if (0 === strpos($pathinfo, '/admin/AfficheNote') && preg_match('#^/admin/AfficheNote/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, ['_route' => 'AfficheNote']), array (  '_controller' => 'ClasseBundle\\Controller\\NoteController::AfficheNoteAction',));
                    }

                    // AffechierAffecter
                    if (0 === strpos($pathinfo, '/admin/AffichierAffecter') && preg_match('#^/admin/AffichierAffecter/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, ['_route' => 'AffechierAffecter']), array (  '_controller' => 'ClasseBundle\\Controller\\ClasseController::AfficheClassebyApprenantAction',));
                    }

                }

                // Affecter
                if (0 === strpos($pathinfo, '/admin/Affecter') && preg_match('#^/admin/Affecter/(?P<idc>[^/]++)/(?P<idu>[^/]++)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, ['_route' => 'Affecter']), array (  '_controller' => 'ClasseBundle\\Controller\\ClasseController::AffecterClassAction',));
                }

                // AllUser
                if ('/admin/AllUser' === $pathinfo) {
                    return array (  '_controller' => 'ClasseBundle\\Controller\\ClasseController::AllUserAction',  '_route' => 'AllUser',);
                }

            }

            // classe_Supprimer
            if (0 === strpos($pathinfo, '/admin/SupprimerClass') && preg_match('#^/admin/SupprimerClass/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'classe_Supprimer']), array (  '_controller' => 'ClasseBundle\\Controller\\ClasseController::deleteClasseAction',));
            }

            // classe_Modifier
            if (0 === strpos($pathinfo, '/admin/ModifierClass') && preg_match('#^/admin/ModifierClass/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'classe_Modifier']), array (  '_controller' => 'ClasseBundle\\Controller\\ClasseController::ModifierClasseAction',));
            }

            // ModifierNote
            if (0 === strpos($pathinfo, '/admin/ModifierNote') && preg_match('#^/admin/ModifierNote/(?P<id>[^/]++)/(?P<idc>[^/]++)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'ModifierNote']), array (  '_controller' => 'ClasseBundle\\Controller\\NoteController::ModifierNoteAction',));
            }

            // ClasseByNiveau
            if (0 === strpos($pathinfo, '/admin/ClasseByNiveau') && preg_match('#^/admin/ClasseByNiveau/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'ClasseByNiveau']), array (  '_controller' => 'ClasseBundle\\Controller\\ClasseController::AfficheClassebyNiveauAction',));
            }

            // deleteAffecter
            if (0 === strpos($pathinfo, '/admin/deleteAffecter') && preg_match('#^/admin/deleteAffecter/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'deleteAffecter']), array (  '_controller' => 'ClasseBundle\\Controller\\ClasseController::deleteAffecterAction',));
            }

            // deleteNote
            if (0 === strpos($pathinfo, '/admin/suuprimerNote') && preg_match('#^/admin/suuprimerNote/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'deleteNote']), array (  '_controller' => 'ClasseBundle\\Controller\\NoteController::deleteNoteAction',));
            }

            // Page_Admin
            if ('/admin' === $pathinfo) {
                return array (  '_controller' => 'UserBundle\\Controller\\DefaultController::AdminAction',  '_route' => 'Page_Admin',);
            }

        }

        // user_homepage
        if ('' === $trimmedPathinfo) {
            $ret = array (  '_controller' => 'UserBundle\\Controller\\DefaultController::indexAction',  '_route' => 'user_homepage',);
            if ('/' === substr($pathinfo, -1)) {
                // no-op
            } elseif ('GET' !== $canonicalMethod) {
                goto not_user_homepage;
            } else {
                return array_replace($ret, $this->redirect($rawPathinfo.'/', 'user_homepage'));
            }

            return $ret;
        }
        not_user_homepage:

        if (0 === strpos($pathinfo, '/p')) {
            // Page_Parent
            if ('/pageParent' === $pathinfo) {
                return array (  '_controller' => 'UserBundle\\Controller\\DefaultController::ParentAction',  '_route' => 'Page_Parent',);
            }

            if (0 === strpos($pathinfo, '/pageApprenant')) {
                // Page_Apprenant
                if ('/pageApprenant' === $pathinfo) {
                    return array (  '_controller' => 'UserBundle\\Controller\\DefaultController::ApprenantAction',  '_route' => 'Page_Apprenant',);
                }

                // Page_Enseignant
                if ('/pageApprenant' === $pathinfo) {
                    return array (  '_controller' => 'UserBundle\\Controller\\DefaultController::EnseignantAction',  '_route' => 'Page_Enseignant',);
                }

            }

            elseif (0 === strpos($pathinfo, '/profile')) {
                // fos_user_profile_show
                if ('/profile' === $trimmedPathinfo) {
                    $ret = array (  '_controller' => 'fos_user.profile.controller:showAction',  '_route' => 'fos_user_profile_show',);
                    if ('/' === substr($pathinfo, -1)) {
                        // no-op
                    } elseif ('GET' !== $canonicalMethod) {
                        goto not_fos_user_profile_show;
                    } else {
                        return array_replace($ret, $this->redirect($rawPathinfo.'/', 'fos_user_profile_show'));
                    }

                    if (!in_array($canonicalMethod, ['GET'])) {
                        $allow = array_merge($allow, ['GET']);
                        goto not_fos_user_profile_show;
                    }

                    return $ret;
                }
                not_fos_user_profile_show:

                // fos_user_profile_edit
                if ('/profile/edit' === $pathinfo) {
                    $ret = array (  '_controller' => 'fos_user.profile.controller:editAction',  '_route' => 'fos_user_profile_edit',);
                    if (!in_array($canonicalMethod, ['GET', 'POST'])) {
                        $allow = array_merge($allow, ['GET', 'POST']);
                        goto not_fos_user_profile_edit;
                    }

                    return $ret;
                }
                not_fos_user_profile_edit:

                // fos_user_change_password
                if ('/profile/change-password' === $pathinfo) {
                    $ret = array (  '_controller' => 'fos_user.change_password.controller:changePasswordAction',  '_route' => 'fos_user_change_password',);
                    if (!in_array($canonicalMethod, ['GET', 'POST'])) {
                        $allow = array_merge($allow, ['GET', 'POST']);
                        goto not_fos_user_change_password;
                    }

                    return $ret;
                }
                not_fos_user_change_password:

            }

        }

        // homepage
        if ('' === $trimmedPathinfo) {
            $ret = array (  '_controller' => 'AppBundle\\Controller\\DefaultController::indexAction',  '_route' => 'homepage',);
            if ('/' === substr($pathinfo, -1)) {
                // no-op
            } elseif ('GET' !== $canonicalMethod) {
                goto not_homepage;
            } else {
                return array_replace($ret, $this->redirect($rawPathinfo.'/', 'homepage'));
            }

            return $ret;
        }
        not_homepage:

        if (0 === strpos($pathinfo, '/login')) {
            // fos_user_security_login
            if ('/login' === $pathinfo) {
                $ret = array (  '_controller' => 'fos_user.security.controller:loginAction',  '_route' => 'fos_user_security_login',);
                if (!in_array($canonicalMethod, ['GET', 'POST'])) {
                    $allow = array_merge($allow, ['GET', 'POST']);
                    goto not_fos_user_security_login;
                }

                return $ret;
            }
            not_fos_user_security_login:

            // fos_user_security_check
            if ('/login_check' === $pathinfo) {
                $ret = array (  '_controller' => 'fos_user.security.controller:checkAction',  '_route' => 'fos_user_security_check',);
                if (!in_array($requestMethod, ['POST'])) {
                    $allow = array_merge($allow, ['POST']);
                    goto not_fos_user_security_check;
                }

                return $ret;
            }
            not_fos_user_security_check:

        }

        // fos_user_security_logout
        if ('/logout' === $pathinfo) {
            $ret = array (  '_controller' => 'fos_user.security.controller:logoutAction',  '_route' => 'fos_user_security_logout',);
            if (!in_array($canonicalMethod, ['GET', 'POST'])) {
                $allow = array_merge($allow, ['GET', 'POST']);
                goto not_fos_user_security_logout;
            }

            return $ret;
        }
        not_fos_user_security_logout:

        if (0 === strpos($pathinfo, '/register')) {
            // fos_user_registration_register
            if ('/register' === $trimmedPathinfo) {
                $ret = array (  '_controller' => 'fos_user.registration.controller:registerAction',  '_route' => 'fos_user_registration_register',);
                if ('/' === substr($pathinfo, -1)) {
                    // no-op
                } elseif ('GET' !== $canonicalMethod) {
                    goto not_fos_user_registration_register;
                } else {
                    return array_replace($ret, $this->redirect($rawPathinfo.'/', 'fos_user_registration_register'));
                }

                if (!in_array($canonicalMethod, ['GET', 'POST'])) {
                    $allow = array_merge($allow, ['GET', 'POST']);
                    goto not_fos_user_registration_register;
                }

                return $ret;
            }
            not_fos_user_registration_register:

            // fos_user_registration_check_email
            if ('/register/check-email' === $pathinfo) {
                $ret = array (  '_controller' => 'fos_user.registration.controller:checkEmailAction',  '_route' => 'fos_user_registration_check_email',);
                if (!in_array($canonicalMethod, ['GET'])) {
                    $allow = array_merge($allow, ['GET']);
                    goto not_fos_user_registration_check_email;
                }

                return $ret;
            }
            not_fos_user_registration_check_email:

            if (0 === strpos($pathinfo, '/register/confirm')) {
                // fos_user_registration_confirm
                if (preg_match('#^/register/confirm/(?P<token>[^/]++)$#sD', $pathinfo, $matches)) {
                    $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'fos_user_registration_confirm']), array (  '_controller' => 'fos_user.registration.controller:confirmAction',));
                    if (!in_array($canonicalMethod, ['GET'])) {
                        $allow = array_merge($allow, ['GET']);
                        goto not_fos_user_registration_confirm;
                    }

                    return $ret;
                }
                not_fos_user_registration_confirm:

                // fos_user_registration_confirmed
                if ('/register/confirmed' === $pathinfo) {
                    $ret = array (  '_controller' => 'fos_user.registration.controller:confirmedAction',  '_route' => 'fos_user_registration_confirmed',);
                    if (!in_array($canonicalMethod, ['GET'])) {
                        $allow = array_merge($allow, ['GET']);
                        goto not_fos_user_registration_confirmed;
                    }

                    return $ret;
                }
                not_fos_user_registration_confirmed:

            }

        }

        elseif (0 === strpos($pathinfo, '/resetting')) {
            // fos_user_resetting_request
            if ('/resetting/request' === $pathinfo) {
                $ret = array (  '_controller' => 'fos_user.resetting.controller:requestAction',  '_route' => 'fos_user_resetting_request',);
                if (!in_array($canonicalMethod, ['GET'])) {
                    $allow = array_merge($allow, ['GET']);
                    goto not_fos_user_resetting_request;
                }

                return $ret;
            }
            not_fos_user_resetting_request:

            // fos_user_resetting_reset
            if (0 === strpos($pathinfo, '/resetting/reset') && preg_match('#^/resetting/reset/(?P<token>[^/]++)$#sD', $pathinfo, $matches)) {
                $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'fos_user_resetting_reset']), array (  '_controller' => 'fos_user.resetting.controller:resetAction',));
                if (!in_array($canonicalMethod, ['GET', 'POST'])) {
                    $allow = array_merge($allow, ['GET', 'POST']);
                    goto not_fos_user_resetting_reset;
                }

                return $ret;
            }
            not_fos_user_resetting_reset:

            // fos_user_resetting_send_email
            if ('/resetting/send-email' === $pathinfo) {
                $ret = array (  '_controller' => 'fos_user.resetting.controller:sendEmailAction',  '_route' => 'fos_user_resetting_send_email',);
                if (!in_array($requestMethod, ['POST'])) {
                    $allow = array_merge($allow, ['POST']);
                    goto not_fos_user_resetting_send_email;
                }

                return $ret;
            }
            not_fos_user_resetting_send_email:

            // fos_user_resetting_check_email
            if ('/resetting/check-email' === $pathinfo) {
                $ret = array (  '_controller' => 'fos_user.resetting.controller:checkEmailAction',  '_route' => 'fos_user_resetting_check_email',);
                if (!in_array($canonicalMethod, ['GET'])) {
                    $allow = array_merge($allow, ['GET']);
                    goto not_fos_user_resetting_check_email;
                }

                return $ret;
            }
            not_fos_user_resetting_check_email:

        }

        if ('/' === $pathinfo && !$allow) {
            throw new Symfony\Component\Routing\Exception\NoConfigurationException();
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
