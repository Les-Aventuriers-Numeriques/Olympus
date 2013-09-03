<?php

namespace Easy\DonBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Moyenpaiement
 *
 * @ORM\Table(name="moyenpaiement")
 * @ORM\Entity
 */
class MoyenPaiement
{
    /**
    * @ORM\OneToMany(targetEntity="Easy\DonBundle\Entity\Don", mappedBy="moyen_paiement")
    */
    private $dons;
    
    
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="libelle", type="string", length=45, nullable=true)
     */
    private $libelle;



    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set libelle
     *
     * @param string $libelle
     * @return Moyenpaiement
     */
    public function setLibelle($libelle)
    {
        $this->libelle = $libelle;
    
        return $this;
    }

    /**
     * Get libelle
     *
     * @return string 
     */
    public function getLibelle()
    {
        return $this->libelle;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->dons = new \Doctrine\Common\Collections\ArrayCollection();
    }
    
    /**
     * Add dons
     *
     * @param \Easy\DonBundle\Entity\Don $dons
     * @return MoyenPaiement
     */
    public function addDon(\Easy\DonBundle\Entity\Don $dons)
    {
        $this->dons[] = $dons;
    
        return $this;
    }

    /**
     * Remove dons
     *
     * @param \Easy\DonBundle\Entity\Don $dons
     */
    public function removeDon(\Easy\DonBundle\Entity\Don $dons)
    {
        $this->dons->removeElement($dons);
    }

    /**
     * Get dons
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getDons()
    {
        return $this->dons;
    }
}