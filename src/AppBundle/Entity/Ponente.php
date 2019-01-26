<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Ponente
 *
 * @ORM\Table(name="ponente")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\PonenteRepository")
 */
class Ponente
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
     * @ORM\Column(name="email", type="string", length=255)
     */
    private $email;

    /**
     * @var string
     *
     * @ORM\Column(name="title", type="string", length=255)
     */
    private $title;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="string", length=2000)
     */
    private $description;

    /**
     * @var string
     *
     * @ORM\Column(name="place", type="string", length=255)
     */
    private $place;

    /**
     * @var string
     *
     * @ORM\Column(name="assistants", type="string", length=255)
     */
    private $assistants;

    /**
     * @var string
     *
     * @ORM\Column(name="pathImg", type="string", length=255)
     */
    private $pathImg;

    /**
     * @var string
     * @ORM\ManyToOne(targetEntity="Day")
     * @ORM\JoinColumn(name="day_id", referencedColumnName="id")
     */
    private $day;


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
     * @return Ponente
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
     * Set email
     *
     * @param string $email
     *
     * @return Ponente
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
     * Set title
     *
     * @param string $title
     *
     * @return Ponente
     */
    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Get title
     *
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set description
     *
     * @param string $description
     *
     * @return Ponente
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
     * Set place
     *
     * @param string $place
     *
     * @return Ponente
     */
    public function setPlace($place)
    {
        $this->place = $place;

        return $this;
    }

    /**
     * Get place
     *
     * @return string
     */
    public function getPlace()
    {
        return $this->place;
    }

    /**
     * Set assistants
     *
     * @param string $assistants
     *
     * @return Ponente
     */
    public function setAssistants($assistants)
    {
        $this->assistants = $assistants;

        return $this;
    }

    /**
     * Get assistants
     *
     * @return string
     */
    public function getAssistants()
    {
        return $this->assistants;
    }

    /**
     * Set pathImg
     *
     * @param string $pathImg
     *
     * @return Ponente
     */
    public function setPathImg($pathImg)
    {
        $this->pathImg = $pathImg;

        return $this;
    }

    /**
     * Get pathImg
     *
     * @return string
     */
    public function getPathImg()
    {
        return $this->pathImg;
    }

    /**
     * Set day
     *
     * @param \AppBundle\Entity\Day $day
     *
     * @return Ponente
     */
    public function setDay(\AppBundle\Entity\Day $day = null)
    {
        $this->day = $day;

        return $this;
    }

    /**
     * Get day
     *
     * @return \AppBundle\Entity\Day
     */
    public function getDay()
    {
        return $this->day;
    }
}
