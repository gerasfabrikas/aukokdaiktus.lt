<?php

namespace App\Controller;


use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;

class HomeController extends AbstractController
{
    /**
     * @Route("/", name="app_homepage")
     * @throws \InvalidArgumentException
     */
    public function homepage()
    {
        return $this->render('base.html.twig');
    }
}