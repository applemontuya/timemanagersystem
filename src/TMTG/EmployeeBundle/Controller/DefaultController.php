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


        //Step 1: Get credentials
        $inputEmpID = $request->request->get('inputEmpId');
        $inputPIN = $request->request->get('inputPIN');
        //Step 2: Check credentials
        $em = $this->getDoctrine()->getManager();
        $pins = $em->getRepository("TMTGDatabaseBundle:Employee")->getPin($inputEmpID);
        //Step 3: Check db if empID and currentdate exist ;
        //date_default_timezone_set('America/Los_Angeles');
        $currentDate = date('m/d/Y', time());
        $currentTime = date("H:i:s");
        $status = $em->getRepository("TMTGDatabaseBundle:TimeLog")->getEmployeeLogStatus($inputEmpID,$currentDate);
        switch($status){
            case '1':
                var_dump($currentTime);
                break;
            case '2':
                var_dump($currentTime);
                break;
            case '3':
                var_dump($currentTime);
                break;
            default:
                var_dump("Insert new entry");
        }
       if($pins==$inputPIN){
           var_dump("HI");
           $employeeLog = $em->getRepository("TMTGDatabaseBundle:TimeLog")->getEmployeeLog($inputEmpID);
           var_dump($employeeLog);
       }



        return $this->render('TMTGEmployeeBundle:Default:index.html.twig');


    }
}
