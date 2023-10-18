<?php
 
 namespace App\Controller;

use App\Classe\Mail;
 use App\Form\RegisterType;
 use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
 use Doctrine\ORM\EntityManagerInterface;
 use Symfony\Component\HttpFoundation\Request;
 use Symfony\Component\HttpFoundation\Response;
use App\Entity\User;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;
  
 class RegisterController extends AbstractController
 {
     private $entityManager;
  
     public function __construct(EntityManagerInterface $entityManager){
         $this->entityManager = $entityManager;
     }
     
     #[Route('/inscription', name: 'app_register')]
     public function index(Request $request, UserPasswordHasherInterface $hasher): Response
     {
        $notification = null; 
         $user =new User();
         $form = $this->createForm( RegisterType::class, $user);
         $form->handleRequest($request);
         if($form->isSubmitted() && $form->isValid()){
             $user = $form->getData();

            $search_email = $this->entityManager->getRepository(User::class)->findOneByEmail($user->getEmail());

            if(!$search_email){
                $password = $hasher->hashPassword($user, $user->getPassword()) ;
                $user->setPassword($password);
                $this->entityManager->persist($user);
                $this->entityManager->flush();

                $notification = "Votre inscription s'est correctement déroulé. Vous pouvez dès à présent vous connecter à votre compte.";

                
                // $mail = new Mail();
                // $content = "Bonjour".$user->getFirstname()."Vous pouvez dès a présent acceder a votre espace membre.";
                // $mail->send($user->getEmail(), $user->getFirstname(), 'Bienvenue El-Cafexito', $content);
            }else{
                $notification = "L'Email que vous avez renseignez éxiste déjà.";
            }
     
         }
         return $this->render('register/index.html.twig', [
  
         'form'=> $form->createView(),
         'notification' => $notification
     ]);
     }
 }
