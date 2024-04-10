<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class PatrimoineLocalController extends AbstractController
{
    #[Route('/patrimoine-local', name: 'app_patrimoine_local')]
    public function index(): Response
    {
        return $this->render('patrimoine_local/index.html.twig', [
            'controller_name' => 'PatrimoineLocalController',
        ]);
    }
}
