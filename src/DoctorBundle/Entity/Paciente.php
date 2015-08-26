<?php

namespace DoctorBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Paciente
 */
class Paciente
{
    /**
     * @var string
     */
    private $nombre;

    /**
     * @var integer
     */
    private $telefono;

    /**
     * @var string
     */
    private $tratamiento;

    /**
     * @var string
     */
    private $comentarios;

    /**
     * @var integer
     */
    private $edad;

    /**
     * @var integer
     */
    private $idpaciente;


    /**
     * Set nombre
     *
     * @param string $nombre
     * @return Paciente
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
     * Set telefono
     *
     * @param integer $telefono
     * @return Paciente
     */
    public function setTelefono($telefono)
    {
        $this->telefono = $telefono;

        return $this;
    }

    /**
     * Get telefono
     *
     * @return integer 
     */
    public function getTelefono()
    {
        return $this->telefono;
    }

    /**
     * Set tratamiento
     *
     * @param string $tratamiento
     * @return Paciente
     */
    public function setTratamiento($tratamiento)
    {
        $this->tratamiento = $tratamiento;

        return $this;
    }

    /**
     * Get tratamiento
     *
     * @return string 
     */
    public function getTratamiento()
    {
        return $this->tratamiento;
    }

    /**
     * Set comentarios
     *
     * @param string $comentarios
     * @return Paciente
     */
    public function setComentarios($comentarios)
    {
        $this->comentarios = $comentarios;

        return $this;
    }

    /**
     * Get comentarios
     *
     * @return string 
     */
    public function getComentarios()
    {
        return $this->comentarios;
    }

    /**
     * Set edad
     *
     * @param integer $edad
     * @return Paciente
     */
    public function setEdad($edad)
    {
        $this->edad = $edad;

        return $this;
    }

    /**
     * Get edad
     *
     * @return integer 
     */
    public function getEdad()
    {
        return $this->edad;
    }

    /**
     * Get idpaciente
     *
     * @return integer 
     */
    public function getIdpaciente()
    {
        return $this->idpaciente;
    }
}
