<?php

namespace Easy\UtilisateurBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use FOS\UserBundle\Entity\User as BaseUser;

/**
 * Utilisateur
 *
 * @ORM\Table(name="utilisateur")
 * @ORM\Entity
 */
class Utilisateur extends BaseUser
{
    /**
    * @ORM\OneToMany(targetEntity="Easy\DonBundle\Entity\Don", mappedBy="utilisateur")
    */
    private $dons;
    
   /**
    * @ORM\OneToMany(targetEntity="Easy\ArticleBundle\Entity\Article", mappedBy="utilisateur")
    */
    private $articles;
    
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    protected $id;

    /**
     * @var string
     *
     * @ORM\Column(name="nom", type="string", length=45, nullable=true)
     */
    private $nom;

    /**
     * @var string
     *
     * @ORM\Column(name="prenom", type="string", length=45, nullable=true)
     */
    private $prenom;

    /**
     * @var string
     *
     * @ORM\Column(name="avatar", type="text", nullable=true)
     */
    private $avatar;

    /**
     * @var string
     *
     * @ORM\Column(name="steam", type="text", nullable=true)
     */
    private $steam;

    /**
     * @var string
     *
     * @ORM\Column(name="leitmotiv", type="text", nullable=true)
     */
    private $leitmotiv;



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
     * Set nom
     *
     * @param string $nom
     * @return Utilisateur
     */
    public function setNom($nom)
    {
        $this->nom = $nom;
    
        return $this;
    }

    /**
     * Get nom
     *
     * @return string 
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Set prenom
     *
     * @param string $prenom
     * @return Utilisateur
     */
    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;
    
        return $this;
    }

    /**
     * Get prenom
     *
     * @return string 
     */
    public function getPrenom()
    {
        return $this->prenom;
    }

    /**
     * Set email
     *
     * @param string $email
     * @return Utilisateur
     */
    public function setEmail($email)
    {
        $this->email = $email;
    
        return $this;
    }

    /**
     * Get email
     *
     * @return string 
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set login
     *
     * @param string $login
     * @return Utilisateur
     */
    public function setLogin($login)
    {
        $this->login = $login;
    
        return $this;
    }

    /**
     * Get login
     *
     * @return string 
     */
    public function getLogin()
    {
        return $this->login;
    }

    /**
     * Set password
     *
     * @param string $password
     * @return Utilisateur
     */
    public function setPassword($password)
    {
        $this->password = $password;
    
        return $this;
    }

    /**
     * Get password
     *
     * @return string 
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * Set avatar
     *
     * @param string $avatar
     * @return Utilisateur
     */
    public function setAvatar($avatar)
    {
        $this->avatar = $avatar;
    
        return $this;
    }

    /**
     * Get avatar
     *
     * @return string 
     */
    public function getAvatar()
    {
        return $this->avatar;
    }

    /**
     * Set steam
     *
     * @param string $steam
     * @return Utilisateur
     */
    public function setSteam($steam)
    {
        $this->steam = $steam;
    
        return $this;
    }

    /**
     * Get steam
     *
     * @return string 
     */
    public function getSteam()
    {
        return $this->steam;
    }

    /**
     * Set leitmotiv
     *
     * @param string $leitmotiv
     * @return Utilisateur
     */
    public function setLeitmotiv($leitmotiv)
    {
        $this->leitmotiv = $leitmotiv;
    
        return $this;
    }

    /**
     * Get leitmotiv
     *
     * @return string 
     */
    public function getLeitmotiv()
    {
        return $this->leitmotiv;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        parent::__construct();
        $this->dons = new \Doctrine\Common\Collections\ArrayCollection();
    }
    
    /**
     * Add dons
     *
     * @param \Easy\DonBundle\Entity\Don $dons
     * @return Utilisateur
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

    /**
     * Add articles
     *
     * @param \Easy\ArticleBundle\Entity\Article $articles
     * @return Utilisateur
     */
    public function addArticle(\Easy\ArticleBundle\Entity\Article $articles)
    {
        $this->articles[] = $articles;
    
        return $this;
    }

    /**
     * Remove articles
     *
     * @param \Easy\ArticleBundle\Entity\Article $articles
     */
    public function removeArticle(\Easy\ArticleBundle\Entity\Article $articles)
    {
        $this->articles->removeElement($articles);
    }

    /**
     * Get articles
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getArticles()
    {
        return $this->articles;
    }
}