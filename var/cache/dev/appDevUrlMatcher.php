<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appDevUrlMatcher.
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

        if (0 === strpos($pathinfo, '/css/9b7ca13')) {
            // _assetic_9b7ca13
            if ($pathinfo === '/css/9b7ca13.css') {
                return array (  '_controller' => 'assetic.controller:render',  'name' => '9b7ca13',  'pos' => NULL,  '_format' => 'css',  '_route' => '_assetic_9b7ca13',);
            }

            if (0 === strpos($pathinfo, '/css/9b7ca13_part_1_')) {
                // _assetic_9b7ca13_0
                if ($pathinfo === '/css/9b7ca13_part_1_dragula_1.css') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '9b7ca13',  'pos' => 0,  '_format' => 'css',  '_route' => '_assetic_9b7ca13_0',);
                }

                // _assetic_9b7ca13_1
                if ($pathinfo === '/css/9b7ca13_part_1_test_2.css') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '9b7ca13',  'pos' => 1,  '_format' => 'css',  '_route' => '_assetic_9b7ca13_1',);
                }

            }

        }

        if (0 === strpos($pathinfo, '/js')) {
            if (0 === strpos($pathinfo, '/js/56f82b2')) {
                // _assetic_56f82b2
                if ($pathinfo === '/js/56f82b2.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '56f82b2',  'pos' => NULL,  '_format' => 'js',  '_route' => '_assetic_56f82b2',);
                }

                if (0 === strpos($pathinfo, '/js/56f82b2_part_1_')) {
                    // _assetic_56f82b2_0
                    if ($pathinfo === '/js/56f82b2_part_1_dragula_1.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => '56f82b2',  'pos' => 0,  '_format' => 'js',  '_route' => '_assetic_56f82b2_0',);
                    }

                    // _assetic_56f82b2_1
                    if ($pathinfo === '/js/56f82b2_part_1_test_2.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => '56f82b2',  'pos' => 1,  '_format' => 'js',  '_route' => '_assetic_56f82b2_1',);
                    }

                }

            }

            // _assetic_1b37284
            if ($pathinfo === '/js/1b37284.js') {
                return array (  '_controller' => 'assetic.controller:render',  'name' => '1b37284',  'pos' => NULL,  '_format' => 'js',  '_route' => '_assetic_1b37284',);
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

            // _twig_error_test
            if (0 === strpos($pathinfo, '/_error') && preg_match('#^/_error/(?P<code>\\d+)(?:\\.(?P<_format>[^/]++))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_twig_error_test')), array (  '_controller' => 'twig.controller.preview_error:previewErrorPageAction',  '_format' => 'html',));
            }

        }

        // kanban_homepage
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'kanban_homepage');
            }

            return array (  '_controller' => 'KanbanBundle\\Controller\\DefaultController::indexAction',  '_route' => 'kanban_homepage',);
        }

        // homepage
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'homepage');
            }

            return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::indexAction',  '_route' => 'homepage',);
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
