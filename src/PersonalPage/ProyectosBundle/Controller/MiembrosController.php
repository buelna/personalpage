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
		curl_setopt($ch, CURLOPT_URL, 'caii.itmexicali.edu.mx/'.locale_get_default().'/'.$id.'/info/json/');
		curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-type: application/json')); // Assuming you're requesting JSON
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
		$response = curl_exec($ch);
		$data = (Array)json_decode($response);
		return $this->render('PersonalPageProyectosBundle:Default:Areas.html.twig',array('miembro' => $data));
	}
	public function ProyectosAction($id)//carga la pagina personal del miembro en la vista de proyectos
	{
		$ch = curl_init();
		curl_setopt($ch, CURLOPT_URL, 'caii.itmexicali.edu.mx/'.locale_get_default().'/'.$id.'/proyectos/json/');
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
	public function PublicacionesAction($id,Request $request)//carga la pagina personal del usuario en la vista de publicaciones y conferencias
	{
		$ch = curl_init();
		$localeLang = $request->attributes->get('_locale', $request->getLocale());
        curl_setopt($ch, CURLOPT_URL, 'http://caii.itmexicali.edu.mx/'.$localeLang.'/'.$id.'/publicaciones/json/');
        curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-type: application/json'));
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

        $response = curl_exec($ch);
        $data = (Array)json_decode($response);
        $miembro = (Array)$data["miembro"];
        $entities=(Array)$data["entities"];
        $tipos=(Array)$data["tipos"];
        $miembros=(Array)$data["miembros"];
        $publicaciones=(Array)$data["publicaciones"];
        $publicacionesid=(Array)$data["publicacionesid"];
        $p=array();
        $i=0;
        foreach ($entities as $entity) {
            $p[$i]=(Array)$entity;
            $i++;
        }
        $entities=$p;
        $p=array();
        $i=0;
        foreach ($tipos as $entity) {
            $p[$i]=(Array)$entity;
            $i++;
        }
        $tipos=$p;
        $p=array();
        $i=0;
        foreach ($miembros as $entity) {
            $p[$i]=(Array)$entity;
            $i++;
        }
        $miembros=$p;
        $p=array();
        $i=0;
        foreach ($publicaciones as $entity) {
            $p[$i]=(Array)$entity;
            $i++;
        }
        $publicaciones=$p;
        $p=array();
        $i=0;
        foreach ($publicacionesid as $entity) {
            $p[$i]=(Array)$entity;
            $i++;
        }
        $publicacionesid=$p;
		return $this->render('PersonalPageProyectosBundle:Default:Publicaciones.html.twig', array("entities"=>$entities,"tipos"=>$tipos,"miembros"=>$miembros,"publicaciones"=>$publicaciones,"publicacionesid"=>$publicacionesid,"miembro"=>$miembro));
	}

}
