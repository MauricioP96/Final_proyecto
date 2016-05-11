<?php

namespace ModulosBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Meses
 *
 * @ORM\Table(name="Meses")
 * @ORM\Entity
 */
class Meses
{
    /**
     * @var integer
     *
     * @ORM\Column(name="idMes", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idmes;

    /**
     * @var string
     *
     * @ORM\Column(name="nombre", type="text", length=65535, nullable=false)
     */
    private $nombre;



    /**
     * Get idmes
     *
     * @return integer 
     */
    public function getIdmes()
    {
        return $this->idmes;
    }

    /**
     * Set nombre
     *
     * @param string $nombre
     * @return Meses
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
}
