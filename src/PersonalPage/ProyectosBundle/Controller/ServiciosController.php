<?php
namespace PersonalPage\ProyectosBundle\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
class ServiciosController extends Controller
{
	public function InfoAction($id) 
	{
		$em = $this->getDoctrine()->getManager();
		//variables con las que se contara en la vista para mostrar la informacion
		$miembro = $em->getRepository('PersonalPageProyectosBundle:Miembro')->find($id);//información personal del miembro
		//$pat=$this->container->get('templating.helper.assets')->getUrl($miembro->getFotoUrl());
		//$url=$this->getRequest()->getScheme()."://".$this->getRequest()->getHttpHost().$pat;
		$url="caii.itmexicali.edu.mx/".$miembro->getFotoUrl();
		$publicaciones = $em->getRepository('PersonalPageProyectosBundle:Miembropublicacion')->findAll();//datos que relacionan al miembro con sus publicaciones

		$publications=array();
		$i=0;
		foreach ($publicaciones as $publicacion) {
			$autores=array();
			$k=0;
			foreach ($publicaciones as $miembrop) {
				if ($publicacion->getIdpublicacion() == $miembrop->getIdpublicacion())
					$autores[$k]=$miembrop->getIdmiembro()->getNombre()." ". $miembrop->getIdmiembro()->getApellidop();
				$k++;
			}
			$publications[$i]=array(
				"type"=>$publicacion->getIdpublicacion()->getIdtipo()->getNombre(),
				"title"=>$publicacion->getIdpublicacion()->getTitulo(),
				"chapter"=>$publicacion->getIdpublicacion()->getCapitulo(),
				"city"=>$publicacion->getIdpublicacion()->getCiudad(),
				"editorial"=>$publicacion->getIdpublicacion()->getEditorial(),
				"date"=>$publicacion->getIdpublicacion()->getFecha(),
				"pages"=>$publicacion->getIdpublicacion()->getPaginas(),
				"doi"=>$publicacion->getIdpublicacion()->getDoi(),
				"volume"=>$publicacion->getIdpublicacion()->getVolumen(),
				"journal"=>$publicacion->getIdpublicacion()->getJournal(),
				"english"=>$publicacion->getIdpublicacion()->getIdiomaIngles(),
				"authors"=>$autores
				);

			$i++;
		}

		$info = array("id" => $id,"name" => $miembro->getNombre()." ".$miembro->getApellidop(),"description" => $miembro->getAlumDescripcion(),"pictureURL" => $url,"publications"=>$publications);
		$response = new Response();
		$response->setContent(json_encode($info));
		$response->headers->set('Content-Type', 'application/json');
		return $response;
	}
	public function AreasAction($id) 
	{
		$em = $this->getDoctrine()->getManager();
		//variables con las que se contara en la vista para mostrar la informacion
		$miembro = $em->getRepository('PersonalPageProyectosBundle:Miembro')->find($id);//información personal del miembro
		//$url=$this->getRequest()->getHttpHost();
		//$url=$this->getRequest()->getBasePath();
		$url="http://caii.itmexicali.edu.mx/".$miembro->getFotoUrl();
		//$pat=$this->container->get('templating.helper.assets')->getUrl($miembro->getFotoUrl());
		//$url=$this->getRequest()->getScheme()."://".$this->getRequest()->getHttpHost().$pat;
		$info = array("id" => $id,"nombre" => $miembro->getNombre(),"paterno" => $miembro->getApellidop(),"materno" => $miembro->getApellidom(),"descripcion" => $miembro->getAlumDescripcion(),"fotoUrl" => $url);
		
		$response = new Response();
		$response->setContent(json_encode($info));
		$response->headers->set('Content-Type', 'application/json');
		return $response;
	}
	public function ProyectosAction($id) 
	{
		$em = $this->getDoctrine()->getManager();
		//variables con las que se contara en la vista para mostrar la información
		$miembro = $em->getRepository('PersonalPageProyectosBundle:Miembro')->find($id);
		$proyectos = $em->getRepository('PersonalPageProyectosBundle:Miembroproyecto')->findByidmiembro($id);//proyectos en los que trabajó
		$todos = $em->getRepository('PersonalPageProyectosBundle:Miembroproyecto')->findAll();//envio de datos restantes
		$i=0;
		$projects=array();
		foreach ($proyectos as $proyecto)
		{
			$j=0;
			$otros=array();
			foreach ($todos as $otro)
			{	
				if ($otro->getIdproyecto()->getId()==$proyecto->getIdproyecto()->getId() and $proyecto->getIdmiembro()->getId()!=$otro->getIdmiembro()->getId())
				{
					$otros[$j]=$otro->getIdmiembro()->getNombre()." ".$otro->getIdmiembro()->getApellidop();
					$j++;
				}
				
			}
			$projects[$i]=array(
			"nombre"=>$proyecto->getIdproyecto()->getNombre(),
			"miembro"=>$proyecto->getIdmiembro()->getNombre()." ".$proyecto->getIdmiembro()->getApellidop(),
			"fechaini"=>$proyecto->getIdproyecto()->getFechaInicio(),
			"fechafin"=>$fecha=$proyecto->getIdproyecto()->getFechaFinal(),
			"colaboradores"=>$otros
			);
			$i++;
		}
		$member = array("id" => $id,"nombre" => $miembro->getNombre(),"paterno" => $miembro->getApellidop(),"materno" => $miembro->getApellidom(),"descripcion" => $miembro->getAlumDescripcion());
		
		$info=array("miembro" => $member,"proyectos" => $projects);
		$response = new Response();
		$response->setContent(json_encode($info));
		$response->headers->set('Content-Type', 'application/json');
		return $response;
	}
	public function PublicacionesAction($id)//carga la pagina personal del usuario en la vista de publicaciones y conferencias
	{
		$em = $this->getDoctrine()->getManager();
		//variables con las que se contara en la vista para mostrar la informacion
		$miembro = $em->getRepository('PersonalPageProyectosBundle:Miembro')->find($id);
		$tipos = $em->getRepository('PersonalPageProyectosBundle:Tipopublicacion')->findAll();//tipos de publicaciones que hay registradas
		$publicaciones = $em->getRepository('PersonalPageProyectosBundle:Miembropublicacion')->findAll();//datos que relacionan al miembro con sus publicaciones

		$member = array("id" => $id,
			"nombre" => $miembro->getNombre(),
			"paterno" => $miembro->getApellidop(),
			"materno" => $miembro->getApellidom(),
			"descripcion" => $miembro->getAlumDescripcion());
		
		$types = array();
		$i = 0;
		foreach ($tipos as $tipo) {
			$types[$i] = array('id'=>$tipo->getId(),'nombre'=>$tipo->getNombre());
			$i++;
		}
		$publications=array();
		$i=0;
		foreach ($publicaciones as $publicacion) {
			$autores=array();
			$k=0;
			foreach ($publicaciones as $miembrop) {
				if ($publicacion->getIdpublicacion() == $miembrop->getIdpublicacion())
					$autores[$k]=$miembrop->getIdmiembro()->getNombre()." ". $miembrop->getIdmiembro()->getApellidop();
				$k++;
			}
			$publications[$i]=array(
				"id"=>$id,
				"idTipo"=>$publicacion->getIdpublicacion()->getIdtipo()->getId(),
				"idMiembro"=>$publicacion->getIdmiembro()->getId(),
				"titulo"=>$publicacion->getIdpublicacion()->getTitulo(),
				"capitulo"=>$publicacion->getIdpublicacion()->getCapitulo(),
				"ciudad"=>$publicacion->getIdpublicacion()->getCiudad(),
				"editorial"=>$publicacion->getIdpublicacion()->getEditorial(),
				"fecha"=>$publicacion->getIdpublicacion()->getFecha(),
				"paginas"=>$publicacion->getIdpublicacion()->getPaginas(),
				"doi"=>$publicacion->getIdpublicacion()->getDoi(),
				"volumen"=>$publicacion->getIdpublicacion()->getVolumen(),
				"journal"=>$publicacion->getIdpublicacion()->getJournal(),
				"english"=>$publicacion->getIdpublicacion()->getIdiomaIngles(),
				"autores"=>$autores
				);

			$i++;
		}

		$info=array("miembro" => $member,"tipos" => $types,"publicaciones" => $publications);
		$response = new Response();
		$response->setContent(json_encode($info));
		$response->headers->set('Content-Type', 'application/json');
		return $response;
	}
	public function PublicacionesCaiiAction()//carga la pagina personal del usuario en la vista de publicaciones y conferencias
	{
		$em = $this->getDoctrine()->getManager();
		//variables con las que se contara en la vista para mostrar la informacion
		$miembrosp = $em->getRepository('PersonalPageProyectosBundle:Miembropublicacion')->findAll();//datos que relacionan al miembro con sus publicaciones
		$publicaciones = $em->getRepository('PersonalPageProyectosBundle:Publicacion')->findAll();//datos que relacionan al miembro con sus publicaciones
		
		$publications=array();
		$i=0;
		foreach ($publicaciones as $publicacion) {
			$autores=array();
			$k=0;
			foreach ($miembrosp as $miembrop) {
				if ($publicacion->getId() == $miembrop->getIdpublicacion()->getId())
				{	
					$autores[$k]=$miembrop->getIdmiembro()->getNombre()." ". $miembrop->getIdmiembro()->getApellidop();
					$k++;
				}
			}
			$publications[$i]=array(
				"type"=>$publicacion->getIdtipo()->getNombre(),
				"title"=>$publicacion->getTitulo(),
				"chapter"=>$publicacion->getCapitulo(),
				"city"=>$publicacion->getCiudad(),
				"editorial"=>$publicacion->getEditorial(),
				"date"=>$publicacion->getFecha(),
				"pages"=>$publicacion->getPaginas(),
				"doi"=>$publicacion->getDoi(),
				"volume"=>$publicacion->getVolumen(),
				"journal"=>$publicacion->getJournal(),
				"english"=>$publicacion->getIdiomaIngles(),
				"authors"=>$autores
				);

			$i++;
		}

		$response = new Response();
		$response->setContent(json_encode($publications));
		$response->headers->set('Content-Type', 'application/json');
		return $response;
	}
}
