<?php

namespace App\Controller;
use App\Repository\HotelRepository;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;

class FrontController extends AbstractController
{
    #[IsGranted('ROLE_USER')]
    #[Route('/front', name: 'app_front')]
    public function index(): Response
    {
        return $this->render('nav_user.html.twig', [
            'controller_name' => 'FrontController',
        ]);
    }

    #[IsGranted('ROLE_USER')]
    #[Route('/front/hotel', name: 'app_hotel_index_front', methods: ['GET'])]
    public function hotelfront(HotelRepository $hotelRepository): Response
    {
        return $this->render('fronthotel.html.twig', [
            'hotels' => $hotelRepository->findAll(),
        ]);
    }
}
