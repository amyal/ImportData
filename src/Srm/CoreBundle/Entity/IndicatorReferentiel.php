<?php

namespace Srm\CoreBundle\Entity;

class IndicatorReferentiel
{
    /**
     * @var integer
     */
    private $indicatorReferentielId;

    /**
     * @var \Srm\CoreBundle\Entity\IndicatorLevel1
     */
    private $indicatorLevel1;

    /**
     * @var \Srm\CoreBundle\Entity\IndicatorLevel3
     */
    private $indicatorLevel3;

    /**
     * @var \Srm\CoreBundle\Entity\IndicatorLevel2
     */
    private $indicatorLevel2;

    /**
     * @var \Srm\CoreBundle\Entity\Referentiel
     */
    private $referentiel;

    /**
     * @var \Srm\CoreBundle\Entity\Indicator
     */
    private $indicator;


    /**
     * Get indicatorReferentielId
     *
     * @return integer
     */
    public function getIndicatorReferentielId()
    {
        return $this->indicatorReferentielId;
    }

    /**
     * Set indicatorLevel1
     *
     * @param \Srm\CoreBundle\Entity\IndicatorLevel1 $indicatorLevel1
     * @return IndicatorReferentiel
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
     * Set indicatorLevel3
     *
     * @param \Srm\CoreBundle\Entity\IndicatorLevel3 $indicatorLevel3
     * @return IndicatorReferentiel
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
     * Set indicatorLevel2
     *
     * @param \Srm\CoreBundle\Entity\IndicatorLevel2 $indicatorLevel2
     * @return IndicatorReferentiel
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
     * Set referentiel
     *
     * @param \Srm\CoreBundle\Entity\Referentiel $referentiel
     * @return IndicatorReferentiel
     */
    public function setReferentiel(Referentiel $referentiel = null)
    {
        $this->referentiel = $referentiel;

        return $this;
    }

    /**
     * Get referentiel
     *
     * @return \Srm\CoreBundle\Entity\Referentiel
     */
    public function getReferentiel()
    {
        return $this->referentiel;
    }

    /**
     * Set indicator
     *
     * @param \Srm\CoreBundle\Entity\Indicator $indicator
     * @return IndicatorReferentiel
     */
    public function setIndicator(Indicator $indicator = null)
    {
        $this->indicator = $indicator;

        return $this;
    }

    /**
     * Get indicator
     *
     * @return \Srm\CoreBundle\Entity\Indicator
     */
    public function getIndicator()
    {
        return $this->indicator;
    }
}
