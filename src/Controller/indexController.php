<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class indexController
{
    /**
     * @Route("/")
    */
    public function index()
    {
        return new Response(
            '<html><body>CTSSYSLTD.  en contrucción</body></html>'
        );
    }
}