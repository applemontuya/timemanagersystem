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


}

