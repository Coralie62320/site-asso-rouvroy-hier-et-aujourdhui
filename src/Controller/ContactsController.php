<?php

namespace App\Controller;

use App\Form\ContactFormType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class ContactsController extends AbstractController
{
    #[Route('/contacts', name: 'app_contacts')]
    public function index(): Response
    {
        $form = $this->createForm(ContactFormType::class);
        return $this->render('contacts/index.html.twig', [
            'controller_name' => 'ContactsController',
            'Formulaire' => $form
        ]);
    }
}
