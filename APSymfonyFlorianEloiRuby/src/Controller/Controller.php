<?php

namespace App\Controller;

use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use App\Entity\Contact;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class Controller extends AbstractController
{
    /**
     * @Route("/", name="")
     */
    public function index(): Response
    {
        return $this->render('/index.html.twig', [
            'controller_name' => 'Controller',
        ]);
    }

    /**
     * @Route("/contact", name="contact")
     */
    public function contact(): Response
    {
        //crée form
        $contact = new Contact();
        $form = $this->createFormBuilder($contact)
            ->add('nomContact', TextType::class, array("label" => "Nom :"))
            ->add('prenomContact', TextType::class, array("label" => "Prénom :"))
            ->add('mailContact', TextType::class, array("label" => "Votre e-mail :"))
            ->add('messageContact', TextareaType::class, array("label" => "L'e-mail que vous souhaitez nous envoyer :"))->getForm();

        return $this->render('/contact.html.twig', [
            'controller_name' => 'Controller',
            'form' => $form->createView()
        ]);
    }

    /**
     * @Route("/prestations", name="prestations")
     */
    public function prestations(): Response
    {
        return $this->render('/prestations.html.twig', [
            'controller_name' => 'Controller',
        ]);
    }
}
