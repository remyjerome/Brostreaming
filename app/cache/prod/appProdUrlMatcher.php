<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appProdUrlMatcher.
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
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

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
