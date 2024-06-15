<?php

namespace App\Controller;

use App\Entity\TypeEvenement;
use App\Form\TypeEvenemntType;
use App\Repository\TypeEvenementRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class TypeEvenementController extends AbstractController
{

    #[Route('/type/evenement', name: 'app_type_evenement')]
    public function index(TypeEvenementRepository $em): Response
    {
        $typeevenement = $em->findAll();
        return $this->render('type_evenement/afficher.html.twig', ['listS'=>$typeevenement]);
    }


  #[Route('/ajouterTypeEvenement', name: 'AddTypeEvenement')]
    public function ajouterEvent(Request $request): Response
    {

        $typeevenement = new TypeEvenement();
        $form = $this->createForm(TypeEvenemntType::class, $typeevenement);
        $form->handleRequest($request); 
        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($typeevenement);
            $em->flush();
            $this->addFlash(
                'notice', 'Type Evenement a été bien ajoutée '
            );
            return $this->redirectToRoute('app_type_evenement');
        }
        return $this->render('type_evenement/addEvent.html.twig',
            ['f' => $form->createView()]
        );
    }

    #[Route('/modifierTypeEvenement/{id}', name: 'modifierTypeEvenement')]
    public function modifierTypeEvenement(Request $request, $id): Response
    {
        $typeevenement = $this->getDoctrine()->getManager()->getRepository(TypeEvenement::class)->find($id);
        $form = $this->createForm(TypeEvenemntType::class, $typeevenement);
        $form->handleRequest($request); 
        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($typeevenement);
            $em->flush();
            $this->addFlash(
                'notice', 'TypeEvenement a été bien modifié '
            );

            return $this->redirectToRoute('app_type_evenement');

        }

        return $this->render('type_evenement/modifierTypeevent.html.twig',
            ['f' => $form->createView()]
        );
    }

    #[Route('/suppressionTypeevent/{id}', name: 'suppressionTypeEvent')]
    public function suppressionTypeEvent(Request $request, $id): Response
    {
        $em = $this->getDoctrine()->getManager();
        $typeEvenement = $em->getRepository(TypeEvenement::class)->find($id);
    
        if (!$typeEvenement) {
            throw $this->createNotFoundException('Type evenement not found');
        }
    
        $em->remove($typeEvenement);
        $em->flush();
    
        $this->addFlash(
            'noticedelete', 'Type evenement a été bien supprimé '
        );
    
        return $this->redirectToRoute('app_type_evenement');
    }
    
}
