<?php

namespace DoctorBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * AtiendeA
 */
class AtiendeA
{
    /**
     * @var integer
     */
    private $idatiende;

    /**
     * @var \DoctorBundle\Entity\Paciente
     */
    private $idpac;

    /**
     * @var \DoctorBundle\Entity\Doctor
     */
    private $iddoc;


    /**
     * Get idatiende
     *
     * @return integer 
     */
    public function getIdatiende()
    {
        return $this->idatiende;
    }

    /**
     * Set idpac
     *
     * @param \DoctorBundle\Entity\Paciente $idpac
     * @return AtiendeA
     */
    public function setIdpac(\DoctorBundle\Entity\Paciente $idpac = null)
    {
        $this->idpac = $idpac;

        return $this;
    }

    /**
     * Get idpac
     *
     * @return \DoctorBundle\Entity\Paciente 
     */
    public function getIdpac()
    {
        return $this->idpac;
    }

    /**
     * Set iddoc
     *
     * @param \DoctorBundle\Entity\Doctor $iddoc
     * @return AtiendeA
     */
    public function setIddoc(\DoctorBundle\Entity\Doctor $iddoc = null)
    {
        $this->iddoc = $iddoc;

        return $this;
    }

    /**
     * Get iddoc
     *
     * @return \DoctorBundle\Entity\Doctor 
     */
    public function getIddoc()
    {
        return $this->iddoc;
    }
}
