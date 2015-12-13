<?php

use Symfony\Component\Routing\RequestContext;
use Symfony\Component\Routing\Exception\RouteNotFoundException;
use Psr\Log\LoggerInterface;

/**
 * appProdUrlGenerator
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdUrlGenerator extends Symfony\Component\Routing\Generator\UrlGenerator
{
    private static $declaredRoutes = array(
        'rj_stream_homepage' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'rj\\StreamBundle\\Controller\\StreamController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'rj_stream_saison' => array (  0 =>   array (    0 => 's',  ),  1 =>   array (    '_controller' => 'rj\\StreamBundle\\Controller\\StreamController::saisonAction',  ),  2 =>   array (    's' => '\\d+',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '\\d+',      3 => 's',    ),    1 =>     array (      0 => 'text',      1 => '/saison',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'rj_stream_episode' => array (  0 =>   array (    0 => 's',    1 => 'e',  ),  1 =>   array (    '_controller' => 'rj\\StreamBundle\\Controller\\StreamController::episodeAction',  ),  2 =>   array (    's' => '\\d+',    'e' => '\\d+',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '\\d+',      3 => 'e',    ),    1 =>     array (      0 => 'text',      1 => '/episode',    ),    2 =>     array (      0 => 'variable',      1 => '/',      2 => '\\d+',      3 => 's',    ),    3 =>     array (      0 => 'text',      1 => '/saison',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'rj_stream_news' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'rj\\StreamBundle\\Controller\\StreamController::newsAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/news',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'rj_stream_add' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'rj\\StreamBundle\\Controller\\StreamController::createAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/episode/add',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'rj_stream_episode_all' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'rj\\StreamBundle\\Controller\\StreamController::episodeallAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/episode/all',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'rj_stream_episode_vue' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'rj\\StreamBundle\\Controller\\StreamController::episodevueAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/episode/vue',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'rj_stream_episode_note' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'rj\\StreamBundle\\Controller\\StreamController::episodenoteAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/episode/note',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'rj_stream_episode_last' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'rj\\StreamBundle\\Controller\\StreamController::episodelastAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/episode/last',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'rj_stream_episode_notation' => array (  0 =>   array (    0 => 'saison',    1 => 'episode',    2 => 'note',  ),  1 =>   array (    '_controller' => 'rj\\StreamBundle\\Controller\\StreamController::notationAction',  ),  2 =>   array (    'note' => '\\d+',    'episode' => '\\d+',    'saison' => '\\d+',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '\\d+',      3 => 'note',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '\\d+',      3 => 'episode',    ),    2 =>     array (      0 => 'variable',      1 => '/',      2 => '\\d+',      3 => 'saison',    ),    3 =>     array (      0 => 'text',      1 => '/notation',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'rj_stream_news_voirplus' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'rj\\StreamBundle\\Controller\\StreamController::voirplusAction',  ),  2 =>   array (    'id' => '\\d+',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '\\d+',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/voirplus',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'rj_stream_nbepisode' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'rj\\StreamBundle\\Controller\\StreamController::nbepisodeAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/nbepisode',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fos_js_routing_js' => array (  0 =>   array (    0 => '_format',  ),  1 =>   array (    '_controller' => 'fos_js_routing.controller:indexAction',    '_format' => 'js',  ),  2 =>   array (    '_format' => 'js|json',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '.',      2 => 'js|json',      3 => '_format',    ),    1 =>     array (      0 => 'text',      1 => '/js/routing',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
    );

    /**
     * Constructor.
     */
    public function __construct(RequestContext $context, LoggerInterface $logger = null)
    {
        $this->context = $context;
        $this->logger = $logger;
    }

    public function generate($name, $parameters = array(), $referenceType = self::ABSOLUTE_PATH)
    {
        if (!isset(self::$declaredRoutes[$name])) {
            throw new RouteNotFoundException(sprintf('Unable to generate a URL for the named route "%s" as such route does not exist.', $name));
        }

        list($variables, $defaults, $requirements, $tokens, $hostTokens, $requiredSchemes) = self::$declaredRoutes[$name];

        return $this->doGenerate($variables, $defaults, $requirements, $tokens, $parameters, $name, $referenceType, $hostTokens, $requiredSchemes);
    }
}
