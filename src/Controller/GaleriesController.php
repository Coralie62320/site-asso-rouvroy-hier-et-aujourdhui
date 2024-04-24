<?php

namespace App\Controller;

use App\Repository\GaleriesRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class GaleriesController extends AbstractController
{
    #[Route('/galeries', name: 'app_galeries')]
    // public function index(): Response
    // {
    //     return $this->render('galeries/index.html.twig', [
    //         'controller_name' => 'GaleriesController',
    //     ]);
    // }

    public function index(GaleriesRepository $repository): Response
    {
        $galeries = $repository->findAll();
        return $this->render('galeries/index.html.twig', [
            'Galeries' => $galeries,
        ]);
    }
}
