<?php

namespace App\Controller;

use App\Form\SearchType;
use App\Model\SearchData;
use App\Repository\ArchivesRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\Validator\Constraints\Required;

class ArchivesController extends AbstractController
{
    #[Route('/archives', name: 'app_archives')]
    // public function index(): Response
    // {
    //     return $this->render('archives/index.html.twig', [
    //         'controller_name' => 'ArchivesController',
    //     ]);
    // }

    public function index(ArchivesRepository $repository, Request $request): Response
    {
        $archives = $repository->findAll();
        return $this->render('archives/index.html.twig', [
            'Archives' => $archives,
        ]);
    }
}
