<?php

namespace App\Controller;


use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;

class ArticlesController extends AbstractController
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
        $comments = [
            'Random comment #1',
            'Random comment #2',
            'Random comment #3',
        ];


        return $this->render('article/show.html.twig', [
            'title' => ucwords(str_replace('-', ' ', $slug)),
            'comments' => $comments,
        ]);
    }
}