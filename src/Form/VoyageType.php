<?php
namespace App\Form;


use App\Entity\Voyage;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\HiddenType;

class VoyageType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('mois', ChoiceType::class, [
                'label' => 'Select month',
                'choices' => [
                    'January' => 'January',
'February'      => 'February',
'March'=> 'March',
'April'=> 'April',
'May'=> 'May',
'June'=> 'June',
'July'=> 'July',
'August'=> 'August',
'September'=> 'September',
'October'=> 'October',
'November'=> 'November',
'December'=> 'December',
                 
                ],
                'placeholder' => 'Select month',
                'required' => false, 
            ])
            

            ->add('annee', ChoiceType::class, [
                'label' => 'Select Year',
                'choices' => [
                    '2024' => '2024',
                    '2025' => '2025',
                    '2026' => '2026'],'placeholder' => 'Select year',
                    'required' => false, 
                ])
            ->add('villedepart')
            ->add('destination')
            ->add('voyage',HiddenType::class)


        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Voyage::class,
        ]);
    }
}
