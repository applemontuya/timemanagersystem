<?php

namespace TMTG\DatabaseBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TimeLog
 *
 * @ORM\Table(name="time_log", uniqueConstraints={@ORM\UniqueConstraint(name="status", columns={"id_log"})})
 * @ORM\Entity
 */
class TimeLog
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_log", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idLog;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date", type="date", nullable=true)
     */
    private $date;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="time_in_am", type="time", nullable=false)
     */
    private $timeInAm;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="time_out_am", type="time", nullable=false)
     */
    private $timeOutAm;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="time_in_pm", type="time", nullable=false)
     */
    private $timeInPm;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="time_out_pm", type="time", nullable=false)
     */
    private $timeOutPm;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_employee", type="integer", nullable=false)
     */
    private $idEmployee;

    /**
     * @var integer
     *
     * @ORM\Column(name="status", type="integer", nullable=false)
     */
    private $status;

    /**
     * @param int $idLog
     */
    public function setIdLog($idLog)
    {
        $this->idLog = $idLog;
    }

    /**
     * @param \DateTime $date
     */
    public function setDate($date)
    {
        $this->date = $date;
    }

    /**
     * @param \DateTime $timeInAm
     */
    public function setTimeInAm($timeInAm)
    {
        $this->timeInAm = $timeInAm;
    }

    /**
     * @param \DateTime $timeOutAm
     */
    public function setTimeOutAm($timeOutAm)
    {
        $this->timeOutAm = $timeOutAm;
    }

    /**
     * @param \DateTime $timeInPm
     */
    public function setTimeInPm($timeInPm)
    {
        $this->timeInPm = $timeInPm;
    }

    /**
     * @param \DateTime $timeOutPm
     */
    public function setTimeOutPm($timeOutPm)
    {
        $this->timeOutPm = $timeOutPm;
    }

    /**
     * @param int $idEmployee
     */
    public function setIdEmployee($idEmployee)
    {
        $this->idEmployee = $idEmployee;
    }

    /**
     * @param int $status
     */
    public function setStatus($status)
    {
        $this->status = $status;
    }


}

