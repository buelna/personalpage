<?php
namespace PersonalPage\ProyectosBundle\DataFixtures\ORM;
use \Doctrine\Common\DataFixtures\AbstractFixture;
use \Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use PersonalPage\ProyectosBundle\Entity\Tipopublicacion;
class TipopublicacionF extends AbstractFixture implements OrderedFixtureInterface
{
	public function load(ObjectManager $manager)
	{
		$tipos = array(
			array('nombre' => 'Libro','nom' => 'Book'),
			array('nombre' => 'Capitulo de libro','nom' => 'Book chapter'),
			array('nombre' => 'Articulo','nom' => 'Article'),
			array('nombre' => 'Reporte tecnico','nom' => 'Technical report'),
			array('nombre' => 'Conferencia','nom' => 'Conference'),
			array('nombre' => 'Tesis de maestria','nom' => 'Master thesis'),
			array('nombre' => 'Tesis de doctorado','nom' => 'PhD Thesis')
		);
		foreach ($tipos as $tipo) {
			$entidad = new Tipopublicacion();
			$entidad->setNombre($tipo['nombre']);
			$manager->persist($entidad);
		
			$manager->flush();
		//	$manager->refresh($entidad);
			
			$id = $entidad->getId();
			$tp = $manager->find('PersonalPageProyectosBundle:Tipopublicacion', $id);
			$tp->setNombre($tipo['nom']);
			$tp->setTranslatableLocale('en_US');
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
       return 1; 
    }
}