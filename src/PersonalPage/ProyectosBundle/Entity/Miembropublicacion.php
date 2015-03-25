<?php

namespace PersonalPage\ProyectosBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Miembropublicacion
 *
 * @ORM\Table(name="MiembroPublicacion", indexes={@ORM\Index(name="IDX_A372833D5B86682B", columns={"idMiembro"}), @ORM\Index(name="IDX_A372833D22AFF727", columns={"idPublicacion"}), @ORM\Index(name="IDX_A372833D3D043D9", columns={"idTipo"}), @ORM\Index(name="IDX_A372833D3C7128E2", columns={"idProyecto"})})
 * @ORM\Entity
 */
class Miembropublicacion
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
     * @var \Publicacion
     *
     * @ORM\ManyToOne(targetEntity="Publicacion")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idPublicacion", referencedColumnName="id")
     * })
     */
    private $idpublicacion;

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
     * @var \Tipopublicacion
     *
     * @ORM\ManyToOne(targetEntity="Tipopublicacion")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idTipo", referencedColumnName="id")
     * })
     */
    private $idtipo;

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
     * Set idpublicacion
     *
     * @param \PersonalPage\ProyectosBundle\Entity\Publicacion $idpublicacion
     * @return Miembropublicacion
     */
    public function setIdpublicacion(\PersonalPage\ProyectosBundle\Entity\Publicacion $idpublicacion = null)
    {
        $this->idpublicacion = $idpublicacion;

        return $this;
    }

    /**
     * Get idpublicacion
     *
     * @return \PersonalPage\ProyectosBundle\Entity\Publicacion 
     */
    public function getIdpublicacion()
    {
        return $this->idpublicacion;
    }

    /**
     * Set idproyecto
     *
     * @param \PersonalPage\ProyectosBundle\Entity\Proyecto $idproyecto
     * @return Miembropublicacion
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
     * Set idtipo
     *
     * @param \PersonalPage\ProyectosBundle\Entity\Tipopublicacion $idtipo
     * @return Miembropublicacion
     */
    public function setIdtipo(\PersonalPage\ProyectosBundle\Entity\Tipopublicacion $idtipo = null)
    {
        $this->idtipo = $idtipo;

        return $this;
    }

    /**
     * Get idtipo
     *
     * @return \PersonalPage\ProyectosBundle\Entity\Tipopublicacion 
     */
    public function getIdtipo()
    {
        return $this->idtipo;
    }

    /**
     * Set idmiembro
     *
     * @param \PersonalPage\ProyectosBundle\Entity\Miembro $idmiembro
     * @return Miembropublicacion
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
}
