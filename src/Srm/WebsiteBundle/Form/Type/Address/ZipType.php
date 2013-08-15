<?php

namespace Srm\WebsiteBundle\Form\Type\Address;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

use Srm\WebsiteBundle\Form\EventListener\ZipListener;

class ZipType extends AbstractType
{
    private $zipListener;

    public function __construct(ZipListener $zipListener)
    {
        $this->zipListener = $zipListener;
    }

    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('code', 'text', array('label' => 'address.form.zip'))
        ;

        $builder->addEventSubscriber($this->zipListener);
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'coumpound'  => true,
            'data_class' => 'Srm\CoreBundle\Entity\Zip',
        ));
    }

    public function getName()
    {
        return 'srm_zip';
    }
}
