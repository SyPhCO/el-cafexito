<?php

namespace App\Controller;

use App\Entity\Team;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class TeamController extends AbstractController
{

    private $entityManager;

    public function __construct(EntityManagerInterface $entityManager){
       $this->entityManager = $entityManager;
    }


    #[Route('/qui-sommes-nous', name: 'app_team')]
    public function index(): Response
    {

        $teams = $this->entityManager->getRepository(Team::class)->findAll();

        return $this->render('team/index.html.twig',[
            'teams' => $teams
        ] );
    }
}