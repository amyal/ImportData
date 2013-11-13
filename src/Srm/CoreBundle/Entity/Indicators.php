<?php

namespace Srm\CoreBundle\Entity;

/**
 * Indicators
 */
class Indicators
{
    /**
     * @var string
     */
    private $code;

    /**
     * @var string
     */
    private $reference;

    /**
     * @var string
     */
    private $label;

    /**
     * @var boolean
     */
    private $enabled;

    /**
     * @var boolean
     */
    private $deleted;

    /**
     * @var integer
     */
    private $indicatorsId;

    /**
     * @var \Srm\CoreBundle\Entity\IndicatorLevel1
     */
    private $indicatorLevel1;

    /**
     * @var \Srm\CoreBundle\Entity\Periodicity
     */
    private $periodicity;

    /**
     * @var \Srm\CoreBundle\Entity\IndicatorLevel2
     */
    private $indicatorLevel2;

    /**
     * @var \Srm\CoreBundle\Entity\IndicatorLevel3
     */
    private $indicatorLevel3;

    /**
     * @var \Srm\CoreBundle\Entity\Referencial
     */
    private $referencial;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $items;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $repositories;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->items = new \Doctrine\Common\Collections\ArrayCollection();
        $this->repositories = new \Doctrine\Common\Collections\ArrayCollection();

        $this->deleted = false;
    }

    /**
     * Set code
     *
     * @param string $code
     * @return Indicator
     */
    public function setCode($code)
    {
        $this->code = $code;

        return $this;
    }

    /**
     * Get code
     *
     * @return string
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * Set reference
     *
     * @param string $reference
     * @return Indicator
     */
    public function setReference($reference)
    {
        $this->reference = $reference;

        return $this;
    }

    /**
     * Get reference
     *
     * @return string
     */
    public function getReference()
    {
        return $this->reference;
    }

    /**
     * Set label
     *
     * @param string $label
     * @return Indicator
     */
    public function setLabel($label)
    {
        $this->label = $label;

        return $this;
    }

    /**
     * Get label
     *
     * @return string
     */
    public function getLabel()
    {
        return $this->label;
    }

    /**
     * Set enabled
     *
     * @param boolean $enabled
     * @return Indicator
     */
    public function setEnabled($enabled)
    {
        $this->enabled = $enabled;

        return $this;
    }

    /**
     * Get enabled
     *
     * @return boolean
     */
    public function getEnabled()
    {
        return $this->enabled;
    }

    /**
     * Set deleted
     *
     * @param boolean $deleted
     * @return Indicator
     */
    public function setDeleted($deleted)
    {
        $this->deleted = $deleted;

        return $this;
    }

    /**
     * Get deleted
     *
     * @return boolean
     */
    public function getDeleted()
    {
        return $this->deleted;
    }

    /**
     * Get indicatorsId
     *
     * @return integer
     */
    public function getIndicatorsId()
    {
        return $this->indicatorsId;
    }

    /**
     * Set indicatorLevel1
     *
     * @param \Srm\CoreBundle\Entity\IndicatorLevel1 $indicatorLevel1
     * @return Indicator
     */
    public function setIndicatorLevel1(IndicatorLevel1 $indicatorLevel1 = null)
    {
        $this->indicatorLevel1 = $indicatorLevel1;

        return $this;
    }

    /**
     * Get indicatorLevel1
     *
     * @return \Srm\CoreBundle\Entity\IndicatorLevel1
     */
    public function getIndicatorLevel1()
    {
        return $this->indicatorLevel1;
    }

    /**
     * Set periodicity
     *
     * @param \Srm\CoreBundle\Entity\Periodicity $periodicity
     * @return Indicator
     */
    public function setPeriodicity(Periodicity $periodicity = null)
    {
        $this->periodicity = $periodicity;

        return $this;
    }

    /**
     * Get periodicity
     *
     * @return \Srm\CoreBundle\Entity\Periodicity
     */
    public function getPeriodicity()
    {
        return $this->periodicity;
    }

    /**
     * Set indicatorLevel2
     *
     * @param \Srm\CoreBundle\Entity\IndicatorLevel2 $indicatorLevel2
     * @return Indicator
     */
    public function setIndicatorLevel2(IndicatorLevel2 $indicatorLevel2 = null)
    {
        $this->indicatorLevel2 = $indicatorLevel2;

        return $this;
    }

    /**
     * Get indicatorLevel2
     *
     * @return \Srm\CoreBundle\Entity\IndicatorLevel2
     */
    public function getIndicatorLevel2()
    {
        return $this->indicatorLevel2;
    }

    /**
     * Set indicatorLevel3
     *
     * @param \Srm\CoreBundle\Entity\IndicatorLevel3 $indicatorLevel3
     * @return Indicator
     */
    public function setIndicatorLevel3(IndicatorLevel3 $indicatorLevel3 = null)
    {
        $this->indicatorLevel3 = $indicatorLevel3;

        return $this;
    }

    /**
     * Get indicatorLevel3
     *
     * @return \Srm\CoreBundle\Entity\IndicatorLevel3
     */
    public function getIndicatorLevel3()
    {
        return $this->indicatorLevel3;
    }

    /**
     * Set referencial
     *
     * @param \Srm\CoreBundle\Entity\Referencial $referencial
     * @return Referencial
     */
    public function setReferencial(Referencial $referencial = null)
    {
        $this->referencial = $referencial;

        return $this;
    }

    /**
     * Get referencial
     *
     * @return \Srm\CoreBundle\Entity\Referencial
     */
    public function getReferencial()
    {
        return $this->referencial;
    }

    /**
     * Add item
     *
     * @param \Srm\CoreBundle\Entity\Item $item
     * @return Indicator
     */
    public function addItem(Item $item)
    {
        $this->items[] = $item;

        return $this;
    }

    /**
     * Remove item
     *
     * @param \Srm\CoreBundle\Entity\Item $item
     */
    public function removeItem(Item $item)
    {
        $this->items->removeElement($item);
    }

    /**
     * Get items
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getItems()
    {
        return $this->items;
    }
    
    /**
     * Add repository
     *
     * @param \Srm\CoreBundle\Entity\Repository $repository
     * @return Indicator
     */
    public function addRepository(Repository $repository)
    {
        $this->repositories[] = $repository;

        return $this;
    }

    /**
     * Remove repository
     *
     * @param \Srm\CoreBundle\Entity\Repository $repository
     */
    public function removeRepository(Repository $repository)
    {
        $this->repositories->removeElement($repository);
    }

    /**
     * Get repositories
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getRepositories()
    {
        return $this->repositories;
    }
}
