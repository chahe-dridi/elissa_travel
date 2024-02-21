<?php

namespace App\Form;

use App\Entity\Event;
use App\Entity\TypeEvenement;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\DateTimeType;

class EventType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('NomEvent')
            ->add('AdresseEvent')
            ->add('nbrticketsdispo')
            ->add('datedebutEvent', DateTimeType::class, [
                'widget' => 'single_text'
            ])
            ->add('datefinevent', DateTimeType::class, [
                'widget' => 'single_text'
            ])
            ->add('prixentre')
            ->add('imageevent',FileType::class,array("data_class"=>null))
            ->add('TypeEvenement', EntityType::class, [
                'class' => TypeEvenement::class,
                'choice_label' => 'nomType',
                'choice_value' => 'nomType',
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
          //  'data_class' => Event::class,
        ]);
    }
}
