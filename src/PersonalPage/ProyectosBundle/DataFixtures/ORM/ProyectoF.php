<?php
namespace PersonalPage\ProyectosBundle\DataFixtures\ORM;
use \Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use PersonalPage\ProyectosBundle\Entity\Proyecto;
class ProyectoF extends AbstractFixture implements OrderedFixtureInterface
{
	public function load(ObjectManager $manager)
	{
		$proyectos = array(
			array('nombre' => 'Proyecto de prueba', 'nombreEN' => 'Test project', 'fecha' => new \DateTime("now"), 'fechafin' => new \DateTime("now")),
			array('nombre' => 'Proyecto de prueba', 'nombreEN' => 'Test project', 'fecha' => new \DateTime("now"), 'fechafin' => new \DateTime("now")),
			array('nombre' => 'Proyecto de prueba', 'nombreEN' => 'Test project', 'fecha' => new \DateTime("now"), 'fechafin' => new \DateTime("now"))
		);
		foreach ($proyectos as $proyecto) {
			$entidad = new Proyecto();
			$entidad->setNombre($proyecto['nombre']);
			$entidad->setFechaInicio($proyecto['fecha']);
			$entidad->setFechaFinal($proyecto['fechafin']);
			$manager->persist($entidad);
			$manager->flush();
		
			
			$id = $entidad->getId();
			$tp = $manager->find('PersonalPageProyectosBundle:Proyecto', $id);
			$tp->setNombre($proyecto['nombreEN']);
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
       return 4; 
    }
}