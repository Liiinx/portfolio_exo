<?php

namespace App\Controller\Admin;

use App\Entity\Education;
use App\Entity\Hobby;
use App\Entity\ProfessionnalExperience;
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
        return parent::index();
    }

    public function configureDashboard(): Dashboard
    {
        return Dashboard::new()
            ->setTitle('Portfolio Exo');
    }

    public function configureMenuItems(): iterable
    {
        yield MenuItem::linktoDashboard('Dashboard', 'fa fa-home');
        yield MenuItem::linkToCrud('Educations', 'fas fa-list', Education::class);
        yield MenuItem::linkToCrud('Experiences pro', 'fas fa-list', ProfessionnalExperience::class);
        yield MenuItem::linkToCrud('Hobbies', 'fas fa-list', Hobby::class);
    }
}
