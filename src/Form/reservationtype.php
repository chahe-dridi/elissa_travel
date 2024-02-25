<?php
namespace App\Form;

use App\Entity\Chambre;
use App\Entity\Hotel;

use App\Form\ChambreType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use App\Entity\ReservationHotel;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;

class reservationtype extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('dateArrive')
            ->add('dateDepart')
            ->add('nom')
            ->add('preNom')
            ->add('email')
            ->add('chambre', EntityType::class, [
                'class' => Chambre::class,
                'choices' => $options['hotel']->getChambres(),
                'choice_label' => function ($chambre) {
                    return $chambre->getId() . " / " . $chambre->getTypeChambre() . " / " . $chambre->getVueHotel() . " / " .  $chambre->getTypeLogHotel();
                },
                'placeholder' => 'Choose a chambre',

            ]);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => ReservationHotel::class,
            'hotel' => null, // Define the "hotel" option with default value null
        ]);
        $resolver->setRequired('hotel'); // Make sure "hotel" option is required
        $resolver->setAllowedTypes('hotel', Hotel::class); // Make sure "hotel" option only accepts instances of Hotel class
    }


}