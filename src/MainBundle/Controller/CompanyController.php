<?php

namespace MainBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\DependencyInjection\Container;
use Symfony\Component\DependencyInjection\ContainerInterface;

class CompanyController extends Controller
{
    protected $container;
    
    /**
     * @Route("/renderAddCompany")
     */
    public function renderAddCompanyAction()
    {        
        $service = $this->get("services.menu");
        $records = $service->getAllMenu();
        
        return $this->render('Company/add.html.twig', array("menu" => $records, 'active' => 'Employment / Experience'));
    }
}
