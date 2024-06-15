<?php

namespace App\Form;

use App\Entity\Event;
use App\Entity\ReservationEvent;
use App\Entity\User;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ReservationEventType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            
        
            ->add('Event', EntityType::class, [
                'class' => Event::class,
                'choice_label' => 'NomEvent',
                'choice_value' => 'NomEvent',
            ])
            
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => ReservationEvent::class,
        ]);
    }
}
