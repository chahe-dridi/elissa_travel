<?php

namespace App\Controller;
use App\Entity\Hotel;
use App\Entity\Chambre;

use App\Entity\ReservationHotel;
use App\Form\ReservationHotelType;
use App\Form\reservationtype;

use App\Repository\ReservationHotelRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/reservation/hotel')]
class ReservationHotelController extends AbstractController
{
    #[Route('/', name: 'app_reservation_hotel_index', methods: ['GET'])]
    public function index(ReservationHotelRepository $reservationHotelRepository): Response
    {
        return $this->render('reservation_hotel/index.html.twig', [
            'reservation_hotels' => $reservationHotelRepository->findAll(),
        ]);
    }

    #[Route('/new', name: 'app_reservation_hotel_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $id = $request->query->get('id');
        $entityManager = $this->getDoctrine()->getManager();
        $hotel = $entityManager->getRepository(Hotel::class)->find($id);

        $reservationHotel = new ReservationHotel();
        $form = $this->createForm(reservationtype::class, $reservationHotel, [
            'hotel' => $hotel, 
        ]);
        $form->handleRequest($request);
        
        $reservationHotel->setDistination($hotel->getLieu());
        $reservationHotel->setHotel($hotel);

        $chambres = $hotel->getChambres();

        if ($form->isSubmitted() && $form->isValid()) {
            $formData = $form->getData();
            $chambreid = $formData->getChambre();
            $chambreid = explode(' / ', $chambreid);

            $selectedChambre = $entityManager->getRepository(Chambre::class)->find($chambreid[0]);


            if ($selectedChambre) {
                $prixHotel = $selectedChambre->getPrixHotel();
                $reservationHotel->setPrixTT($prixHotel);
            }
            $entityManager->persist($reservationHotel);
            $entityManager->flush();

            return $this->redirectToRoute('app_reservation_hotel_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('reservation_hotel/new.html.twig', [
            'hotelname' => $hotel->getNomHotel(),
            'lieu' => $hotel->getLieu(),
            'reservation_hotel' => $reservationHotel,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_reservation_hotel_show', methods: ['GET'])]
    public function show(ReservationHotel $reservationHotel): Response
    {
        return $this->render('reservation_hotel/show.html.twig', [
            'reservation_hotel' => $reservationHotel,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_reservation_hotel_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, ReservationHotel $reservationHotel, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(ReservationHotelType::class, $reservationHotel);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            return $this->redirectToRoute('app_reservation_hotel_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('reservation_hotel/edit.html.twig', [
            'reservation_hotel' => $reservationHotel,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_reservation_hotel_delete', methods: ['POST'])]
    public function delete(Request $request, ReservationHotel $reservationHotel, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$reservationHotel->getId(), $request->request->get('_token'))) {
            $entityManager->remove($reservationHotel);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_reservation_hotel_index', [], Response::HTTP_SEE_OTHER);
    }
}
