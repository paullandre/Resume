<?php

/* src/MainBundle/Repository/CompanyRepository.php */

namespace MainBundle\Repository;

use Doctrine\ORM\EntityManager;
use MainBundle\Entity\Company;

class CompanyRepository
{
    protected $em;      
    
    function __construct(EntityManager $em) 
    {
        $this->em = $em;
    }
    
    public function searchRecord($data = array())
    {
        $id    = $data[0];
        $fName = $data[1];
        $lName = $data[2];
        
        $users = $this->em->getRepository('MainBundle:Patient')->findBy(array('id' => 94, 'lName' => 'Buog'));
        
        $data = $users[0];        
        return $data;
    }
    
    public function updateRecord($data = array())
    {
        $id    = $data[0];
        $fName = $data[1];
        $lName = $data[2];
        
        $data = $this->em->find('MainBundle:Patient', $id);                
       
        $data->setfName($fName);
        $data->setlName($lName);
      
        $this->em->persist($data);
        $this->em->flush();
        
        return $data;
    }
    
    public function deleteById($id)
    {
        $result = $this->em->find("MainBundle:Patient", $id);
        $this->em->remove($result);
        $this->em->flush();
        
        return $result->getfName();
    }
    
    public function insertPatient($data = array())
    {   
        $fName   = $data[0];
        $mName   = $data[1];
        $lName   = $data[2];
        $sex     = $data[3];
        $birth   = date('Y-m-d ', strtotime($data[4]));
        $age     = $data[5];
        $nation  = $data[6];
        $address = $data[7];
        $isArchived = 0;
        
//        $birth = date('Y-m-d ', $birth);
        
        $patient = new Patient();
        $patient->setFName($fName);
        $patient->setMName($mName);
        $patient->setLName($lName);
        $patient->setSex($sex);
        $patient->setBirth($birth);
        $patient->setAge($age);
        $patient->setNationality($nation);
        $patient->setAddress($address);
        $patient->setisArchived($isArchived);
                
        $this->em->persist($patient);
        $this->em->flush();                                
        
        return array("message" => "Success" ,"id" => $birth);
    }

    public function getAllCompany() 
    {
        $repo  = $this->em->getRepository(Company::class);
        $array = $repo->findBy(array(), array("dateTo" => "DESC"));
//        $array = $repo->findAll();
        
        return $array;
    }

}
