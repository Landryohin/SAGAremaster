<?php

namespace App\Form;

use App\Entity\Divisions;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class DivisionsType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('Code')
            ->add('Libelle')
            ->add('Service', null, [
                'placeholder' => '
                Sélectionnez le service',
                
            ]) 
            /*->add('Chef', null, [
                'placeholder' => '
                Sélectionnez le chef de la Division',
                
            ])*/
            ;
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Divisions::class,
        ]);
    }
}
