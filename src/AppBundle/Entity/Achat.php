<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Achat
 *
 * @ORM\Table(name="Achat", indexes={@ORM\Index(name="IDX_E768AB52A1866919", columns={"Code_Enregistrement"}), @ORM\Index(name="IDX_E768AB52888459B3", columns={"Code_Abonne"})})
 * @ORM\Entity
 */
class Achat
{
    /**
     * @var integer
     *
     * @ORM\Column(name="Code_Achat", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $codeAchat;

    /**
     * @var boolean
     *
     * @ORM\Column(name="Achat_Confirme", type="boolean", nullable=true)
     */
    private $achatConfirme;

    /**
     * @var \Enregistrement
     *
     * @ORM\ManyToOne(targetEntity="Enregistrement")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="Code_Enregistrement", referencedColumnName="Code_Morceau")
     * })
     */
    private $codeEnregistrement;

    /**
     * @var \Abonne
     *
     * @ORM\ManyToOne(targetEntity="Abonne")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="Code_Abonne", referencedColumnName="Code_Abonne")
     * })
     */
    private $codeAbonne;



    /**
     * Get codeAchat
     *
     * @return integer
     */
    public function getCodeAchat()
    {
        return $this->codeAchat;
    }

    /**
     * Set achatConfirme
     *
     * @param boolean $achatConfirme
     *
     * @return Achat
     */
    public function setAchatConfirme($achatConfirme)
    {
        $this->achatConfirme = $achatConfirme;

        return $this;
    }

    /**
     * Get achatConfirme
     *
     * @return boolean
     */
    public function getAchatConfirme()
    {
        return $this->achatConfirme;
    }

    /**
     * Set codeEnregistrement
     *
     * @param \AppBundle\Entity\Enregistrement $codeEnregistrement
     *
     * @return Achat
     */
    public function setCodeEnregistrement(\AppBundle\Entity\Enregistrement $codeEnregistrement = null)
    {
        $this->codeEnregistrement = $codeEnregistrement;

        return $this;
    }

    /**
     * Get codeEnregistrement
     *
     * @return \AppBundle\Entity\Enregistrement
     */
    public function getCodeEnregistrement()
    {
        return $this->codeEnregistrement;
    }

    /**
     * Set codeAbonne
     *
     * @param \AppBundle\Entity\Abonne $codeAbonne
     *
     * @return Achat
     */
    public function setCodeAbonne(\AppBundle\Entity\Abonne $codeAbonne = null)
    {
        $this->codeAbonne = $codeAbonne;

        return $this;
    }

    /**
     * Get codeAbonne
     *
     * @return \AppBundle\Entity\Abonne
     */
    public function getCodeAbonne()
    {
        return $this->codeAbonne;
    }
}
