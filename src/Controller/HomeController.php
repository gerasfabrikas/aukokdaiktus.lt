<?php

namespace App\Controller;


use App\Repository\NeedRepository;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;

class HomeController extends AbstractController
{
    /**
     * @Route("/", name="app_homepage")
     * @throws \InvalidArgumentException
     */
    public function homepage(NeedRepository $needRepository)
    {
        $needsFulfilledCount = $needRepository->getCountOfFulfilledAndNotDeletedNeedsOfTypeThings();

        return $this->render('base.html.twig', [
            'needsFulfilledCount' => $needsFulfilledCount,
        ]);
    }
}