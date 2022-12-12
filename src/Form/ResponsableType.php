<?php

namespace App\Form;

use App\Entity\Responsable;
use App\Entity\Tranche;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\Extension\Core\Type\DateTimeType;

class ResponsableType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('nom', TextType::class, array('label'=>'  '))
            ->add('prenom', TextType::class, array('label'=>'  '))
            ->add('numRue', IntegerType::class, array('label'=>'  '))
            ->add('rue', TextType::class, array('label'=>'  '))
            ->add('ville', TextType::class, array('label'=>'  '))
            ->add('code_postal', IntegerType::class, array('label'=>'  '))
            ->add('email', TextType::class, array('label'=>'  '))
            ->add('telephone', TextType::class, array('label'=>'  '))
            ->add('tranche', EntityType::class, array('class'=>'App\Entity\Tranche','choice_label'=>'id', 'label'=>'  '))
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Responsable::class,
        ]);
    }
}
