<?php
/* src/MainBundle/Repository/MenuRepository.php */

namespace MainBundle\Repository;

use Doctrine\ORM\EntityManager;
use MainBundle\Entity\Menu;

class MenuRepository
{
    protected $em;      
    
    function __construct(EntityManager $em) 
    {
        $this->em = $em;
    }
    
    public function getAllMenu() 
    {
        $repo  = $this->em->getRepository(Menu::class);
        $array = $repo->findBy(array(), array("ordering" => "ASC"));                
        
        return $array;
    }
}
