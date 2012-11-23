<?php

namespace Anjo\EventoBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class EventoType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nome')
            ->add('data_inicio', 'date', array('widget' => 'single_text'))
            ->add('data_final', 'date', array('widget' => 'single_text'))
            ->add('descricao')
            ->add('ativo', 'checkbox',
                array(
                    'required' => false
                )
            )
        ;
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Anjo\EventoBundle\Entity\Evento'
        ));
    }

    public function getName()
    {
        return 'anjo_eventobundle_eventotype';
    }
}
