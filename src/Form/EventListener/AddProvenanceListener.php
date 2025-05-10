<?php

namespace App\Form\EventListener;

use App\Repository\UsersRepository;
use App\Controller\PostesController;
use Symfony\Component\Form\FormEvent;
use App\Repository\ServicesRepository;
use Symfony\Component\Form\FormEvents;
use App\Repository\DivisionsRepository;
use App\Repository\DirectionsRepository;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\EventDispatcher\EventSubscriberInterface;

class AddProvenanceListener implements EventSubscriberInterface
{    
    public static function getSubscribedEvents(): array
    {
        return [
            FormEvents::POST_SET_DATA => 'onPreSetData',
           // FormEvents::PRE_SUBMIT   => 'onPreSubmit',
        ];
    }

    public function onPreSetData(FormEvent $event): void
    {
        $document = $event->getData();
        $form = $event->getForm();
        if (!$document) {
            return;
        }
        // checks whether the user has chosen to display their email or not.
        // If the data was submitted previously, the additional value that is
        // included in the request variables needs to be removed.
        
        if($document->getMouvement() == "ARRIVEE PAR SGM")
            $form->add('SGM', TextType::class,[
                'label' => 'SGM',
                'required' => true,
                'mapped' => false,
            ])
            ->add('DateEnregistrementSGM', DateType::class,[
                'label' => "Date d'arrivée ",
                'required' => true,
                'mapped' => false,
                'attr'=>[
                    'class'=>'datePicker'
                ],
                'widget'=>'single_text'
            ])
            ->add('NumeroEnregistrementSGM', NumberType::class,[
                'label' => 'Numéro de provenance',
                'required' => true,
                'mapped' => false,
            ]);
        elseif($document->getMouvement() == "ARRIVEE PAR CAB")
            $form->add('SGM', TextType::class,[
                'label' => 'SGM',
                'required' => true,
                'mapped' => false,
            ])
            ->add('DateEnregistrementSGM', DateType::class,[
                'label' => "Date d'arrivée ",
                'required' => true,
                'mapped' => false,
                'attr'=>[
                    'class'=>'datePicker'
                ],
                'widget'=>'single_text'
            ])
            ->add('NumeroEnregistrementSGM', NumberType::class,[
                'label' => 'Numéro de provenance',
                'required' => false,
                'mapped' => false,
            ])
            ->add('CAB', TextType::class,[
                'label' => 'CAB',
                'required' => true,
                'mapped' => false,
            ])
            ->add('DateEnregistrementCAB', DateType::class,[
                'label' => "Date d'arrivée ",
                'required' => true,
                'mapped' => false,
                'attr'=>[
                    'class'=>'datePicker'
                ],
                'widget'=>'single_text'
            ])
            ->add('NumeroEnregistrementCAB', NumberType::class,[
                'label' => 'Numéro de provenance',
                'required' => true,
                'mapped' => false,
            ]);
        elseif($document->getMouvement() == "ARRIVEE PAR AUTRE")
            $form->add('SGM', TextType::class,[
                'label' => 'SGM',
                'required' => true,
                'mapped' => false,
            ])
            ->add('DateEnregistrementSGM', DateType::class,[
                'label' => "Date d'arrivée ",
                'required' => true,
                'mapped' => false,
                'attr'=>[
                    'class'=>'datePicker'
                ],
                'widget'=>'single_text'
            ])
            ->add('NumeroEnregistrementSGM', NumberType::class,[
                'label' => 'Numéro de provenance',
                'required' => true,
                'mapped' => false,
            ])
            ->add('CAB', TextType::class,[
                'label' => 'CAB',
                'required' => true,
                'mapped' => false,
            ])
            ->add('DateEnregistrementCAB', DateType::class,[
                'label' => "Date d'arrivée ",
                'required' => true,
                'mapped' => false,
                'attr'=>[
                    'class'=>'datePicker'
                ],
                'widget'=>'single_text'
            ])
            ->add('NumeroEnregistrementCAB', NumberType::class,[
                'label' => 'Numéro de provenance',
                'required' => true,
                'mapped' => false,
            ])
            ->add('AUTRE', TextType::class,[
                'label' => 'Numéro de provenance',
                'required' => true,
                'mapped' => false,
            ])
            ->add('DateEnregistrementAUTRE', DateType::class,[
                'label' => "Date d'arrivée ",
                'required' => true,
                'mapped' => false,
                'attr'=>[
                    'class'=>'datePicker'
                ],
                'widget'=>'single_text'
            ])
            
            ->add('NumeroEnregistrementAUTRE', NumberType::class,[
                'label' => 'Numéro de provenance',
                'required' => true,
                'mapped' => false,
            ]);
        
        
    }

    /*public function onPreSubmit(FormEvent $event): void
    {
        $document = $event->getData();
        $form = $event->getForm();

        if (!$document) {
            return;
        }

        // checks whether the user has chosen to display their email or not.
        // If the data was submitted previously, the additional value that is
        // included in the request variables needs to be removed.
        if ($document->getMouvement()) {
            $form->add('structure', TextType::class,[
                    'label' => 'structure',
                    'mapped' => false,
                ])
                ->add('reference', TextType::class,[
                    'label' => 'reference',
                    'mapped' => false,
                ])
                ->add('date_provenance', TextType::class,[
                    'label' => 'date_provenance',
                    'mapped' => false,
                ])
                ->add('numero_provenance', TextType::class,[
                    'label' => 'numero_provenance',
                    'mapped' => false,
                ]);
        } else {
            //unset($document['add']);
            $event->setData($document);
        }
    }*/
}