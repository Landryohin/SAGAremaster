<?php

namespace App\Form;

use App\Controller\PostesController;
use App\Entity\Postes;
use App\Repository\DirectionsRepository;
use App\Repository\DivisionsRepository;
use App\Repository\UsersRepository;
use App\Repository\DocumentsRepository;
use App\Repository\ServicesRepository;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;

class PostesType extends AbstractType
{
    protected $fonctions = [];
    protected $agents = []; 
    public function __construct(PostesController $postesController, UsersRepository $usersRepository)
    {
       $this->fonctions = $postesController->fonctions;
       $this->agents = $usersRepository->findAllUersForPoste();
    }
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('Niveau',ChoiceType::class, [ 
                'mapped' => true,
                'placeholder' => '  Sélectionnez le niveau', 
                'choices' => [
                    'Directeur' => 'Directeur',
                    'Directeur Adjoint' => 'DGA',
                    'Chef Service' => 'Services',
                    'Chef Division' => 'Division',
                    'Agent' => 'Agent',
                    'Administrateur' => 'Admin',
            ]])
            ->add('Type',ChoiceType::class, [ 
                'mapped' => true,
                'placeholder' => '  Sélectionnez le type', 
                'choices' => [
                    'PERMANENT' => 'PERMANENT',
                    'INTERIMAIRE' => 'INTERIMAIRE',
            ]])
            ->add('Fonction', ChoiceType::class, [
                'placeholder' => 'Sélectionnez la fonction',
                'choices' =>  $this->fonctions,
                
            ])
            ->add('Agent', ChoiceType::class, [
                'placeholder' => "Sélectionnez l'agent",
                'choices' =>  $this->agents,
                
            ])
            ->add('DateDeb', DateType::class, [
                'attr'=>[
                    'class'=>'datePicker'
                ],
                'widget'=>'single_text'
            ])
            ->add('DateFin', DateType::class, [
                'required' => false,
                'attr'=>[
                    'class'=>'datePicker'
                ],
                'widget'=>'single_text'
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Postes::class,
        ]);
    }
}
