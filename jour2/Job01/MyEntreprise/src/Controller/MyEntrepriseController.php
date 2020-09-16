<?php

namespace App\Controller;

use App\Entity\Projets;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class MyEntrepriseController extends AbstractController
{
    /**
     * @Route("/myEntreprise", name="myEntreprise")
     */
    public function index()
    {
        $data = $this->getDoctrine()
        ->getRepository(Projets::class)
        ->findAll();


        return $this->render('my_entreprise/index.html.twig', [
            'controller_name' => 'MyEntrepriseController',
            'data'=>$data
        ]);
    }
    /**
     * @Route("/", name="home")
     */
    public function home()
    {
        return $this->render('my_entreprise/home.html.twig', [
            'controller_name' => 'MyEntrepriseController',
        ]);
    }

    /**
     * @Route("myEntreprise/project/{id}", name="project_page")
     */
    public function projectPage($id){
        

    }
    

}
