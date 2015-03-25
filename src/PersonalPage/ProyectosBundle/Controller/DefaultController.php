<?php

namespace PersonalPage\ProyectosBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('PersonalPageProyectosBundle:Default:index.html.twig', array('name' => $name));
    }
    public function ServicioAction($id) 
	{
		$response = new Response();
		$response->setContent(json_encode(array(
		    "data" => "andres",
		)));
		$response->headers->set('Content-Type', 'application/json');
		return $response;
	}
	public function AreasAction($id) 
	{
		$em = $this->getDoctrine()->getManager();
		//variables con las que se contara en la vista para mostrar la informacion
		$miembro = $em->getRepository('PersonalPageProyectosBundle:Miembro')->find($id);//información personal del miembro
		$info = array("id" => $id,"nombre" => $miembro->getNombre(),"paterno" => $miembro->getApellidop(),"materno" => $miembro->getApellidom(),"descripcion" => $miembro->getAlumDescripcion());
		$response = new Response();
		$response->setContent(json_encode($info));
		$response->headers->set('Content-Type', 'application/json');
		return $response;
	}
}
