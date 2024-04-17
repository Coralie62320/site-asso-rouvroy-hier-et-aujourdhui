<?php

namespace App\Controller;

use App\Repository\PatrimoineDisparusRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class PatrimoineDisparusController extends AbstractController
{
    #[Route('/patrimoine-disparus', name: 'app_patrimoine_disparus')]
    // public function index(): Response
    // {
    //     return $this->render('patrimoine_disparus/index.html.twig', [
    //         'controller_name' => 'PatrimoineDisparusController',
    //     ]);
    // }

    public function index(PatrimoineDisparusRepository $repository): Response
    {
        $patrimoineDisparus = $repository->findAll();
        return $this->render('patrimoine_disparus/index.html.twig', [
            'PatrimoineDisparus' => $patrimoineDisparus,
        ]);
    }
}
