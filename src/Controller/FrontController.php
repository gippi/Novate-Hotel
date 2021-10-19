<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class FrontController extends AbstractController
{
    
    
    

    public function index(){
        
        return $this->render('front/content.html.twig');
    }


    public function voirChambre(){
        
        return $this->render('front/description.html.twig');
    }
}
