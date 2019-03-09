<?php

namespace TMTG\DatabaseBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Employee
 *
 * @ORM\Table(name="employee")
 * @ORM\Entity
 */
class Employee
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_employee", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idEmployee;

    /**
     * @var string
     *
     * @ORM\Column(name="fname", type="string", length=50, nullable=false)
     */
    private $fname;

    /**
     * @var string
     *
     * @ORM\Column(name="lname", type="string", length=50, nullable=false)
     */
    private $lname;

    /**
     * @var integer
     *
     * @ORM\Column(name="pin", type="integer", nullable=false)
     */
    private $pin;

    /**
     * @var string
     *
     * @ORM\Column(name="hourly_rate", type="decimal", precision=10, scale=0, nullable=false)
     */
    private $hourlyRate;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_timecard", type="integer", nullable=false)
     */
    private $idTimecard;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_role", type="integer", nullable=false)
     */
    private $idRole;


}

