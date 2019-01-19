<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Day
 *
 * @ORM\Table(name="day")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\DayRepository")
 */
class Day
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
     * @ORM\Column(name="day", type="string", length=255)
     */
    private $day;

    /**
     * @var
     * @ORM\OneToMany(targetEntity="AppBundle\Entity\Ponente", mappedBy="day")
     */
    private $days;


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
     * Set day
     *
     * @param string $day
     *
     * @return Day
     */
    public function setDay($day)
    {
        $this->day = $day;

        return $this;
    }

    /**
     * Get day
     *
     * @return string
     */
    public function getDay()
    {
        return $this->day;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->days = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add day
     *
     * @param \AppBundle\Entity\Ponente $day
     *
     * @return Day
     */
    public function addDay(\AppBundle\Entity\Ponente $day)
    {
        $this->days[] = $day;

        return $this;
    }

    /**
     * Remove day
     *
     * @param \AppBundle\Entity\Ponente $day
     */
    public function removeDay(\AppBundle\Entity\Ponente $day)
    {
        $this->days->removeElement($day);
    }

    /**
     * Get days
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getDays()
    {
        return $this->days;
    }
}
