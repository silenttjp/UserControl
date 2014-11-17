<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appDevUrlMatcher
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appDevUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    /**
     * Constructor.
     */
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($pathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($pathinfo);
        $context = $this->context;
        $request = $this->request;

        if (0 === strpos($pathinfo, '/assetic/bootstrap_')) {
            if (0 === strpos($pathinfo, '/assetic/bootstrap_js')) {
                // _assetic_bootstrap_js
                if ($pathinfo === '/assetic/bootstrap_js.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'bootstrap_js',  'pos' => NULL,  '_format' => 'js',  '_route' => '_assetic_bootstrap_js',);
                }

                // _assetic_bootstrap_js_0
                if ($pathinfo === '/assetic/bootstrap_js_bootstrap_1.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'bootstrap_js',  'pos' => 0,  '_format' => 'js',  '_route' => '_assetic_bootstrap_js_0',);
                }

            }

            if (0 === strpos($pathinfo, '/assetic/bootstrap_css')) {
                // _assetic_bootstrap_css
                if ($pathinfo === '/assetic/bootstrap_css.css') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'bootstrap_css',  'pos' => NULL,  '_format' => 'css',  '_route' => '_assetic_bootstrap_css',);
                }

                if (0 === strpos($pathinfo, '/assetic/bootstrap_css_bootstrap')) {
                    // _assetic_bootstrap_css_0
                    if ($pathinfo === '/assetic/bootstrap_css_bootstrap_1.css') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => 'bootstrap_css',  'pos' => 0,  '_format' => 'css',  '_route' => '_assetic_bootstrap_css_0',);
                    }

                    // _assetic_bootstrap_css_1
                    if ($pathinfo === '/assetic/bootstrap_css_bootstrap-theme_2.css') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => 'bootstrap_css',  'pos' => 1,  '_format' => 'css',  '_route' => '_assetic_bootstrap_css_1',);
                    }

                }

            }

        }

        if (0 === strpos($pathinfo, '/fonts/glyphicons-halflings-regular')) {
            // _assetic_bootstrap_glyphicons_ttf
            if ($pathinfo === '/fonts/glyphicons-halflings-regular.ttf') {
                return array (  '_controller' => 'assetic.controller:render',  'name' => 'bootstrap_glyphicons_ttf',  'pos' => NULL,  '_format' => 'ttf',  '_route' => '_assetic_bootstrap_glyphicons_ttf',);
            }

            // _assetic_bootstrap_glyphicons_ttf_0
            if ($pathinfo === '/fonts/glyphicons-halflings-regular_glyphicons-halflings-regular_1.ttf') {
                return array (  '_controller' => 'assetic.controller:render',  'name' => 'bootstrap_glyphicons_ttf',  'pos' => 0,  '_format' => 'ttf',  '_route' => '_assetic_bootstrap_glyphicons_ttf_0',);
            }

            // _assetic_bootstrap_glyphicons_eot
            if ($pathinfo === '/fonts/glyphicons-halflings-regular.eot') {
                return array (  '_controller' => 'assetic.controller:render',  'name' => 'bootstrap_glyphicons_eot',  'pos' => NULL,  '_format' => 'eot',  '_route' => '_assetic_bootstrap_glyphicons_eot',);
            }

            // _assetic_bootstrap_glyphicons_eot_0
            if ($pathinfo === '/fonts/glyphicons-halflings-regular_glyphicons-halflings-regular_1.eot') {
                return array (  '_controller' => 'assetic.controller:render',  'name' => 'bootstrap_glyphicons_eot',  'pos' => 0,  '_format' => 'eot',  '_route' => '_assetic_bootstrap_glyphicons_eot_0',);
            }

            // _assetic_bootstrap_glyphicons_svg
            if ($pathinfo === '/fonts/glyphicons-halflings-regular.svg') {
                return array (  '_controller' => 'assetic.controller:render',  'name' => 'bootstrap_glyphicons_svg',  'pos' => NULL,  '_format' => 'svg',  '_route' => '_assetic_bootstrap_glyphicons_svg',);
            }

            // _assetic_bootstrap_glyphicons_svg_0
            if ($pathinfo === '/fonts/glyphicons-halflings-regular_glyphicons-halflings-regular_1.svg') {
                return array (  '_controller' => 'assetic.controller:render',  'name' => 'bootstrap_glyphicons_svg',  'pos' => 0,  '_format' => 'svg',  '_route' => '_assetic_bootstrap_glyphicons_svg_0',);
            }

            // _assetic_bootstrap_glyphicons_woff
            if ($pathinfo === '/fonts/glyphicons-halflings-regular.woff') {
                return array (  '_controller' => 'assetic.controller:render',  'name' => 'bootstrap_glyphicons_woff',  'pos' => NULL,  '_format' => 'woff',  '_route' => '_assetic_bootstrap_glyphicons_woff',);
            }

            // _assetic_bootstrap_glyphicons_woff_0
            if ($pathinfo === '/fonts/glyphicons-halflings-regular_glyphicons-halflings-regular_1.woff') {
                return array (  '_controller' => 'assetic.controller:render',  'name' => 'bootstrap_glyphicons_woff',  'pos' => 0,  '_format' => 'woff',  '_route' => '_assetic_bootstrap_glyphicons_woff_0',);
            }

        }

        if (0 === strpos($pathinfo, '/assetic')) {
            if (0 === strpos($pathinfo, '/assetic/jquery')) {
                // _assetic_jquery
                if ($pathinfo === '/assetic/jquery.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'jquery',  'pos' => NULL,  '_format' => 'js',  '_route' => '_assetic_jquery',);
                }

                // _assetic_jquery_0
                if ($pathinfo === '/assetic/jquery_jquery_1.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'jquery',  'pos' => 0,  '_format' => 'js',  '_route' => '_assetic_jquery_0',);
                }

            }

            if (0 === strpos($pathinfo, '/assetic/base')) {
                // _assetic_base
                if ($pathinfo === '/assetic/base.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'base',  'pos' => NULL,  '_format' => 'js',  '_route' => '_assetic_base',);
                }

                // _assetic_base_0
                if ($pathinfo === '/assetic/base_base_1.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'base',  'pos' => 0,  '_format' => 'js',  '_route' => '_assetic_base_0',);
                }

            }

        }

        if (0 === strpos($pathinfo, '/css/fddb9b6')) {
            // _assetic_fddb9b6
            if ($pathinfo === '/css/fddb9b6.css') {
                return array (  '_controller' => 'assetic.controller:render',  'name' => 'fddb9b6',  'pos' => NULL,  '_format' => 'css',  '_route' => '_assetic_fddb9b6',);
            }

            // _assetic_fddb9b6_0
            if ($pathinfo === '/css/fddb9b6_part_1.css') {
                return array (  '_controller' => 'assetic.controller:render',  'name' => 'fddb9b6',  'pos' => 0,  '_format' => 'css',  '_route' => '_assetic_fddb9b6_0',);
            }

        }

        if (0 === strpos($pathinfo, '/js/0b7d4ae')) {
            // _assetic_0b7d4ae
            if ($pathinfo === '/js/0b7d4ae.js') {
                return array (  '_controller' => 'assetic.controller:render',  'name' => '0b7d4ae',  'pos' => NULL,  '_format' => 'js',  '_route' => '_assetic_0b7d4ae',);
            }

            if (0 === strpos($pathinfo, '/js/0b7d4ae_part_')) {
                // _assetic_0b7d4ae_0
                if ($pathinfo === '/js/0b7d4ae_part_1.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '0b7d4ae',  'pos' => 0,  '_format' => 'js',  '_route' => '_assetic_0b7d4ae_0',);
                }

                // _assetic_0b7d4ae_1
                if ($pathinfo === '/js/0b7d4ae_part_2.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '0b7d4ae',  'pos' => 1,  '_format' => 'js',  '_route' => '_assetic_0b7d4ae_1',);
                }

                // _assetic_0b7d4ae_2
                if ($pathinfo === '/js/0b7d4ae_part_3.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '0b7d4ae',  'pos' => 2,  '_format' => 'js',  '_route' => '_assetic_0b7d4ae_2',);
                }

            }

        }

        if (0 === strpos($pathinfo, '/_')) {
            // _wdt
            if (0 === strpos($pathinfo, '/_wdt') && preg_match('#^/_wdt/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_wdt')), array (  '_controller' => 'web_profiler.controller.profiler:toolbarAction',));
            }

            if (0 === strpos($pathinfo, '/_profiler')) {
                // _profiler_home
                if (rtrim($pathinfo, '/') === '/_profiler') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', '_profiler_home');
                    }

                    return array (  '_controller' => 'web_profiler.controller.profiler:homeAction',  '_route' => '_profiler_home',);
                }

                if (0 === strpos($pathinfo, '/_profiler/search')) {
                    // _profiler_search
                    if ($pathinfo === '/_profiler/search') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchAction',  '_route' => '_profiler_search',);
                    }

                    // _profiler_search_bar
                    if ($pathinfo === '/_profiler/search_bar') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchBarAction',  '_route' => '_profiler_search_bar',);
                    }

                }

                // _profiler_purge
                if ($pathinfo === '/_profiler/purge') {
                    return array (  '_controller' => 'web_profiler.controller.profiler:purgeAction',  '_route' => '_profiler_purge',);
                }

                // _profiler_info
                if (0 === strpos($pathinfo, '/_profiler/info') && preg_match('#^/_profiler/info/(?P<about>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_info')), array (  '_controller' => 'web_profiler.controller.profiler:infoAction',));
                }

                // _profiler_phpinfo
                if ($pathinfo === '/_profiler/phpinfo') {
                    return array (  '_controller' => 'web_profiler.controller.profiler:phpinfoAction',  '_route' => '_profiler_phpinfo',);
                }

                // _profiler_search_results
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/search/results$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_search_results')), array (  '_controller' => 'web_profiler.controller.profiler:searchResultsAction',));
                }

                // _profiler
                if (preg_match('#^/_profiler/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler')), array (  '_controller' => 'web_profiler.controller.profiler:panelAction',));
                }

                // _profiler_router
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/router$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_router')), array (  '_controller' => 'web_profiler.controller.router:panelAction',));
                }

                // _profiler_exception
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception')), array (  '_controller' => 'web_profiler.controller.exception:showAction',));
                }

                // _profiler_exception_css
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception\\.css$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception_css')), array (  '_controller' => 'web_profiler.controller.exception:cssAction',));
                }

            }

            if (0 === strpos($pathinfo, '/_configurator')) {
                // _configurator_home
                if (rtrim($pathinfo, '/') === '/_configurator') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', '_configurator_home');
                    }

                    return array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::checkAction',  '_route' => '_configurator_home',);
                }

                // _configurator_step
                if (0 === strpos($pathinfo, '/_configurator/step') && preg_match('#^/_configurator/step/(?P<index>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_configurator_step')), array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::stepAction',));
                }

                // _configurator_final
                if ($pathinfo === '/_configurator/final') {
                    return array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::finalAction',  '_route' => '_configurator_final',);
                }

            }

        }

        // fos_js_routing_js
        if (0 === strpos($pathinfo, '/js/routing') && preg_match('#^/js/routing(?:\\.(?P<_format>js|json))?$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_js_routing_js')), array (  '_controller' => 'fos_js_routing.controller:indexAction',  '_format' => 'js',));
        }

        // idg_user_control_homepage
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'idg_user_control_homepage');
            }

            return array (  '_controller' => 'IDG\\UserControlBundle\\Controller\\DefaultController::indexAction',  '_route' => 'idg_user_control_homepage',);
        }

        if (0 === strpos($pathinfo, '/user')) {
            // user_bundle_routing
            if ($pathinfo === '/user/ajax/getUsers') {
                return array (  '_controller' => 'IDG\\UserControlBundle\\Controller\\DefaultController::getUsersAction',  '_route' => 'user_bundle_routing',);
            }

            // new_user_routing
            if (rtrim($pathinfo, '/') === '/user/new') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'new_user_routing');
                }

                return array (  '_controller' => 'IDG\\UserControlBundle\\Controller\\DefaultController::newUserFormAction',  '_route' => 'new_user_routing',);
            }

            // new_user_save_routing
            if (rtrim($pathinfo, '/') === '/user/saveNew') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'new_user_save_routing');
                }

                return array (  '_controller' => 'IDG\\UserControlBundle\\Controller\\DefaultController::saveNewUserAction',  '_route' => 'new_user_save_routing',);
            }

            // get_user_count_routing
            if (rtrim($pathinfo, '/') === '/user/count') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'get_user_count_routing');
                }

                return array (  '_controller' => 'IDG\\UserControlBundle\\Controller\\DefaultController::getUserCountAction',  '_route' => 'get_user_count_routing',);
            }

            // delete_user_routing
            if (rtrim($pathinfo, '/') === '/user/delete') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'delete_user_routing');
                }

                return array (  '_controller' => 'IDG\\UserControlBundle\\Controller\\DefaultController::deleteUserAction',  '_route' => 'delete_user_routing',);
            }

            // edit_user_routing
            if (rtrim($pathinfo, '/') === '/user/edit') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'edit_user_routing');
                }

                return array (  '_controller' => 'IDG\\UserControlBundle\\Controller\\DefaultController::editUserAction',  '_route' => 'edit_user_routing',);
            }

        }

        if (0 === strpos($pathinfo, '/list')) {
            if (0 === strpos($pathinfo, '/lists')) {
                // get_lists_routing
                if (rtrim($pathinfo, '/') === '/lists') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'get_lists_routing');
                    }

                    return array (  '_controller' => 'IDG\\UserControlBundle\\Controller\\DefaultController::getListsAction',  '_route' => 'get_lists_routing',);
                }

                // new_lists_routing
                if (rtrim($pathinfo, '/') === '/lists/new') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'new_lists_routing');
                    }

                    return array (  '_controller' => 'IDG\\UserControlBundle\\Controller\\DefaultController::newListsFormAction',  '_route' => 'new_lists_routing',);
                }

                // new_list_save_routing
                if (rtrim($pathinfo, '/') === '/lists/saveNew') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'new_list_save_routing');
                    }

                    return array (  '_controller' => 'IDG\\UserControlBundle\\Controller\\DefaultController::saveNewListAction',  '_route' => 'new_list_save_routing',);
                }

                // get_lists_count_routing
                if (rtrim($pathinfo, '/') === '/lists/count') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'get_lists_count_routing');
                    }

                    return array (  '_controller' => 'IDG\\UserControlBundle\\Controller\\DefaultController::getListsCountAction',  '_route' => 'get_lists_count_routing',);
                }

            }

            // delete_list_routing
            if (rtrim($pathinfo, '/') === '/list/delete') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'delete_list_routing');
                }

                return array (  '_controller' => 'IDG\\UserControlBundle\\Controller\\DefaultController::deleteListAction',  '_route' => 'delete_list_routing',);
            }

        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
