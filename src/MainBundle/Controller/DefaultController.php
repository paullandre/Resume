<?php

namespace MainBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{
    /**
     * @Route("/hello/{name}")
     * @Template()
     */
    public function indexAction($name)
    {
        return array('name' => $name);
    }
    
    /**
     * @Route("/menu")
     */
    public function viewAction()
    {        
        $service = $this->get("services.menu");
        $records = $service->getAllMenu();                
        
        return $this->render('Main/sidebar.html.twig', array("menu" => $records));                      
    }        
    
    /**
     * @Route("/home")
     */
    public function homeAction(Request $request)
    {
        return $this->render('Pages/home.html.twig', array('message' => "Welcome!"));				
    }
}
