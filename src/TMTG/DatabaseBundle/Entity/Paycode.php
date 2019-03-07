<?php

namespace TMTG\DatabaseBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Paycode
 *
 * @ORM\Table(name="paycode")
 * @ORM\Entity
 */
class Paycode
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_paycode", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idPaycode;

    /**
     * @var integer
     *
     * @ORM\Column(name="paycode", type="integer", nullable=false)
     */
    private $paycode;

    /**
     * @var integer
     *
     * @ORM\Column(name="description", type="integer", nullable=false)
     */
    private $description;

    /**
     * @return int
     */
    public function getIdPaycode()
    {
        return $this->idPaycode;
    }

    /**
     * @param int $idPaycode
     */
    public function setIdPaycode($idPaycode)
    {
        $this->idPaycode = $idPaycode;
    }

    /**
     * @return int
     */
    public function getPaycode()
    {
        return $this->paycode;
    }

    /**
     * @param int $paycode
     */
    public function setPaycode($paycode)
    {
        $this->paycode = $paycode;
    }

    /**
     * @return int
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param int $description
     */
    public function setDescription($description)
    {
        $this->description = $description;
    }


}

