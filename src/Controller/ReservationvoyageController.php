<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ReservationvoyageController extends AbstractController
{
    #[Route('/reservationvoyage', name: 'app_reservationvoyage')]
    public function index(): Response
    {
        return $this->render('reservationvoyage/index.html.twig', [
            'controller_name' => 'ReservationvoyageController',
        ]);
    }
}
