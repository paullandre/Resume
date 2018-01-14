<?php

namespace MainBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Responsibility
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="MainBundle\Entity\ResponsibilityRepository")
 */
class Responsibility
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="duty", type="string", length=255)
     */
    private $duty;

    /**
     * @var integer
     *
     * @ORM\Column(name="ordering", type="integer")
     */
    private $ordering;


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
     * Set duty
     *
     * @param string $duty
     *
     * @return Responsibility
     */
    public function setDuty($duty)
    {
        $this->duty = $duty;

        return $this;
    }

    /**
     * Get duty
     *
     * @return string
     */
    public function getDuty()
    {
        return $this->duty;
    }

    /**
     * Set ordering
     *
     * @param integer $ordering
     *
     * @return Responsibility
     */
    public function setOrdering($ordering)
    {
        $this->ordering = $ordering;

        return $this;
    }

    /**
     * Get ordering
     *
     * @return integer
     */
    public function getOrdering()
    {
        return $this->ordering;
    }
}

