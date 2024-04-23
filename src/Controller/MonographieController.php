<?php

namespace App\Controller;

use App\Repository\MonographieRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class MonographieController extends AbstractController
{
    #[Route('/monographie', name: 'app_monographie')]
    // public function index(): Response
    // {
    //     return $this->render('monographie/index.html.twig', [
    //         'controller_name' => 'MonographieController',
    //     ]);
    // }

    public function index(MonographieRepository $repository): Response
    {
        $monographie = $repository->findAll();
        return $this->render('monographie/index.html.twig', [
            'Monographie' => $monographie,
        ]);
    }
}
