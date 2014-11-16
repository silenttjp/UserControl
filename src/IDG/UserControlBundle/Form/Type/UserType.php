<?php

namespace IDG\UserControlBundle\Form\Type;

use Propel\PropelBundle\Form\BaseAbstractType;
use Symfony\Component\Form\FormBuilderInterface;

class UserType extends BaseAbstractType
{
    protected $options = array(
        'data_class' => 'IDG\UserControlBundle\Models\User',
        'name'       => 'user',
    );

    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('firstName', array("required"=>true));
        $builder->add('lastName', array("required"=>true));
        $builder->add('save', 'button', array('label' => 'Add User'));
        
        
    }
}
