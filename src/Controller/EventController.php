<?php

namespace App\Controller;

use App\Entity\Event;
use App\Entity\User;
use App\Form\EventType;
use App\Repository\EventRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class EventController extends AbstractController
{
    #[Route('/event', name: 'app_event')]
    public function index(EventRepository $em): Response
    {
        $evenement = $em->findAll();
        return $this->render('event/afficherEvent.html.twig', ['listS'=>$evenement]);
    }



    #[Route('/ajouterEvent', name: 'ajouterEvent')]
    public function ajouterEvent(Request $request): Response
    {

        $evenement = new Event();
        $form = $this->createForm(EventType::class, $evenement);
        $form->handleRequest($request); 
        if ($form->isSubmitted() && $form->isValid()) {
            $User = $this->getDoctrine()->getManager()->getRepository(User::class)->find(
                1
            );
            
            $fileUpload = $form->get('imageevent')->getData();

            $fileName = md5(uniqid()) . '.' . $fileUpload->guessExtension();

            $fileUpload->move($this->getParameter('kernel.project_dir') . '/public/uploads', $fileName);

            $evenement->setImageevent($fileName);
            $em = $this->getDoctrine()->getManager();
            $evenement->setUser($User);
            $em->persist($evenement);
            $em->flush();
            $this->addFlash(
                'notice', 'Evenement a été bien ajoutée '
            );
            return $this->redirectToRoute('app_event');
        }
        return $this->render('event/addEvent.html.twig',
            ['f' => $form->createView()]
        );
    }

    #[Route('/modifierEvent/{id}', name: 'modifierEvenement')]
    public function modifierArticle(Request $request, $id): Response
    {
        $evenement = $this->getDoctrine()->getManager()->getRepository(Event::class)->find($id);
        $form = $this->createForm(EventType::class, $evenement);
        $form->handleRequest($request); 
        if ($form->isSubmitted() && $form->isValid()) {

             
            $fileUpload = $form->get('imageevent')->getData();

            $fileName = md5(uniqid()) . '.' . $fileUpload->guessExtension();

            $fileUpload->move($this->getParameter('kernel.project_dir') . '/public/uploads', $fileName);

            $evenement->setImageevent($fileName);
            $em = $this->getDoctrine()->getManager();
            $em->persist($evenement);
            $em->flush();
            $this->addFlash(
                'notice', 'Evenement a été bien modifié '
            );

            return $this->redirectToRoute('app_event');

        }

        return $this->render('event/modifierevent.html.twig',
            ['f' => $form->createView()]
        );
    }

    #[Route('/suppressionEvent/{id}', name: 'suppressionEvent')]
    public function suppressionEvent(Request $request, $id): Response
    {
        $em = $this->getDoctrine()->getManager();
        $typeEvenement = $em->getRepository(Event::class)->find($id);
    
        if (!$typeEvenement) {
            throw $this->createNotFoundException('Evenement not found');
        }
    
        $em->remove($typeEvenement);
        $em->flush();
    
        $this->addFlash(
            'noticedelete', 'Evenement a été bien supprimé '
        );
    
        return $this->redirectToRoute('app_event');
    }
    
    #[Route('/EventFront', name: 'EventFront')]
    public function EventFront(): Response
    {

        $em = $this->getDoctrine()->getManager()->getRepository(Event::class); 
        $prods = $em->findAll();
        return $this->render('event/EventFront.html.twig', ['listS'=>$prods]);
    }

}

