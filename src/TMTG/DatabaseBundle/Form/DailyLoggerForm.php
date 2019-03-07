<?php
/**
 * Created by PhpStorm.
 * User: amontuya
 * Date: 3/6/2019
 * Time: 3:14 PM
 */

namespace TMTG\DatabaseBundle\Form;


use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;


class DailyLoggerForm extends AbstractType
{

    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('Employee Name',emailType::class)
            ->add('PIN', TextareaType::class)

        ;

    }
}