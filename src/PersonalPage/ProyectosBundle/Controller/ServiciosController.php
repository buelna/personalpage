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
		$url="http://caii.itmexicali.edu.mx/".$miembro->getFotoUrl();
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
	public function PublicacionesCaiiAction(Request $request)//carga la pagina personal del usuario en la vista de publicaciones y conferencias
	{
		$em = $this->getDoctrine()->getManager();
        $dql = $em->createQueryBuilder();

        $localeLang = $request->attributes->get('_locale', $request->getLocale());
        
        if($localeLang=='es')
        {
            //Query para tipos de publicacion 
            $dql->select('TipoPublicacion.nombre','TipoPublicacion.id')
                ->from('PublicacionesBundle:Publicacion', 'Publicacion')
                ->Join('Publicacion.TipoPublicacion', 'TipoPublicacion')
                ->orderBy('TipoPublicacion.prioridad', 'ASC')
                ->groupBy('Publicacion.TipoPublicacion');
            $tipos =$dql->getQuery()->getResult();

            //Nombre de los publicaciones
            $publicaciones = $em->getRepository('PublicacionesBundle:TipoPublicacion')->findAll();

            //Nombre de los publicaciones
            $publicacionesid = $em->getRepository('PublicacionesBundle:Publicacion')->findAll();

            //Query para las publicaciones ordenadas por fecha
            $repository = $this->getDoctrine()
                        ->getRepository('PublicacionesBundle:Publicacion');
            $dql = $repository->createQueryBuilder('p')
                    ->select('p')
                    ->orderBy('p.fecha', 'DESC');
            $entities =$dql->getQuery()->getResult();
                    

            //Query miembros-publicacion
            $dql->select('MiembroPublicacion.id i', 
                         'Miembro.nombre nombreMiembro, Miembro.apellidoP', 
                         'Publicacion.id idpublicacion')
                ->from('MiembroBundle:MiembroPublicacion', 'MiembroPublicacion')
                ->Join('MiembroPublicacion.idMiembro', 'Miembro')
                ->Join('MiembroPublicacion.idPublicacion', 'Publicacion')
                ->groupBy('MiembroPublicacion.id')
                ->orderBy('MiembroPublicacion.id');

            $miembros=$dql->getQuery()->getResult();
        }
        else{

            //Query para tipos de publicacion 
            $dql->select('TipoPublicacion.nombre','TipoPublicacion.id')
                ->from('PublicacionesBundle:Publicacion', 'Publicacion')
                ->Join('Publicacion.TipoPublicacion', 'TipoPublicacion')
                ->Where('Publicacion.idiomaIngles = 1')
                ->orderBy('TipoPublicacion.prioridad', 'ASC')
                ->groupBy('Publicacion.TipoPublicacion');
            $tipos =$dql->getQuery()->getResult();

            //Nombre de los publicaciones
            $publicaciones = $em->getRepository('PublicacionesBundle:TipoPublicacion')->findAll();

            //Nombre de los publicaciones
            $publicacionesid = $em->getRepository('PublicacionesBundle:Publicacion')->findAll();

            //Query para las publicaciones ordenadas por fecha
            $repository = $this->getDoctrine()
                        ->getRepository('PublicacionesBundle:Publicacion');
            $dql = $repository->createQueryBuilder('p')
                    ->select('p')
                    ->where('p.idiomaIngles=1')
                    ->orderBy('p.fecha', 'DESC');
            $entities =$dql->getQuery()->getResult();
                    

            //Query miembros-publicacion
            $dql->select('MiembroPublicacion.id i', 
                         'Miembro.nombre nombreMiembro, Miembro.apellidoP', 
                         'Publicacion.id idpublicacion')
                ->from('MiembroBundle:MiembroPublicacion', 'MiembroPublicacion')
                ->Join('MiembroPublicacion.idMiembro', 'Miembro')
                ->Join('MiembroPublicacion.idPublicacion', 'Publicacion')
                ->groupBy('MiembroPublicacion.id')
                ->orderBy('MiembroPublicacion.id');

            $miembros=$dql->getQuery()->getResult();


        }
        $publications=array();
		$i=0;
        foreach ($publicaciones as $publicacion) {
        	$publications[$i]= array(
        		"id" => $publicacion.getId(),
        		"nombre" => $publicacion.getNombre(),
        		"prioridad" => $publicacion.getPrioridad()
        		);
        	$i++;
        }
        $publicationsid=array();
		$i=0;
        foreach ($publicacionesid as $publicacion) {
        	$publicationsid[$i]= array(
        		"id" => $publicacion.getId(),
        		"TipoPublicacion" => $publicacion.getTipoPublicacion(),
        		"Doi" => $publicacion.getDoi(),
        		"Paginas" => $publicacion.getPaginas(),
        		"Titulo" => $publicacion.getTitulo(),
        		"TituloLibro" => $publicacion.getTituloLibro(),
        		"Fecha" => $publicacion.getFecha(),
        		"Enlace" => $publicacion.getEnlace(),
        		"TipoReporte" => $publicacion.getTipoReporte(),
        		"Ciudad" => $publicacion.getCiudad(),
        		"Congreso" => $publicacion.getCongreso();
        		"Issn" => $publicacion.getIssn(),
        		"Capitulo" => $publicacion.getCapitulo();
        		"Isbn" => $publicacion.getIsbn(),
        		"Mostrar" => $publicacion.getMostrar(),
        		"Journal" => $publicacion.getjournal(),
        		"Volumen" => $publicacion.getVolumen(),
        		"Editorial" => $publicacion.getEditorial(),
        		"Serie" => $publicacion.getSerie(),
        		"Edicion" => $publicacion.getEdicion(),
        		"Escuela" => $publicacion.getEscuela(),
        		"TipoTesis" => $publicacion.getTipoTesis(),
        		"IdiomaIngles" => $publicacion.getIdiomaIngles()
        		);
        	$i++;
        }
        $publications = array(
            'entities' => $entities,
            'tipos' => $tipos,
            'miembros'=>$miembros,
            'publicaciones'=>$publications,
            'publicacionesid'=>$publicationsid,
        );
		$response = new Response();
		$response->setContent(json_encode($publications));
		$response->headers->set('Content-Type', 'application/json');
		return $response;
	}
	public function investigadoresAction() 
	{
		$em = $this->getDoctrine()->getManager();
		$miembros = $em->getRepository('PersonalPageProyectosBundle:Miembro')->findAll();//información personal del miembro
		$data = array();
		$i = 0;
		foreach ($miembros as $miembro) 
		{
			$url="http://caii.itmexicali.edu.mx/".$miembro->getFotoUrl();
			$data[$i] = array("id" => $miembro->getId(),"nombre" => $miembro->getNombre(),"paterno" => $miembro->getApellidop(),"materno" => $miembro->getApellidom(),"pagina" => $miembro->getLinkPagina(),"fotoUrl" => $url);
			$i = $i + 1;
		}
		$response = new Response();
		$response->setContent(json_encode($data));
		$response->headers->set('Content-Type', 'application/json');
		return $response;
	}
}
