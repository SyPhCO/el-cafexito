<?php

namespace App\Controller\Admin;

use App\Entity\LandingPage;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use EasyCorp\Bundle\EasyAdminBundle\Field\ImageField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextareaField;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;

class LandingPageCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return LandingPage::class;
    }

    
    public function configureFields(string $pageName): iterable
    {
        return [
            TextField::new('title', 'Titre'),
            TextField::new('subtitle', 'Sous-titre'),
            TextareaField::new('content', 'Phrase d accroche'),
            TextField::new('btnTitle', 'intérieur du bouton'),
            TextField::new('btnUrl', 'Liens vers lequel renvoie le bouton ( Url de destination )'),
            ImageField::new('illustration', 'Image d illustration')
            ->setBasePath('uploads/')
            ->setUploadDir('public/uploads')
            ->setUploadedFileNamePattern('[randomhash].[extension]')
            ->setRequired(false)
        ];
    }
    
}
