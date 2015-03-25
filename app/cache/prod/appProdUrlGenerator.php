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
        'personal_page_proyectos_homepage' => array (  0 =>   array (    0 => '_locale',    1 => 'name',  ),  1 =>   array (    '_controller' => 'PersonalPage\\ProyectosBundle\\Controller\\DefaultController::indexAction',  ),  2 =>   array (    '_locale' => 'en|es',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'name',    ),    1 =>     array (      0 => 'text',      1 => '/hello',    ),    2 =>     array (      0 => 'variable',      1 => '/',      2 => 'en|es',      3 => '_locale',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'personal_page_areas_homepage' => array (  0 =>   array (    0 => '_locale',    1 => 'name',  ),  1 =>   array (    '_controller' => 'PersonalPage\\AreasBundle\\Controller\\DefaultController::indexAction',  ),  2 =>   array (    '_locale' => 'en|es',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'name',    ),    1 =>     array (      0 => 'text',      1 => '/hello',    ),    2 =>     array (      0 => 'variable',      1 => '/',      2 => 'en|es',      3 => '_locale',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'personal_page_publicaciones_homepage' => array (  0 =>   array (    0 => '_locale',    1 => 'name',  ),  1 =>   array (    '_controller' => 'PersonalPage\\PublicacionesBundle\\Controller\\DefaultController::indexAction',  ),  2 =>   array (    '_locale' => 'en|es',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'name',    ),    1 =>     array (      0 => 'text',      1 => '/hello',    ),    2 =>     array (      0 => 'variable',      1 => '/',      2 => 'en|es',      3 => '_locale',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'catalogo' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Symfony\\Bundle\\FrameworkBundle\\Controller\\RedirectController::redirectAction',    'route' => 'inicio',    'id' => 1,    'permanent' => true,  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'inicio' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Symfony\\Bundle\\FrameworkBundle\\Controller\\RedirectController::redirectAction',    'route' => 'areas',    'permanent' => true,  ),  2 =>   array (    '_locale' => 'en|es',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'areas' => array (  0 =>   array (    0 => '_locale',    1 => 'id',  ),  1 =>   array (    '_controller' => 'PersonalPage\\ProyectosBundle\\Controller\\MiembrosController::AreasAction',  ),  2 =>   array (    '_locale' => 'en|es',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/principal/',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'variable',      1 => '/',      2 => 'en|es',      3 => '_locale',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'proyectos' => array (  0 =>   array (    0 => '_locale',    1 => 'id',  ),  1 =>   array (    '_controller' => 'PersonalPage\\ProyectosBundle\\Controller\\MiembrosController::ProyectosAction',  ),  2 =>   array (    '_locale' => 'en|es',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/proyectos/',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'variable',      1 => '/',      2 => 'en|es',      3 => '_locale',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'publicaciones' => array (  0 =>   array (    0 => '_locale',    1 => 'id',  ),  1 =>   array (    '_controller' => 'PersonalPage\\ProyectosBundle\\Controller\\MiembrosController::PublicacionesAction',  ),  2 =>   array (    '_locale' => 'en|es',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/publicaciones/',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'variable',      1 => '/',      2 => 'en|es',      3 => '_locale',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_servicioAreas' => array (  0 =>   array (    0 => '_locale',    1 => 'id',  ),  1 =>   array (    '_controller' => 'PersonalPage\\ProyectosBundle\\Controller\\ServiciosController::AreasAction',  ),  2 =>   array (    '_method' => 'GET',    '_locale' => 'en|es',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/info/json/',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'variable',      1 => '/',      2 => 'en|es',      3 => '_locale',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_servicioProyectos' => array (  0 =>   array (    0 => '_locale',    1 => 'id',  ),  1 =>   array (    '_controller' => 'PersonalPage\\ProyectosBundle\\Controller\\ServiciosController::ProyectosAction',  ),  2 =>   array (    '_method' => 'GET',    '_locale' => 'en|es',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/proyectos/json/',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'variable',      1 => '/',      2 => 'en|es',      3 => '_locale',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_servicioPublicaciones' => array (  0 =>   array (    0 => '_locale',    1 => 'id',  ),  1 =>   array (    '_controller' => 'PersonalPage\\ProyectosBundle\\Controller\\ServiciosController::PublicacionesAction',  ),  2 =>   array (    '_method' => 'GET',    '_locale' => 'en|es',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/publicaciones/json/',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'variable',      1 => '/',      2 => 'en|es',      3 => '_locale',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_infoCaii' => array (  0 =>   array (    0 => '_locale',  ),  1 =>   array (    '_controller' => 'PersonalPage\\ProyectosBundle\\Controller\\ServiciosController::PublicacionesCaiiAction',  ),  2 =>   array (    '_method' => 'GET',    '_locale' => 'en|es',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/caii/json/',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => 'en|es',      3 => '_locale',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_infoMiembro' => array (  0 =>   array (    0 => '_locale',    1 => 'id',  ),  1 =>   array (    '_controller' => 'PersonalPage\\ProyectosBundle\\Controller\\ServiciosController::InfoAction',  ),  2 =>   array (    '_method' => 'GET',    '_locale' => 'en|es',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/json/',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'variable',      1 => '/',      2 => 'en|es',      3 => '_locale',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
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
