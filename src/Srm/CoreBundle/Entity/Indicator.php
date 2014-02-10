<?php

namespace Srm\CoreBundle\Entity;

use \Srm\CoreBundle\Entity\Indicator;

/**
 * Indicator
 */
class Indicator
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
     * @var integer
     */
    private $createdBy;

    /**
     * @var integer
     */
    private $modifiedBy;

    /**
     * @var \DateTime
     */
    private $creationDate;

    /**
     * @var \DateTime
     */
    private $modificationDate;

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
    private $indicatorId;

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
     * @var \Srm\CoreBundle\Entity\Indicator
     */
    private $indicators;

    /**
     * @var \Srm\CoreBundle\Entity\Referencial
     */
    private $referencials;

    /**
     * Constructor
     */
    public function __construct()
    {
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
     * Get indicatorId
     *
     * @return integer
     */
    public function getIndicatorId()
    {
        return $this->indicatorId;
    }

    /**
     * Set indicators
     *
     * @param \Srm\CoreBundle\Entity\Indicators $indicators
     * @return Indicator
     */
    /*public function setIndicators(Indicators $indicators = null)
    {
        $this->indicators = $indicators;

        return $this;
    }*/

    /**
     * Get indicators
     *
     * @return \Srm\CoreBundle\Entity\Indicators
     */
    /*public function getIndicators()
    {
        return $this->indicators;
    }*/

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
     * Get indicatorZone
     *
     * @return \Srm\CoreBundle\Entity\IndicatorZone
     */
    public function getIndicatorZone()
    {
        return $this->indicatorZone;
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
    public function getPublicationDelay()
    {
        return $this->publicationDelay;
    }

    /**
     * Set referencials
     *
     * @param \Srm\CoreBundle\Entity\Referencial $referencials
     * @return Referencial
     */
    public function setReferencials(Referencial $referencials = null)
    {
        $this->referencials = $referencials;

        return $this;
    }

    /**
     * Get referencials
     *
     * @return \Srm\CoreBundle\Entity\Referencial
     */
    public function getReferencials()
    {
        return $this->referencials;
    }

    /**
     * Set indicators
     *
     * @param \Srm\CoreBundle\Entity\Indicators $indicators
     * @return Indicator
     */
    /*public function setIndicators(Indicators $indicators = null)
    {
        $this->indicators = $indicators;

        return $this;
    }*/

    /**
     * Get indicators
     *
     * @return \Srm\CoreBundle\Entity\Indicators
     */
    /*public function getIndicators()
    {
        return $this->indicators;
    }*/


    /**
     * Remove indicators
     *
     * @param \Srm\CoreBundle\Entity\Indicator $indicators
     */
    public function removeIndicator(Indicator $indicators)
    {
        $indicators->removeReferencial($this);
        $this->indicators->removeElement($indicators);
    }

    /**
     * Get indicators
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getIndicators()
    {
        return $this->indicators;
    }

}
