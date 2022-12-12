<?php

namespace App\Form;

use App\Entity\Eleve;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class EleveModifierType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
        ->add('nom', TextType::class, array('label'=>'  '))
        ->add('prenom', TextType::class, array('label'=>'  '))
        ->add('numRue', IntegerType::class, array('label'=>'  '))
        ->add('rue', TextType::class, array('label'=>'  '))
        ->add('code_postale', IntegerType::class, array('label'=>'  '))
        ->add('ville', TextType::class, array('label'=>'  '))
        ->add('telephone', TextType::class, array('label'=>'  '))
        ->add('email', TextType::class, array('label'=>'  '))
        ->add('responsable', EntityType::class, array('class'=>'App\Entity\Responsable',
        'choice_label'=>
        function ($resp) {
            $prenom= $resp->getPrenom();
            $nom= $resp->getNom();
            return strtoupper($nom)." ".$prenom;
        }, 
        'label'=>'  '))
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Eleve::class,
        ]);
    }
}
