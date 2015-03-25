<?php

namespace PersonalPage\ProyectosBundle\Entity;
use Gedmo\Mapping\Annotation as Gedmo;
use Gedmo\Translatable\Translatable;
use Doctrine\ORM\Mapping as ORM;

/**
 * Miembro
 *
 * @ORM\Table(name="Miembro")
 * @ORM\Entity
 */
class Miembro implements Translatable
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
     *
     * @ORM\Column(name="nombre", type="string", length=45, nullable=false)
     */
    private $nombre;

    /**
     * @var string
     *
     * @ORM\Column(name="apellidoP", type="string", length=45, nullable=false)
     */
    private $apellidop;

    /**
     * @var string
     *
     * @ORM\Column(name="apellidoM", type="string", length=45, nullable=false)
     */
    private $apellidom;

    /**
     * @var integer
     *
     * @ORM\Column(name="status", type="integer", nullable=false)
     */
    private $status;

    /**
     * @var string
     *
     * @ORM\Column(name="link_Pagina", type="string", length=45, nullable=true)
     */
    private $linkPagina;

    /**
     * @var string
     *
     * @ORM\Column(name="fotoURL", type="string", length=45, nullable=true)
     */
    private $fotourl;

    /**
     * @var string
     * 
     * @ORM\Column(name="alum_Descripcion", type="string", length=255, nullable=false)
     */
    private $alumDecripcion;



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
     * @return Miembro
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
     * Set apellidop
     *
     * @param string $apellidop
     * @return Miembro
     */
    public function setApellidop($apellidop)
    {
        $this->apellidop = $apellidop;

        return $this;
    }

    /**
     * Get apellidop
     *
     * @return string 
     */
    public function getApellidop()
    {
        return $this->apellidop;
    }

    /**
     * Set apellidom
     *
     * @param string $apellidom
     * @return Miembro
     */
    public function setApellidom($apellidom)
    {
        $this->apellidom = $apellidom;

        return $this;
    }

    /**
     * Get apellidom
     *
     * @return string 
     */
    public function getApellidom()
    {
        return $this->apellidom;
    }

    /**
     * Set status
     *
     * @param integer $status
     * @return Miembro
     */
    public function setStatus($status)
    {
        $this->status = $status;

        return $this;
    }

    /**
     * Get status
     *
     * @return integer 
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Set linkPagina
     *
     * @param string $linkPagina
     * @return Miembro
     */
    public function setLinkPagina($linkPagina)
    {
        $this->linkPagina = $linkPagina;

        return $this;
    }

    /**
     * Get linkPagina
     *
     * @return string 
     */
    public function getLinkPagina()
    {
        return $this->linkPagina;
    }

    /**
     * Set fotourl
     *
     * @param string $fotourl
     * @return Miembro
     */
    public function setFotourl($fotourl)
    {
        $this->fotourl = $fotourl;

        return $this;
    }

    /**
     * Get fotourl
     *
     * @return string 
     */
    public function getFotourl()
    {
        return $this->fotourl;
    }

    /**
     * Set alumDecripcion
     *
     * @param string $alumDecripcion
     * @return Miembro
     */
    public function setAlumDescripcion($alumDecripcion)
    {
        $this->alumDecripcion = $alumDecripcion;

        return $this;
    }

    /**
     * Get alumDecripcion
     *
     * @return string 
     */
    public function getAlumDescripcion()
    {
        return $this->alumDecripcion;
    }

    /**
     * Set email
     *
     * @param string $email
     * @return Miembro
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get email
     *
     * @return string 
     */
    public function getEmail()
    {
        return $this->email;
    }

}
