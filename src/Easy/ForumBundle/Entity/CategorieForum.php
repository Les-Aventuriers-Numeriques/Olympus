<?php

namespace Easy\ForumBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Categorieforum
 *
 * @ORM\Table(name="categorieforum")
 * @ORM\Entity
 */
class CategorieForum
{
    /**
    * @ORM\OneToMany(targetEntity="Easy\ForumBundle\Entity\Forum", mappedBy="categorie_forum")
    */
    private $forums;
    
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
     * @var string
     *
     * @ORM\Column(name="description", type="text", nullable=true)
     */
    private $description;

    /**
     * @var string
     *
     * @ORM\Column(name="ordre", type="string", length=45, nullable=true)
     */
    private $ordre;



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
     * @return Categorieforum
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
     * Set description
     *
     * @param string $description
     * @return Categorieforum
     */
    public function setDescription($description)
    {
        $this->description = $description;
    
        return $this;
    }

    /**
     * Get description
     *
     * @return string 
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set ordre
     *
     * @param string $ordre
     * @return Categorieforum
     */
    public function setOrdre($ordre)
    {
        $this->ordre = $ordre;
    
        return $this;
    }

    /**
     * Get ordre
     *
     * @return string 
     */
    public function getOrdre()
    {
        return $this->ordre;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->forums = new \Doctrine\Common\Collections\ArrayCollection();
    }
    
    /**
     * Add forums
     *
     * @param \Easy\ForumBundle\Entity\Forum $forums
     * @return CategorieForum
     */
    public function addForum(\Easy\ForumBundle\Entity\Forum $forums)
    {
        $this->forums[] = $forums;
    
        return $this;
    }

    /**
     * Remove forums
     *
     * @param \Easy\ForumBundle\Entity\Forum $forums
     */
    public function removeForum(\Easy\ForumBundle\Entity\Forum $forums)
    {
        $this->forums->removeElement($forums);
    }

    /**
     * Get forums
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getForums()
    {
        return $this->forums;
    }
}