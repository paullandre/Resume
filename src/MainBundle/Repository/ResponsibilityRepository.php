<?php

/* src/MainBundle/Repository/ResponsibilityRepository.php */

namespace MainBundle\Repository;

use Doctrine\ORM\EntityManager;
use MainBundle\Entity\Responsibility;

class ResponsibilityRepository
{
    protected $em;      
    
    function __construct(EntityManager $em) 
    {
        $this->em = $em;
    }
        
    public function getAllResponsibility() 
    {
        $repo  = $this->em->getRepository(Responsibility::class);
        $array = $repo->findBy(array(), array("ordering" => "ASC"));
//        $array = $repo->findAll();        
        return $array;
    }

}
