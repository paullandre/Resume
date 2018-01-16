<?php

/* src/MainBundle/Repository/ProjectRepository.php */

namespace MainBundle\Repository;

use Doctrine\ORM\EntityManager;
use MainBundle\Entity\Project;

class ProjectRepository
{
    protected $em;      
    
    function __construct(EntityManager $em) 
    {
        $this->em = $em;
    }        

    public function getAllProjects() 
    {
        $repo  = $this->em->getRepository(Project::class);
        $array = $repo->findAll();
        
        return $array;
    }

}
