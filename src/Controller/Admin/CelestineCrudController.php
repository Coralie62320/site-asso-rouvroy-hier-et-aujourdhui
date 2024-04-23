<?php

namespace App\Controller\Admin;

use App\Entity\Celestine;
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

class CelestineCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Celestine::class;
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
            yield TextEditorField::new('contenu2'),
            yield ImageField::new('image2')->setBasePath('/uploads/articles')->setUploadDir('/public/uploads/articles'),
            yield DateTimeField::new('createdAt')->hideOnIndex()->hideOnForm(),
            yield DateTimeField::new('updatedAt')->hideOnIndex()->hideOnForm(),
        ];
    }
}
