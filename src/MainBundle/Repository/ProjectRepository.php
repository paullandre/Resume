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
        $query = $this->em->createQuery('SELECT p.projectName as project, c.name as company, p.description, p.skillId, s.name '
                . 'FROM MainBundle:Project p '
                . 'JOIN MainBundle:Company c WITH p.companyId = c.id '
                . 'JOIN MainBundle:Skills s WITH s.id IN (SELECT x.skillId FROM MainBundle:Project x)');
//        
//        print_r($query->getSQL());
//        die;
//                
        $result = $query->getResult();
        
//        print "<pre>";
//        print_r($result);
//        print "</pre>";
//        die;
        
//        $repo  = $this->em->getRepository(Project::class);
//        $array = $repo->findAll();
        
        return $result;
    }

}
