<?php

namespace App\Controller;
use App\Entity\Hotel;
use App\Entity\ReservationHotel;
use App\Form\ReservationHotelType;
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
        $reservationHotel = new ReservationHotel();
        $form = $this->createForm(ReservationHotelType::class, $reservationHotel);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($reservationHotel);
            $entityManager->flush();

            return $this->redirectToRoute('app_reservation_hotel_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('reservation_hotel/new.html.twig', [
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
