<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class indexController extends Controller
{
    /**
     *  @Route ("/")
    */
    public function index()
    {
        return $this->render('index/index.html.twig');
    }
}

