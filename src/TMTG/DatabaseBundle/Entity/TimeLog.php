<?php

namespace TMTG\DatabaseBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TimeLog
 *
 * @ORM\Table(name="time_log")
 * @ORM\Entity(repositoryClass="TMTG\DatabaseBundle\Entity\TimeLogRepository")
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
     * @ORM\Column(name="time_in_am", type="datetime", nullable=false)
     */
    private $timeInAm;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="time_out_am", type="datetime", nullable=false)
     */
    private $timeOutAm;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="time_in_pm", type="datetime", nullable=false)
     */
    private $timeInPm;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="time_out_pm", type="datetime", nullable=false)
     */
    private $timeOutPm;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_employee", type="integer", nullable=false)
     */
    private $idEmployee;

    /**
     * @return int
     */
    public function getIdLog()
    {
        return $this->idLog;
    }

    /**
     * @param int $idLog
     */
    public function setIdLog($idLog)
    {
        $this->idLog = $idLog;
    }

    /**
     * @return \DateTime
     */
    public function getTimeInAm()
    {
        return $this->timeInAm;
    }

    /**
     * @param \DateTime $timeInAm
     */
    public function setTimeInAm($timeInAm)
    {
        $this->timeInAm = $timeInAm;
    }

    /**
     * @return \DateTime
     */
    public function getTimeOutAm()
    {
        return $this->timeOutAm;
    }

    /**
     * @param \DateTime $timeOutAm
     */
    public function setTimeOutAm($timeOutAm)
    {
        $this->timeOutAm = $timeOutAm;
    }

    /**
     * @return \DateTime
     */
    public function getTimeInPm()
    {
        return $this->timeInPm;
    }

    /**
     * @param \DateTime $timeInPm
     */
    public function setTimeInPm($timeInPm)
    {
        $this->timeInPm = $timeInPm;
    }

    /**
     * @return \DateTime
     */
    public function getTimeOutPm()
    {
        return $this->timeOutPm;
    }

    /**
     * @param \DateTime $timeOutPm
     */
    public function setTimeOutPm($timeOutPm)
    {
        $this->timeOutPm = $timeOutPm;
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


}

