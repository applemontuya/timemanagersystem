<?php

namespace TMTG\EmployeeBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use TMTG\DatabaseBundle\Entity\Employee;
use TMTG\DatabaseBundle\Entity\EmployeeRepository;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render(':default:index.html.twig');
    }

    public function logCheckAction(Request $request){



        $employee = new Employee();
        $inputEmpID = $request->request->get('inputEmpId');
        $inputPIN = $request->request->get('inputPIN');
        $em = $this->getDoctrine()->getManager();

        var_dump($inputEmpID);
        var_dump($inputPIN);
        // on selectionne toutes les tasks du contact
        //$allTasks = $em->getRepository("TMTGIPDataBaseBundle:LinkTask")->getLinkTasksHistoryByUser($user);

        $pins = $em->getRepository("TMTGDatabaseBundle:Employee")->getPin($inputEmpID);
        foreach($pins as $pin)
            var_dump($pin);


        return $this->render('TMTGEmployeeBundle:Default:index.html.twig');
//        $employee = new Employee();
//        $employee->setFName('Apple');
//        $employee->setLname('Montuya');
//        $employee->setPIN(0404);
//        $employee->setHourlyRate(40);
//        $employee->setIdTimecard(1);
//        $employee->setIdRole(1);
//
//        $em = $this->get('doctrine')->getManager();
//        $em->persist($employee);
//        $em->flush();
//        return $this->render('TMTGEmployeeBundle:Default:index.html.twig');


    }
}
