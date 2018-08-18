<?php

namespace App\Controller;


use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;

class ArticlesController
{
    /**
     * @Route("/naujienos")
     */
    public function index()
    {
        return new Response("Index page for Articles");
    }

    /**
     * @Route("/naujienos/{slug}")
     */
    public function show(string $slug)
    {
        return new Response(sprintf("One article page: %s",
            $slug
        ));
    }
}