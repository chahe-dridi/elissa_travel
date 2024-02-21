<?php

namespace App\Controller;

use App\Entity\Event;
use App\Entity\ReservationEvent;
use App\Entity\User;
use App\Form\ReservationEventType;
use App\Repository\ReservationEventRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ReservationEventController extends AbstractController
{
    #[Route('/reservation', name: 'app_reservationEvent')]
    public function afficher(ReservationEventRepository $em): Response
    {
        $typeevenement = $em->findAll();
        return $this->render('reservationEvent/afficher.html.twig', ['listS'=>$typeevenement]);

    }

    #[Route('/ajouterreservation', name: 'Addreservation')]
    public function Addreservation(Request $request): Response
    {
        $typeevenement = new ReservationEvent();
        $form = $this->createForm(ReservationEventType::class, $typeevenement);
        $form->handleRequest($request);
    
        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
    
            $user = $entityManager->getRepository(User::class)->find(1);
            $typeevenement->setUser($user);
    
            
            $eventId = $typeevenement->getEvent()->getId();
            $event = $entityManager->getRepository(Event::class)->find($eventId);
                $event->setNbrticketsdispo($event->getNbrticketsdispo() - 1);
    
            $entityManager->persist($typeevenement);
            $entityManager->persist($event);
                $entityManager->flush();
    
            $this->addFlash(
                'notice', 'ReservationEvent a été bien ajoutée '
            );
    
            return $this->redirectToRoute('EventFront');
        }
    
        return $this->render('reservationEvent/addreservationEvent.html.twig', [
            'f' => $form->createView(),
        ]);
    }
    

    #[Route('/modifierreservationEvent/{id}', name: 'modifierreservationEvent')]
    public function modifierreservationEvent(Request $request, $id): Response
    {
        $typeevenement = $this->getDoctrine()->getManager()->getRepository(ReservationEvent::class)->find($id);
        $form = $this->createForm(ReservationEventType::class, $typeevenement);
        $form->handleRequest($request); 
        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($typeevenement);
            $em->flush();
            $this->addFlash(
                'notice', 'ReservationEvent a été bien modifié '
            );

            return $this->redirectToRoute('app_reservationEvent');

        }
        return $this->render('reservationEvent/modifierreservationEvent.html.twig',
            ['f' => $form->createView()]
        );
    }

    #[Route('/suppressionreservationEvent/{id}', name: 'deletereservationEvent')]
    public function suppressionreservationEvent(Request $request, $id): Response
    {
        $em = $this->getDoctrine()->getManager();
        $typeEvenement = $em->getRepository(ReservationEvent::class)->find($id);
        if (!$typeEvenement) {
            throw $this->createNotFoundException('ReservationEvent not found');
        }
        $em->remove($typeEvenement);
        $em->flush();
        $this->addFlash(
            'noticedelete', 'ReservationEvent a été bien supprimé '
        );
    
        return $this->redirectToRoute('app_reservationEvent');
    }
    
}


