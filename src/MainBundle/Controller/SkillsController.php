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
     * @Route("/view")
     */
    public function viewAction()
    {        
        $service = $this->get("services.menu");
        $records = $service->getAllMenu();
        
        return $this->render('Main/main.html.twig', array("menu" => $records));
              
        print "<pre>";  
        print_r($records);
        print "</pre>";
        die;
    }
}
