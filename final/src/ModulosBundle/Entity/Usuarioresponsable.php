<?php

namespace ModulosBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Usuarioresponsable
 *
 * @ORM\Table(name="UsuarioResponsable", indexes={@ORM\Index(name="idresponsable", columns={"idresponsable"})})
 * @ORM\Entity
 */
class Usuarioresponsable
{
    /**
     * @var \Usuarios
     *
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     * @ORM\OneToOne(targetEntity="Usuarios")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idusuario", referencedColumnName="id")
     * })
     */
    private $idusuario;

    /**
     * @var \Responsables
     *
     * @ORM\ManyToOne(targetEntity="Responsables")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idresponsable", referencedColumnName="id")
     * })
     */
    private $idresponsable;



    /**
     * Set idusuario
     *
     * @param \ModulosBundle\Entity\Usuarios $idusuario
     * @return Usuarioresponsable
     */
    public function setIdusuario(\ModulosBundle\Entity\Usuarios $idusuario)
    {
        $this->idusuario = $idusuario;

        return $this;
    }

    /**
     * Get idusuario
     *
     * @return \ModulosBundle\Entity\Usuarios 
     */
    public function getIdusuario()
    {
        return $this->idusuario;
    }

    /**
     * Set idresponsable
     *
     * @param \ModulosBundle\Entity\Responsables $idresponsable
     * @return Usuarioresponsable
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
