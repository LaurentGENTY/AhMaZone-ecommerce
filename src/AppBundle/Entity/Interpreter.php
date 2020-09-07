<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Interpreter
 *
 * @ORM\Table(name="Interpreter", indexes={@ORM\Index(name="IDX_36AEA960D990D4F0", columns={"Code_Morceau"}), @ORM\Index(name="IDX_36AEA960E694D5AB", columns={"Code_Musicien"}), @ORM\Index(name="IDX_36AEA960D389A975", columns={"Code_Instrument"})})
 * @ORM\Entity
 */
class Interpreter
{
    /**
     * @var integer
     *
     * @ORM\Column(name="Code_Interpreter", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $codeInterpreter;

    /**
     * @var \Enregistrement
     *
     * @ORM\ManyToOne(targetEntity="Enregistrement")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="Code_Morceau", referencedColumnName="Code_Morceau")
     * })
     */
    private $codeMorceau;

    /**
     * @var \Musicien
     *
     * @ORM\ManyToOne(targetEntity="Musicien")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="Code_Musicien", referencedColumnName="Code_Musicien")
     * })
     */
    private $codeMusicien;

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
     * Get codeInterpreter
     *
     * @return integer
     */
    public function getCodeInterpreter()
    {
        return $this->codeInterpreter;
    }

    /**
     * Set codeMorceau
     *
     * @param \AppBundle\Entity\Enregistrement $codeMorceau
     *
     * @return Interpreter
     */
    public function setCodeMorceau(\AppBundle\Entity\Enregistrement $codeMorceau = null)
    {
        $this->codeMorceau = $codeMorceau;

        return $this;
    }

    /**
     * Get codeMorceau
     *
     * @return \AppBundle\Entity\Enregistrement
     */
    public function getCodeMorceau()
    {
        return $this->codeMorceau;
    }

    /**
     * Set codeMusicien
     *
     * @param \AppBundle\Entity\Musicien $codeMusicien
     *
     * @return Interpreter
     */
    public function setCodeMusicien(\AppBundle\Entity\Musicien $codeMusicien = null)
    {
        $this->codeMusicien = $codeMusicien;

        return $this;
    }

    /**
     * Get codeMusicien
     *
     * @return \AppBundle\Entity\Musicien
     */
    public function getCodeMusicien()
    {
        return $this->codeMusicien;
    }

    /**
     * Set codeInstrument
     *
     * @param \AppBundle\Entity\Instrument $codeInstrument
     *
     * @return Interpreter
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
