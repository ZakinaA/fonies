<?php

namespace App\Form;

use App\Entity\ContratPret;
use App\Repository\InstrumentRepository;
use App\Repository\ContratPretRepository;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\DateTimeType;
use Doctrine\ORM\QueryBuilder;

class ContratPretType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $dateJour = '2022-12-07';
        $builder
            ->add('dateDebut', DateType::class, array('input' => 'datetime',
                                                        'widget' => 'single_text',
                                                        'required' => true,
                                                        'label' =>'  ',
                                                        'placeholder' => 'jj/mm/aaaa'))
            
            ->add('dateFin', DateType::class, array('input' => 'datetime',
                                                    'widget' => 'single_text',
                                                    'required' => true,
                                                    'label' =>'  ',
                                                    'placeholder' => 'jj/mm/aaaa'))

            ->add('etatDetailleDebut', TextareaType::class, array('required' => true,
                                                                'label' =>'  '))
            ->add('etatDetailleRetour', TextareaType::class, array('label' =>'  ', 'required' => false,))
            
            ->add('instrument', EntityType::class, array('class' => 'App\Entity\Instrument',
                                                        'query_builder' => function(InstrumentRepository $er) use ($dateJour)
                                                            {
                                                                return $er->findAllInstrumentByPretAuj($dateJour);
                                                            },
                                                    'choice_label' => 'intitule', 'label' => ' ' ))

            ->add('eleve', EntityType::class, array('class' => 'App\Entity\Eleve',
                                                    'choice_label' => 
                                                        function ($eleve) {
                                                            $prenom= $eleve->getPrenom();
                                                            $nom= $eleve->getNom();
                                                            return $nom." ".$prenom;
                                                        }, 
                                                    'label' => ' '  ))
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => ContratPret::class,
        ]);
    }

    
}
