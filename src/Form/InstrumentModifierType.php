<?php

namespace App\Form;

use App\Entity\Instrument;
use App\Entity\TypeInstrument;
use App\Entity\MarqueInstrument;
use App\Entity\ModeleInstrument;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\Extension\Core\Type\DateTimeType;
use App\Controller\InstrumentController;

class InstrumentModifierType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
        ->add('intitule', TextType::class, array('label' =>'  '))
        ->add('date_achat', DateType::class, array('input' => 'datetime','widget' => 'single_text','required' => true,'label' =>'  ','placeholder' => 'jj/mm/aaaa'))
        ->add('numeroserie', TextType::class, array('label' =>'  '))
        ->add('couleur', TextType::class, array('label' =>'  '))
        ->add('utilisation', ChoiceType::class, ['choices' => ['Prêt' => 'Prêt', 'Pas de prêt' => null,],'label' =>'  '])
        ->add('prixAchat', NumberType::class, array('label' =>'  '))
        ->add('typeInstrument', EntityType::class, array('label' =>'  ','class' => 'App\Entity\TypeInstrument','choice_label' => 'libelle'))
        ->add('marqueInstrument', EntityType::class, array('label' =>'  ','class' => 'App\Entity\MarqueInstrument','choice_label' => 'libelle'))
        ->add('modeleInstrument', EntityType::class, array('label' =>'  ','class' => 'App\Entity\ModeleInstrument','choice_label' => 'libelle'))
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Instrument::class,
        ]);
    }
}
