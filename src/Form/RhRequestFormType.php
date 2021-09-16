<?php

namespace App\Form;

use App\Entity\RhRequests;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class RhRequestFormType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('acompte', NumberType::class)
            ->add('attestationMutuelle', TextType::class)
            ->add('attestationSalaire', TextType::class)
            ->add('attestationJourTravaillees', TextType::class)
            ->add('demandeLibre', TextType::class)
            /*
            ->add('duplicataBulletin')
            ->add('updatedAt')
            */
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => RhRequests::class,
        ]);
    }
}
