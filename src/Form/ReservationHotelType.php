<?php

namespace App\Form;

use App\Entity\ReservationHotel;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use App\Entity\Hotel;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;

class ReservationHotelType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('PrixTT')
            ->add('dateArrive')
            ->add('dateDepart')
            ->add('email')
            ->add('nom')
            ->add('preNom')
            ->add('Distination')
            ->add('ChambrE')
            ->add('User')
            ->add('Hotel', EntityType::class, [
                'class' => Hotel::class,
                // Supposons que 'name' est la propriété à afficher pour les hôtels
                'choice_label' => 'NomHotel',
            ])
            ->add('Payment')
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => ReservationHotel::class,
        ]);
    }
}
