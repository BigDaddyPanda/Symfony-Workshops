<?php

namespace ContestBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Participant
 *
 * @ORM\Table(name="participant")
 * @ORM\Entity(repositoryClass="ContestBundle\Repository\ParticipantRepository")
 */
class Participant
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
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="passeport", type="string", length=10, unique=true)
     */
    private $passeport;



    /**
     * @var University
     *
     * @ORM\ManyToOne(targetEntity="ContestBundle\Entity\University",inversedBy="participants")
     */
    private $university;

    /**
     * @var Country
     *
     * @ORM\OneToOne(targetEntity="ContestBundle\Entity\Country")
     */
    private $country;

    /**
     * @var Contest[]
     *
     * @ORM\ManyToMany(targetEntity="ContestBundle\Entity\Contest")
     */
    private $contests;

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
     * Set name
     *
     * @param string $name
     *
     * @return Participant
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set passeport
     *
     * @param string $passeport
     *
     * @return Participant
     */
    public function setPasseport($passeport)
    {
        $this->passeport = $passeport;

        return $this;
    }

    /**
     * Get passeport
     *
     * @return string
     */
    public function getPasseport()
    {
        return $this->passeport;
    }

    /**
     * Set university
     *
     * @param \ContestBundle\Entity\University $university
     *
     * @return Participant
     */
    public function setUniversity(\ContestBundle\Entity\University $university = null)
    {
        $this->university = $university;

        return $this;
    }

    /**
     * Get university
     *
     * @return \ContestBundle\Entity\University
     */
    public function getUniversity()
    {
        return $this->university;
    }

    /**
     * Set country
     *
     * @param \ContestBundle\Entity\Country $country
     *
     * @return Participant
     */
    public function setCountry(\ContestBundle\Entity\Country $country = null)
    {
        $this->country = $country;

        return $this;
    }

    /**
     * Get country
     *
     * @return \ContestBundle\Entity\Country
     */
    public function getCountry()
    {
        return $this->country;
    }

    /**
     * Set contests
     *
     * @param \ContestBundle\Entity\Participant $contests
     *
     * @return Participant
     */
    public function setContests(\ContestBundle\Entity\Participant $contests = null)
    {
        $this->contests = $contests;

        return $this;
    }

    /**
     * Get contests
     *
     * @return \ContestBundle\Entity\Participant
     */
    public function getContests()
    {
        return $this->contests;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->contests = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add contest
     *
     * @param \ContestBundle\Entity\Contest $contest
     *
     * @return Participant
     */
    public function addContest(\ContestBundle\Entity\Contest $contest)
    {
        $this->contests[] = $contest;

        return $this;
    }

    /**
     * Remove contest
     *
     * @param \ContestBundle\Entity\Contest $contest
     */
    public function removeContest(\ContestBundle\Entity\Contest $contest)
    {
        $this->contests->removeElement($contest);
    }
}
