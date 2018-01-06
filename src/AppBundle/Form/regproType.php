<?php
// src/AppBundle/Form/RegistrationType.php

namespace AppBundle\Form;

use function PHPSTORM_META\type;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;

class regproType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            //->add('first_name')
            ->add('company_name',null,["label"=>"Nom de la societe"])
        ;
    }

    public function getParent()
    {
        return 'FOS\UserBundle\Form\Type\RegistrationFormType';

    }

    public function getBlockPrefix()
    {
        return 'pro_user_registration';
    }

public function getName(){
        return 'pro_user_registration';
}


}