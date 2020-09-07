<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Instrumentation
 *
 * @ORM\Table(name="Instrumentation", indexes={@ORM\Index(name="IDX_8B3BA89ECB48FCBD", columns={"Code_Oeuvre"}), @ORM\Index(name="IDX_8B3BA89ED389A975", columns={"Code_Instrument"})})
 * @ORM\Entity
 */
class Instrumentation
{
    /**
     * @var integer
     *
     * @ORM\Column(name="Code_Instrumentation", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $codeInstrumentation;

    /**
     * @var \Oeuvre
     *
     * @ORM\ManyToOne(targetEntity="Oeuvre")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="Code_Oeuvre", referencedColumnName="Code_Oeuvre")
     * })
     */
    private $codeOeuvre;

    /**
     * @var \Instrument
     *
     * @ORM\ManyToOne(targetEntity="Instrument")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="Code_Instrument", referencedColumnName="Code_Instrument")
     * })
     */
    private $codeInstrument;



    /**
     * Get codeInstrumentation
     *
     * @return integer
     */
    public function getCodeInstrumentation()
    {
        return $this->codeInstrumentation;
    }

    /**
     * Set codeOeuvre
     *
     * @param \AppBundle\Entity\Oeuvre $codeOeuvre
     *
     * @return Instrumentation
     */
    public function setCodeOeuvre(\AppBundle\Entity\Oeuvre $codeOeuvre = null)
    {
        $this->codeOeuvre = $codeOeuvre;

        return $this;
    }

    /**
     * Get codeOeuvre
     *
     * @return \AppBundle\Entity\Oeuvre
     */
    public function getCodeOeuvre()
    {
        return $this->codeOeuvre;
    }

    /**
     * Set codeInstrument
     *
     * @param \AppBundle\Entity\Instrument $codeInstrument
     *
     * @return Instrumentation
     */
    public function setCodeInstrument(\AppBundle\Entity\Instrument $codeInstrument = null)
    {
        $this->codeInstrument = $codeInstrument;

        return $this;
    }

    /**
     * Get codeInstrument
     *
     * @return \AppBundle\Entity\Instrument
     */
    public function getCodeInstrument()
    {
        return $this->codeInstrument;
    }
}
