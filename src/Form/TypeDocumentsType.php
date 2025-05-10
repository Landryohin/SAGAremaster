<?php

namespace App\Form;

use App\Entity\TypeDocuments;
use App\Controller\PostesController;
use App\Repository\DirectionsRepository;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;

class TypeDocumentsType extends AbstractType
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
                'required' => false,
                'placeholder' => '  Sélectionnez la fonction', 
                'choices' => $this->division,
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => TypeDocuments::class,
        ]);
    }
}
