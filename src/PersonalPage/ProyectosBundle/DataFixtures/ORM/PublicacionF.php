<?php
namespace PersonalPage\ProyectosBundle\DataFixtures\ORM;
use \Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use PersonalPage\ProyectosBundle\Entity\Publicacion;
class PublicacionF extends AbstractFixture implements OrderedFixtureInterface
{
	public function load(ObjectManager $manager)
	{
		$publicaciones = array(
			array('titulo' => 'Publicacion de prueba','tituloEN' =>'Test publication', 'capituloEN' => 'Test chapter', 'capitulo' => 'Capitulo de prueba', 'idtipo' => $manager->find('PersonalPageProyectosBundle:Tipopublicacion', 1), 'fecha' => new \DateTime("now"), 'doi'=>'1345', 'pp'=>'67-85', 'enlace'=>' ', 'mostrar'=>'1'),
			array('titulo' => 'Publicacion de prueba','tituloEN' =>'Test publication', 'capituloEN' => 'Test chapter', 'capitulo' => 'Capitulo de prueba', 'idtipo' => $manager->find('PersonalPageProyectosBundle:Tipopublicacion', 1), 'fecha' => new \DateTime("now"), 'doi'=>'1345', 'pp'=>'67-85', 'enlace'=>' ', 'mostrar'=>'1'),
			array('titulo' => 'Publicacion de prueba','tituloEN' =>'Test publication', 'capituloEN' => 'Test chapter', 'capitulo' => 'Capitulo de prueba', 'idtipo' => $manager->find('PersonalPageProyectosBundle:Tipopublicacion', 1), 'fecha' => new \DateTime("now"), 'doi'=>'1345', 'pp'=>'67-85', 'enlace'=>' ', 'mostrar'=>'1'),
			array('titulo' => 'Publicacion de prueba','tituloEN' =>'Test publication', 'capituloEN' => 'Test chapter', 'capitulo' => 'Capitulo de prueba', 'idtipo' => $manager->find('PersonalPageProyectosBundle:Tipopublicacion', 1), 'fecha' => new \DateTime("now"), 'doi'=>'1345', 'pp'=>'67-85', 'enlace'=>' ', 'mostrar'=>'1')
		);
		foreach ($publicaciones as $publicacion) {
			$entidad = new Publicacion();
			$entidad->setTitulo($publicacion['titulo']);
			$entidad->setCapitulo($publicacion['capitulo']);
			$entidad->setIdtipo($publicacion['idtipo']);
			$entidad->setFecha($publicacion['fecha']);
			$entidad->setDoi($publicacion['doi']);
			$entidad->setPaginas($publicacion['pp']);
			$entidad->setEnlace($publicacion['enlace']);
			$entidad->setMostrar($publicacion['mostrar']);
			$manager->persist($entidad);
		
			$manager->flush();
		
			$id = $entidad->getId();
			$tp = $manager->find('PersonalPageProyectosBundle:Publicacion', $id);
			$tp->setTitulo($publicacion['tituloEN']);
			$tp->setCapitulo($publicacion['capituloEN']);
			$tp->setTranslatableLocale('en');
			$manager->persist($tp);
			$manager->flush();
		}
	}
	/**
     * 
     * {@inheritDoc}
     */
    public function getOrder()
    {
       return 5; 
    }
}