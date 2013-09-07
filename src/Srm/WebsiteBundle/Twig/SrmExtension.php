<?php

namespace Srm\WebsiteBundle\Twig;

class SrmExtension extends \Twig_Extension
{
    public function getFilters()
    {
        return array(
            new \Twig_SimpleFilter('joinLabels', array($this, 'joinLabelsFilter')),
        );
    }

    public function joinLabelsFilter($collection, $glue = '')
    {
        if ($collection instanceof Traversable) {
            $collection = iterator_to_array($collection, false);
        }

        $labels = array();
        foreach ($collection as $element) {
            if (!method_exists($element, 'getLabel')) {
                throw new \Exception(sprintf('Object [%s] does not have a getLabel method', get_class($element)));
            }

            $labels[] = $element->getLabel();
        }

        return implode($glue, $labels);
    }

    public function getName()
    {
        return 'srm_extension';
    }
}
