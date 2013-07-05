<?php

namespace Becas\HackControlFBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class DetalleType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('cantidad')
            ->add('precioU')
            ->add('venta')
            ->add('producto')
        ;
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Becas\HackControlFBundle\Entity\Detalle'
        ));
    }

    public function getName()
    {
        return 'becas_hackcontrolfbundle_detalletype';
    }
}
