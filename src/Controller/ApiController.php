<?php

namespace App\Controller;

use App\Entity\Actualite;
use App\Form\Type\ActualiteFormType;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use FOS\RestBundle\Controller\Annotations as Rest;
use Symfony\Component\HttpFoundation\Request;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\ParamConverter;

class ApiController extends Controller
{
    /**
     * Ajout d'une actualite
     * 
     * @Route("/actualite/ajout", name="ajout", methods={"POST"})
     */
    public function addActualite(Request $request){
        // On vérifie si on a une requête XMLHttpRequest
        //if($request->isXmlHttpRequest()){
            // On vérifie les données après les avoir décodées
            $donnees = json_decode($request->getContent());

            // On instancie un nouvel article
            $article = new Actualite();

            // On hydrate notre article
            $article->setTitre($donnees->titre);
            $article->setDescription($donnees->contenu);

            // On sauvegarde en base de données
            $em = $this->getDoctrine()->getManager();
            $em->persist($article);
            $em->flush();

            // On retourne la confirmation
            return new Response('Ok', 201);
    }
    /**
     * @Route("/actualites", name="actualite_create")
     * @Method({"POST"})
     */
    public function createAction(Request $request)
    {
        $data = $request->getContent();
        $actualite = $this->get('jms_serializer');
        $actualite->deserialize($data, 'App\Entity\Actualite', 'json');

        $em = $this->getDoctrine()->getManager();
        $em->persist($actualite);
        $em->flush();

        return new Response('', Response::HTTP_CREATED);
    }
}