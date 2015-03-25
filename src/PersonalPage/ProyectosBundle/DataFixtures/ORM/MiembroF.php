<?php
namespace PersonalPage\ProyectosBundle\DataFixtures\ORM;
use \Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use PersonalPage\ProyectosBundle\Entity\Miembro;
class MiembroF extends AbstractFixture implements OrderedFixtureInterface
{
	public function load(ObjectManager $manager)
	{
		$miembros = array(
			array('nombre' => 'Andrés','apellidop' => 'Buelna', 'apellidoM' => 'Benítez', 'alumDescripcion' => 'Estudiante de Ingeniería en Sistemas Computacionales en el Instituto Tecnológico de Mexicali', 'descEN' => 'Student of Computer Systems Engineering at the Technological Institute of Mexicali', 'email' => 'andres.buelna.b@gmail.com', 'stat' => '1'),
			array('nombre' => 'Sealtyel','apellidop' => 'Castillo', 'apellidoM' => 'Medina', 'alumDescripcion' => 'Estudiante de Ingeniería en Sistemas Computacionales en el Instituto Tecnológico de Mexicali', 'descEN' => 'Student of Computer Systems Engineering at the Technological Institute of Mexicali', 'email' => 'sealtyel.castillo@gmail.com', 'stat' => '1'),
			array('nombre' => 'Francisco','apellidop' => 'Concha', 'apellidoM' => 'Rios', 'alumDescripcion' => 'Estudiante de Ingeniería en Sistemas Computacionales en el Instituto Tecnológico de Mexicali', 'descEN' => 'Student of Computer Systems Engineering at the Technological Institute of Mexicali', 'email' => 'fco7concha@gmail.com', 'stat' => '1')
		);
		foreach ($miembros as $miembro) {
			$entidad = new Miembro();
			$entidad->setNombre($miembro['nombre']);
			$entidad->setApellidop($miembro['apellidop']);
			$entidad->setApellidom($miembro['apellidoM']);
			$entidad->setAlumDescripcion($miembro['alumDescripcion']);
			$entidad->setEmail($miembro['email']);
			$entidad->setStatus($miembro['stat']);
			$manager->persist($entidad);
		
			$manager->flush();
			
			$id = $entidad->getId();
			$member = $manager->find('PersonalPageProyectosBundle:Miembro', $id);
			$member->setAlumDescripcion($miembro['descEN']);
			$member->setTranslatableLocale('en_US');
			$manager->persist($member);
			$manager->flush();
		}
	}
	/**
     * 
     * {@inheritDoc}
     */
    public function getOrder()
    {
       return 3; 
    }
}