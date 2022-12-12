<?php

namespace App\Form;

use App\Entity\Eleve;
use App\Entity\Responsable;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\Extension\Core\Type\DateTimeType;
use App\Controller\EleveController;

class EleveType extends AbstractType
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
