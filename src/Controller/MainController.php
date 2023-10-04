<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class MainController extends AbstractController
{

    /* PAGE D'ACCUEIL*/
    /**
     * * @Route("/", name="app_main_home")
     * */
    public function home():Response
    {
        return $this->render('main/home.html.twig');
    }

    /* PAGE DE TEST*/
    /**
     * * @Route("/main", name="app_main_test")
     * */
    public function test():Response
    {
        return $this->render('main/test.html.twig');
    }

}