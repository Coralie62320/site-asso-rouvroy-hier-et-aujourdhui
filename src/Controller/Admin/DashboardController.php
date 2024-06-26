<?php

namespace App\Controller\Admin;

use App\Entity\Archives;
use App\Entity\Celestine;
use App\Entity\Galeries;
use App\Entity\Histoire;
use App\Entity\Monographie;
use App\Entity\PatrimoineCivil;
use App\Entity\PatrimoineDisparus;
use App\Entity\PatrimoineMonuments;
use App\Entity\PatrimoineReligieux;
use App\Entity\Personnages;
use EasyCorp\Bundle\EasyAdminBundle\Config\Dashboard;
use EasyCorp\Bundle\EasyAdminBundle\Config\MenuItem;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractDashboardController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DashboardController extends AbstractDashboardController
{
    #[Route('/admin', name: 'admin')]
    public function index(): Response
    {
        // return parent::index();

        // Option 1. You can make your dashboard redirect to some common page of your backend
        //
        // $adminUrlGenerator = $this->container->get(AdminUrlGenerator::class);
        // return $this->redirect($adminUrlGenerator->setController(OneOfYourCrudController::class)->generateUrl());

        // Option 2. You can make your dashboard redirect to different pages depending on the user
        //
        // if ('jane' === $this->getUser()->getUsername()) {
        //     return $this->redirect('...');
        // }

        // Option 3. You can render some custom template to display a proper dashboard with widgets, etc.
        // (tip: it's easier if your template extends from @EasyAdmin/page/content.html.twig)
        //
        return $this->render('admin/index.html.twig');
    }

    public function configureDashboard(): Dashboard
    {
        return Dashboard::new()
            // ->setTitle("Association Rouvroy d'hier et d'aujourd'hui");
            ->setTitle("<img src='images/logo_rond_asso.png' class='img-fluid d-block mx-auto' style='max-width:100px; width:100%;'><h6 class='mt-3 fw-bold text-black text-center'>Association Rouvroy d'hier et d'aujourd'hui</h6>");
    }

    public function configureMenuItems(): iterable
    {
        yield MenuItem::linkToDashboard('Dashboard', 'fa fa-home');
        // yield MenuItem::linkToCrud('The Label', 'fas fa-list', EntityClass::class);

        yield MenuItem::section('Histoire de Rouvroy');
        yield MenuItem::linkToCrud('Histoire', 'fa-solid fa-landmark-dome', Histoire::class);

        yield MenuItem::section('Patrimoine Local');
        yield MenuItem::linkToCrud('Patrimoine civil', 'fa-solid fa-landmark', PatrimoineCivil::class);
        yield MenuItem::linkToCrud('Patrimoine religieux', 'fa-solid fa-church', PatrimoineReligieux::class);
        yield MenuItem::linkToCrud('Patrimoine Les monuments', 'fa-solid fa-monument', PatrimoineMonuments::class);
        yield MenuItem::linkToCrud('Patrimoine disparus', 'fa-solid fa-archway', PatrimoineDisparus::class);

        yield MenuItem::section('Personnages');
        yield MenuItem::linkToCrud('Personnages', 'fa-solid fa-user', Personnages::class);

        yield MenuItem::section('Monographie');
        yield MenuItem::linkToCrud('Monographie', 'fa-solid fa-book', Monographie::class);

        yield MenuItem::section('Célestine');
        yield MenuItem::linkToCrud('Célestine, géante de Rouvroy', 'fa-solid fa-person-walking-with-cane', Celestine::class);


        yield MenuItem::section('Archives');
        yield MenuItem::linkToCrud('Archives', 'fa-solid fa-box-archive', Archives::class);

        yield MenuItem::section('Galeries');
        yield MenuItem::linkToCrud('Galeries', 'fa-solid fa-image', Galeries::class);
    }
}
