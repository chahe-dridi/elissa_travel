<?php

namespace App\Controller;

use App\Entity\ReservationVoyage;
use App\Form\ReservationVoyageType;
use App\Repository\ReservationVoyageRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;

#[Route('/reservation/voyage')]
class ReservationVoyageController extends AbstractController
{
    #[IsGranted('ROLE_USER')]
    #[Route('/', name: 'app_reservation_voyage_index', methods: ['GET'])]
    public function index(ReservationVoyageRepository $reservationVoyageRepository): Response
    {
        return $this->render('reservation_voyage/index.html.twig', [
            'reservation_voyages' => $reservationVoyageRepository->findAll(),
        ]);
    }

    #[IsGranted('ROLE_USER')]
    #[Route('/new', name: 'app_reservation_voyage_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $reservationVoyage = new ReservationVoyage();
        $form = $this->createForm(ReservationVoyageType::class, $reservationVoyage);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($reservationVoyage);
            $entityManager->flush();

            return $this->redirectToRoute('app_reservation_voyage_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('reservation_voyage/new.html.twig', [
            'reservation_voyage' => $reservationVoyage,
            'form' => $form,
        ]);
    }

    #[IsGranted('ROLE_USER')]
    #[Route('/{id}', name: 'app_reservation_voyage_show', methods: ['GET'])]
    public function show(ReservationVoyage $reservationVoyage): Response
    {
        return $this->render('reservation_voyage/show.html.twig', [
            'reservation_voyage' => $reservationVoyage,
        ]);
    }

    #[IsGranted('ROLE_USER')]
    #[Route('/{id}/edit', name: 'app_reservation_voyage_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, ReservationVoyage $reservationVoyage, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(ReservationVoyageType::class, $reservationVoyage);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            return $this->redirectToRoute('app_reservation_voyage_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('reservation_voyage/edit.html.twig', [
            'reservation_voyage' => $reservationVoyage,
            'form' => $form,
        ]);
    }

    #[IsGranted('ROLE_USER')]
    #[Route('/{id}', name: 'app_reservation_voyage_delete', methods: ['POST'])]
    public function delete(Request $request, ReservationVoyage $reservationVoyage, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$reservationVoyage->getId(), $request->request->get('_token'))) {
            $entityManager->remove($reservationVoyage);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_reservation_voyage_index', [], Response::HTTP_SEE_OTHER);
    }
}
