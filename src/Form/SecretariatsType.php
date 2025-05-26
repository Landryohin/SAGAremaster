<?php

namespace App\Form;

use App\Entity\Secretariats;
use App\Repository\ServicesRepository;
use App\Repository\DivisionsRepository;
use Symfony\Component\Form\AbstractType;
use App\Controller\SecretariatsController;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;

class SecretariatsType extends AbstractType
{
    protected $secretaires = [];
    public function __construct(SecretariatsController $secretariatsController, ServicesRepository $servicesRepository,DivisionsRepository $divisionsRepository){
        $this->secretaires =  $secretariatsController->secretaires($servicesRepository, $divisionsRepository);
    } 
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('Direction', null, [
                'placeholder' => '
                Sélectionnez la direction',
                
            ])
            ->add('Secretaire',ChoiceType::class, [
                'mapped' => false,
                'choices' =>  $this->secretaires,
            ])
            ->add('Type',ChoiceType::class, [
                'placeholder' => '  Sélectionnez le type de point de traitement', 
                'choices' => [
                    'ADMINISTRATIF' => 'ADMINISTRATIF',
                    'ASSISTANT' => 'ASSISTANT',
                    'DIRECTION' => 'DIRECTION',
                    'PARTICULIER' => 'PARTICULIER',
                ]])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Secretariats::class,
        ]);
    }
}
