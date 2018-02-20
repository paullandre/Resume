<?php

namespace MainBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Component\HttpFoundation\Request;
use Doctrine\ORM\EntityManager;
use MainBundle\Entity\Menu;
use MainBundle\Controller\DefaultController;
use Symfony\Component\DependencyInjection\Container;
use Symfony\Component\DependencyInjection\ContainerInterface;

use MainBundle\Entity\Skills;
use MainBundle\Entity\HomeSkills;

class MenuController extends Controller
{    
    protected $container;
    protected $em;        
    
    /**
     * @Route("/view")
     */
    public function viewAction()
    {        
        $service = $this->get("services.menu");
        $records = $service->getAllMenu();
        
        return $this->render('Main/main.html.twig', array("menu" => $records));                      
    }
    
    /**
     * @Route("/home")
     */
    public function homeAction(Request $request)
    {
//        $user = $request->get("user");
        $service = $this->get("services.menu");
        $records = $service->getAllMenu();
        
        $service = $this->get("services.home_skills");
        $home_skills = $service->getAllHomeSkills();
        
        $service = $this->get("services.responsibility");
        $responsibility = $service->getAllResponsibility();
        
        return $this->render('Pages/home.html.twig', array("menu" => $records, 
            'active' => 'home',
            'home_skills' => $home_skills,
            'responsibility' => $responsibility));				
    }
    
    /**
     * @Route("/employment")
     */
    public function employmentAction(Request $request)
    {
        $service = $this->get("services.menu");
        $records = $service->getAllMenu();
        
        $service = $this->get("services.company");
        $company = $service->getAllCompany();
        
        return $this->render('Pages/employment.html.twig', array("menu" => $records, 
            'active' => 'Employment / Experience',
            'employment' => $company));
    }
    
    /**
     * @Route("/profile")
     */
    public function profileAction(Request $request)
    {
        $service = $this->get("services.menu");
        $records = $service->getAllMenu();
        
        return $this->render('Pages/profile.html.twig', array("menu" => $records, 'active' => 'profile'));				
    }
    
    /**
     * @Route("/skills")
     */
    public function skillsAction(Request $request)
    {
        $service = $this->get("services.menu");
        $records = $service->getAllMenu();
                
        $service = $this->get("services.skills");
        $skills  = $service->getAllSkills();
        
        return $this->render('Pages/skills.html.twig', array("menu" => $records, 
            'active' => 'skills',
            'skills' => $skills));
    }
    
    /**
     * @Route("/projects")
     */
    public function projectsAction(Request $request)
    {
        $service = $this->get("services.menu");
        $records = $service->getAllMenu();
        
        $service = $this->get("services.project");
        $projects = $service->getAllProjects();        
        
        return $this->render('Pages/projects.html.twig', array("menu" => $records, 
            'active' => 'projects',
            'projects' => $projects));
    }
    
    /**
     * @Route("/schools")
     */
    public function schoolsAction(Request $request)
    {
        $service = $this->get("services.menu");
        $records = $service->getAllMenu();
        
        $service = $this->get("services.education");
        $education = $service->getAllEducation();                
        
        return $this->render('Pages/school.html.twig', array("menu" => $records, 
            'active' => 'Schools Attended',
            'education' => $education));
    }
    
    /**
     * @Route("/contacts")
     */
    public function contactsAction(Request $request)
    {
        $service = $this->get("services.menu");
        $records = $service->getAllMenu();
        
        $service = $this->get("services.contact");
        $contact = $service->getAllContact();
        
        return $this->render('Pages/contacts.html.twig', array("menu" => $records, 
            'active' => 'contacts',
            'contact' => $contact));
    }
}
