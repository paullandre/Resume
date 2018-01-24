<?php

/* src/MainBundle/Repository/SkillsRepository.php */

namespace MainBundle\Repository;

use Doctrine\ORM\EntityManager;
use MainBundle\Entity\Skills;

class SkillsRepository
{
    protected $em;      
    
    function __construct(EntityManager $em) 
    {
        $this->em = $em;
    }        

    public function getAllSkills() 
    {
        $repo  = $this->em->getRepository(Skills::class);
//        $array = $repo->findAll();
//        $array = $repo->findBy(array(), array("id" => "DESC"));
        $array = $repo->findBy(array("isUsed" => 1 ));    
        
        return $array;
    }

}
