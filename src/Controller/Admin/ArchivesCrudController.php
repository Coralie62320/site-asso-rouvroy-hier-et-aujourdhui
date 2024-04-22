<?php

namespace App\Controller\Admin;

use App\Entity\Archives;
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

class ArchivesCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Archives::class;
    }

    public function configureFields(string $pageName): iterable
    {
        return [
            yield IdField::new('id')->hideOnForm(),
            yield TextField::new('nom'),
            yield SlugField::new('slug')->setTargetFieldName('nom')->hideOnIndex(),
            yield TextField::new('dates'),
            yield TextEditorField::new('description'),
            // yield TextField::new('imageFile')->setFormType(VichImageType::class),
            yield ImageField::new('image')->setBasePath('/uploads/articles')->setUploadDir('/public/uploads/articles'),
            yield DateTimeField::new('createdAt')
                ->hideOnIndex()
                ->hideOnForm(),
            yield DateTimeField::new('updatedAt')
                ->hideOnIndex()
                ->hideOnForm(),
        ];
    }
}
