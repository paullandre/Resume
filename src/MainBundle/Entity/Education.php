<?php

namespace MainBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Education
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="MainBundle\Entity\EducationRepository")
 */
class Education
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
     * @ORM\Column(name="level", type="string", length=155)
     */
    private $level;

    /**
     * @var string
     *
     * @ORM\Column(name="institution", type="string", length=155)
     */
    private $institution;

    /**
     * @var string
     *
     * @ORM\Column(name="course", type="string", length=155)
     */
    private $course;

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
     * @var integer
     *
     * @ORM\Column(name="profile_id", type="integer")
     */
    private $profileId;


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
     * Set level
     *
     * @param string $level
     *
     * @return Education
     */
    public function setLevel($level)
    {
        $this->level = $level;

        return $this;
    }

    /**
     * Get level
     *
     * @return string
     */
    public function getLevel()
    {
        return $this->level;
    }

    /**
     * Set institution
     *
     * @param string $institution
     *
     * @return Education
     */
    public function setInstitution($institution)
    {
        $this->institution = $institution;

        return $this;
    }

    /**
     * Get institution
     *
     * @return string
     */
    public function getInstitution()
    {
        return $this->institution;
    }

    /**
     * Set course
     *
     * @param string $course
     *
     * @return Education
     */
    public function setCourse($course)
    {
        $this->course = $course;

        return $this;
    }

    /**
     * Get course
     *
     * @return string
     */
    public function getCourse()
    {
        return $this->course;
    }

    /**
     * Set address
     *
     * @param string $address
     *
     * @return Education
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
     * @return dateFrom
     */
    public function setdateFrom($dateFrom)
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
     * @return dateTo
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
     * Set createDate
     *
     * @param string $createDate
     *
     * @return Education
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
     * @return Education
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
     * Set profileId
     *
     * @param integer $profileId
     *
     * @return Education
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
}

