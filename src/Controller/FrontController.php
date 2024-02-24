<?php

namespace App\Controller;
use App\Repository\HotelRepository;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class FrontController extends AbstractController
{
    #[Route('/front', name: 'app_front')]
    public function index(): Response
    {
        return $this->render('nav_user.html.twig', [
            'controller_name' => 'FrontController',
        ]);
    }

    #[Route('/front/hotel', name: 'app_hotel_index_front', methods: ['GET'])]
    public function hotelfront(HotelRepository $hotelRepository): Response
    {
        return $this->render('fronthotel.html.twig', [
            'hotels' => $hotelRepository->findAll(),
        ]);
    }
}
