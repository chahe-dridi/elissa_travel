<?php

namespace App\Form;

use App\Entity\Hotel;
use App\Entity\Chambre;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;

class HotelType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
        ->add('image', FileType::class, [
            'label' => 'Image du hotel',
            'required' => false, // Allow the form to be submitted without uploading a new image
            'mapped' => false, // This field is not mapped to the entity property
            'help' => 'Téléchargez une image pour le restaurant (format: jpg, jpeg, png)',
        ])
            ->add('nomHotel')
            ->add('lieu')
            ->add('telHotel')
            ->add('email')
            ->add('discHotel')
            ->add('etatHotel', ChoiceType::class, [
                'choices' => [
                    '5 Etoiles' => '5 etoiles',
                    '4 Etoiles' => '4 etoile',
                    '3 Etoiles' => '3 etoiles',
                    '2 Etoiles' => '2 etoile',
                    'Standard' => 'standard',
                ],
                'placeholder' => 'Choose an option', // Optionnel, pour ajouter une option vide
            ])
            
            ->add('nbChambre')
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
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Hotel::class,
        ]);
    }
}
