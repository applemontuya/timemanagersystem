<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Timecard
 *
 * @ORM\Table(name="timecard")
 * @ORM\Entity
 */
class Timecard
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_timecard", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idTimecard;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_employee", type="integer", nullable=false)
     */
    private $idEmployee;

    /**
     * @var integer
     *
     * @ORM\Column(name="total_hours", type="integer", nullable=false)
     */
    private $totalHours;

    /**
     * @var integer
     *
     * @ORM\Column(name="total_pay", type="integer", nullable=false)
     */
    private $totalPay;

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
     * @return int
     */
    public function getTotalHours()
    {
        return $this->totalHours;
    }

    /**
     * @param int $totalHours
     */
    public function setTotalHours($totalHours)
    {
        $this->totalHours = $totalHours;
    }

    /**
     * @return int
     */
    public function getTotalPay()
    {
        return $this->totalPay;
    }

    /**
     * @param int $totalPay
     */
    public function setTotalPay($totalPay)
    {
        $this->totalPay = $totalPay;
    }


}

