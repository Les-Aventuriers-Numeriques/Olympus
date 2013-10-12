<?php

namespace Easy\DispoBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Disponibilite
 *
 * @ORM\Table(name="disponibilite")
 * @ORM\Entity
 */
class Disponibilite
{
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
     * @ORM\Column(name="commentaire", type="text", nullable=true)
     */
    private $commentaire;

    /**
    * @ORM\ManyToOne(targetEntity="Easy\UtilisateurBundle\Entity\Utilisateur")
    * @ORM\JoinColumn(nullable=false)
    */
    private $utilisateur;

    /**
    * @ORM\ManyToOne(targetEntity="Easy\DispoBundle\Entity\Evenement")
    * @ORM\JoinColumn(nullable=false)
    */
    private $evenement;

    /**
    * @ORM\ManyToOne(targetEntity="Easy\DispoBundle\Entity\Etat")
    * @ORM\JoinColumn(nullable=false)
    */
    private $etat;

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
     * Set commentaire
     *
     * @param string $commentaire
     * @return Disponibilite
     */
    public function setCommentaire($commentaire)
    {
        $this->commentaire = $commentaire;

        return $this;
    }

    /**
     * Get commentaire
     *
     * @return string
     */
    public function getCommentaire()
    {
        return $this->commentaire;
    }

    /**
     * Set utilisateur
     *
     * @param \Easy\UtilisateurBundle\Entity\Utilisateur $utilisateur
     * @return Disponibilite
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

    /**
     * Set evenement
     *
     * @param \Easy\DispoBundle\Entity\Evenement $evenement
     * @return Disponibilite
     */
    public function setEvenement(\Easy\DispoBundle\Entity\Evenement $evenement)
    {
        $this->evenement = $evenement;

        return $this;
    }

    /**
     * Get evenement
     *
     * @return \Easy\DispoBundle\Entity\Evenement
     */
    public function getEvenement()
    {
        return $this->evenement;
    }

    /**
     * Set etat
     *
     * @param \Easy\DispoBundle\Entity\Etat $etat
     * @return Disponibilite
     */
    public function setEtat(\Easy\DispoBundle\Entity\Etat $etat)
    {
        $this->etat = $etat;

        return $this;
    }

    /**
     * Get etat
     *
     * @return \Easy\DispoBundle\Entity\Etat
     */
    public function getEtat()
    {
        return $this->etat;
    }

    /**
     * Retourne l'utilisateur de cette disponibilité sous forme HTML
     *
     * @return string
     */
    public function getStylizedUtilisateur()
    {
        if ($this->getCommentaire() !== null) {
            return '<span class="disponibility-comment" data-toggle="tooltip" title="'.$this->getCommentaire().'">'.$this->getUtilisateur().'</span>';
        } else {
            return $this->getUtilisateur();
        }
    }
}