<?php

namespace Easy\DispoBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Etat
 *
 * @ORM\Table(name="etat")
 * @ORM\Entity
 */
class Etat
{
    /**
    * @ORM\OneToMany(targetEntity="Easy\DispoBundle\Entity\Disponibilite", mappedBy="etat")
    */
    private $disponibilites;
    
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
     * @return Etat
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
        $this->disponibilites = new \Doctrine\Common\Collections\ArrayCollection();
    }
    
    /**
     * Add disponibilites
     *
     * @param \Easy\DispoBundle\Entity\Disponibilite $disponibilites
     * @return Etat
     */
    public function addDisponibilite(\Easy\DispoBundle\Entity\Disponibilite $disponibilites)
    {
        $this->disponibilites[] = $disponibilites;
    
        return $this;
    }

    /**
     * Remove disponibilites
     *
     * @param \Easy\DispoBundle\Entity\Disponibilite $disponibilites
     */
    public function removeDisponibilite(\Easy\DispoBundle\Entity\Disponibilite $disponibilites)
    {
        $this->disponibilites->removeElement($disponibilites);
    }

    /**
     * Get disponibilites
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getDisponibilites()
    {
        return $this->disponibilites;
    }
}