<?php

namespace Becas\HackControlFBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class VentaType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('fecha')
            ->add('letra')
            ->add('numero')
            ->add('total')
            ->add('cliente')
            ->add('detalles', 'collection', 
                    array('type' => new DetalleType(),
                          'allow_add'    => true,));
        
                ;
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Becas\HackControlFBundle\Entity\Venta'
        ));
    }

    public function getName()
    {
        return 'becas_hackcontrolfbundle_ventatype';
    }
}
