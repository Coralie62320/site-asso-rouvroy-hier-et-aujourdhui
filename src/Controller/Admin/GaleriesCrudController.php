<?php

namespace App\Controller\Admin;

use App\Entity\Galeries;
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

class GaleriesCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Galeries::class;
    }

    public function configureFields(string $pageName): iterable
    {
        return [
            yield IdField::new('id')->hideOnForm(),
            yield TextField::new('dates'),
            yield TextField::new('titre'),
            yield SlugField::new('slug')->setTargetFieldName('titre')->hideOnIndex(),
            yield TextEditorField::new('description'),
            // yield TextField::new('imageFile')->setFormType(VichImageType::class),
            yield ImageField::new('image')->setBasePath('/uploads/articles')->setUploadDir('/public/uploads/articles')->hideOnIndex(),
            yield ImageField::new('image2')->setBasePath('/uploads/articles')->setUploadDir('/public/uploads/articles')->hideOnIndex(),
            yield ImageField::new('image3')->setBasePath('/uploads/articles')->setUploadDir('/public/uploads/articles')->hideOnIndex(),
            yield ImageField::new('image4')->setBasePath('/uploads/articles')->setUploadDir('/public/uploads/articles')->hideOnIndex(),
            yield ImageField::new('image5')->setBasePath('/uploads/articles')->setUploadDir('/public/uploads/articles')->hideOnIndex(),
            yield ImageField::new('image6')->setBasePath('/uploads/articles')->setUploadDir('/public/uploads/articles')->hideOnIndex(),
            yield ImageField::new('image7')->setBasePath('/uploads/articles')->setUploadDir('/public/uploads/articles')->hideOnIndex(),
            yield ImageField::new('image8')->setBasePath('/uploads/articles')->setUploadDir('/public/uploads/articles')->hideOnIndex(),
            yield ImageField::new('image9')->setBasePath('/uploads/articles')->setUploadDir('/public/uploads/articles')->hideOnIndex(),
            yield ImageField::new('image10')->setBasePath('/uploads/articles')->setUploadDir('/public/uploads/articles')->hideOnIndex(),
            yield DateTimeField::new('createdAt')->hideOnIndex()->hideOnForm(),
            yield DateTimeField::new('updatedAt')->hideOnIndex()->hideOnForm(),
        ];
    }
}
