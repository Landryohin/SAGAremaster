<?php

namespace App\Form;

use App\Entity\Services;
use App\Repository\DirectionsRepository;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ServicesType extends AbstractType
{
    public $division = [];
    public function __construct(DirectionsRepository $directionsRepository)
    {
       $this->division = $directionsRepository->findAllByDesc();
    }
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('Code')
            ->add('Libelle')
            ->add('Direction',null, [
                'placeholder' => '  Sélectionnez la fonction', 
                'choices' => $this->division,
            ])
            /*->add('Chef', null, [
                'placeholder' => '
                Sélectionnez le chef du Service',
                
            ])*/
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Services::class,
        ]);
    }
}
