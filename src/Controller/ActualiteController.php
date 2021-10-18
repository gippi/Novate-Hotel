<?php

namespace App\Controller;

use App\Entity\Actualite;
use App\Form\Type\ActualiteFormType;
use Doctrine\ORM\EntityManager;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;

class ActualiteController extends AbstractController
{
    /**
     * @Route("/admin", name="admin")
     */
    public function indexs()
    {
        $actualite = $this->getDoctrine()->getRepository(Actualite::class)->findAll();

        return $this->render('actualites/index.html.twig', [
            'actualite' => $actualite,
        ]);
    }

    
    public function newActualite(Request $request){
        $actualite = new Actualite();
        $form = $this->createForm(ActualiteFormType::class, $actualite);

        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid()){
            $em = $this->getDoctrine()->getManager();
            $actualite = $form->getData();
            $em->persist($actualite);
            $em->flush();

            $this->addFlash('actualite_published', 'Votre actualite a bien été publié');

            return $this->redirectToRoute('admin_actualite_new');
        }
        return $this->render('actualite/new.html.twig', [
            'form' => $form->createView()
        ]);
    }

    public function listActualite(){
        $em = $this->getDoctrine()->getManager();
        $actualites = $em->getRepository(Actualite::class)->findAll();
        return $this->render('actualite/list.html.twig', [
            'actualites' => $actualites
        ]);
    }

    

    /**
     * @Route("/actualite/modifier/{id}", name="modif_actualite")
     */
    public function modifActualite(){
        $this->denyAccessUnlessGranted('ROLE_ADMIN');
        // Ici il faut être admin
    }
}