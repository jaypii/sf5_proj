<?php

namespace App\Form;

use App\Entity\NWN2Char;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class NWN2CharType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('name')
            ->add('gender')
            ->add('race')
            ->add('alignment')
            ->add('startclass')
            ->add('lvlclass1')
            ->add('class2')
            ->add('lvlclass2')
            ->add('class3')
            ->add('lvlclass3')
            ->add('class4')
            ->add('lvlclass4')
            ->add('lvltotal')
            ->add('layer')
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => NWN2Char::class,
        ]);
    }
}
