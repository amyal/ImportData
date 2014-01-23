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
     * @var \Srm\CoreBundle\Entity\Indicators
     */
    private $indicatorsParentId;

    /**
     * @var \Srm\CoreBundle\Entity\Category1
     */
    private $category1;

    /**
     * @var \Srm\CoreBundle\Entity\UnitMeasurement
     */
    private $unitMeasurement;

    /**
     * @var \Srm\CoreBundle\Entity\IndicatorZone
     */
    private $indicatorZone;

    /**
     * @var \Srm\CoreBundle\Entity\IndicatorGraph
     */
    private $indicatorGraph;

    /**
     * @var \Srm\CoreBundle\Entity\ScreenPeriod
     */
    private $screenPeriod;

    /**
     * @var \Srm\CoreBundle\Entity\PublicationFrequency
     */
    private $publicationFrequency;

    /**
     * @var \Srm\CoreBundle\Entity\PublicationDelay
     */
    private $publicationDelay;

    /**
     * @var \Srm\CoreBundle\Entity\ReferencialType
     */
    private $referencialType;

    /**
     * @var \Srm\CoreBundle\Entity\Referencial
     */
    //private $referencial;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $items;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    //private $referencials;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->items = new \Doctrine\Common\Collections\ArrayCollection();
        //$this->referencials = new \Doctrine\Common\Collections\ArrayCollection();

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
     * Set indicatorsParentId
     *
     * @param \Srm\CoreBundle\Entity\Indicators $indicatorsParentId
     * @return Indicator
     */
    public function setIndicatorsParentId(Indicators $indicatorsParentId = null)
    {
        $this->indicatorsParentId = $indicatorsParentId;

        return $this;
    }

    /**
     * Get indicatorsParentId
     *
     * @return \Srm\CoreBundle\Entity\Indicators
     */
    public function getIndicatorsParentId()
    {
        return $this->indicatorsParentId;
    }

    /**
     * Set category1
     *
     * @param \Srm\CoreBundle\Entity\Category1 $category1
     * @return Indicator
     */
    public function setCategory1(Category1 $category1 = null)
    {
        $this->category1 = $category1;

        return $this;
    }

    /**
     * Get category1
     *
     * @return \Srm\CoreBundle\Entity\Category1
     */
    public function getCategory1()
    {
        return $this->category1;
    }

    /**
     * Set indicatorZone
     *
     * @param \Srm\CoreBundle\Entity\IndicatorZone $indicatorZone
     * @return Indicator
     */
    public function setIndicatorZone(IndicatorZone $indicatorZone = null)
    {
        $this->indicatorZone = $indicatorZone;

        return $this;
    }

    /**
     * Set unitMeasurement
     *
     * @param \Srm\CoreBundle\Entity\UnitMeasurement $unitMeasurement
     * @return Indicator
     */
    public function setUnitMeasurement(UnitMeasurement $unitMeasurement = null)
    {
        $this->unitMeasurement = $unitMeasurement;

        return $this;
    }

    /**
     * Get unitMeasurement
     *
     * @return \Srm\CoreBundle\Entity\UnitMeasurement
     */
    public function getUnitMeasurement()
    {
        return $this->unitMeasurement;
    }

    /**
     * Get indicatorZone
     *
     * @return \Srm\CoreBundle\Entity\IndicatorZone
     */
    public function getIndicatorZone()
    {
        return $this->indicatorZone;
    }

    /**
     * Set indicatorGraph
     *
     * @param \Srm\CoreBundle\Entity\IndicatorGraph $indicatorGraph
     * @return Indicator
     */
    public function setIndicatorGraph(IndicatorGraph $indicatorGraph = null)
    {
        $this->indicatorGraph = $indicatorGraph;

        return $this;
    }

    /**
     * Get indicatorGraph
     *
     * @return \Srm\CoreBundle\Entity\IndicatorGraph
     */
    public function getIndicatorGraph()
    {
        return $this->indicatorGraph;
    }

    /**
     * Set screenPeriod
     *
     * @param \Srm\CoreBundle\Entity\ScreenPeriod $screenPeriod
     * @return Indicator
     */
    public function setScreenPeriod(ScreenPeriod $screenPeriod = null)
    {
        $this->screenPeriod = $screenPeriod;

        return $this;
    }

    /**
     * Get screenPeriod
     *
     * @return \Srm\CoreBundle\Entity\ScreenPeriod
     */
    public function getScreenPeriod()
    {
        return $this->screenPeriod;
    }

    /**
     * Set publicationFrequency
     *
     * @param \Srm\CoreBundle\Entity\PublicationFrequency $publicationFrequency
     * @return Indicator
     */
    public function setPublicationFrequency(PublicationFrequency $publicationFrequency = null)
    {
        $this->publicationFrequency = $publicationFrequency;

        return $this;
    }

    /**
     * Get publicationFrequency
     *
     * @return \Srm\CoreBundle\Entity\PublicationFrequency
     */
    public function getPublicationFrequency()
    {
        return $this->publicationFrequency;
    }

    /**
     * Set publicationDelay
     *
     * @param \Srm\CoreBundle\Entity\PublicationDelay $publicationDelay
     * @return Indicator
     */
    public function setPublicationDelay(PublicationDelay $publicationDelay = null)
    {
        $this->publicationDelay = $publicationDelay;

        return $this;
    }

    /**
     * Get publicationDelay
     *
     * @return \Srm\CoreBundle\Entity\PublicationDelay
     */
    public function getPublicationDelayy()
    {
        return $this->publicationDelay;
    }

    /**
     * Set referencial
     *
     * @param \Srm\CoreBundle\Entity\Referencial $referencial
     * @return Referencial
     */
    /*public function setReferencial(Referencial $referencial = null)
    {
        $this->referencial = $referencial;

        return $this;
    }*/

    /**
     * Get referencial
     *
     * @return \Srm\CoreBundle\Entity\Referencial
     */
    /*public function getReferencial()
    {
        return $this->referencial;
    }*/

    /**
     * Set referencialType
     *
     * @param \Srm\CoreBundle\Entity\ReferencialType $referencialType
     * @return ReferencialType
     */
    public function setReferencialType(ReferencialType $referencialType = null)
    {
        $this->referencialType = $referencial;

        return $this;
    }

    /**
     * Get referencialType
     *
     * @return \Srm\CoreBundle\Entity\ReferencialType
     */
    public function getReferencialType()
    {
        return $this->referencialType;
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
     * Add referencial
     *
     * @param \Srm\CoreBundle\Entity\Referencial $referencial
     * @return Indicator
     */
    /*public function addReferencial(Referencial $referencial)
    {
        $this->referencials[] = $referencial;

        return $this;
    }*/

    /**
     * Remove referencial
     *
     * @param \Srm\CoreBundle\Entity\Referencial $referencial
     */
    /*public function removeReferencial(Referencial $referencial)
    {
        $this->referencials->removeElement($referencial);
    }*/

    /**
     * Get referencials
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    /*public function getReferencials()
    {
        return $this->referencials;
    }*/
}
