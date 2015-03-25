<?php

namespace PersonalPage\ProyectosBundle\Entity;
use Gedmo\Mapping\Annotation as Gedmo;
use Gedmo\Translatable\Translatable;
use Doctrine\ORM\Mapping as ORM;

/**
 * Proyecto
 *
 * @ORM\Table(name="Proyecto", indexes={@ORM\Index(name="IDX_96A460EF54A72027", columns={"id_Entidad"})})
 * @ORM\Entity
 */
class Proyecto implements Translatable
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
     * @var string
     * @ORM\Column(name="nombre", type="string", length=45, nullable=false)
     */
    private $nombre;

    /**
     * @var \Date
     * @ORM\Column(name="fecha_Inicio", type="date", nullable=true)
     */
    private $fechaInicio;

    /**
     * @var \Date
     *
     * @ORM\Column(name="fecha_Final", type="date", nullable=true)
     */
    private $fechaFinal;

    /**
     * @var string
     *
     * @ORM\Column(name="status", type="string", length=45, nullable=true)
     */
    private $status;

    /**
     * @var float
     *
     * @ORM\Column(name="monto_Financiero", type="float", precision=10, scale=0, nullable=true)
     */
    private $montoFinanciero;

    /**
     * @var \Entidadfinanciadora
     *
     * @ORM\ManyToOne(targetEntity="Entidadfinanciadora")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_Entidad", referencedColumnName="id")
     * })
     */
    private $idEntidad;

    /**
    * @Gedmo\Locale
    */
    private $locale;

    public function setTranslatableLocale($locale)
    {
        $this->locale = $locale;
    }

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
     * Set nombre
     *
     * @param string $nombre
     * @return Proyecto
     */
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;

        return $this;
    }

    /**
     * Get nombre
     *
     * @return string 
     */
    public function getNombre()
    {
        return $this->nombre;
    }

    /**
     * Set fechaInicio
     *
     * @param \DateTime $fechaInicio
     * @return Proyecto
     */
    public function setFechaInicio($fechaInicio)
    {
        $this->fechaInicio = $fechaInicio;

        return $this;
    }

    /**
     * Get fechaInicio
     *
     * @return \DateTime 
     */
    public function getFechaInicio()
    {
        return $this->fechaInicio;
    }

    /**
     * Set fechaFinal
     *
     * @param \DateTime $fechaFinal
     * @return Proyecto
     */
    public function setFechaFinal($fechaFinal)
    {
        $this->fechaFinal = $fechaFinal;

        return $this;
    }

    /**
     * Get fechaFinal
     *
     * @return \DateTime 
     */
    public function getFechaFinal()
    {
        return $this->fechaFinal;
    }

    /**
     * Set status
     *
     * @param string $status
     * @return Proyecto
     */
    public function setStatus($status)
    {
        $this->status = $status;

        return $this;
    }

    /**
     * Get status
     *
     * @return string 
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Set montoFinanciero
     *
     * @param float $montoFinanciero
     * @return Proyecto
     */
    public function setMontoFinanciero($montoFinanciero)
    {
        $this->montoFinanciero = $montoFinanciero;

        return $this;
    }

    /**
     * Get montoFinanciero
     *
     * @return float 
     */
    public function getMontoFinanciero()
    {
        return $this->montoFinanciero;
    }

    /**
     * Set idEntidad
     *
     * @param \PersonalPage\ProyectosBundle\Entity\Entidadfinanciadora $idEntidad
     * @return Proyecto
     */
    public function setIdEntidad(\PersonalPage\ProyectosBundle\Entity\Entidadfinanciadora $idEntidad = null)
    {
        $this->idEntidad = $idEntidad;

        return $this;
    }

    /**
     * Get idEntidad
     *
     * @return \PersonalPage\ProyectosBundle\Entity\Entidadfinanciadora 
     */
    public function getIdEntidad()
    {
        return $this->idEntidad;
    }
}
