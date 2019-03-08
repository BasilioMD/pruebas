<?php
/**
 * Class Usuario
 * Clase encargada de gestionar los usuarios.
 * @author: bmd
 * @version: 1.0
 * @date: 8/03/19
 */

abstract class Usuario
{
    private $id;
    private $nombre;
    private $apellido_paterno;
    private $apellido_materno;

    /**
     * Usuario constructor.
     * @param $id
     * @param $nombre
     * @param $apellido_paterno
     * @param $apellido_materno
     */
    public function __construct($id, $nombre, $apellido_paterno, $apellido_materno)
    {
        $this->id = $id;
        $this->nombre = $nombre;
        $this->apellido_paterno = $apellido_paterno;
        $this->apellido_materno = $apellido_materno;
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getNombre()
    {
        return $this->nombre;
    }

    /**
     * @param mixed $nombre
     */
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;
    }

    /**
     * @return mixed
     */
    public function getApellidoPaterno()
    {
        return $this->apellido_paterno;
    }

    /**
     * @param mixed $apellido_paterno
     */
    public function setApellidoPaterno($apellido_paterno)
    {
        $this->apellido_paterno = $apellido_paterno;
    }

    /**
     * @return mixed
     */
    public function getApellidoMaterno()
    {
        return $this->apellido_materno;
    }

    /**
     * @param mixed $apellido_materno
     */
    public function setApellidoMaterno($apellido_materno)
    {
        $this->apellido_materno = $apellido_materno;
    }

}