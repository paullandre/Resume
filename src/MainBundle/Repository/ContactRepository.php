<?php

/* src/MainBundle/Repository/ContactRepository.php */

namespace MainBundle\Repository;

use Doctrine\ORM\EntityManager;
use MainBundle\Entity\Contact;

class ContactRepository
{
    protected $em;      
    
    function __construct(EntityManager $em) 
    {
        $this->em = $em;
    }
        
    public function getAllContact() 
    {
        $repo  = $this->em->getRepository(Contact::class);
//        $array = $repo->findBy(array(), array("dateTo" => "DESC"));
        $array = $repo->findAll();
        
        return $array;
    }

}
