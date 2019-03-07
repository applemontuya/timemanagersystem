<?php

namespace TMTG\ManagerBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{

//    public function indexAction()
//    {
//        return $this->render('TMTGManagerBundle:Default:index.html.twig');
//    }

    public function loginAction(){

        return $this->render('TMTGManagerBundle:Default:login.html.twig');
    }

    public function loginCheckAction(){

        return $this->render('TMTGManagerBundle:Default:home.html.twig');
    }
}
