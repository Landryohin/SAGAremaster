<?php

namespace App\Form;

use App\Entity\Directions;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class DirectionsType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('Code')
            ->add('Libelle')
            /*->add('Directeur', null, [
                'placeholder' => 'Sélectionnez le directeur',
                'attr' => [
                            'class' => 'form-control js-example-basic-single',
                          ]
            ])*/
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Directions::class,
        ]);
    }
}
