<?php

namespace App\Controller;


use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;

class HomeController
{
    /**
     * @Route("/")
     * @throws \InvalidArgumentException
     */
    public function homepage()
    {
        return new Response('It works!');
    }
}