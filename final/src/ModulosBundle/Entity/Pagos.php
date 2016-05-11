<?php

namespace ModulosBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Pagos
 *
 * @ORM\Table(name="Pagos", indexes={@ORM\Index(name="idAlumno", columns={"idAlumno", "idCuota"}), @ORM\Index(name="idCuota", columns={"idCuota"}), @ORM\Index(name="id_user", columns={"id_user"}), @ORM\Index(name="IDX_1B5A22FB77247DB7", columns={"idAlumno"})})
 * @ORM\Entity
 */
class Pagos
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
     * @var \DateTime
     *
     * @ORM\Column(name="fecha", type="date", nullable=false)
     */
    private $fecha;

    /**
     * @var boolean
     *
     * @ORM\Column(name="becado", type="boolean", nullable=false)
     */
    private $becado;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fechaAlta", type="date", nullable=false)
     */
    private $fechaalta;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fechaActualizado", type="date", nullable=false)
     */
    private $fechaactualizado;

    /**
     * @var \Alumnos
     *
     * @ORM\ManyToOne(targetEntity="Alumnos")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idAlumno", referencedColumnName="id")
     * })
     */
    private $idalumno;

    /**
     * @var \Cuotas
     *
     * @ORM\ManyToOne(targetEntity="Cuotas")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idCuota", referencedColumnName="id")
     * })
     */
    private $idcuota;

    /**
     * @var \Usuarios
     *
     * @ORM\ManyToOne(targetEntity="Usuarios")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_user", referencedColumnName="id")
     * })
     */
    private $idUser;



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
     * Set fecha
     *
     * @param \DateTime $fecha
     * @return Pagos
     */
    public function setFecha($fecha)
    {
        $this->fecha = $fecha;

        return $this;
    }

    /**
     * Get fecha
     *
     * @return \DateTime 
     */
    public function getFecha()
    {
        return $this->fecha;
    }

    /**
     * Set becado
     *
     * @param boolean $becado
     * @return Pagos
     */
    public function setBecado($becado)
    {
        $this->becado = $becado;

        return $this;
    }

    /**
     * Get becado
     *
     * @return boolean 
     */
    public function getBecado()
    {
        return $this->becado;
    }

    /**
     * Set fechaalta
     *
     * @param \DateTime $fechaalta
     * @return Pagos
     */
    public function setFechaalta($fechaalta)
    {
        $this->fechaalta = $fechaalta;

        return $this;
    }

    /**
     * Get fechaalta
     *
     * @return \DateTime 
     */
    public function getFechaalta()
    {
        return $this->fechaalta;
    }

    /**
     * Set fechaactualizado
     *
     * @param \DateTime $fechaactualizado
     * @return Pagos
     */
    public function setFechaactualizado($fechaactualizado)
    {
        $this->fechaactualizado = $fechaactualizado;

        return $this;
    }

    /**
     * Get fechaactualizado
     *
     * @return \DateTime 
     */
    public function getFechaactualizado()
    {
        return $this->fechaactualizado;
    }

    /**
     * Set idalumno
     *
     * @param \ModulosBundle\Entity\Alumnos $idalumno
     * @return Pagos
     */
    public function setIdalumno(\ModulosBundle\Entity\Alumnos $idalumno = null)
    {
        $this->idalumno = $idalumno;

        return $this;
    }

    /**
     * Get idalumno
     *
     * @return \ModulosBundle\Entity\Alumnos 
     */
    public function getIdalumno()
    {
        return $this->idalumno;
    }

    /**
     * Set idcuota
     *
     * @param \ModulosBundle\Entity\Cuotas $idcuota
     * @return Pagos
     */
    public function setIdcuota(\ModulosBundle\Entity\Cuotas $idcuota = null)
    {
        $this->idcuota = $idcuota;

        return $this;
    }

    /**
     * Get idcuota
     *
     * @return \ModulosBundle\Entity\Cuotas 
     */
    public function getIdcuota()
    {
        return $this->idcuota;
    }

    /**
     * Set idUser
     *
     * @param \ModulosBundle\Entity\Usuarios $idUser
     * @return Pagos
     */
    public function setIdUser(\ModulosBundle\Entity\Usuarios $idUser = null)
    {
        $this->idUser = $idUser;

        return $this;
    }

    /**
     * Get idUser
     *
     * @return \ModulosBundle\Entity\Usuarios 
     */
    public function getIdUser()
    {
        return $this->idUser;
    }
}
