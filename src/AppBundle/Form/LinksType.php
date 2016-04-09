<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
// Formos texttype reikėjo klases TextType::class
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;

class LinksType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('title', TextType::class, array(
                    'label' => 'Pavadinimas',
                    'attr' => array('class' => 'form-control')
                ))
            ->add('description', TextType::class, array(
                    'label' => 'Aprašymas',
                    'attr' => array('class' => 'form-control')
                ))
            ->add('active', TextType::class, array(
                    'label' => 'Patvirtintas',
                    'attr' => array('class' => 'form-control')
                ))
            ->add('link', TextType::class, array(
                    'label' => 'URL',
                    'attr' => array('class' => 'form-control')
                ))
            ->add('user', ChoiceType::class, array(
                    'label' => 'Vartotojas',
                    'attr' => array('class' => 'form-control')
                ))
        ;
    }
    
    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\Links'
        ));
    }
}
