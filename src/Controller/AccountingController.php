<?php

namespace App\Controller;

use App\Entity\User;
use App\Entity\Order;
use App\Form\AccountingType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Accounting; 
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class AccountingController extends AbstractController
{
    private $entityManager;

    public function __construct(EntityManagerInterface $entityManager)
    {
        $this->entityManager = $entityManager;
    }

    #[Route('/Comptabilité', name: 'app_accounting')]
    public function index(Request $request): Response
    {
        $users = $this->entityManager->getRepository(User::class)->findAll();
        // $orders = $this->entityManager->getRepository(Order::class)->findByUser($users);
        $orders = $this->entityManager->getRepository(Order::class)->findAll();

        $manualOrders = $this->entityManager->getRepository(Accounting::class)->findAll();
        $accounting = new Accounting();

        
        $accountingForm = $this->createForm(AccountingType::class, $accounting);
        $accountingForm->handleRequest($request);

        if ($accountingForm->isSubmitted() && $accountingForm->isValid()) {
            $accountingData = $accountingForm->getData();

            $this->entityManager->persist($accountingData);
            $this->entityManager->flush();

            return $this->redirectToRoute('app_accounting');
        }

        return $this->render('account/accounting.html.twig', [
            'orders' => $orders,
            'users' => $users,
            'accountingForm' => $accountingForm->createView(),
            'manualOrders' => $manualOrders
        ]);
    }
}