<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class CoreController extends AbstractController
{
    
    
    public function index()
    {
        return $this->render('admin/index.html.twig');
    }
    public function indexNovate(){
        
        return $this->render('front/index.html.twig');
    }
}
