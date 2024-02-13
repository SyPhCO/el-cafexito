<?php

namespace App\Form;

use App\Entity\Product;
use App\Entity\Accounting;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;

class AccountingType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
        ->add('fullname', TextareaType::class, [
            'label' => 'Nom de l acheteur',
            'label_attr' => ['class' => 'font-weight-bold'],
            'attr' => [
                'class' => 'font-weight-bold',
                'placeholder' => 'Nom de l acheteur'
            ],
        ])
        ->add('product',EntityType::class, [
            'label' => "Produit",
            'class' => Product::class,
            'attr' => [
                'class' =>'d-block p-2  w-100 rounded '
            ]
        ])
        ->add('quantity', IntegerType::class,[
            'label' => 'Quantité',
            'label_attr' => ['class' => 'font-weight-bold'],
            'attr' => [
                'class' => 'font-weight-bold',
                'placeholder' => 'Quantité de produits vendu'
            ]
        ])
        ->add('saleDate', DateType::class, [
            'label' => 'Date de la vente',
            'widget' => 'single_text',
            'html5' => true,
            'format' => 'yyyy-MM-dd', // Format de la date
            'label_attr' => ['class' => 'font-weight-bold'],
            'attr' => [
                'class' => 'font-weight-bold',
                'placeholder' => 'Sélectionnez la date de la vente'
            ],
        ])
        ->add('total', IntegerType::class,[
            'label' => 'Total de la commande',
            'label_attr' => ['class' => 'font-weight-bold'],
            'attr' => [
                'class' => 'font-weight-bold',
                'placeholder' => 'Total du prix de la commande'
            ]
        ])
        ->add('carrier', TextareaType::class, [
            'label' => 'Mode de livraison',
            'label_attr' => ['class' => 'font-weight-bold'],
            'attr' => [
                'class' => 'font-weight-bold',
                'placeholder' => 'Mode de livraison'
            ]
        ])
        ->add('carrierPrice', IntegerType::class,[
            'label' => 'Prix de la livraison',
            'label_attr' => ['class' => 'font-weight-bold'],
            'attr' => [
                'class' => 'font-weight-bold',
                'placeholder' => 'Prix de la livraison'
            ],
        ])
        ->add('submit', SubmitType::class, [
            'label' => 'Intégrer a la base de données',
            'attr' => [
                'class' => 'btn btn-info btn-block'
            ]
        ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Accounting::class,
        ]);
    }
}
