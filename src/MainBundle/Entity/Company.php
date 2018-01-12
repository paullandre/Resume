<?php

namespace MainBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Company
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="MainBundle\Entity\CompanyRepository")
 */
class Company
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
     * @ORM\Column(name="name", type="string", length=255)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="position", type="string", length=255)
     */
    private $position;

    /**
     * @var string
     *
     * @ORM\Column(name="address", type="string", length=255)
     */
    private $address;

    /**
     * @var string
     *
     * @ORM\Column(name="dateFrom", type="string")
     */
    private $dateFrom;

    /**
     * @var string
     *
     * @ORM\Column(name="dateTo", type="string")
     */
    private $dateTo;

    /**
     * @var integer
     *
     * @ORM\Column(name="profile_id", type="integer")
     */
    private $profileId;

    /**
     * @var string
     *
     * @ORM\Column(name="createDate", type="string")
     */
    private $createDate;

    /**
     * @var string
     *
     * @ORM\Column(name="updateDate", type="string")
     */
    private $updateDate;
    
    /**
     * @var boolean
     *
     * @ORM\Column(name="is_current", type="boolean")
     */
    private $isCurrent;


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
     * Set name
     *
     * @param string $name
     *
     * @return Company
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
     * Set position
     *
     * @param string $position
     *
     * @return Company
     */
    public function setPosition($position)
    {
        $this->position = $position;

        return $this;
    }

    /**
     * Get position
     *
     * @return string
     */
    public function getPosition()
    {
        return $this->position;
    }

    /**
     * Set address
     *
     * @param string $address
     *
     * @return Company
     */
    public function setAddress($address)
    {
        $this->address = $address;

        return $this;
    }

    /**
     * Get address
     *
     * @return string
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * Set dateFrom
     *
     * @param string $dateFrom
     *
     * @return Company
     */
    public function setDateFrom($dateFrom)
    {
        $this->dateFrom = $dateFrom;

        return $this;
    }

    /**
     * Get dateFrom
     *
     * @return string
     */
    public function getDateFrom()
    {
        return $this->dateFrom;
    }

    /**
     * Set dateTo
     *
     * @param string $dateTo
     *
     * @return Company
     */
    public function setDateTo($dateTo)
    {
        $this->dateTo = $dateTo;

        return $this;
    }

    /**
     * Get dateTo
     *
     * @return string
     */
    public function getDateTo()
    {
        return $this->dateTo;
    }

    /**
     * Set profileId
     *
     * @param integer $profileId
     *
     * @return Company
     */
    public function setProfileId($profileId)
    {
        $this->profileId = $profileId;

        return $this;
    }

    /**
     * Get profileId
     *
     * @return integer
     */
    public function getProfileId()
    {
        return $this->profileId;
    }

    /**
     * Set createDate
     *
     * @param string $createDate
     *
     * @return Company
     */
    public function setCreateDate($createDate)
    {
        $this->createDate = $createDate;

        return $this;
    }

    /**
     * Get createDate
     *
     * @return string
     */
    public function getCreateDate()
    {
        return $this->createDate;
    }

    /**
     * Set updateDate
     *
     * @param string $updateDate
     *
     * @return Company
     */
    public function setUpdateDate($updateDate)
    {
        $this->updateDate = $updateDate;

        return $this;
    }

    /**
     * Get updateDate
     *
     * @return string
     */
    public function getUpdateDate()
    {
        return $this->updateDate;
    }
    
    /**
     * Set isCurrent
     *
     * @param boolean $isCurrent
     *
     * @return Company
     */
    public function setIsCurrent($isCurrent)
    {
        $this->isCurrent = $isCurrent;

        return $this;
    }

    /**
     * Get isCurrent
     *
     * @return boolean
     */
    public function getIsCurrent()
    {
        return $this->isCurrent;
    }
}

