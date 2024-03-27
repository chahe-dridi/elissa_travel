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
use TCPDF;
use App\Repository\EventRepository;
use Symfony\Component\Security\Core\Security;

class ReservationEventController extends AbstractController
{  
   #[Route('/reservation', name: 'app_reservationEvent')]
    public function afficher(ReservationEventRepository $em): Response
    {
        $typeevenement = $em->findAll();
        return $this->render('reservationEvent/afficher.html.twig', ['listS'=>$typeevenement]);

    }
///////////////////////////////////////////////////////////////////////////////////////

    ///////////////////////////////////////////////////////////////////////////////////////////////////////////

    #[Route('/ajouterreservation', name: 'Addreservation')]
    public function Addreservation(Request $request, Security $security): Response
    {
        $typeevenement = new ReservationEvent();
        $form = $this->createForm(ReservationEventType::class, $typeevenement);
        $form->handleRequest($request);
    
        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            
            $user = $security->getUser(); // Récupère l'utilisateur actuellement authentifié
            
            $typeevenement->setUser($user);
            
          // statique  $user = $entityManager->getRepository(User::class)->find(1);
            $eventId = $typeevenement->getEvent()->getId();
            $event = $entityManager->getRepository(Event::class)->find($eventId);
            
            if ($event) {
                $event->setNbrticketsdispo($event->getNbrticketsdispo() - 1);
                $entityManager->persist($event);
            }
            
            $entityManager->persist($typeevenement);
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
    //////////////////////////////////////////////////////////////////////////////////////////////



    #[Route('/generate-pdf/{id}', name: 'generate_pdf')]
    public function generatePDF(ReservationEventRepository $reservationEventRepository): Response
    {
        $reservations = $reservationEventRepository->findAll();

        $pdf = new TCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);
        $pdf->SetCreator(PDF_CREATOR);
        $pdf->SetTitle('Liste des Réservations');
        $pdf->SetHeaderData('', 0, 'Liste des Réservations', '');
        $pdf->setHeaderFont(Array(PDF_FONT_NAME_MAIN, '', PDF_FONT_SIZE_MAIN));
        $pdf->setFooterFont(Array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA));
        $pdf->AddPage();

        $html = '<h1>Liste des Réservations</h1><table border="1">';
        $html .= '<tr><th>Event</th><th>User Name</th></tr>';
        foreach ($reservations as $reservation) {
            $html .= '<tr>';
            $html .= '<td>' . $reservation->getEvent()->getNomEvent() . '</td>';
            if ($reservation->getUser() !== null) {
                $html .= '<td>' . $reservation->getUser()->getFirstName() . ' ' . $reservation->getUser()->getLastName() . '</td>';
            } else {
                $html .= '<td>Utilisateur non défini</td>';
            }
            $html .= '</tr>';
        }
        $html .= '</table>';
        $pdf->writeHTML($html, true, false, true, false, '');
        $pdf->Output('reservations.pdf', 'D');

        return new Response();
    }
}


