<?php

namespace App\Form;

use App\Entity\Affectations;
use App\Repository\UsersRepository;
use App\Repository\PostesRepository;
use App\Repository\ServicesRepository;
use App\Repository\DivisionsRepository;
use App\Repository\DirectionsRepository;
use Symfony\Component\Form\AbstractType;
use App\Controller\AffectationsController;

use App\Controller\SecretariatsController;
use App\Repository\SecretariatsRepository;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;

class AffectationsType extends AbstractType
{
    public $destinataires;
    public function __construct(PostesRepository $postesRepository,SecretariatsController $secretariatsController, SecretariatsRepository $secretariatsRepository,AffectationsController $affectationsController, UsersRepository $usersRepository, DirectionsRepository $directionsRepository, ServicesRepository $servicesRepository,DivisionsRepository $divisionsRepository){
        $this->destinataires = $affectationsController->destination($postesRepository,$secretariatsController, $secretariatsRepository,$usersRepository,$directionsRepository, $servicesRepository, $divisionsRepository);
    }
    
    
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        
        $builder
            ->add('Date_Affectation_at', DateType::class, [
                'attr'=>[
                    'class'=>'datePicker'
                ],
                'widget'=>'single_text'
            ])
            ->add('Document', TextType::class,['mapped' => false])
            ->add('Receveur', ChoiceType::class, [
                'placeholder' => '
                Sélectionnez le destinataire',
                'mapped' => false,
                'choices' =>  $this->destinataires,
                
            ])
            ->add('Envoyeur', TextType::class, [
                'mapped' => false,
                
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Affectations::class,
        ]);
    }
}
