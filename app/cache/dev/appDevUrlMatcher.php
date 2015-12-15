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

            // _twig_error_test
            if (0 === strpos($pathinfo, '/_error') && preg_match('#^/_error/(?P<code>\\d+)(?:\\.(?P<_format>[^/]++))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_twig_error_test')), array (  '_controller' => 'twig.controller.preview_error:previewErrorPageAction',  '_format' => 'html',));
            }

        }

        // rj_stream_homepage
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'rj_stream_homepage');
            }

            return array (  '_controller' => 'rj\\StreamBundle\\Controller\\StreamController::indexAction',  '_route' => 'rj_stream_homepage',);
        }

        if (0 === strpos($pathinfo, '/saison')) {
            // rj_stream_saison
            if (preg_match('#^/saison/(?P<s>\\d+)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'rj_stream_saison')), array (  '_controller' => 'rj\\StreamBundle\\Controller\\StreamController::saisonAction',));
            }

            // rj_stream_episode
            if (preg_match('#^/saison/(?P<s>\\d+)/episode/(?P<e>\\d+)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'rj_stream_episode')), array (  '_controller' => 'rj\\StreamBundle\\Controller\\StreamController::episodeAction',));
            }

        }

        // rj_stream_news
        if ($pathinfo === '/news') {
            return array (  '_controller' => 'rj\\StreamBundle\\Controller\\StreamController::newsAction',  '_route' => 'rj_stream_news',);
        }

        if (0 === strpos($pathinfo, '/episode')) {
            if (0 === strpos($pathinfo, '/episode/a')) {
                // rj_stream_add
                if ($pathinfo === '/episode/add') {
                    return array (  '_controller' => 'rj\\StreamBundle\\Controller\\StreamController::createAction',  '_route' => 'rj_stream_add',);
                }

                // rj_stream_episode_all
                if ($pathinfo === '/episode/all') {
                    return array (  '_controller' => 'rj\\StreamBundle\\Controller\\StreamController::episodeallAction',  '_route' => 'rj_stream_episode_all',);
                }

            }

            // rj_stream_episode_vue
            if ($pathinfo === '/episode/vue') {
                return array (  '_controller' => 'rj\\StreamBundle\\Controller\\StreamController::episodevueAction',  '_route' => 'rj_stream_episode_vue',);
            }

            // rj_stream_episode_note
            if ($pathinfo === '/episode/note') {
                return array (  '_controller' => 'rj\\StreamBundle\\Controller\\StreamController::episodenoteAction',  '_route' => 'rj_stream_episode_note',);
            }

            // rj_stream_episode_last
            if ($pathinfo === '/episode/last') {
                return array (  '_controller' => 'rj\\StreamBundle\\Controller\\StreamController::episodelastAction',  '_route' => 'rj_stream_episode_last',);
            }

        }

        // rj_stream_episode_notation
        if (0 === strpos($pathinfo, '/notation') && preg_match('#^/notation/(?P<saison>\\d+)/(?P<episode>\\d+)/(?P<note>\\d+)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'rj_stream_episode_notation')), array (  '_controller' => 'rj\\StreamBundle\\Controller\\StreamController::notationAction',));
        }

        // rj_stream_news_voirplus
        if (0 === strpos($pathinfo, '/voirplus') && preg_match('#^/voirplus/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'rj_stream_news_voirplus')), array (  '_controller' => 'rj\\StreamBundle\\Controller\\StreamController::voirplusAction',));
        }

        // rj_stream_nbepisode
        if ($pathinfo === '/nbepisode') {
            return array (  '_controller' => 'rj\\StreamBundle\\Controller\\StreamController::nbepisodeAction',  '_route' => 'rj_stream_nbepisode',);
        }

        // fos_js_routing_js
        if (0 === strpos($pathinfo, '/js/routing') && preg_match('#^/js/routing(?:\\.(?P<_format>js|json))?$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_js_routing_js')), array (  '_controller' => 'fos_js_routing.controller:indexAction',  '_format' => 'js',));
        }

        if (0 === strpos($pathinfo, '/admin')) {
            // sonata_admin_redirect
            if (rtrim($pathinfo, '/') === '/admin') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'sonata_admin_redirect');
                }

                return array (  '_controller' => 'Symfony\\Bundle\\FrameworkBundle\\Controller\\RedirectController::redirectAction',  'route' => 'sonata_admin_dashboard',  'permanent' => 'true',  '_route' => 'sonata_admin_redirect',);
            }

            // sonata_admin_dashboard
            if ($pathinfo === '/admin/dashboard') {
                return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CoreController::dashboardAction',  '_route' => 'sonata_admin_dashboard',);
            }

            if (0 === strpos($pathinfo, '/admin/core')) {
                // sonata_admin_retrieve_form_element
                if ($pathinfo === '/admin/core/get-form-field-element') {
                    return array (  '_controller' => 'sonata.admin.controller.admin:retrieveFormFieldElementAction',  '_route' => 'sonata_admin_retrieve_form_element',);
                }

                // sonata_admin_append_form_element
                if ($pathinfo === '/admin/core/append-form-field-element') {
                    return array (  '_controller' => 'sonata.admin.controller.admin:appendFormFieldElementAction',  '_route' => 'sonata_admin_append_form_element',);
                }

                // sonata_admin_short_object_information
                if (0 === strpos($pathinfo, '/admin/core/get-short-object-description') && preg_match('#^/admin/core/get\\-short\\-object\\-description(?:\\.(?P<_format>html|json))?$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'sonata_admin_short_object_information')), array (  '_controller' => 'sonata.admin.controller.admin:getShortObjectDescriptionAction',  '_format' => 'html',));
                }

                // sonata_admin_set_object_field_value
                if ($pathinfo === '/admin/core/set-object-field-value') {
                    return array (  '_controller' => 'sonata.admin.controller.admin:setObjectFieldValueAction',  '_route' => 'sonata_admin_set_object_field_value',);
                }

            }

            // sonata_admin_search
            if ($pathinfo === '/admin/search') {
                return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CoreController::searchAction',  '_route' => 'sonata_admin_search',);
            }

            // sonata_admin_retrieve_autocomplete_items
            if ($pathinfo === '/admin/core/get-autocomplete-items') {
                return array (  '_controller' => 'sonata.admin.controller.admin:retrieveAutocompleteItemsAction',  '_route' => 'sonata_admin_retrieve_autocomplete_items',);
            }

            if (0 === strpos($pathinfo, '/admin/rj/stream')) {
                if (0 === strpos($pathinfo, '/admin/rj/stream/episode')) {
                    // admin_rj_stream_episode_list
                    if ($pathinfo === '/admin/rj/stream/episode/list') {
                        return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::listAction',  '_sonata_admin' => 'admin.episode',  '_sonata_name' => 'admin_rj_stream_episode_list',  '_route' => 'admin_rj_stream_episode_list',);
                    }

                    // admin_rj_stream_episode_create
                    if ($pathinfo === '/admin/rj/stream/episode/create') {
                        return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::createAction',  '_sonata_admin' => 'admin.episode',  '_sonata_name' => 'admin_rj_stream_episode_create',  '_route' => 'admin_rj_stream_episode_create',);
                    }

                    // admin_rj_stream_episode_batch
                    if ($pathinfo === '/admin/rj/stream/episode/batch') {
                        return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::batchAction',  '_sonata_admin' => 'admin.episode',  '_sonata_name' => 'admin_rj_stream_episode_batch',  '_route' => 'admin_rj_stream_episode_batch',);
                    }

                    // admin_rj_stream_episode_edit
                    if (preg_match('#^/admin/rj/stream/episode/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_rj_stream_episode_edit')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::editAction',  '_sonata_admin' => 'admin.episode',  '_sonata_name' => 'admin_rj_stream_episode_edit',));
                    }

                    // admin_rj_stream_episode_delete
                    if (preg_match('#^/admin/rj/stream/episode/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_rj_stream_episode_delete')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::deleteAction',  '_sonata_admin' => 'admin.episode',  '_sonata_name' => 'admin_rj_stream_episode_delete',));
                    }

                    // admin_rj_stream_episode_show
                    if (preg_match('#^/admin/rj/stream/episode/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_rj_stream_episode_show')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::showAction',  '_sonata_admin' => 'admin.episode',  '_sonata_name' => 'admin_rj_stream_episode_show',));
                    }

                    // admin_rj_stream_episode_export
                    if ($pathinfo === '/admin/rj/stream/episode/export') {
                        return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::exportAction',  '_sonata_admin' => 'admin.episode',  '_sonata_name' => 'admin_rj_stream_episode_export',  '_route' => 'admin_rj_stream_episode_export',);
                    }

                }

                if (0 === strpos($pathinfo, '/admin/rj/stream/news')) {
                    // admin_rj_stream_news_list
                    if ($pathinfo === '/admin/rj/stream/news/list') {
                        return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::listAction',  '_sonata_admin' => 'admin.news',  '_sonata_name' => 'admin_rj_stream_news_list',  '_route' => 'admin_rj_stream_news_list',);
                    }

                    // admin_rj_stream_news_create
                    if ($pathinfo === '/admin/rj/stream/news/create') {
                        return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::createAction',  '_sonata_admin' => 'admin.news',  '_sonata_name' => 'admin_rj_stream_news_create',  '_route' => 'admin_rj_stream_news_create',);
                    }

                    // admin_rj_stream_news_batch
                    if ($pathinfo === '/admin/rj/stream/news/batch') {
                        return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::batchAction',  '_sonata_admin' => 'admin.news',  '_sonata_name' => 'admin_rj_stream_news_batch',  '_route' => 'admin_rj_stream_news_batch',);
                    }

                    // admin_rj_stream_news_edit
                    if (preg_match('#^/admin/rj/stream/news/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_rj_stream_news_edit')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::editAction',  '_sonata_admin' => 'admin.news',  '_sonata_name' => 'admin_rj_stream_news_edit',));
                    }

                    // admin_rj_stream_news_delete
                    if (preg_match('#^/admin/rj/stream/news/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_rj_stream_news_delete')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::deleteAction',  '_sonata_admin' => 'admin.news',  '_sonata_name' => 'admin_rj_stream_news_delete',));
                    }

                    // admin_rj_stream_news_show
                    if (preg_match('#^/admin/rj/stream/news/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_rj_stream_news_show')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::showAction',  '_sonata_admin' => 'admin.news',  '_sonata_name' => 'admin_rj_stream_news_show',));
                    }

                    // admin_rj_stream_news_export
                    if ($pathinfo === '/admin/rj/stream/news/export') {
                        return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::exportAction',  '_sonata_admin' => 'admin.news',  '_sonata_name' => 'admin_rj_stream_news_export',  '_route' => 'admin_rj_stream_news_export',);
                    }

                }

            }

        }

        if (0 === strpos($pathinfo, '/_console')) {
            // console
            if ($pathinfo === '/_console') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_console;
                }

                return array (  '_controller' => 'coresphere_console.controller:consoleAction',  '_route' => 'console',);
            }
            not_console:

            // console_exec
            if (0 === strpos($pathinfo, '/_console/commands') && preg_match('#^/_console/commands(?:\\.(?P<_format>json))?$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_console_exec;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'console_exec')), array (  '_controller' => 'coresphere_console.controller:execAction',  '_format' => 'json',));
            }
            not_console_exec:

        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
