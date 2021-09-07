<?php

namespace App\Form;

use App\Entity\Journal;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class JournalType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nom',TextType::class,[
                'label'=>'titre du journal',
                'attr'=>[
                    'placeholder'=>'Entrez votre titre'
                ]
            ])

            ->add('prix',NumberType::class,[
                'label'=>'Le prix',
                'attr'=>[
                    'placeholder'=>'Entrez le prix'
                ]
            ])
        ;
    }


    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Journal::class
        ]);
    }
}