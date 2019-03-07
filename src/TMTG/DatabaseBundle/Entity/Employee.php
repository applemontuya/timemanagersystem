<?php

namespace  TMTG\DatabaseBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Employee
 *
 * @ORM\Table(name="employee")
 * @ORM\Entity(repositoryClass="TMTG\DatabaseBundle\Entity\EmployeeRepository")
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

    /**
     * @return int
     */
    public function getIdEmployee()
    {
        return $this->idEmployee;
    }

    /**
     * @param int $idEmployee
     */
    public function setIdEmployee($idEmployee)
    {
        $this->idEmployee = $idEmployee;
    }

    /**
     * @return string
     */
    public function getFname()
    {
        return $this->fname;
    }

    /**
     * @param string $fname
     */
    public function setFname($fname)
    {
        $this->fname = $fname;
    }

    /**
     * @return string
     */
    public function getLname()
    {
        return $this->lname;
    }

    /**
     * @param string $lname
     */
    public function setLname($lname)
    {
        $this->lname = $lname;
    }

    /**
     * @return int
     */
    public function getPin()
    {
        return $this->pin;
    }

    /**
     * @param int $pin
     */
    public function setPin($pin)
    {
        $this->pin = $pin;
    }

    /**
     * @return string
     */
    public function getHourlyRate()
    {
        return $this->hourlyRate;
    }

    /**
     * @param string $hourlyRate
     */
    public function setHourlyRate($hourlyRate)
    {
        $this->hourlyRate = $hourlyRate;
    }

    /**
     * @return int
     */
    public function getIdTimecard()
    {
        return $this->idTimecard;
    }

    /**
     * @param int $idTimecard
     */
    public function setIdTimecard($idTimecard)
    {
        $this->idTimecard = $idTimecard;
    }

    /**
     * @return int
     */
    public function getIdRole()
    {
        return $this->idRole;
    }

    /**
     * @param int $idRole
     */
    public function setIdRole($idRole)
    {
        $this->idRole = $idRole;
    }


}

