<?php

namespace App\Controller;


use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use App\Entity\Contact;
use App\Form\ContactType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use Doctrine\ORM\EntityManagerInterface;



use App\Entity\Exemple;

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
        $Data = $this->getDoctrine()->getRepository(Exemple::class)->findAll();
        return $this->render('/exemple.html.twig', [
            'controller_name' => 'Controller',
            'Data'=>$Data,
        ]);
    }

    /**
     * @Route("/contact", name="contact")
     */
    public function contact(Contact $contact=Null,Request $request, EntityManagerInterface $manager)
    {
        //crée form
        $contact = new Contact();
        $form = $this->createFormBuilder($contact)
            ->add('nomContact', TextType::class, array("label" => "Nom :"))
            ->add('prenomContact', TextType::class, array("label" => "Prénom :"))
            ->add('mailContact', TextType::class, array("label" => "Votre e-mail :"))
            ->add('messageContact', TextareaType::class, array("label" => "L'e-mail que vous souhaitez nous envoyer :"))
            ->add('Envoyer', SubmitType::class)
            ->getForm();
        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid())
        {
            $manager->persist($contact);
            $manager->flush();
            return $this->redirectToRoute('contact');
        }


        return $this->render('/contact.html.twig', [
            'controller_name' => 'Controller',
            'form' => $form->createView()
        ]);
    }

   
}
