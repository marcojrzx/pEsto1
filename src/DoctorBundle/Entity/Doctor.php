<?php

namespace DoctorBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Doctor
 */
class Doctor
{
    /**
     * @var string
     */
    private $nombre;

    /**
     * @var string
     */
    private $correo;

    /**
     * @var integer
     */
    private $pass;

    /**
     * @var integer
     */
    private $iddoctor;


    /**
     * Set nombre
     *
     * @param string $nombre
     * @return Doctor
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
     * Set correo
     *
     * @param string $correo
     * @return Doctor
     */
    public function setCorreo($correo)
    {
        $this->correo = $correo;

        return $this;
    }

    /**
     * Get correo
     *
     * @return string 
     */
    public function getCorreo()
    {
        return $this->correo;
    }

    /**
     * Set pass
     *
     * @param integer $pass
     * @return Doctor
     */
    public function setPass($pass)
    {
        $this->pass = $pass;

        return $this;
    }

    /**
     * Get pass
     *
     * @return integer 
     */
    public function getPass()
    {
        return $this->pass;
    }

    /**
     * Get iddoctor
     *
     * @return integer 
     */
    public function getIddoctor()
    {
        return $this->iddoctor;
    }
}
