<?php

namespace App\Form;

use App\Entity\Users; 
use App\Controller\PostesController;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;


class UsersType extends AbstractType
{
    public $zones = [];
    public function __construct(PostesController $postesController)
    {
       $this->zones = $postesController->fonctions;
    }
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('email')
            ->add('nom')
            ->add('prenom')
            /*->add('Niveau',ChoiceType::class, [ 
                'mapped' => false,
                'placeholder' => '  Sélectionnez le niveau', 
                'choices' => [
                    'Directeur' => 'Directeur',
                    'Directeur Adjoint' => 'DGA',
                    'Chef Service' => 'Services',
                    'Chef Division' => 'Division',
                    'Agent' => 'Agent',
                ]])
            ->add('Zone',ChoiceType::class, [
                'mapped' => false,
                'placeholder' => '  Sélectionnez la fonction', 
                'choices' => $this->zones,
            ])*/
            ->add('roles',ChoiceType::class, [
                'mapped' => false,
                'placeholder' => '  Sélectionnez le rôle ', 
                'choices' => [
                    'Administrateur' => '[ROLE_ADMIN]',
                    'Utilisateur' => '[ROLE_USER]',
                ]])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Users::class,
        ]);
    }
}