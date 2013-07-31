<?php

namespace Srm\WebsiteBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

use Srm\WebsiteBundle\Form\EventListener\CityListener;

class ZipType extends AbstractType
{
    private $cityListener;

    public function __construct(CityListener $cityListener)
    {
        $this->cityListener = $cityListener;
    }

    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('code', 'text', array('label' => 'form.address.zip'))
        ;

        $builder->addEventSubscriber($this->cityListener);
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'class'      => 'Srm\CoreBundle\Entity\Zip',
            'compound'   => true,
            'data_class' => 'Srm\CoreBundle\Entity\Zip',
        ));
    }

    public function getName()
    {
        return 'srm_zip';
    }
}
