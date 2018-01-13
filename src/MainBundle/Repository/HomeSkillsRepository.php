<?php

/* src/MainBundle/Repository/HomeSkillsRepository.php */

namespace MainBundle\Repository;

use Doctrine\ORM\EntityManager;
use MainBundle\Entity\HomeSkills;

class HomeSkillsRepository
{
    protected $em;      
    
    function __construct(EntityManager $em) 
    {
        $this->em = $em;
    }
        
    public function getAllHomeSkills() 
    {
        $repo  = $this->em->getRepository(HomeSkills::class);
//        $array = $repo->findBy(array(), array("category" => "DESC"));
        $array = $repo->findAll();
        
        return $array;
    }

}
