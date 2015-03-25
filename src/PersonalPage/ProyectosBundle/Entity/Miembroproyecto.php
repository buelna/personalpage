<?php

namespace PersonalPage\ProyectosBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Miembroproyecto
 *
 * @ORM\Table(name="MiembroProyecto", indexes={@ORM\Index(name="IDX_ECD4F5FB5B86682B", columns={"idMiembro"}), @ORM\Index(name="IDX_ECD4F5FB3C7128E2", columns={"idProyecto"})})
 * @ORM\Entity
 */
class Miembroproyecto
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var \Proyecto
     *
     * @ORM\ManyToOne(targetEntity="Proyecto")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idProyecto", referencedColumnName="id")
     * })
     */
    private $idproyecto;

    /**
     * @var \Miembro
     *
     * @ORM\ManyToOne(targetEntity="Miembro")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idMiembro", referencedColumnName="id")
     * })
     */
    private $idmiembro;



    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set idproyecto
     *
     * @param \PersonalPage\ProyectosBundle\Entity\Proyecto $idproyecto
     * @return Miembroproyecto
     */
    public function setIdproyecto(\PersonalPage\ProyectosBundle\Entity\Proyecto $idproyecto = null)
    {
        $this->idproyecto = $idproyecto;

        return $this;
    }

    /**
     * Get idproyecto
     *
     * @return \PersonalPage\ProyectosBundle\Entity\Proyecto 
     */
    public function getIdproyecto()
    {
        return $this->idproyecto;
    }

    /**
     * Set idmiembro
     *
     * @param \PersonalPage\ProyectosBundle\Entity\Miembro $idmiembro
     * @return Miembroproyecto
     */
    public function setIdmiembro(\PersonalPage\ProyectosBundle\Entity\Miembro $idmiembro = null)
    {
        $this->idmiembro = $idmiembro;

        return $this;
    }

    /**
     * Get idmiembro
     *
     * @return \PersonalPage\ProyectosBundle\Entity\Miembro 
     */
    public function getIdmiembro()
    {
        return $this->idmiembro;
    }
    
    public function __toString()
    {
       return $this->getNombre();
    }
}
