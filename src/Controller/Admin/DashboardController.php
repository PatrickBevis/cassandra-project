<?php

namespace App\Controller\Admin;


use EasyCorp\Bundle\EasyAdminBundle\Attribute\AdminDashboard;
use EasyCorp\Bundle\EasyAdminBundle\Config\Dashboard;
use EasyCorp\Bundle\EasyAdminBundle\Config\MenuItem;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractDashboardController;
use EasyCorp\Bundle\EasyAdminBundle\Router\AdminUrlGenerator;
use Symfony\Component\HttpFoundation\Response;

#[AdminDashboard(routePath: '/admin', routeName: 'admin')]
class DashboardController extends AbstractDashboardController
{
    public function index(): Response
    {
        return parent::index();
    $url = $this->container->get(AdminUrlGenerator::class)
        ->setController(UserCrudController::class) 
        ->generateUrl();

    return $this->redirect($url);
    }

    public function configureDashboard(): Dashboard
    {
        return Dashboard::new()
            ->setTitle('Cassandra Project');
    }

    public function configureMenuItems(): iterable
    {
        yield MenuItem::linkToDashboard('Dashboard', 'fa fa-home');
        yield MenuItem::linkTo(AddressCrudController::class, 'Address');
        yield MenuItem::linkTo(UserCrudController::class, 'User');
        yield MenuItem::linkTo(CustomerCrudController::class, 'Customer');
        yield MenuItem::linkTo(InvoiceCrudController::class, 'Invoice');
        yield MenuItem::linkTo(ReportCrudController::class, 'Report');
        yield MenuItem::linkTo(TaxCrudController::class, 'Tax');
    }
}
