<?php

namespace MainBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\DependencyInjection\Container;
use Symfony\Component\DependencyInjection\ContainerInterface;

class SkillsController extends Controller
{
    protected $container;
    /**
     * @Route("/hello/{name}")
     * @Template()
     */
    public function indexAction($name)
    {
        return array('name' => $name);
    }
    
    /**
     * @Route("/renderSkills")
     */
    public function getSkills()
    {
        $service = $this->get("services.skills");
        $records = $service->getAllSkills();
        
        return $records;          
        
//        return $this->render('Pages/projects.html.twig', array("menu" => $records, 'active' => 'projects'));
    }
    
    /**
     * @Route("/renderAddSkills")
     */
    public function renderAddSkillsAction()
    {        
        $service = $this->get("services.menu");
        $records = $service->getAllMenu();
        
        return $this->render('Skills/add.html.twig', array("menu" => $records, 'active' => 'Skills'));
    }
}
