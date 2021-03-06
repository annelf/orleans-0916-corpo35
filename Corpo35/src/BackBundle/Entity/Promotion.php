<?php

namespace BackBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints\DateTime;

/**
 * Promotion
 *
 * @ORM\Table(name="promotion")
 * @ORM\Entity(repositoryClass="BackBundle\Repository\PromotionRepository")
 */
class Promotion
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var DateTime
     *
     * @ORM\Column(name="annee", type="datetime")
     */
    private $annee;

    /**
     * @ORM\OneToMany(targetEntity="Candidat", mappedBy="promotion")
     */
    private $candidats;

    /**
     * @var datetime
     * @ORM\Column(name="datelimite", type="datetime")
     */
    private $datelimite;

    /**
     * @var bool
     * @ORM\Column(name="encours", type="boolean")
     */
    private $encours;

    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param DateTime $annee
     *
     */public function setAnnee($annee)
    {
        $this->annee = $annee;
    }

    /**
     * @return DateTime
     *
     */
    public function getAnnee()
    {
        return $this->annee;

    }
    public function getYear()
    {
        return $this->annee->format('Y');

    }

    /**
     * @param mixed $candidats
     */
    public function setCandidats($candidats)
    {
        $this->candidats = $candidats;
    }

    /**
     * @return mixed
     */
    public function getCandidats()
    {
        return $this->candidats;
    }

    /**
     * @param DateTime $datelimite
     */
    public function setEnddate($datelimite)
    {
        $this->datelimite = $datelimite;
    }

    /**
     * @return DateTime
     */
    public function getDatelimite()
    {
        return $this->datelimite;
    }

    /**
     * Set datelimite
     *
     * @param \DateTime $datelimite
     *
     * @return Promotion
     */
    public function setDatelimite($datelimite)
    {
        $this->datelimite = $datelimite;

        return $this;
    }

    /**
     * @param boolean
     */
    public function setEncours($encours)
    {
        $this->encours = $encours;
    }

    /**
     * @return boolean
     */
    public function getEncours()
    {
        return $this->encours;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->candidats = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add candidat
     *
     * @param \BackBundle\Entity\Candidat $candidat
     *
     * @return Promotion
     */
    public function addCandidat(\BackBundle\Entity\Candidat $candidat)
    {
        $this->candidats[] = $candidat;

        return $this;
    }

    /**
     * Remove candidat
     *
     * @param \BackBundle\Entity\Candidat $candidat
     */
    public function removeCandidat(\BackBundle\Entity\Candidat $candidat)
    {
        $this->candidats->removeElement($candidat);
    }
}
