<?php

namespace App\Controller;

use App\Repository\PatrimoineMonumentsRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class PatrimoineMonumentsController extends AbstractController
{
    #[Route('/patrimoine-monuments', name: 'app_patrimoine_monuments')]
    // public function index(): Response
    // {
    //     return $this->render('patrimoine_monuments/index.html.twig', [
    //         'controller_name' => 'PatrimoineMonumentsController',
    //     ]);
    // }

    public function index(PatrimoineMonumentsRepository $repository): Response
    {
        $patrimoineMonuments = $repository->findAll();
        return $this->render('patrimoine_monuments/index.html.twig', [
            'PatrimoineMonuments' => $patrimoineMonuments,
        ]);
    }
}
