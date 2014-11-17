<?php

namespace IDG\UserControlBundle\Form\Type;

use Propel\PropelBundle\Form\BaseAbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use IDG\UserControlBundle\Models\Lists;
use IDG\UserControlBundle\Form\Type\ListsType;
use IDG\UserControlBundle\Models\ListsQuery;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;


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
        $builder->add('firstName','text', array("required"=>true));
        $builder->add('lastName','text', array("required"=>true));
        $builder->add('id','hidden');


        $builder->add('Lists', 'model', array(
            'class' => 'IDG\UserControlBundle\Models\Lists',
            'required' => true,
            'multiple' => false,
            'expanded' => false,
            'label' => 'Add User To List',
            'query' => ListsQuery::create()->orderByName(),
        ));
        
        
        
    }
    
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'IDG\UserControlBundle\Models\User',
        ));
    }
}
