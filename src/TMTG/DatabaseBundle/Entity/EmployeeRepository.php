<?php
/**
 * Created by PhpStorm.
 * User: amontuya
 * Date: 3/7/2019
 * Time: 11:45 AM
 */

namespace TMTG\DatabaseBundle\Entity;

use Doctrine\ORM\EntityRepository;
/**
/**
 * EmployeeRepository
 */
class EmployeeRepository extends EntityRepository
{

    /**
     * Return PIN of an Employee
     *
     *
     */
    public function getPin($empId){
        $qb = $this->_em->createQueryBuilder();
        $qb->select ('emp.pin')
            ->from ('TMTGDatabaseBundle:Employee', 'emp')
            ->where ('emp.idEmployee = :empId')
            ->setParameter('empId', $empId);

        return $qb->getQuery()->getResult();
    }


}