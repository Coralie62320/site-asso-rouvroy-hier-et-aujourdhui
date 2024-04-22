<?php

namespace App\Controller;

use App\Repository\HistoireRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class HistoireController extends AbstractController
{
    #[Route('/histoire', name: 'app_histoire')]
    // public function index(): Response
    // {
    //     return $this->render('histoire/index.html.twig', [
    //         'controller_name' => 'HistoireController',
    //     ]);
    // }

    public function index(HistoireRepository $repository): Response
    {
        $histoire = $repository->findAll();
        return $this->render('histoire/index.html.twig', [
            'Histoire' => $histoire,
        ]);
    }
}
