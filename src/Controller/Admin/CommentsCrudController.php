<?php

namespace App\Controller\Admin;

use App\Entity\Comments;
use EasyCorp\Bundle\EasyAdminBundle\Config\Action;
use EasyCorp\Bundle\EasyAdminBundle\Field\IdField;
use EasyCorp\Bundle\EasyAdminBundle\Config\Actions;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use EasyCorp\Bundle\EasyAdminBundle\Field\ImageField;
use EasyCorp\Bundle\EasyAdminBundle\Field\BooleanField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextEditorField;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;

class CommentsCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Comments::class;
    }
    public function configureActions(Actions $actions): Actions
    {
        return $actions
            ->disable(Action::EDIT);
    }
    public function configureFields(string $pageName): iterable
    {
        return [
            IdField::new('id'),
            TextField::new('author'),
            TextEditorField::new('comment'),
            ImageField::new('illustration')
            ->setBasePath('uploads/comments/')
            ->setUploadDir('public/uploads/comments')
            ->setUploadedFileNamePattern('[randomhash].[extension]')
            ->setRequired(false),
            BooleanField::new('isValid'),
        ];
    }

}
