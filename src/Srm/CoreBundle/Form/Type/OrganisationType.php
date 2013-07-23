<?php

namespace Srm\CoreBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;

class OrganisationType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('organisation')
            ->add('dueDate', null, array('widget' => 'single_text'))
            ->add('save', 'submit');
    }

    public function getName()
    {
        return 'organisation';
    }
}
