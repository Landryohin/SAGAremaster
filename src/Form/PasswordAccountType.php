<?php


namespace App\Form;

use App\Entity\Users;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\RepeatedType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints\Length;

class PasswordAccountType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('old_password', PasswordType::class, [
                'label' => 'Ancien Mot de passe',
                'attr' => ['placeholder' => 'Veuillez entrer votre ancien mot de passe'],
                'constraints' => new Length(['min' => 6, 'max' => 50]),
                'required' => true,
                'mapped' => false,
            ])
            ->add('password', RepeatedType::class, [
                'type' => PasswordType::class,
                'label' => 'Nouveau Mot de passe',
                'constraints' => new Length(['min' => 6, 'max' => 50]),
                'invalid_message' => 'Les mots de passes ne sont pas les mêmes',
                'required' => true,
                'mapped' => false,
                'first_options' => [
                    'label' => 'Nouveau mot de passe',
                    'attr' => ['placeholder' => 'Veuillez entrer votre nouveau mot de passe']
                ],
                'second_options' => [
                    'label' => 'Confirme votre mot de passe',
                    'attr' => ['placeholder' => 'Veuillez confirmer votre mot de passe']
                ]
            ])
            ->add('submit', SubmitType::class, [
                'label' => "Modifiez le mot de passe"
            ]);
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Users::class,
        ]);
    }
}