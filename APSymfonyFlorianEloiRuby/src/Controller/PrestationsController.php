<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class PrestationsController extends AbstractController
{
    /**
     * @Route("/prestations", name="prestations")
     */
    public function index(): Response
    {
        return $this->render('prestations/index.html.twig', [
            'controller_name' => 'PrestationsController',
        ]);
    }

    /**
     * @Route("/prestations/12", name="prestations_show")
     */
    public function show(){
        return $this->render('prestations/show.html.twig');
    }
}
