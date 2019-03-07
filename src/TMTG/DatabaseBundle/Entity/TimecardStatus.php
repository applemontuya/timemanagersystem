<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TimecardStatus
 *
 * @ORM\Table(name="timecard_status")
 * @ORM\Entity
 */
class TimecardStatus
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_status", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idStatus;

    /**
     * @var integer
     *
     * @ORM\Column(name="status", type="integer", nullable=false)
     */
    private $status;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_approved", type="datetime", nullable=false)
     */
    private $dateApproved = 'CURRENT_TIMESTAMP';

    /**
     * @var string
     *
     * @ORM\Column(name="approved_by", type="string", length=50, nullable=false)
     */
    private $approvedBy;

    /**
     * @return int
     */
    public function getIdStatus()
    {
        return $this->idStatus;
    }

    /**
     * @param int $idStatus
     */
    public function setIdStatus($idStatus)
    {
        $this->idStatus = $idStatus;
    }

    /**
     * @return int
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * @param int $status
     */
    public function setStatus($status)
    {
        $this->status = $status;
    }

    /**
     * @return \DateTime
     */
    public function getDateApproved()
    {
        return $this->dateApproved;
    }

    /**
     * @param \DateTime $dateApproved
     */
    public function setDateApproved($dateApproved)
    {
        $this->dateApproved = $dateApproved;
    }

    /**
     * @return string
     */
    public function getApprovedBy()
    {
        return $this->approvedBy;
    }

    /**
     * @param string $approvedBy
     */
    public function setApprovedBy($approvedBy)
    {
        $this->approvedBy = $approvedBy;
    }


}

