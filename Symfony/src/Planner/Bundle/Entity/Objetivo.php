<?php

// src/Acme/UserBundle/Entity/Objetivo.php

namespace Planner\Bundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\ORM\Mapping\OneToMany;
use Doctrine\ORM\Mapping\ManyToMany;
use Doctrine\ORM\Mapping\JoinColumn;
use Doctrine\ORM\Mapping\JoinTable;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * @ORM\Entity
 * @ORM\Table(name="objetivo")
 */
class Objetivo {

    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @var date $deadLine
     *
     * @ORM\Column(name="deadLine", type="date", nullable=true)
     */
    protected $deadLine;

    /**
     * @var string $nombre
     *
     * @ORM\Column(name="nombre", type="string", nullable=true)
     */
    protected $nombre;

    /**
     * @var string $descripcion
     *
     * @ORM\Column(name="descripcion", type="string", nullable=true)
     */
    protected $descripcion;

    /**
     * @var int $duracion
     *
     * @ORM\Column(name="duracion", type="string", nullable=true)
     */
    protected $duracion;
    
    /**
     *  @ManyToMany(targetEntity="Planner\Bundle\Entity\User")
     *  @JoinTable(name="tareas_usuarios",
     *      joinColumns={@JoinColumn(name="tarea_id", referencedColumnName="id")},
     *      inverseJoinColumns={@JoinColumn(name="user_id", referencedColumnName="id", unique=true)}
     *      )
     */
    protected $usuarios;

    /**
     *  @ORM\ManyToOne(targetEntity="Planner\Bundle\Entity\User",cascade={"persist", "remove"})
     */
    protected $usuarioPropietario;
    
    /**
     * @OneToMany(targetEntity="Tarea", mappedBy="objetivo")
     **/
    protected $tareas;


    public function __construct() {
        $this->usuarios = new \Doctrine\Common\Collections\ArrayCollection();
        $this->usuarioPropietario = new \Doctrine\Common\Collections\ArrayCollection();
        $this->objetivo = new \Doctrine\Common\Collections\ArrayCollection();
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
     * Set deadLine
     *
     * @param \DateTime $deadLine
     * @return Objetivo
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
     * @return Objetivo
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
     * @return Objetivo
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
     * @return Objetivo
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
     * Add usuarios
     *
     * @param \Planner\Bundle\Entity\User $usuarios
     * @return Objetivo
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
     * @return Objetivo
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
     * @return Objetivo
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
