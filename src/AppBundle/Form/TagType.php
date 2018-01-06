<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 04/01/2018
 * Time: 19:48
 */

namespace AppBundle\Form;
use AppBundle\Entity\Tag;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class TagType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('name');
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => Tag::class,
        ));
    }
}