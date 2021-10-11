<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

use App\Entity\Exemple;
use App\Entity\Avis;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\FormView;
use Symfony\Component\Form\Form;

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
     * @Route("/avis", name="avis")
     */
    public function avis(Request $request): Response
    {
        $repo = $this->getDoctrine()->getRepository(Avis::class);
        $Data2 = $repo->findAll();
        $avis = new Avis();
        $form = $this->createFormBuilder($avis)
            ->add('pseudoClientAvis',TextType::class, array('label'=> 'Nom'))
            ->add('nombreEtoilesAvis',TextType::class, array('label'=> 'Note'))
            ->add('commentaireAvis',TextareaType::class, array('label'=> 'Commentaire'))
            ->add('submit', SubmitType::class)
            ->getForm();

        if ($request->isMethod('POST')){

            $form->submit($request->request->get($form->getName()));
            if($form->isSubmitted() && $form->isValid()){
                //...more stuff pre-insertion here if needed
                $em = $this->getDoctrine()->getManager();
                $avis=$form->getData();
                $em->persist($avis);//persist the contact object
                $em->flush();//save it to the db
                //...more stuff post-insertion here if needed
                return $this->redirectToRoute('avis');
            }
        }

        return $this->render('/avis.html.twig', [
            'controller_name' => 'Controller',
            'Data2'=>$Data2,
            'form'=>$form->createView(),
        ]);
    }
}
