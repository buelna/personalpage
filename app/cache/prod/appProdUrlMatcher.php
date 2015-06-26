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

        // personal_page_proyectos_homepage
        if (preg_match('#^/(?P<_locale>en|es)/hello/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'personal_page_proyectos_homepage')), array (  '_controller' => 'PersonalPage\\ProyectosBundle\\Controller\\DefaultController::indexAction',));
        }

        // personal_page_areas_homepage
        if (preg_match('#^/(?P<_locale>en|es)/hello/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'personal_page_areas_homepage')), array (  '_controller' => 'PersonalPage\\AreasBundle\\Controller\\DefaultController::indexAction',));
        }

        // personal_page_publicaciones_homepage
        if (preg_match('#^/(?P<_locale>en|es)/hello/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'personal_page_publicaciones_homepage')), array (  '_controller' => 'PersonalPage\\PublicacionesBundle\\Controller\\DefaultController::indexAction',));
        }

        // catalogo
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'catalogo');
            }

            return array (  '_controller' => 'Symfony\\Bundle\\FrameworkBundle\\Controller\\RedirectController::redirectAction',  'route' => 'inicio',  'id' => 'adiaz',  'permanent' => true,  '_route' => 'catalogo',);
        }

        // inicio
        if (preg_match('#^/(?P<id>[^/]++)/?$#s', $pathinfo, $matches)) {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'inicio');
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'inicio')), array (  '_controller' => 'Symfony\\Bundle\\FrameworkBundle\\Controller\\RedirectController::redirectAction',  'route' => 'areas',  'permanent' => true,));
        }

        // areas
        if (preg_match('#^/(?P<_locale>en|es)/(?P<id>[^/]++)/principal/?$#s', $pathinfo, $matches)) {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'areas');
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'areas')), array (  '_controller' => 'PersonalPage\\ProyectosBundle\\Controller\\MiembrosController::AreasAction',));
        }

        // proyectos
        if (preg_match('#^/(?P<_locale>en|es)/(?P<id>[^/]++)/proyectos/?$#s', $pathinfo, $matches)) {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'proyectos');
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'proyectos')), array (  '_controller' => 'PersonalPage\\ProyectosBundle\\Controller\\MiembrosController::ProyectosAction',));
        }

        // publicaciones
        if (preg_match('#^/(?P<_locale>en|es)/(?P<id>[^/]++)/publicaciones/?$#s', $pathinfo, $matches)) {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'publicaciones');
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'publicaciones')), array (  '_controller' => 'PersonalPage\\ProyectosBundle\\Controller\\MiembrosController::PublicacionesAction',));
        }

        // _servicioAreas
        if (preg_match('#^/(?P<_locale>en|es)/(?P<id>[^/]++)/info/json/?$#s', $pathinfo, $matches)) {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not__servicioAreas;
            }

            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', '_servicioAreas');
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => '_servicioAreas')), array (  '_controller' => 'PersonalPageProyectosBundle:Servicios:Areas',));
        }
        not__servicioAreas:

        // _servicioProyectos
        if (preg_match('#^/(?P<_locale>en|es)/(?P<id>[^/]++)/proyectos/json/?$#s', $pathinfo, $matches)) {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not__servicioProyectos;
            }

            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', '_servicioProyectos');
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => '_servicioProyectos')), array (  '_controller' => 'PersonalPageProyectosBundle:Servicios:Proyectos',));
        }
        not__servicioProyectos:

        // _servicioPublicaciones
        if (preg_match('#^/(?P<_locale>en|es)/(?P<id>[^/]++)/publicaciones/json/?$#s', $pathinfo, $matches)) {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not__servicioPublicaciones;
            }

            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', '_servicioPublicaciones');
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => '_servicioPublicaciones')), array (  '_controller' => 'PersonalPageProyectosBundle:Servicios:Publicaciones',));
        }
        not__servicioPublicaciones:

        // _infoCaii
        if (preg_match('#^/(?P<_locale>en|es)/caii/json/?$#s', $pathinfo, $matches)) {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not__infoCaii;
            }

            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', '_infoCaii');
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => '_infoCaii')), array (  '_controller' => 'PersonalPageProyectosBundle:Servicios:PublicacionesCaii',));
        }
        not__infoCaii:

        // _infoMiembro
        if (preg_match('#^/(?P<_locale>en|es)/(?P<id>[^/]++)/json/?$#s', $pathinfo, $matches)) {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not__infoMiembro;
            }

            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', '_infoMiembro');
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => '_infoMiembro')), array (  '_controller' => 'PersonalPageProyectosBundle:Servicios:Info',));
        }
        not__infoMiembro:

        // _investigadores
        if (rtrim($pathinfo, '/') === '/investigadores/json') {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not__investigadores;
            }

            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', '_investigadores');
            }

            return array (  '_controller' => 'PersonalPageProyectosBundle:Servicios:Investigadores',  '_route' => '_investigadores',);
        }
        not__investigadores:

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
