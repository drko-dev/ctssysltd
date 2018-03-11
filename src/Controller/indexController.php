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
        $template = <<<EOD
    <!DOCTYPE html>
    <html>
    <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>CTSSYSLTD</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.6.2/css/bulma.min.css">
    </head>
        <body>
            <section class="section">
                <div class="container">
                <h1 class="title">
                CTSSYSLTD.
                </h1>
                <p class="subtitle">
                En contrucción
                </p>
                </div>
            </section>
        </body>
    </html>
EOD;

        return new Response($template);
    }
}