<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;

use Symfony\Component\Form\FormBuilderInterface;


class RegistrationType extends AbstractType

{

    public function buildForm(FormBuilderInterface $builder, array $options)

    {

        $builder->add('steamId');

    }


    public function getParent()

    {

        return 'FOS\UserBundle\Form\Type\RegistrationFormType';

    }







}