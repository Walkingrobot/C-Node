<?php

namespace Walkingrobot\EquipmentBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="maintenance")
 */
class maintenance
{
    /**
     * @ORM\Column(type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @ORM\Column(type="integer")
     */
    private $request_user_id;
    
    /**
     * @ORM\Column(type="integer")
     */
    private $technician_user_id;

    /**
     * @ORM\Column(type="integer")
     */
    private $device_id;
    
    /**
     * @ORM\Column(type="text")
     */
    private $log;
    
   
}