<?php

namespace App\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ContactFormType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('Nom', TextType::class, [
                'attr' => ['placeholder' => 'Votre nom...'],
            ])
            ->add('Email', EmailType::class, [
                'attr' => ['placeholder' => 'Votre email...'],
            ])
            ->add('Sujet', TextType::class, [
                'attr' => ['placeholder' => 'Le sujet de votre message...'],
            ])
            ->add('Message', TextareaType::class, [
                'attr' => ['placeholder' => 'Votre message...'],
            ])
            ->add('Envoyer', SubmitType::class)
            ->getForm();;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            // Configure your form options here
        ]);
    }
}
