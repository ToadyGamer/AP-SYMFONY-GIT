<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class Controller extends AbstractController
{
    /**
     * @Route("/presentation", name="presentation")
     */
    public function presentation(): Response
    {
        return $this->render('/presentation.html.twig', [
            'controller_name' => 'Controller',
        ]);
    }
        /**
     * @Route("/exemple", name="exemple")
     */
    public function exemple(): Response
    {
        return $this->render('/exemple.html.twig', [
            'controller_name' => 'Controller',
        ]);
    }
}
