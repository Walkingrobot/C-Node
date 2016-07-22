<?php

namespace Walkingrobot\EquipmentBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class DeviceType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('name')
            ->add('description')
            ->add('pricing')
            ->add('hourly_price')
            ->add('require_operator_certification')
            ->add('require_operator_pre_check')
            ->add('in_maintenance_mode')
        ;
    }
    
    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Walkingrobot\EquipmentBundle\Entity\Device'
        ));
    }
}
