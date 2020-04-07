<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appDevDebugProjectContainerUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
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

        if (0 === strpos($pathinfo, '/_')) {
            // _wdt
            if (0 === strpos($pathinfo, '/_wdt') && preg_match('#^/_wdt/(?P<token>[^/]++)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => '_wdt']), array (  '_controller' => 'web_profiler.controller.profiler:toolbarAction',));
            }

            if (0 === strpos($pathinfo, '/_profiler')) {
                // _profiler_home
                if ('/_profiler' === $trimmedPathinfo) {
                    $ret = array (  '_controller' => 'web_profiler.controller.profiler:homeAction',  '_route' => '_profiler_home',);
                    if ('/' === substr($pathinfo, -1)) {
                        // no-op
                    } elseif ('GET' !== $canonicalMethod) {
                        goto not__profiler_home;
                    } else {
                        return array_replace($ret, $this->redirect($rawPathinfo.'/', '_profiler_home'));
                    }

                    return $ret;
                }
                not__profiler_home:

                if (0 === strpos($pathinfo, '/_profiler/search')) {
                    // _profiler_search
                    if ('/_profiler/search' === $pathinfo) {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchAction',  '_route' => '_profiler_search',);
                    }

                    // _profiler_search_bar
                    if ('/_profiler/search_bar' === $pathinfo) {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchBarAction',  '_route' => '_profiler_search_bar',);
                    }

                }

                // _profiler_phpinfo
                if ('/_profiler/phpinfo' === $pathinfo) {
                    return array (  '_controller' => 'web_profiler.controller.profiler:phpinfoAction',  '_route' => '_profiler_phpinfo',);
                }

                // _profiler_search_results
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/search/results$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, ['_route' => '_profiler_search_results']), array (  '_controller' => 'web_profiler.controller.profiler:searchResultsAction',));
                }

                // _profiler_open_file
                if ('/_profiler/open' === $pathinfo) {
                    return array (  '_controller' => 'web_profiler.controller.profiler:openAction',  '_route' => '_profiler_open_file',);
                }

                // _profiler
                if (preg_match('#^/_profiler/(?P<token>[^/]++)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, ['_route' => '_profiler']), array (  '_controller' => 'web_profiler.controller.profiler:panelAction',));
                }

                // _profiler_router
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/router$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, ['_route' => '_profiler_router']), array (  '_controller' => 'web_profiler.controller.router:panelAction',));
                }

                // _profiler_exception
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, ['_route' => '_profiler_exception']), array (  '_controller' => 'web_profiler.controller.exception:showAction',));
                }

                // _profiler_exception_css
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception\\.css$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, ['_route' => '_profiler_exception_css']), array (  '_controller' => 'web_profiler.controller.exception:cssAction',));
                }

            }

            // _twig_error_test
            if (0 === strpos($pathinfo, '/_error') && preg_match('#^/_error/(?P<code>\\d+)(?:\\.(?P<_format>[^/]++))?$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => '_twig_error_test']), array (  '_controller' => 'twig.controller.preview_error:previewErrorPageAction',  '_format' => 'html',));
            }

        }

        // mon_livre_homepage
        if ('' === $trimmedPathinfo) {
            $ret = array (  '_controller' => 'MonLivreBundle\\Controller\\DefaultController::indexAction',  '_route' => 'mon_livre_homepage',);
            if ('/' === substr($pathinfo, -1)) {
                // no-op
            } elseif ('GET' !== $canonicalMethod) {
                goto not_mon_livre_homepage;
            } else {
                return array_replace($ret, $this->redirect($rawPathinfo.'/', 'mon_livre_homepage'));
            }

            return $ret;
        }
        not_mon_livre_homepage:

        if (0 === strpos($pathinfo, '/admin')) {
            if (0 === strpos($pathinfo, '/admin/a')) {
                // categorie_Ajout
                if ('/admin/ajoutCategorie' === $pathinfo) {
                    return array (  '_controller' => 'MonLivreBundle\\Controller\\CategorieController::AjoutCategorieAction',  '_route' => 'categorie_Ajout',);
                }

                // categorie_Affiche
                if ('/admin/afficheCategorie' === $pathinfo) {
                    return array (  '_controller' => 'MonLivreBundle\\Controller\\CategorieController::AfficheCategorieAction',  '_route' => 'categorie_Affiche',);
                }

                // Reservation_Delete
                if (0 === strpos($pathinfo, '/admin/annuler') && preg_match('#^/admin/annuler/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, ['_route' => 'Reservation_Delete']), array (  '_controller' => 'EvenementBundle\\Controller\\ReservationController::deleteReservationAdminAction',));
                }

            }

            elseif (0 === strpos($pathinfo, '/admin/delete')) {
                // categorie_delete
                if (0 === strpos($pathinfo, '/admin/deleteCategorie') && preg_match('#^/admin/deleteCategorie/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, ['_route' => 'categorie_delete']), array (  '_controller' => 'MonLivreBundle\\Controller\\CategorieController::deleteCategorieAction',));
                }

                if (0 === strpos($pathinfo, '/admin/deleteMatiere')) {
                    // matierMonLivre_delete
                    if (0 === strpos($pathinfo, '/admin/deleteMatiereMonLivre') && preg_match('#^/admin/deleteMatiereMonLivre/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, ['_route' => 'matierMonLivre_delete']), array (  '_controller' => 'MonLivreBundle\\Controller\\MatiereController::deleteMatiereAction',));
                    }

                    // matier_delete
                    if (preg_match('#^/admin/deleteMatiere/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, ['_route' => 'matier_delete']), array (  '_controller' => 'MatierBundle\\Controller\\MatiereController::deleteMatiereAction',));
                    }

                }

                // Emploi_Enseigant_delete
                if (0 === strpos($pathinfo, '/admin/deleteEmploiEnseignant') && preg_match('#^/admin/deleteEmploiEnseignant/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, ['_route' => 'Emploi_Enseigant_delete']), array (  '_controller' => 'MatierBundle\\Controller\\EmploiController::deleteEmploiEnseignantAction',));
                }

                // Emploi_Class_delete
                if (0 === strpos($pathinfo, '/admin/deleteEmploiClass') && preg_match('#^/admin/deleteEmploiClass/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, ['_route' => 'Emploi_Class_delete']), array (  '_controller' => 'MatierBundle\\Controller\\EmploiController::deleteEmploiClassAction',));
                }

                // deleteAffecter
                if (0 === strpos($pathinfo, '/admin/deleteAffecter') && preg_match('#^/admin/deleteAffecter/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, ['_route' => 'deleteAffecter']), array (  '_controller' => 'ClasseBundle\\Controller\\ClasseController::deleteAffecterAction',));
                }

            }

            elseif (0 === strpos($pathinfo, '/admin/A')) {
                if (0 === strpos($pathinfo, '/admin/Ajouter')) {
                    // Ajouter_MatierLivre
                    if ('/admin/Ajouter/MatierLivre' === $pathinfo) {
                        return array (  '_controller' => 'MonLivreBundle\\Controller\\MatiereController::AjoutMatiereAction',  '_route' => 'Ajouter_MatierLivre',);
                    }

                    // CourMonLivre_Ajouter
                    if ('/admin/AjouterMonLivre' === $pathinfo) {
                        return array (  '_controller' => 'MonLivreBundle\\Controller\\MonLivreController::AjoutMCourLivreAction',  '_route' => 'CourMonLivre_Ajouter',);
                    }

                    // matier_ajout
                    if ('/admin/AjouterMatiere' === $pathinfo) {
                        return array (  '_controller' => 'MatierBundle\\Controller\\MatiereController::AjouterMatiereAction',  '_route' => 'matier_ajout',);
                    }

                    if (0 === strpos($pathinfo, '/admin/AjouterE')) {
                        // evenement_Ajout
                        if ('/admin/AjouterEvenement' === $pathinfo) {
                            return array (  '_controller' => 'EvenementBundle\\Controller\\EvenementController::AjoutEvenementAction',  '_route' => 'evenement_Ajout',);
                        }

                        // Emploi_Enseignant
                        if (0 === strpos($pathinfo, '/admin/AjouterEmploiEnseignat') && preg_match('#^/admin/AjouterEmploiEnseignat/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, ['_route' => 'Emploi_Enseignant']), array (  '_controller' => 'MatierBundle\\Controller\\EmploiController::AjouterEmploiEnseignantAction',));
                        }

                        // Emploi_Classe
                        if (0 === strpos($pathinfo, '/admin/AjouterEmploiClass') && preg_match('#^/admin/AjouterEmploiClass/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, ['_route' => 'Emploi_Classe']), array (  '_controller' => 'MatierBundle\\Controller\\EmploiController::AjouterEmploiClassAction',));
                        }

                    }

                    // AjouterNote
                    if (0 === strpos($pathinfo, '/admin/AjouterNote') && preg_match('#^/admin/AjouterNote/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, ['_route' => 'AjouterNote']), array (  '_controller' => 'ClasseBundle\\Controller\\NoteController::AjouterNoteAction',));
                    }

                }

                // classe_Ajout
                if ('/admin/AjoutClasse' === $pathinfo) {
                    return array (  '_controller' => 'ClasseBundle\\Controller\\ClasseController::AjouterClassAction',  '_route' => 'classe_Ajout',);
                }

                if (0 === strpos($pathinfo, '/admin/Affic')) {
                    if (0 === strpos($pathinfo, '/admin/Affichier')) {
                        // Affichier_MatierLivre
                        if ('/admin/Affichier/MatierLivre' === $pathinfo) {
                            return array (  '_controller' => 'MonLivreBundle\\Controller\\MatiereController::AfficheMatiereAction',  '_route' => 'Affichier_MatierLivre',);
                        }

                        // CourMonLivre_Affichier
                        if ('/admin/AffichierCourMonLivre' === $pathinfo) {
                            return array (  '_controller' => 'MonLivreBundle\\Controller\\MonLivreController::AfficheMonLivreAction',  '_route' => 'CourMonLivre_Affichier',);
                        }

                        // AffechierAffecter
                        if (0 === strpos($pathinfo, '/admin/AffichierAffecter') && preg_match('#^/admin/AffichierAffecter/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, ['_route' => 'AffechierAffecter']), array (  '_controller' => 'ClasseBundle\\Controller\\ClasseController::AfficheClassebyApprenantAction',));
                        }

                    }

                    elseif (0 === strpos($pathinfo, '/admin/Affiche')) {
                        if (0 === strpos($pathinfo, '/admin/Afficher')) {
                            // evenement_Affiche
                            if ('/admin/AfficherEvenement' === $pathinfo) {
                                return array (  '_controller' => 'EvenementBundle\\Controller\\EvenementController::AfficheEvenementAction',  '_route' => 'evenement_Affiche',);
                            }

                            // Reservation_AfficheAdmin
                            if ('/admin/AfficherReservation' === $pathinfo) {
                                return array (  '_controller' => 'EvenementBundle\\Controller\\ReservationController::AfficheReservationAdminAction',  '_route' => 'Reservation_AfficheAdmin',);
                            }

                            // classe_Afficher
                            if ('/admin/AfficherClasse' === $pathinfo) {
                                return array (  '_controller' => 'ClasseBundle\\Controller\\ClasseController::AfficheClasseAction',  '_route' => 'classe_Afficher',);
                            }

                        }

                        // AfficherEnseignant
                        if ('/admin/AfficheEnseignants' === $pathinfo) {
                            return array (  '_controller' => 'MatierBundle\\Controller\\EmploiController::AfficheEnseignantAction',  '_route' => 'AfficherEnseignant',);
                        }

                        // Emploi_EnseignantAffiche
                        if ('/admin/AfficheEmploiEnseignant' === $pathinfo) {
                            return array (  '_controller' => 'MatierBundle\\Controller\\EmploiController::AfficheEmploiEnseignantAction',  '_route' => 'Emploi_EnseignantAffiche',);
                        }

                        // Emploi_ClasseAffiche
                        if ('/admin/AfficheClasseEnseignant' === $pathinfo) {
                            return array (  '_controller' => 'MatierBundle\\Controller\\EmploiController::AfficheEmploiClassAction',  '_route' => 'Emploi_ClasseAffiche',);
                        }

                        // AfficheNote
                        if (0 === strpos($pathinfo, '/admin/AfficheNote') && preg_match('#^/admin/AfficheNote/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, ['_route' => 'AfficheNote']), array (  '_controller' => 'ClasseBundle\\Controller\\NoteController::AfficheNoteAction',));
                        }

                    }

                    // matier_afficher
                    if ('/admin/AfficierMatiere' === $pathinfo) {
                        return array (  '_controller' => 'MatierBundle\\Controller\\MatiereController::AfficheMatiereAction',  '_route' => 'matier_afficher',);
                    }

                }

                // Affecter
                if (0 === strpos($pathinfo, '/admin/Affecter') && preg_match('#^/admin/Affecter/(?P<idc>[^/]++)/(?P<idu>[^/]++)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, ['_route' => 'Affecter']), array (  '_controller' => 'ClasseBundle\\Controller\\ClasseController::AffecterClassAction',));
                }

                if (0 === strpos($pathinfo, '/admin/Ac')) {
                    if (0 === strpos($pathinfo, '/admin/Actvite')) {
                        // Activite_ajout
                        if ('/admin/ActviteAjout' === $pathinfo) {
                            return array (  '_controller' => 'GarderieBundle\\Controller\\ActiviteController::AjouterActiviteAction',  '_route' => 'Activite_ajout',);
                        }

                        // Activite_delete
                        if (0 === strpos($pathinfo, '/admin/Actvitedelete') && preg_match('#^/admin/Actvitedelete/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, ['_route' => 'Activite_delete']), array (  '_controller' => 'GarderieBundle\\Controller\\ActiviteController::deleteClasseAction',));
                        }

                        // Activite_modifie
                        if (0 === strpos($pathinfo, '/admin/Actvitemodifier') && preg_match('#^/admin/Actvitemodifier/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, ['_route' => 'Activite_modifie']), array (  '_controller' => 'GarderieBundle\\Controller\\ActiviteController::ModifierActiviteAction',));
                        }

                    }

                    // Activite_affiche
                    if ('/admin/ActiviteAffiche' === $pathinfo) {
                        return array (  '_controller' => 'GarderieBundle\\Controller\\ActiviteController::AfficheActiviteAction',  '_route' => 'Activite_affiche',);
                    }

                    // AccepterRes
                    if (0 === strpos($pathinfo, '/admin/AccepterRes') && preg_match('#^/admin/AccepterRes/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, ['_route' => 'AccepterRes']), array (  '_controller' => 'GarderieBundle\\Controller\\ReservationController::AccepterReserAction',));
                    }

                }

                // AllReser
                if ('/admin/AllRes' === $pathinfo) {
                    return array (  '_controller' => 'GarderieBundle\\Controller\\ReservationController::AfficheAllReservAction',  '_route' => 'AllReser',);
                }

                // AllUser
                if ('/admin/AllUser' === $pathinfo) {
                    return array (  '_controller' => 'ClasseBundle\\Controller\\ClasseController::AllUserAction',  '_route' => 'AllUser',);
                }

                // ArchiveRes
                if ('/admin/ArchiveGard' === $pathinfo) {
                    return array (  '_controller' => 'GarderieBundle\\Controller\\ReservationController::AfficheArchiveReservAction',  '_route' => 'ArchiveRes',);
                }

                // Absence
                if (0 === strpos($pathinfo, '/admin/Absence') && preg_match('#^/admin/Absence/(?P<id>[^/]++)/(?P<idu>[^/]++)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, ['_route' => 'Absence']), array (  '_controller' => 'ClasseBundle\\Controller\\AbsenceController::AjouterAbsenceAction',));
                }

            }

            elseif (0 === strpos($pathinfo, '/admin/ModifeirMatiere')) {
                // matierMonLivre_modifier
                if (0 === strpos($pathinfo, '/admin/ModifeirMatiereMonLivre') && preg_match('#^/admin/ModifeirMatiereMonLivre/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, ['_route' => 'matierMonLivre_modifier']), array (  '_controller' => 'MonLivreBundle\\Controller\\MatiereController::ModifierMatierAction',));
                }

                // matier_modifier
                if (preg_match('#^/admin/ModifeirMatiere/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, ['_route' => 'matier_modifier']), array (  '_controller' => 'MatierBundle\\Controller\\MatiereController::ModifierMatierAction',));
                }

            }

            elseif (0 === strpos($pathinfo, '/admin/Modifier')) {
                // CourMonLivre_Modifier
                if (0 === strpos($pathinfo, '/admin/ModifierCourMonLivre') && preg_match('#^/admin/ModifierCourMonLivre/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, ['_route' => 'CourMonLivre_Modifier']), array (  '_controller' => 'MonLivreBundle\\Controller\\MonLivreController::ModifierCourAction',));
                }

                // classe_Modifier
                if (0 === strpos($pathinfo, '/admin/ModifierClass') && preg_match('#^/admin/ModifierClass/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, ['_route' => 'classe_Modifier']), array (  '_controller' => 'ClasseBundle\\Controller\\ClasseController::ModifierClasseAction',));
                }

                // evenement_Modifier
                if (0 === strpos($pathinfo, '/admin/ModifierEvenement') && preg_match('#^/admin/ModifierEvenement/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, ['_route' => 'evenement_Modifier']), array (  '_controller' => 'EvenementBundle\\Controller\\EvenementController::editEvenementAction',));
                }

                // ModifierNote
                if (0 === strpos($pathinfo, '/admin/ModifierNote') && preg_match('#^/admin/ModifierNote/(?P<id>[^/]++)/(?P<idc>[^/]++)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, ['_route' => 'ModifierNote']), array (  '_controller' => 'ClasseBundle\\Controller\\NoteController::ModifierNoteAction',));
                }

            }

            // CourMonLivre_delete
            if (0 === strpos($pathinfo, '/admin/DeleteCourMonLivre') && preg_match('#^/admin/DeleteCourMonLivre/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'CourMonLivre_delete']), array (  '_controller' => 'MonLivreBundle\\Controller\\MonLivreController::deleteMonLivreAction',));
            }

            if (0 === strpos($pathinfo, '/admin/S')) {
                // evenement_Supprimer
                if (0 === strpos($pathinfo, '/admin/SupprimerEvenement') && preg_match('#^/admin/SupprimerEvenement/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, ['_route' => 'evenement_Supprimer']), array (  '_controller' => 'EvenementBundle\\Controller\\EvenementController::deleteEventAction',));
                }

                // classe_Supprimer
                if (0 === strpos($pathinfo, '/admin/SupprimerClass') && preg_match('#^/admin/SupprimerClass/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, ['_route' => 'classe_Supprimer']), array (  '_controller' => 'ClasseBundle\\Controller\\ClasseController::deleteClasseAction',));
                }

                // stat
                if ('/admin/Statistique' === $pathinfo) {
                    return array (  '_controller' => 'ClasseBundle\\Controller\\StatistiqueController::indexAction',  '_route' => 'stat',);
                }

            }

            // RefesuerRes
            if (0 === strpos($pathinfo, '/admin/Refesuer') && preg_match('#^/admin/Refesuer/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'RefesuerRes']), array (  '_controller' => 'GarderieBundle\\Controller\\ReservationController::refuserReserAction',));
            }

            // ClasseByNiveau
            if (0 === strpos($pathinfo, '/admin/ClasseByNiveau') && preg_match('#^/admin/ClasseByNiveau/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'ClasseByNiveau']), array (  '_controller' => 'ClasseBundle\\Controller\\ClasseController::AfficheClassebyNiveauAction',));
            }

            // deleteNote
            if (0 === strpos($pathinfo, '/admin/suuprimerNote') && preg_match('#^/admin/suuprimerNote/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'deleteNote']), array (  '_controller' => 'ClasseBundle\\Controller\\NoteController::deleteNoteAction',));
            }

            // Page_Employer
            if ('/admin' === $pathinfo) {
                return array (  '_controller' => 'UserBundle\\Controller\\DefaultController::EmplyoerAction',  '_route' => 'Page_Employer',);
            }

            if (0 === strpos($pathinfo, '/admine')) {
                // Page_Admin
                if ('/admine' === $pathinfo) {
                    return array (  '_controller' => 'UserBundle\\Controller\\DefaultController::AdminAction',  '_route' => 'Page_Admin',);
                }

                // Ajouter_Employer
                if ('/admine/Employer' === $pathinfo) {
                    return array (  '_controller' => 'UserBundle\\Controller\\DefaultController::AjouterEmployerAction',  '_route' => 'Ajouter_Employer',);
                }

                // Ajouter_Enseignant
                if ('/admine/Enseignant' === $pathinfo) {
                    return array (  '_controller' => 'UserBundle\\Controller\\DefaultController::AjouterEnseigantAction',  '_route' => 'Ajouter_Enseignant',);
                }

                // Affichier_user
                if ('/admine/AllUser' === $pathinfo) {
                    return array (  '_controller' => 'UserBundle\\Controller\\DefaultController::AfficheUserAction',  '_route' => 'Affichier_user',);
                }

            }

        }

        elseif (0 === strpos($pathinfo, '/Apprenant')) {
            if (0 === strpos($pathinfo, '/Apprenant/CourMonLivre')) {
                // Front_AfficheMonCour
                if ('/Apprenant/CourMonLivre' === $pathinfo) {
                    return array (  '_controller' => 'MonLivreBundle\\Controller\\MatiereController::AfficheMatiereFrontAction',  '_route' => 'Front_AfficheMonCour',);
                }

                // Front_AfficheMonCourDetails
                if (0 === strpos($pathinfo, '/Apprenant/CourMonLivreDetails') && preg_match('#^/Apprenant/CourMonLivreDetails/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, ['_route' => 'Front_AfficheMonCourDetails']), array (  '_controller' => 'MonLivreBundle\\Controller\\MatiereController::AfficheMatiereFrontDétailsAction',));
                }

            }

            // Calendre
            if ('/Apprenant/Calendre' === $pathinfo) {
                return array (  '_controller' => 'EvenementBundle\\Controller\\ReservationController::CallendreAction',  '_route' => 'Calendre',);
            }

            // PaticiperCour
            if (0 === strpos($pathinfo, '/Apprenant/Inscrire') && preg_match('#^/Apprenant/Inscrire/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'PaticiperCour']), array (  '_controller' => 'MonLivreBundle\\Controller\\InscriptionController::AjoutInscriptionAction',));
            }

            // DésinscriptionCour
            if (0 === strpos($pathinfo, '/Apprenant/DesInscrire') && preg_match('#^/Apprenant/DesInscrire/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'DésinscriptionCour']), array (  '_controller' => 'MonLivreBundle\\Controller\\InscriptionController::deleteParticipationClientAction',));
            }

            if (0 === strpos($pathinfo, '/Apprenant/A')) {
                // Front_Evenet
                if ('/Apprenant/AfficheEvent' === $pathinfo) {
                    return array (  '_controller' => 'EvenementBundle\\Controller\\EvenementController::AfficheEvenementFrontAction',  '_route' => 'Front_Evenet',);
                }

                // Comment
                if (0 === strpos($pathinfo, '/Apprenant/AddComment') && preg_match('#^/Apprenant/AddComment/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, ['_route' => 'Comment']), array (  '_controller' => 'EvenementBundle\\Controller\\CommentaireController::AfficheAddCommentAction',));
                }

                // Participer_ajout
                if (0 === strpos($pathinfo, '/Apprenant/AjoutReservation') && preg_match('#^/Apprenant/AjoutReservation/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, ['_route' => 'Participer_ajout']), array (  '_controller' => 'EvenementBundle\\Controller\\ReservationController::AjoutReservationAction',));
                }

            }

            // Comment_edit
            if (0 === strpos($pathinfo, '/Apprenant/editComment') && preg_match('#^/Apprenant/editComment/(?P<idc>[^/]++)/(?P<ide>[^/]++)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'Comment_edit']), array (  '_controller' => 'EvenementBundle\\Controller\\CommentaireController::editCommentaireAction',));
            }

            // Comment_delete
            if (0 === strpos($pathinfo, '/Apprenant/deliteComment') && preg_match('#^/Apprenant/deliteComment/(?P<idc>[^/]++)/(?P<ide>[^/]++)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'Comment_delete']), array (  '_controller' => 'EvenementBundle\\Controller\\CommentaireController::deleteCommentAction',));
            }

            // AfficherReservationClient
            if ('/Apprenant/afficherReservation' === $pathinfo) {
                return array (  '_controller' => 'EvenementBundle\\Controller\\ReservationController::ListeReservationClientAction',  '_route' => 'AfficherReservationClient',);
            }

            // AnnulerReservation
            if (0 === strpos($pathinfo, '/Apprenant/annulerReservation') && preg_match('#^/Apprenant/annulerReservation/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'AnnulerReservation']), array (  '_controller' => 'EvenementBundle\\Controller\\ReservationController::deleteReservationClientAction',));
            }

            // See_Cour
            if ('/Apprenant/MyCour' === $pathinfo) {
                return array (  '_controller' => 'MatierBundle\\Controller\\CourController::AfficheCourFrontAction',  '_route' => 'See_Cour',);
            }

            // FrontMyInfo
            if ('/Apprenant/MyInfo' === $pathinfo) {
                return array (  '_controller' => 'ClasseBundle\\Controller\\AbsenceController::AfficheMonInfoAction',  '_route' => 'FrontMyInfo',);
            }

        }

        // evenement_homepage
        if ('' === $trimmedPathinfo) {
            $ret = array (  '_controller' => 'EvenementBundle\\Controller\\DefaultController::indexAction',  '_route' => 'evenement_homepage',);
            if ('/' === substr($pathinfo, -1)) {
                // no-op
            } elseif ('GET' !== $canonicalMethod) {
                goto not_evenement_homepage;
            } else {
                return array_replace($ret, $this->redirect($rawPathinfo.'/', 'evenement_homepage'));
            }

            return $ret;
        }
        not_evenement_homepage:

        // garderie_homepage
        if ('' === $trimmedPathinfo) {
            $ret = array (  '_controller' => 'GarderieBundle\\Controller\\DefaultController::indexAction',  '_route' => 'garderie_homepage',);
            if ('/' === substr($pathinfo, -1)) {
                // no-op
            } elseif ('GET' !== $canonicalMethod) {
                goto not_garderie_homepage;
            } else {
                return array_replace($ret, $this->redirect($rawPathinfo.'/', 'garderie_homepage'));
            }

            return $ret;
        }
        not_garderie_homepage:

        if (0 === strpos($pathinfo, '/p')) {
            if (0 === strpos($pathinfo, '/parent')) {
                if (0 === strpos($pathinfo, '/parent/Reservez')) {
                    // Reservation_ajout
                    if ('/parent/Reservez' === $pathinfo) {
                        return array (  '_controller' => 'GarderieBundle\\Controller\\ReservationController::AjouterReservationAction',  '_route' => 'Reservation_ajout',);
                    }

                    // Reservation_delete
                    if (0 === strpos($pathinfo, '/parent/Reservezdele') && preg_match('#^/parent/Reservezdele/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, ['_route' => 'Reservation_delete']), array (  '_controller' => 'GarderieBundle\\Controller\\ReservationController::deleteReservationAction',));
                    }

                    // Reservation_modifier
                    if (0 === strpos($pathinfo, '/parent/ReservezUpdate') && preg_match('#^/parent/ReservezUpdate/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, ['_route' => 'Reservation_modifier']), array (  '_controller' => 'GarderieBundle\\Controller\\ReservationController::ModifierReservationAction',));
                    }

                }

                // Reservation_affichFront
                if ('/parent/MyReservation' === $pathinfo) {
                    return array (  '_controller' => 'GarderieBundle\\Controller\\ReservationController::AfficheMyReservAction',  '_route' => 'Reservation_affichFront',);
                }

                // Ajouter_Enfant
                if ('/parent/MonEnfant' === $pathinfo) {
                    return array (  '_controller' => 'UserBundle\\Controller\\DefaultController::AjouterApprenantAction',  '_route' => 'Ajouter_Enfant',);
                }

            }

            elseif (0 === strpos($pathinfo, '/page')) {
                // Page_Parent
                if ('/pageParent' === $pathinfo) {
                    return array (  '_controller' => 'UserBundle\\Controller\\DefaultController::ParentAction',  '_route' => 'Page_Parent',);
                }

                // Page_Apprenant
                if ('/pageApprenant' === $pathinfo) {
                    return array (  '_controller' => 'UserBundle\\Controller\\DefaultController::ApprenantAction',  '_route' => 'Page_Apprenant',);
                }

                // Page_Enseignant
                if ('/pageEnseignant' === $pathinfo) {
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

        if (0 === strpos($pathinfo, '/Enseignant')) {
            if (0 === strpos($pathinfo, '/Enseignant/Affich')) {
                // Emploi_EnseignantAfficheback
                if ('/Enseignant/AfficheEmploiEnseignant' === $pathinfo) {
                    return array (  '_controller' => 'MatierBundle\\Controller\\EmploiController::AfficheEmploiEnseignantbackAction',  '_route' => 'Emploi_EnseignantAfficheback',);
                }

                // Affichier_ClassEnseignant
                if ('/Enseignant/AffichierClass' === $pathinfo) {
                    return array (  '_controller' => 'MatierBundle\\Controller\\CourController::AfficheClasseAction',  '_route' => 'Affichier_ClassEnseignant',);
                }

                // Affichier_Cour
                if ('/Enseignant/AffichierCour' === $pathinfo) {
                    return array (  '_controller' => 'MatierBundle\\Controller\\CourController::AfficheCourAction',  '_route' => 'Affichier_Cour',);
                }

            }

            // Ajouter_Cour
            if (0 === strpos($pathinfo, '/Enseignant/AjouterCour') && preg_match('#^/Enseignant/AjouterCour/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'Ajouter_Cour']), array (  '_controller' => 'MatierBundle\\Controller\\CourController::AjouterCourAction',));
            }

            // delete_Cour
            if (0 === strpos($pathinfo, '/Enseignant/deleteCour') && preg_match('#^/Enseignant/deleteCour/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'delete_Cour']), array (  '_controller' => 'MatierBundle\\Controller\\CourController::deleteCourAction',));
            }

            // Modifier_Cour
            if (0 === strpos($pathinfo, '/Enseignant/ModifierCour') && preg_match('#^/Enseignant/ModifierCour/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'Modifier_Cour']), array (  '_controller' => 'MatierBundle\\Controller\\CourController::ModifierCourAction',));
            }

        }

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

        if (0 === strpos($pathinfo, '/Parent/MyKids')) {
            // Front
            if ('/Parent/MyKids' === $pathinfo) {
                return array (  '_controller' => 'ClasseBundle\\Controller\\AbsenceController::AfficheEnfantParnetAction',  '_route' => 'Front',);
            }

            // FrontNote
            if (0 === strpos($pathinfo, '/Parent/MyKidsNote') && preg_match('#^/Parent/MyKidsNote/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'FrontNote']), array (  '_controller' => 'ClasseBundle\\Controller\\AbsenceController::AfficheParnetNoteEnfantAction',));
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

        // fos_js_routing_js
        if (0 === strpos($pathinfo, '/js/routing') && preg_match('#^/js/routing(?:\\.(?P<_format>js|json))?$#sD', $pathinfo, $matches)) {
            $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'fos_js_routing_js']), array (  '_controller' => 'fos_js_routing.controller:indexAction',  '_format' => 'js',));
            if (!in_array($canonicalMethod, ['GET'])) {
                $allow = array_merge($allow, ['GET']);
                goto not_fos_js_routing_js;
            }

            return $ret;
        }
        not_fos_js_routing_js:

        // fullcalendar_load_events
        if ('/fc-load-events' === $pathinfo) {
            return array (  '_controller' => 'Toiba\\FullCalendarBundle\\Controller\\CalendarController::loadAction',  '_route' => 'fullcalendar_load_events',);
        }

        if ('/' === $pathinfo && !$allow) {
            throw new Symfony\Component\Routing\Exception\NoConfigurationException();
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
