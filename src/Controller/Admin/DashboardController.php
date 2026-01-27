<?php

namespace App\Controller\Admin;

use App\Controller\Admin\UserCrudController;
use App\Entity\Address;
use App\Entity\Audit;
use App\Entity\Customer;
use App\Entity\Invoice;
use App\Entity\Report;
use App\Entity\Role;
use App\Entity\Tax;
use App\Entity\User;
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

     $adminUrlGenerator = $this->container->get(AdminUrlGenerator::class);
     return $this->redirect($adminUrlGenerator->setController(UserCrudController::class)->generateUrl());

    }

    public function configureDashboard(): Dashboard
    {
        return Dashboard::new()
            ->setTitle('Cassandra Project');
    }

    public function configureMenuItems(): iterable
    {
        yield MenuItem::linkToCrud('Users', 'fas fa-user', User::class);
        yield MenuItem::linkToCrud('Roles', 'fas fa-socks', Role::class);
        yield MenuItem::linkToCrud('Audits', 'fas fa-hotel', Audit::class);
        yield MenuItem::linkToCrud('Reports', 'fas fa-pen', Report::class);
        yield MenuItem::linkToCrud('Customers', 'fas fa-users', Customer::class);
        yield MenuItem::linkToCrud('Addresses', 'fas fa-street-view', Address::class);
        yield MenuItem::linkToCrud('Invoices', 'fas  fa-file-invoice-dollar', Invoice::class);
        yield MenuItem::linkToCrud('Taxes', 'fas  fa-money-check', Tax::class);

    }
}
