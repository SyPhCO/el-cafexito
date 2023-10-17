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

                
                $mail = new Mail();
                $content = "Bonjour".$user->getFirstname()."<br/>Bienvenue sur El-Cafexito, <br/> Petits et grands trappeurs, venez réveiller votre âme sauvage
                en partageant des activités avec nos chiens de traîneau dans le territoire du Haut Bugey.<br/>Petits et grands aventuriers avides de sensations et de découverte,
                des expériences nature d'initiation sportive vous attendent. Je vous invite à découvrir les différentes activités dans les rubriques concernées, et à me contacter pour organiser votre aventure. <br/>Des événements thématiques vous seront régulièrement proposés. Pensez à suivre Nordic Indiana sur Facebook, pour découvrir notre actualité, et les surprises qui vous seront réservées au gré des saisons. <br/> Fabien";
                $mail->send($user->getEmail(), $user->getFirstname(), 'Bienvenue sur Nordic Indiana', $content);
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
