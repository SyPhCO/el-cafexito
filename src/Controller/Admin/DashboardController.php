<?php

namespace App\Controller\Admin;

use App\Entity\Team;
use App\Entity\User;
use App\Entity\Movie;
use App\Entity\Order;
use App\Entity\Header;
use App\Entity\Slider;
use App\Entity\Carrier;
use App\Entity\Gallery;
use App\Entity\Product;
use App\Entity\Category;
use App\Entity\Comments;
use App\Entity\LandingPage;
use App\Controller\Admin\UserCrudController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use EasyCorp\Bundle\EasyAdminBundle\Config\Crud;
use EasyCorp\Bundle\EasyAdminBundle\Config\MenuItem;
use EasyCorp\Bundle\EasyAdminBundle\Config\Dashboard;
use EasyCorp\Bundle\EasyAdminBundle\Router\AdminUrlGenerator;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractDashboardController;

class DashboardController extends AbstractDashboardController
{
    #[Route('/admin', name: 'admin')]
    public function index(): Response
    {

        // Option 1. You can make your dashboard redirect to some common page of your backend
        //
        $adminUrlGenerator = $this->container->get(AdminUrlGenerator::class);
        return $this->redirect($adminUrlGenerator->setController(UserCrudController::class)->generateUrl());

        // Option 2. You can make your dashboard redirect to different pages depending on the user
        //
        // if ('jane' === $this->getUser()->getUsername()) {
        //     return $this->redirect('...');
        // }

        // Option 3. You can render some custom template to display a proper dashboard with widgets, etc.
        // (tip: it's easier if your template extends from @EasyAdmin/page/content.html.twig)
        //
        // return $this->render('some/path/my-dashboard.html.twig');
    }

    public function configureDashboard(): Dashboard
    {
        return Dashboard::new()
            ->setTitle('El Cafexito')
            ->renderContentMaximized();
            
    }
public function configureCrud(): Crud
{
    return parent::configureCrud()
    ->renderContentMaximized()
    ->showEntityActionsInlined();
}

    public function configureMenuItems(): iterable
    {
        yield MenuItem::linkToUrl('Retour au site', 'fas fa-home', '/compte');
        
        yield MenuItem::subMenu('Café', 'fas fa-mug-hot')->setSubItems([
            MenuItem::linkToCrud('Produits', 'fas fa-tag', Product::class),
            MenuItem::linkToCrud('Gestion Commentaires', 'fa fa-comments', Comments::class)
      ]);
        yield MenuItem::subMenu('E-commerce', 'fas fa-shop')->setSubItems([
              MenuItem::linkToCrud('Utilisateurs', 'fas fa-user', User::class),
              MenuItem::linkToCrud('Catégories', 'fas fa-list', Category::class),
              MenuItem::linkToCrud('Transporteur', 'fas fa-truck', Carrier::class),
              MenuItem::linkToCrud('Commandes', 'fas fa-shopping-cart', Order::class)
        ]);
        yield MenuItem::subMenu('Front CMS', 'fas fa-pencil')->setSubItems([
            MenuItem::linkToCrud('Caroussel', 'fa fa-repeat', Header::class),
            MenuItem::linkToCrud('Galerie', 'fa fa-image', Gallery::class),
            MenuItem::linkToCrud('Film', 'fa fa-video', Movie::class),
            MenuItem::linkToCrud('Equipe', 'fa fa-person', Team::class),
            MenuItem::linkToCrud('Slider', 'fa fa-sliders', Slider::class),
            MenuItem::linkToCrud('Page d acceuil', 'fa fa-rocket', LandingPage::class),

        ]);







    }
}
