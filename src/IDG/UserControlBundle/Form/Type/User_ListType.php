<?php

namespace IDG\UserControlBundle\Form\Type;

use Propel\PropelBundle\Form\BaseAbstractType;
use Symfony\Component\Form\FormBuilderInterface;

class User_ListType extends BaseAbstractType
{
    protected $options = array(
        'data_class' => 'IDG\UserControlBundle\Models\User_List',
        'name'       => 'user_list',
    );

    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('userId');
        $builder->add('listId');
        $builder->add('dateAdded');
    }
}
