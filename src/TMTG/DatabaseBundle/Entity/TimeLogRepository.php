<?php
/**
 * Created by PhpStorm.
 * User: amontuya
 * Date: 3/7/2019
 * Time: 4:16 PM
 */

namespace TMTG\DatabaseBundle\Entity;

use Doctrine\ORM\EntityRepository;

/**
 * TimeLogRepository
 */
class TimeLogRepository extends EntityRepository
{
    /**
     * @return mixed
     */
    public function getDailyLog(){
        $qb = $this->_em->createQueryBuilder();
        $qb->select ('tl.idEmployee','tl.timeInAm','tl.timeOutAm', 'tl.timeInPm','tl.timeOutPm')
            ->from ('TMTGDatabaseBundle:TimeLog', 'tl');

        var_dump($qb->getQuery()->getResult());
        return $qb->getQuery()->getResult();
    }

    /**
     * @param type $empId
     */
    public function getEmployeeLog($empId){
        $qb = $this->_em->createQueryBuilder();
        $qb->select ('tl.idEmployee','tl.timeInAm','tl.timeOutAm', 'tl.timeInPm','tl.timeOutPm')
            ->from ('TMTGDatabaseBundle:TimeLog', 'tl')
            ->where('tl.idEmployee = :empId')
            ->setParameter('empId', $empId);

        var_dump($qb->getQuery()->getResult());
        return $qb->getQuery()->getResult();
    }

}