<?php

namespace App\Controller;


use Psr\Log\LoggerInterface;
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
     * @Route("/naujienos/{slug}", name="article_show")
     */
    public function show(string $slug, LoggerInterface $logger)
    {
        $comments = [
            'Random comment #1',
            'Random comment #2',
            'Random comment #3',
        ];

        $logger->info(sprintf("Just testing: %s", $slug));

        return $this->render('article/show.html.twig', [
            'title' => ucwords(str_replace('-', ' ', $slug)),
            'comments' => $comments,
        ]);
    }
}