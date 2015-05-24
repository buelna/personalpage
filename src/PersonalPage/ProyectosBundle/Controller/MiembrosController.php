<?php
namespace PersonalPage\ProyectosBundle\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
class MiembrosController extends Controller
{
	public function CatalogoAction()//llama al catalogo de miembros 
	{									
		$em = $this->getDoctrine()->getManager();
		//variable que contiene todos los miembros registrados para mostrar en el catalogo
		$miembros = $em->getRepository('PersonalPageProyectosBundle:Miembro')->findAll();
		return $this->render('PersonalPageProyectosBundle:Default:Catalogo.html.twig',array('miembros' => $miembros));
	}
	public function AreasAction($id)//carga la pagina personal del miembro en la vista de areas de interes
	{
		$ch = curl_init();
		curl_setopt($ch, CURLOPT_URL, 'http://caii.itmexicali.edu.mx/'.locale_get_default().'/'.$id.'/info/json/');
		curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-type: application/json')); // Assuming you're requesting JSON
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

		$response = curl_exec($ch);
		$data = (Array)json_decode($response);
		return $this->render('PersonalPageProyectosBundle:Default:Areas.html.twig',array('miembro' => $data));
	}
	public function ProyectosAction($id)//carga la pagina personal del miembro en la vista de proyectos
	{
		$ch = curl_init();
		curl_setopt($ch, CURLOPT_URL, 'http://caii.itmexicali.edu.mx/'.locale_get_default().'/'.$id.'/proyectos/json/');
		curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-type: application/json')); // Assuming you're requesting JSON
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
		$response = curl_exec($ch);
		$info = (Array)json_decode($response);
		$miembro=(Array)$info['miembro'];
		$proyectos=(Array)$info['proyectos'];
		$p=array();
		$i=0;
		foreach ($proyectos as $proyecto) {
			$p[$i]=(Array)$proyecto;
			$i++;
		}
		return $this->render('PersonalPageProyectosBundle:Default:Proyectos.html.twig',array('miembro' => $miembro,'proyectos'=>$p));
	}
	public function PublicacionesAction($id)//carga la pagina personal del usuario en la vista de publicaciones y conferencias
	{
		$ch = curl_init();
		curl_setopt($ch, CURLOPT_URL, 'http://caii.itmexicali.edu.mx/'.locale_get_default().'/'.$id.'/publicaciones/json/');
		curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-type: application/json')); // Assuming you're requesting JSON
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
		$response = curl_exec($ch);
		$info = (Array)json_decode($response);
		$miembro=(Array)$info['miembro'];
		$publicaciones=(Array)$info['publicaciones'];
		$i=0;
		$t=array();
		$p=array();
		foreach ($publicaciones as $publicacion) {
			$p[$i]=(Array)$publicacion;
			$i++;
		}
		$tipos=(array)$info['tipos'];
		$i=0;
		foreach ($tipos as $tipo) {
			$t[$i]=(Array)$tipo;
			$i++;
		}
		return $this->render('PersonalPageProyectosBundle:Default:Publicaciones.html.twig',array('miembro' => $miembro, 'publicaciones' => $p,'tipos' => $t));
	}

}
