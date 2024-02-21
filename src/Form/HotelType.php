<?php

namespace App\Form;

use App\Entity\Hotel;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class HotelType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
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
            
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Hotel::class,
        ]);
    }
}
