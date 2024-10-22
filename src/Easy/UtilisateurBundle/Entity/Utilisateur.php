<?php

namespace Easy\UtilisateurBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use FOS\UserBundle\Model\User as BaseUser;
use Cunningsoft\ChatBundle\Entity\AuthorInterface;

/**
 * Utilisateur
 *
 * @ORM\Table(name="utilisateur")
 * @ORM\Entity
 */
class Utilisateur extends BaseUser implements AuthorInterface
{
    /**
    * @ORM\OneToMany(targetEntity="Easy\ForumBundle\Entity\Sujet", mappedBy="utilisateur")
    */
    private $sujets;
    
    /**
    * @ORM\OneToMany(targetEntity="Easy\ForumBundle\Entity\Message", mappedBy="utilisateur")
    */
    private $messages;
    
    /**
    * @ORM\OneToMany(targetEntity="Easy\DonBundle\Entity\Don", mappedBy="utilisateur")
    */
    private $dons;

   /**
    * @ORM\OneToMany(targetEntity="Easy\ArticleBundle\Entity\Article", mappedBy="utilisateur")
    */
    private $articles;

    /**
    * @ORM\OneToMany(targetEntity="Easy\DispoBundle\Entity\Disponibilite", mappedBy="utilisateur")
    */
    private $disponibilites;

    /**
     * @ORM\ManyToMany(targetEntity="Easy\UtilisateurBundle\Entity\Groupe")
     * @ORM\JoinTable(name="fos_user_user_group",
     *      joinColumns={@ORM\JoinColumn(name="user_id", referencedColumnName="id")},
     *      inverseJoinColumns={@ORM\JoinColumn(name="group_id", referencedColumnName="id")}
     * )
     */
    protected $groups;

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
     * @ORM\Column(name="pseudo_steam", type="string", length=45, nullable=true)
     */
    private $pseudo_steam;

    /**
     * @var string
     *
     * @ORM\Column(name="id_steam", type="string", length=45, nullable=true)
     */
    private $id_steam;

    /**
     * @var string
     *
     * @ORM\Column(name="leitmotiv", type="text", nullable=true)
     */
    private $leitmotiv;

    /**
     * @var boolean
     *
     * @ORM\Column(name="est_publique", type="boolean")
     */
    private $est_publique=0;

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

        parent::__construct();
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



    /**
     * Set pseudo_steam
     *
     * @param string $pseudoSteam
     * @return Utilisateur
     */
    public function setPseudoSteam($pseudoSteam)
    {
        $this->pseudo_steam = $pseudoSteam;

        return $this;
    }

    /**
     * Get pseudo_steam
     *
     * @return string
     */
    public function getPseudoSteam()
    {
        return $this->pseudo_steam;
    }

    /**
     * Set id_steam
     *
     * @param string $idSteam
     * @return Utilisateur
     */
    public function setIdSteam($idSteam)
    {
        $this->id_steam = $idSteam;

        return $this;
    }

    /**
     * Get id_steam
     *
     * @return string
     */
    public function getIdSteam()
    {
        return $this->id_steam;
    }

    /**
     * Get est_publique
     *
     * @return boolean
     */
    public function getEstPublique()
    {
        return $this->est_publique;
    }

    /**
     * Set est_publique
     *
     * @param boolean $estPublique
     * @return Utilisateur
     */
    public function setEstPublique($estPublique)
    {
        $this->est_publique = $estPublique;

        return $this;
    }

    /**
     * Add disponibilites
     *
     * @param \Easy\DispoBundle\Entity\Disponibilite $disponibilites
     * @return Utilisateur
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

    /**
     * Add sujets
     *
     * @param \Easy\ForumBundle\Entity\Sujet $sujets
     * @return Utilisateur
     */
    public function addSujet(\Easy\ForumBundle\Entity\Sujet $sujets)
    {
        $this->sujets[] = $sujets;
    
        return $this;
    }

    /**
     * Remove sujets
     *
     * @param \Easy\ForumBundle\Entity\Sujet $sujets
     */
    public function removeSujet(\Easy\ForumBundle\Entity\Sujet $sujets)
    {
        $this->sujets->removeElement($sujets);
    }

    /**
     * Get sujets
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getSujets()
    {
        return $this->sujets;
    }

    /**
     * Add messages
     *
     * @param \Easy\ForumBundle\Entity\Message $messages
     * @return Utilisateur
     */
    public function addMessage(\Easy\ForumBundle\Entity\Message $messages)
    {
        $this->messages[] = $messages;
    
        return $this;
    }

    /**
     * Remove messages
     *
     * @param \Easy\ForumBundle\Entity\Message $messages
     */
    public function removeMessage(\Easy\ForumBundle\Entity\Message $messages)
    {
        $this->messages->removeElement($messages);
    }

    /**
     * Get messages
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getMessages()
    {
        return $this->messages;
    }
}