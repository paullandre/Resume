<?php

/* src/MainBundle/Repository/EducationRepository.php */

namespace MainBundle\Repository;

use Doctrine\ORM\EntityManager;
use MainBundle\Entity\Education;

class EducationRepository
{
    protected $em;      
    
    function __construct(EntityManager $em) 
    {
        $this->em = $em;
    }
        
    public function getAllEducation() 
    {
        $repo  = $this->em->getRepository(Education::class);
//        $array = $repo->findBy(array(), array("category" => "DESC"));
        $array = $repo->findAll();
        
        return $array;
    }

}
