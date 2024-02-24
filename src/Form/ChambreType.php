<?php

namespace App\Form;

use App\Entity\Chambre;
use App\Entity\Hotel;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;

class ChambreType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('typeChambre', ChoiceType::class, [
                'choices' => [
                    'Double' => 'double',
                    'Single' => 'single',
                ],
                'placeholder' => 'Choose an option', // Optionnel, pour ajouter une option vide
            ])
            ->add('vueHotel', ChoiceType::class, [
                'choices' => [
                    'Vue sur mer' => 'vue_mere',
                    'Vue sur piscine' => 'vue_picine',
                ],
                'placeholder' => 'Choose an option', // Optionnel, pour ajouter une option vide
            ])
            ->add('typeLogHotel', ChoiceType::class, [
                'choices' => [
                    'Demi-pension' => 'demi_pension',
                    'Petit déjeuner' => 'petit_dejeuner',
                    'Pension complète' => 'pension_complete',
                ],
                'placeholder' => 'Choose an option', // Optionnel, pour ajouter une option vide
            ])
            ->add('prixHotel')
            
            ->add('Hotel',EntityType::class,[
                'class'=>Hotel::class,
                'choice_label'=>'nomHotel',
                'multiple'=>false,
                'expanded'=>false,])
        ;
        
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Chambre::class,
        ]);
    }
}
