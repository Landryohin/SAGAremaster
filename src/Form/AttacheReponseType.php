<?php

namespace App\Form;

use App\Entity\Documents;
use App\Repository\DocumentsRepository;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class AttacheReponseType extends AbstractType
{
    /**
    *  Documents[] 
    */
    private $documents = array();
    public function __construct(DocumentsRepository $documentsRepository){
        foreach($documentsRepository->findAllDesc() as $document)
        $this->documents [$document->getReference()] = $document;
    }
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('Initial', ChoiceType::class, [
                'placeholder' => 'Sélectionnez le courrier initial',
                'mapped' => false,
                'choices' =>  $this->documents,
            ]) 
            ->add('Reponse', ChoiceType::class, [
                'placeholder' => 'Sélectionnez le ccourrier de réponse',
                'mapped' => false,
                'choices' =>  $this->documents,
            ])
            ;
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Documents::class,
            'allow_extra_filds' => true, 
            'documents' => $this->documents,
        ]);
        $resolver->setAllowedTypes('documents' , 'App\Entity\Documents[]');

    }
}
