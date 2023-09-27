<?php

namespace App\Controller;

use App\Entity\Product;
use App\Entity\Comments;
use Doctrine\ORM\Mapping\Id;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class CommentsController extends AbstractController
{

        private $entityManager;

    public function __construct(EntityManagerInterface $entityManager){
       $this->entityManager = $entityManager;
    }


    #[Route('/commentaires', name: 'app_read_comments')]
    public function index(): Response
    {
        // $pagination = 1;

        $products = $this->entityManager->getRepository(Product::class)->findAll();
        $comments = $this->entityManager->getRepository(Comments::class)->findAll();
        $commentsRepository = $this->entityManager->getRepository(Comments::class);

        $commentsByProduct = array();

        foreach ($products as $product) {
            $idProduct = $product->getId();
            $commentsId = array();
            $i = 1;
            foreach($comments as $comment) {
                if($comment->getActivity()->getId() == $idProduct && $comment->isIsValid()) {
                    array_push($commentsId, [$i++, $comment]);
                }
            }
            array_push($commentsByProduct, [$idProduct, $commentsId, 1]);
        }

        return $this->render('comments/index.html.twig', [
            'products' => $products,
            'commentsByProduct' => $commentsByProduct,
            // 'pagination' =>$pagination
        ]);
    }

    // #[Route('/updateCommentPageByProduct/{idProductUpdate}/{index}', name: 'reset_app_dog_activity')]
    // public function maMethode(int $idProductUpdate, int $index)
    // {
    //     dd($idProductUpdate, $index);
    //     $products = $this->entityManager->getRepository(Product::class)->findAll();
    //     $comments = $this->entityManager->getRepository(Comments::class)->findAll();

    //     $commentsByProduct = array();

    //     foreach ($products as $product) {
    //         $idProduct = $product->getId();
    //         $commentsId = array();
    //         $i = 1;
    //         foreach($comments as $comment) {
    //             if($comment->getActivity()->getId() == $idProduct && $comment->isIsValid()) {
    //                 array_push($commentsId, [$i++, $comment]);
    //             }
    //         }
    //         if($idProductUpdate == $idProduct)
    //             array_push($commentsByProduct, [$idProduct, $commentsId, $index]);
    //         else
    //             array_push($commentsByProduct, [$idProduct, $commentsId, 1]);
    //     }

    //     var_dump($commentsByProduct);

    //     $data = ['message' => 'Ceci est une réponse JSON via AJAX ', $commentsByProduct];

    //     return new JsonResponse($data);
    // }
}
