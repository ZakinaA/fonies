<?php

namespace App\Form;

use App\Entity\Cours;
use App\Entity\Professeur;
use App\Entity\Jours;
use App\Entity\TypeCours;
use App\Entity\TypeInstrument;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\TimeType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\Extension\Core\Type\DateTimeType;
use App\Controller\CoursController;

class CoursModifierType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('agemini', IntegerType::class, array('label'=>'  '))
            ->add('agemax', IntegerType::class, array('label'=>'  '))
            ->add('heureDebut', TimeType::class, array('label'=>'  '))
            ->add('heureFin', TimeType::class, array('label'=>'  '))
            ->add('nbPlaces', IntegerType::class, array('label'=>'  '))
            ->add('professeur', EntityType::class, array('class'=>'App\Entity\Professeur',
            'choice_label'=>
            function ($prof) {
                $prenom= $prof->getPrenom();
                $nom= $prof->getNom();
                return strtoupper($nom)." ".$prenom;
            },
            'label'=>'  '))
            ->add('jour', EntityType::class, array('class'=>'App\Entity\Jour','choice_label'=>'libelle','label'=>'  '))
            ->add('typeCours', EntityType::class, array('class'=>'App\Entity\TypeCours','choice_label'=>'libelle','label'=>'  '))
            ->add('typeInstrument', EntityType::class, array('class'=>'App\Entity\TypeInstrument','choice_label'=>'libelle','label'=>'  '))
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Cours::class,
        ]);
    }
}
