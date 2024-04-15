<?php

namespace App\Controller\Admin;

use App\Entity\PatrimoineReligieux;
use DateTime;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\DateField;
use EasyCorp\Bundle\EasyAdminBundle\Field\DateTimeField;
use EasyCorp\Bundle\EasyAdminBundle\Field\IdField;
use EasyCorp\Bundle\EasyAdminBundle\Field\ImageField;
use EasyCorp\Bundle\EasyAdminBundle\Field\SlugField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextEditorField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use Vich\UploaderBundle\Form\Type\VichImageType;

class PatrimoineReligieuxCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return PatrimoineReligieux::class;
    }

    public function configureFields(string $pageName): iterable
    {
        return [
            yield IdField::new('id')->hideOnForm(),
            yield TextField::new('titre'),
            yield SlugField::new('slug')->setTargetFieldName('titre')->hideOnIndex(),
            yield TextEditorField::new('contenu'),
            // yield TextField::new('imageFile')->setFormType(VichImageType::class),
            yield ImageField::new('image')->setBasePath('/uploads/articles')->setUploadDir('/public/uploads/articles'),
            yield DateTimeField::new('createdAt'),
            yield DateTimeField::new('updatedAt'),
        ];
    }
}
