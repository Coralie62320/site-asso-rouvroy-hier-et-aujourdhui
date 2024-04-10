<?php

namespace App\Controller;

use App\Repository\PatrimoineReligieuxRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class PatrimoineReligieuxController extends AbstractController
{
    #[Route('/patrimoine-religieux', name: 'app_patrimoine_religieux')]
    // public function index(): Response
    // {
    //     return $this->render('patrimoine_religieux/index.html.twig', [
    //         'controller_name' => 'PatrimoineReligieuxController',
    //     ]);
    // }

    public function index(PatrimoineReligieuxRepository $repository): Response
    {
        $patrimoineReligieux = $repository->findAll();

        return $this->render('patrimoine_religieux/index.html.twig', [
            'PatrimoineReligieux' => $patrimoineReligieux,
        ]);
    }
}
