<?php

namespace App\Controller;

use App\Classe\Cart;
use App\Classe\Mail;
use App\Entity\Order;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class OrderSuccessController extends AbstractController
{
  
    #[Route('/commande/merci/{stripeSessionId}', name: 'app_order_validate')]
    public function index(EntityManagerInterface $entityManager,Cart $cart,$stripeSessionId): Response
    {
        $order = $entityManager->getRepository(Order::class)->findOneBy(['StripeSessionId' => $stripeSessionId]);

        if(!$order || $order->getUser() != $this->getUser()){
            return $this->redirectToRoute('app_home');
        }

        if ($order->getState() == 0){
            $cart->remove();

             $order->setState(1);
             $entityManager->flush();

            //  $mail = new Mail();
            //  $content = "Bonjour".$order->getUser()->getFirstname()."<br/>Votre commande a bien été passé, merci de votre confiance je la traiterai dans les plus bref délais.<br/> Fabien";
            //  $mail->send($order->getUser()->getEmail(), $order->getUser()->getFirstname(), 'Votre commande sur El Cafexito est bien validée', $content);


        return $this->render('order_success/index.html.twig', [
            'order' =>$order
        ]);
    }
}
}