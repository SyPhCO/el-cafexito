<?php

namespace App\Controller;

use App\Entity\Slider;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Doctrine\ORM\EntityManagerInterface;


class CaucaController extends AbstractController
{
        private $entityManager;

        public function __construct(EntityManagerInterface $entityManager){
           $this->entityManager = $entityManager;
        }

    #[Route('/cauca', name: 'app_cauca')]
    public function index(): Response
    {

        $sliders = $this->entityManager->getRepository(Slider::class)->findAll();

        return $this->render('cauca/index.html.twig', [
            'sliders' => $sliders
        ]);
    }
}
