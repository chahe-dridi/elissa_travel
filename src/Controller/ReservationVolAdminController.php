<?php

namespace App\Controller;

use App\Entity\Reservationvol;
use App\Form\Reservationvol1Type;
use App\Repository\ReservationvolRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/reservation/vol/admin')]
class ReservationVolAdminController extends AbstractController
{
    #[Route('/', name: 'app_reservation_vol_admin_index', methods: ['GET'])]
    public function index(ReservationvolRepository $reservationvolRepository): Response
    {
        return $this->render('reservation_vol_admin/index.html.twig', [
            'reservationvols' => $reservationvolRepository->findAll(),
        ]);
    }

    #[Route('/new', name: 'app_reservation_vol_admin_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $reservationvol = new Reservationvol();
        $form = $this->createForm(Reservationvol1Type::class, $reservationvol);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($reservationvol);
            $entityManager->flush();

            return $this->redirectToRoute('app_reservation_vol_admin_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('reservation_vol_admin/new.html.twig', [
            'reservationvol' => $reservationvol,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_reservation_vol_admin_show', methods: ['GET'])]
    public function show(Reservationvol $reservationvol): Response
    {
        return $this->render('reservation_vol_admin/show.html.twig', [
            'reservationvol' => $reservationvol,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_reservation_vol_admin_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Reservationvol $reservationvol, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(Reservationvol1Type::class, $reservationvol);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            return $this->redirectToRoute('app_reservation_vol_admin_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('reservation_vol_admin/edit.html.twig', [
            'reservationvol' => $reservationvol,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_reservation_vol_admin_delete', methods: ['POST'])]
    public function delete(Request $request, Reservationvol $reservationvol, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$reservationvol->getId(), $request->request->get('_token'))) {
            $entityManager->remove($reservationvol);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_reservation_vol_admin_index', [], Response::HTTP_SEE_OTHER);
    }
}
