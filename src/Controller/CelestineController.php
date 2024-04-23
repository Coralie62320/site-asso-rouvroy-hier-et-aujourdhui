<?php

namespace App\Controller;

use App\Repository\CelestineRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class CelestineController extends AbstractController
{
    #[Route('/celestine', name: 'app_celestine')]
    // public function index(): Response
    // {
    //     return $this->render('celestine/index.html.twig', [
    //         'controller_name' => 'CelestineController',
    //     ]);
    // }

    public function index(CelestineRepository $repository): Response
    {
        $celestine = $repository->findAll();
        return $this->render('celestine/index.html.twig', [
            'Celestine' => $celestine,
        ]);
    }
}
