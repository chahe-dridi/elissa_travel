<?php

namespace App\Form;

use App\Entity\Reservationvol;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType; // Import ChoiceType
use Symfony\Component\Form\Extension\Core\Type\HiddenType; // Import HiddenType
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

use VictorPrdh\RecaptchaBundle\Form\ReCaptchaType;


class ReservationvolType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            // Add other fields as needed
            ->add('total_price')
            
            ->add('payment_method', ChoiceType::class, [ // Use ChoiceType for select dropdown
                'choices' => [
                    'Online' => 'online',
                    'Cash' => 'cash',
                ],
                'placeholder' => 'Choose an option', // Optional placeholder
                'required' => true, // Set to true if this field is required
                'label' => 'Payment Method', // Set the label for the field
            ])
            ->add('vol')
            ->add('user')
            ->add('flight', HiddenType::class, [
                'mapped' => false, // This field should not be mapped to the entity
          
          
          
          
            ]) 
            ->add('captcha', ReCaptchaType::class);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Reservationvol::class,
        ]);
    }
}
