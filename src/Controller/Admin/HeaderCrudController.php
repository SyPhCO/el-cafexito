<?php

namespace App\Controller\Admin;

use App\Entity\Header;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use EasyCorp\Bundle\EasyAdminBundle\Field\ImageField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextareaField;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;

class HeaderCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Header::class;
    }

    public function configureFields(string $pageName): iterable
    {
        return [
            TextField::new('title', 'titre du caroussel'),
            TextareaField::new('content', 'contenu texte du caroussel'),
            TextField::new('btnTitle', 'intérieur du bouton'),
            TextField::new('btnUrl', 'Liens vers lequel renvoie le bouton ( Url de destination )'),
            ImageField::new('illustration', 'image du carrousel')
            ->setBasePath('uploads/')
            ->setUploadDir('public/uploads')
            ->setUploadedFileNamePattern('[randomhash].[extension]')
            ->setRequired(false)
        ];
    }

}
