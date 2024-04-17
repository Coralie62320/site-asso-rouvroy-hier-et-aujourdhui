<?php

namespace App\Controller;

use App\Repository\PatrimoineCivilRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class PatrimoineCivilController extends AbstractController
{
    #[Route('/patrimoine-civil', name: 'app_patrimoine_civil')]
    // public function index(): Response
    // {
    //     return $this->render('patrimoine_civil/index.html.twig', [
    //         'controller_name' => 'PatrimoineCivilController',
    //     ]);
    // }

    public function index(PatrimoineCivilRepository $repository): Response
    {
        $patrimoineCivil = $repository->findAll();
        return $this->render('patrimoine_civil/index.html.twig', [
            'PatrimoineCivil' => $patrimoineCivil,
        ]);
    }
}
