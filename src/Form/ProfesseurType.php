<?php

namespace App\Form;

use App\Entity\Professeur;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use App\Controller\ProfesseurController;

class ProfesseurType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('nom', TextType::class, array('label'=>'  '))
            ->add('prenom', TextType::class, array('label'=>'  '))
            ->add('rue', TextType::class, array('label'=>'  '))
            ->add('code_postale', TextType::class, array('label'=>'  '))
            ->add('ville', TextType::class, array('label'=>'  '))
            ->add('email', TextType::class, array('label'=>'  '))
            ->add('telephone', TextType::class, array('label'=>'  '))
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Professeur::class,
        ]);
    }
}
