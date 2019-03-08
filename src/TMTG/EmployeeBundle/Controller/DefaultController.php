<?php

namespace TMTG\EmployeeBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{
    public function indexAction()
    {

        $em = $this->getDoctrine()->getManager();
        $logHistory = $em->getRepository("TMTGDatabaseBundle:TimeLog")->getDailyLog();
        date_default_timezone_set('America/Los_Angeles');
        $date = date('m/d/Y h:i:s a', time());
        var_dump($date);
        var_dump($logHistory);
//      Insert Code for display in table

        return $this->render(':default:index.html.twig', array('logHist'=>$logHistory));
    }

    public function logCheckAction(Request $request){


        //$employee = new Employee();
        $inputEmpID = $request->request->get('inputEmpId');
        $inputPIN = $request->request->get('inputPIN');
        $em = $this->getDoctrine()->getManager();

        var_dump($inputEmpID);
        var_dump($inputPIN);

        $pins = $em->getRepository("TMTGDatabaseBundle:Employee")->getPin($inputEmpID);
        //checking
        var_dump($pins[0]);

       if($pins[0]===$inputPIN){
           var_dump("HI");
           $employeeLog = $em->getRepository("TMTGDatabaseBundle:TimeLog")->getEmployeeLog($inputEmpID);
           var_dump($employeeLog);
       }


        date_default_timezone_set('America/Los_Angeles');
        $date = date('m/d/Y h:i:s a', time());
        var_dump($date);
        return $this->render('TMTGEmployeeBundle:Default:index.html.twig');


    }
}
