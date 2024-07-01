<?php

namespace App\Form;

use App\Entity\Documents;
use App\Repository\UsersRepository;
use App\Controller\PostesController;
use Symfony\Component\Form\FormEvent;
use App\Repository\ServicesRepository;
use App\Controller\DocumentsController;
use App\Repository\DivisionsRepository;
use App\Repository\DirectionsRepository;
use Symfony\Component\Form\AbstractType;
use App\Controller\SecretariatsController;
use App\Repository\SecretariatsRepository;
use App\Repository\TypeDocumentsRepository;
use Symfony\Component\Form\FormBuilderInterface;
use App\Form\EventListener\AddProvenanceListener;
use Symfony\Component\Validator\Constraints\File;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;


class DocumentsType extends AbstractType 
{

    protected $upload = true; 
    protected $fonctions = [];
    protected $types = [];
    public function __construct( TypeDocumentsRepository $typeDocumentsRepository, PostesController $postesController)
    {
        $this->types = $typeDocumentsRepository->findByStatus();
        $this->fonctions = $postesController->fonctions;
    }

    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $document = $builder->getData();
        if($options){
            if($options['upload'] == false)$this->upload = $options['upload'];
            if($options['types'])$this->types = $options['types'];
        }
        $builder
            ->add('Objet', TextType::class)
            ->add('Chemin', FileType::class,[
                'label' => 'Choisissez le document',
                'attr'=>[
                    'class'=>'fichierUplo form-control',
                ],

                // unmapped means that this field is not associated to any entity property
                'mapped' => false,

                // make it optional so you don't have to re-upload the PDF file
                // every time you edit the Product details
                'required' => $this->upload,

                // unmapped fields can't define their validation using annotations
                // in the associated entity, so you can use the PHP constraint classes
                'constraints' => [
                    new File([
                        'maxSize' => '51200k',
                        'mimeTypes' => [
                            'application/pdf',
                            'application/x-pdf',
                        ],
                        'mimeTypesMessage' => 'S\'il vous plait veuillez choisir un fichier pdf',
                    ])
                ]
            ])
            ->add('Sensibility',CheckboxType::class, [
                //'placeholder' => '', 
                'label' => 'Public',
                'mapped' => false,
                'required' => false,
                ])
            ->add('Reference', TextType::class,[
                'label' => 'Référence du courrier',
                'attr'=>[
                    'class'=>'uppercase'
                ]
            ])
            ->add('Structure', TextType::class,[
                ])

            ->add('DateArrivee', DateType::class, [
                'attr'=>[
                    'class'=>'datePicker'
                ],
                'widget'=>'single_text'
            ])
            ->add('DateDocument', DateType::class, [
                'attr'=>[
                    'class'=>'datePicker'
                ],
                'widget'=>'single_text'
            ])
            ->add('TypeDocument',null, [
                'placeholder' => 'Sélectionnez le type de document',
                'choices' =>  $this->types,

            ]);
            if($document->getMouvement() != "INTERNE")
                $builder->add('NumeroEnregistrement',NumberType::class,[
                    'label' => 'Numero d\'enregistrement',
                    'attr'=>[
                        'class'=>'numberField'
                    ]
                ]);
            else $builder->add('NumeroEnregistrement',NumberType::class,[
                'label' => 'Numero d\'enregistrement',
                'attr'=>[
                    'class'=>'numberField'
                ],
                'required' => false,
            ]);
            if($document->getMouvement() == "DEPART")
                $builder->add('Initiateur',ChoiceType::class, [
                    'label' => 'Initié par :',
                    'required' => false,
                    'placeholder' => 'Sélectionnez la fonction',
                    'choices' =>  $this->fonctions,
                ])
                ->add('Observation',TextType::class, [
                    'required' => false,
                ]);
            $builder->addEventSubscriber(new AddProvenanceListener())
            ->getForm();
    }

    public function onPreSetData(FormEvent $event): void
    {
        // ...
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Documents::class,
            'allow_extra_filds' => true, 
            'upload' => true,
            'types' => $this->types,
        ]);
        $resolver->setAllowedTypes('upload' , 'bool');
        $resolver->setAllowedTypes('types' , 'App\Entity\TypeDocuments[]');
    }
}