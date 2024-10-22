<?php

namespace Easy\ForumBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Message
 *
 * @ORM\Table(name="message")
 * @ORM\Entity(repositoryClass="Easy\ForumBundle\Entity\MessageRepository")
 */
class Message
{
    /**
    * @ORM\ManyToOne(targetEntity="Easy\ForumBundle\Entity\Sujet")
    * @ORM\JoinColumn(nullable=false)
    */
    private $sujet;
    
    /**
    * @ORM\ManyToOne(targetEntity="Easy\UtilisateurBundle\Entity\Utilisateur")
    * @ORM\JoinColumn(nullable=false)
    */
    private $utilisateur;
    
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
     * @ORM\Column(name="contenu", type="text", nullable=true)
     */
    private $contenu;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date", type="datetime", nullable=true)
     */
    private $date;



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
     * Set contenu
     *
     * @param string $contenu
     * @return Message
     */
    public function setContenu($contenu)
    {
        $this->contenu = $contenu;
    
        return $this;
    }

    /**
     * Get contenu
     *
     * @return string 
     */
    public function getContenu()
    {
        return $this->contenu;
    }

    /**
     * Set date
     *
     * @param \DateTime $date
     * @return Message
     */
    public function setDate($date)
    {
        $this->date = $date;
    
        return $this;
    }

    /**
     * Get date
     *
     * @return \DateTime 
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Set sujet
     *
     * @param \Easy\ForumBundle\Entity\Sujet $sujet
     * @return Message
     */
    public function setSujet(\Easy\ForumBundle\Entity\Sujet $sujet)
    {
        $this->sujet = $sujet;
    
        return $this;
    }

    /**
     * Get sujet
     *
     * @return \Easy\ForumBundle\Entity\Sujet 
     */
    public function getSujet()
    {
        return $this->sujet;
    }

    /**
     * Set utilisateur
     *
     * @param \Easy\UtilisateurBundle\Entity\Utilisateur $utilisateur
     * @return Message
     */
    public function setUtilisateur(\Easy\UtilisateurBundle\Entity\Utilisateur $utilisateur)
    {
        $this->utilisateur = $utilisateur;
    
        return $this;
    }

    /**
     * Get utilisateur
     *
     * @return \Easy\UtilisateurBundle\Entity\Utilisateur 
     */
    public function getUtilisateur()
    {
        return $this->utilisateur;
    }
}