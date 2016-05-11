<?php

namespace ModulosBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Configuracion
 *
 * @ORM\Table(name="Configuracion")
 * @ORM\Entity
 */
class Configuracion
{
    /**
     * @var integer
     *
     * @ORM\Column(name="clave", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $clave;

    /**
     * @var string
     *
     * @ORM\Column(name="descripcion", type="text", length=65535, nullable=false)
     */
    private $descripcion;

    /**
     * @var string
     *
     * @ORM\Column(name="titulo", type="text", length=65535, nullable=false)
     */
    private $titulo;

    /**
     * @var string
     *
     * @ORM\Column(name="mailContacto", type="text", length=65535, nullable=false)
     */
    private $mailcontacto;

    /**
     * @var integer
     *
     * @ORM\Column(name="cantElem", type="integer", nullable=false)
     */
    private $cantelem;

    /**
     * @var boolean
     *
     * @ORM\Column(name="habilitada", type="boolean", nullable=false)
     */
    private $habilitada;

    /**
     * @var string
     *
     * @ORM\Column(name="textoDeshab", type="text", length=65535, nullable=false)
     */
    private $textodeshab;



    /**
     * Get clave
     *
     * @return integer 
     */
    public function getClave()
    {
        return $this->clave;
    }

    /**
     * Set descripcion
     *
     * @param string $descripcion
     * @return Configuracion
     */
    public function setDescripcion($descripcion)
    {
        $this->descripcion = $descripcion;

        return $this;
    }

    /**
     * Get descripcion
     *
     * @return string 
     */
    public function getDescripcion()
    {
        return $this->descripcion;
    }

    /**
     * Set titulo
     *
     * @param string $titulo
     * @return Configuracion
     */
    public function setTitulo($titulo)
    {
        $this->titulo = $titulo;

        return $this;
    }

    /**
     * Get titulo
     *
     * @return string 
     */
    public function getTitulo()
    {
        return $this->titulo;
    }

    /**
     * Set mailcontacto
     *
     * @param string $mailcontacto
     * @return Configuracion
     */
    public function setMailcontacto($mailcontacto)
    {
        $this->mailcontacto = $mailcontacto;

        return $this;
    }

    /**
     * Get mailcontacto
     *
     * @return string 
     */
    public function getMailcontacto()
    {
        return $this->mailcontacto;
    }

    /**
     * Set cantelem
     *
     * @param integer $cantelem
     * @return Configuracion
     */
    public function setCantelem($cantelem)
    {
        $this->cantelem = $cantelem;

        return $this;
    }

    /**
     * Get cantelem
     *
     * @return integer 
     */
    public function getCantelem()
    {
        return $this->cantelem;
    }

    /**
     * Set habilitada
     *
     * @param boolean $habilitada
     * @return Configuracion
     */
    public function setHabilitada($habilitada)
    {
        $this->habilitada = $habilitada;

        return $this;
    }

    /**
     * Get habilitada
     *
     * @return boolean 
     */
    public function getHabilitada()
    {
        return $this->habilitada;
    }

    /**
     * Set textodeshab
     *
     * @param string $textodeshab
     * @return Configuracion
     */
    public function setTextodeshab($textodeshab)
    {
        $this->textodeshab = $textodeshab;

        return $this;
    }

    /**
     * Get textodeshab
     *
     * @return string 
     */
    public function getTextodeshab()
    {
        return $this->textodeshab;
    }
}
