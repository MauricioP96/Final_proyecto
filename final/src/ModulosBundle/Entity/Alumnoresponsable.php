<?php

namespace ModulosBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Alumnoresponsable
 *
 * @ORM\Table(name="AlumnoResponsable", indexes={@ORM\Index(name="idAlumno", columns={"idAlumno"}), @ORM\Index(name="idResponsable", columns={"idResponsable"})})
 * @ORM\Entity
 */
class Alumnoresponsable
{
    /**
     * @var integer
     *
     * @ORM\Column(name="alumno_responsable", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $alumnoResponsable;

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
     * @var \Responsables
     *
     * @ORM\ManyToOne(targetEntity="Responsables")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idResponsable", referencedColumnName="id")
     * })
     */
    private $idresponsable;



    /**
     * Get alumnoResponsable
     *
     * @return integer 
     */
    public function getAlumnoResponsable()
    {
        return $this->alumnoResponsable;
    }

    /**
     * Set idalumno
     *
     * @param \ModulosBundle\Entity\Alumnos $idalumno
     * @return Alumnoresponsable
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
     * Set idresponsable
     *
     * @param \ModulosBundle\Entity\Responsables $idresponsable
     * @return Alumnoresponsable
     */
    public function setIdresponsable(\ModulosBundle\Entity\Responsables $idresponsable = null)
    {
        $this->idresponsable = $idresponsable;

        return $this;
    }

    /**
     * Get idresponsable
     *
     * @return \ModulosBundle\Entity\Responsables 
     */
    public function getIdresponsable()
    {
        return $this->idresponsable;
    }
}
