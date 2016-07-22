<?php

namespace Walkingrobot\EquipmentBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="device")
 */
class Device
{
    /**
     * @ORM\Column(type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=100)
     */
    private $name;

    /**
     * @ORM\Column(type="integer")
     */
    private $category_id;
    
    /**
     * @ORM\Column(type="text")
     */
    private $description;
    
    /**
     * @ORM\Column(type="text")
     */
    private $how_to_use;

    /**
     * @ORM\Column(type="text")
     */
    private $safety_gear;
    
    /**
     * @ORM\Column(type="text")
     */
    private $safety_warnings;
    
    /**
     * @ORM\Column(type="text")
     */
    private $specifications;
    
    /**
     * @ORM\Column(type="string", length=20) 
     */
    private $pricing;

    /**
     * @ORM\Column(type="decimal", scale=2)
     */
    private $hourly_price;
    
    /**
     * @ORM\Column(type="boolean")
     */
    private $require_operator_certification;

    /**
     * @ORM\Column(type="boolean")
     */
    private $require_operator_pre_check;

    /**
     * @ORM\Column(type="boolean")
     */
    private $require_reservation;
    
    /**
     * @ORM\Column(type="string")
     */
    private $status;

    /**
     * @ORM\Column(type="string")
     */
    private $security_token;

    
    /**
     * @ORM\Column(type="string")
     */
    private $ip_address;
    
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
     * @return Device
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
     * Set description
     *
     * @param string $description
     *
     * @return Device
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
     * Set pricing
     *
     * @param string $pricing
     *
     * @return Device
     */
    public function setPricing($pricing)
    {
        $this->pricing = $pricing;

        return $this;
    }

    /**
     * Get pricing
     *
     * @return string
     */
    public function getPricing()
    {
        return $this->pricing;
    }

    /**
     * Set hourlyPrice
     *
     * @param string $hourlyPrice
     *
     * @return Device
     */
    public function setHourlyPrice($hourlyPrice)
    {
        $this->hourly_price = $hourlyPrice;

        return $this;
    }

    /**
     * Get hourlyPrice
     *
     * @return string
     */
    public function getHourlyPrice()
    {
        return $this->hourly_price;
    }

    /**
     * Set requireOperatorCertification
     *
     * @param boolean $requireOperatorCertification
     *
     * @return Device
     */
    public function setRequireOperatorCertification($requireOperatorCertification)
    {
        $this->require_operator_certification = $requireOperatorCertification;

        return $this;
    }

    /**
     * Get requireOperatorCertification
     *
     * @return boolean
     */
    public function getRequireOperatorCertification()
    {
        return $this->require_operator_certification;
    }

    /**
     * Set requireOperatorPreCheck
     *
     * @param boolean $requireOperatorPreCheck
     *
     * @return Device
     */
    public function setRequireOperatorPreCheck($requireOperatorPreCheck)
    {
        $this->require_operator_pre_check = $requireOperatorPreCheck;

        return $this;
    }

    /**
     * Get requireOperatorPreCheck
     *
     * @return boolean
     */
    public function getRequireOperatorPreCheck()
    {
        return $this->require_operator_pre_check;
    }

}
