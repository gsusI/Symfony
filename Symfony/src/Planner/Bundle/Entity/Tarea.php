<?php

// src/Acme/UserBundle/Entity/Tarea.php

namespace Planner\Bundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\ORM\Mapping\ManyToMany;
use Doctrine\ORM\Mapping\JoinColumn;
use Doctrine\ORM\Mapping\JoinTable;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * @ORM\Entity
 * @ORM\Table(name="tarea")
 */
class Tarea extends \Planner\Bundle\Entity\Objetivo {

    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @var date $fecha
     *
     * @ORM\Column(name="fecha", type="date", nullable=true)
     */
    protected $fecha;

    /**
     * @var boolean $generadaAutomaticamente
     *
     * @ORM\Column(name="generadaAutomaticamente", type="boolean", nullable=false)
     */
    protected $generadaAutomaticamente;

    /**
     *  @ORM\ManyToOne(targetEntity="Planner\Bundle\Entity\Objetivo",cascade={"persist", "remove"})
     */
    protected $objetivo;

    public function __construct() {
        $this->usuarios = new \Doctrine\Common\Collections\ArrayCollection();
        $this->usuarioPropietario = new \Doctrine\Common\Collections\ArrayCollection();
        $this->objetivo = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * @var \DateTime
     */
    protected $deadLine;

    /**
     * @var string
     */
    protected $nombre;

    /**
     * @var string
     */
    protected $descripcion;

    /**
     * @var string
     */
    protected $duracion;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    protected $usuarios;

    /**
     * @var \Planner\Bundle\Entity\User
     */
    protected $usuarioPropietario;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    protected $tareas;


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
     * @return Tarea
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
     * Set generadaAutomaticamente
     *
     * @param boolean $generadaAutomaticamente
     * @return Tarea
     */
    public function setGeneradaAutomaticamente($generadaAutomaticamente)
    {
        $this->generadaAutomaticamente = $generadaAutomaticamente;

        return $this;
    }

    /**
     * Get generadaAutomaticamente
     *
     * @return boolean 
     */
    public function getGeneradaAutomaticamente()
    {
        return $this->generadaAutomaticamente;
    }

    /**
     * Set deadLine
     *
     * @param \DateTime $deadLine
     * @return Tarea
     */
    public function setDeadLine($deadLine)
    {
        $this->deadLine = $deadLine;

        return $this;
    }

    /**
     * Get deadLine
     *
     * @return \DateTime 
     */
    public function getDeadLine()
    {
        return $this->deadLine;
    }

    /**
     * Set nombre
     *
     * @param string $nombre
     * @return Tarea
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
     * Set descripcion
     *
     * @param string $descripcion
     * @return Tarea
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
     * Set duracion
     *
     * @param string $duracion
     * @return Tarea
     */
    public function setDuracion($duracion)
    {
        $this->duracion = $duracion;

        return $this;
    }

    /**
     * Get duracion
     *
     * @return string 
     */
    public function getDuracion()
    {
        return $this->duracion;
    }

    /**
     * Set objetivo
     *
     * @param \Planner\Bundle\Entity\Objetivo $objetivo
     * @return Tarea
     */
    public function setObjetivo(\Planner\Bundle\Entity\Objetivo $objetivo = null)
    {
        $this->objetivo = $objetivo;

        return $this;
    }

    /**
     * Get objetivo
     *
     * @return \Planner\Bundle\Entity\Objetivo 
     */
    public function getObjetivo()
    {
        return $this->objetivo;
    }

    /**
     * Add usuarios
     *
     * @param \Planner\Bundle\Entity\User $usuarios
     * @return Tarea
     */
    public function addUsuario(\Planner\Bundle\Entity\User $usuarios)
    {
        $this->usuarios[] = $usuarios;

        return $this;
    }

    /**
     * Remove usuarios
     *
     * @param \Planner\Bundle\Entity\User $usuarios
     */
    public function removeUsuario(\Planner\Bundle\Entity\User $usuarios)
    {
        $this->usuarios->removeElement($usuarios);
    }

    /**
     * Get usuarios
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getUsuarios()
    {
        return $this->usuarios;
    }

    /**
     * Set usuarioPropietario
     *
     * @param \Planner\Bundle\Entity\User $usuarioPropietario
     * @return Tarea
     */
    public function setUsuarioPropietario(\Planner\Bundle\Entity\User $usuarioPropietario = null)
    {
        $this->usuarioPropietario = $usuarioPropietario;

        return $this;
    }

    /**
     * Get usuarioPropietario
     *
     * @return \Planner\Bundle\Entity\User 
     */
    public function getUsuarioPropietario()
    {
        return $this->usuarioPropietario;
    }

    /**
     * Add tareas
     *
     * @param \Planner\Bundle\Entity\Tarea $tareas
     * @return Tarea
     */
    public function addTarea(\Planner\Bundle\Entity\Tarea $tareas)
    {
        $this->tareas[] = $tareas;

        return $this;
    }

    /**
     * Remove tareas
     *
     * @param \Planner\Bundle\Entity\Tarea $tareas
     */
    public function removeTarea(\Planner\Bundle\Entity\Tarea $tareas)
    {
        $this->tareas->removeElement($tareas);
    }

    /**
     * Get tareas
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getTareas()
    {
        return $this->tareas;
    }
}
