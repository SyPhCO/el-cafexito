<?php

namespace App\Controller;

use App\Entity\Header;
use App\Entity\LandingPage;
use App\Entity\Product;
// use App\Entity\Movie;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class HomeController extends AbstractController
{

    private $entityManager; 

    public function __construct(EntityManagerInterface $entityManager)
    {
        $this->entityManager = $entityManager;
    }

    #[Route('/', name: 'app_home')]
    public function index(): Response
    {

        $products = $this->entityManager->getRepository(Product::class)->findByIsBest(1);
        $headers = $this->entityManager->getRepository(Header::class)->findAll();
        $article = $this->entityManager->getRepository(LandingPage::class)->findAll();
        // $movies = $this->entityManager->getRepository(Movie::class)->findByIsBest(1)   à rajouter si fabien veut mettre une vidéo promo sur la page d'acceuil 

        return $this->render('home/index.html.twig', [
            'products' => $products,
            'headers' => $headers,
            'landingPage' => $article
            // 'movies' => $movies
        ]);
    }
}
