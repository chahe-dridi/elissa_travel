<?php

namespace App\Form;

use App\Entity\Reservationvol;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

use Symfony\Component\Form\Extension\Core\Type\ChoiceType; // Import ChoiceType
use Symfony\Component\Form\Extension\Core\Type\HiddenType; // Import HiddenType

class Reservationvol1Type extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('total_price')
            ->add('vol')
            ->add('user')
            ->add('payment_method', ChoiceType::class, [ // Use ChoiceType for select dropdown
                'choices' => [
                    'Online' => 'online',
                    'Cash' => 'cash',
                ],
                'placeholder' => 'Choose an option', // Optional placeholder
                'required' => true, // Set to true if this field is required
                'label' => 'Payment Method', // Set the label for the field
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Reservationvol::class,
        ]);
    }
}
