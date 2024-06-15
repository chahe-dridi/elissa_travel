<?php

namespace App\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;

use App\Entity\Hotel;
use App\Form\HotelType;
use App\Repository\HotelRepository;

use App\Repository\ReservationHotelRepository;

use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Knp\Component\Pager\PaginatorInterface;

use Symfony\Component\Security\Core\Security;

#[Route('/hotel')]
class HotelController extends AbstractController
{   #[IsGranted('ROLE_ADMIN')]
    #[Route('/', name: 'app_hotel_index', methods: ['GET'])]
    public function index(HotelRepository $hotelRepository, Request $request, PaginatorInterface $paginatorInterface): Response
    {
        $data = $hotelRepository->findAll();
        $users = $paginatorInterface->paginate(
            $data,
            $request->query->getInt('page',1),3
        );
        $searchQuery = $request->query->get('search');

        // Retrieve hotels based on search query
        if ($searchQuery) {
            $hotels = $hotelRepository->findByNomHotel($searchQuery);
        } else {
            $hotels = $hotelRepository->findAll();
        }

        return $this->render('hotel/index.html.twig', [
            'hotels' => $hotels,
            'searchQuery' => $searchQuery, // Pass the search query to the template
            'users' => $users,
        ]);
    }
 
   
    #[IsGranted('ROLE_ADMIN')]
    #[Route('/new', name: 'app_hotel_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager ,SecurityController $security): Response
    {
        $hotel = new Hotel();
        $form = $this->createForm(HotelType::class, $hotel);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {


            $user=$security->getUser();
            $hotel->setUser($user);
     


            $imageFile = $form->get('image')->getData();

            if ($imageFile) {
                $newFilename = uniqid().'.'.$imageFile->guessExtension();


                
                $hotel->setImage($newFilename);
                $imageFile->move(
                    $this->getParameter('kernel.project_dir').'/public/uploads',
                    $newFilename
                );
            $entityManager->persist($hotel);
            $entityManager->flush();

            return $this->redirectToRoute('app_hotel_index', [], Response::HTTP_SEE_OTHER);
        }}

        return $this->renderForm('hotel/new.html.twig', [
            'hotel' => $hotel,
            'form' => $form,
        ]);
    }
    #[IsGranted('ROLE_ADMIN')]
    #[Route('/{id}', name: 'app_hotel_show', methods: ['GET'])]
    public function show(Hotel $hotel): Response
    {
        return $this->render('hotel/show.html.twig', [
            'hotel' => $hotel,
        ]);
    }
    #[IsGranted('ROLE_ADMIN')]
    #[Route('/{id}/edit', name: 'app_hotel_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Hotel $hotel, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(HotelType::class, $hotel);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            return $this->redirectToRoute('app_hotel_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('hotel/edit.html.twig', [
            'hotel' => $hotel,
            'form' => $form,
        ]);
    }
    #[IsGranted('ROLE_ADMIN')]
    #[Route('/{id}', name: 'app_hotel_delete', methods: ['POST'])]
    public function delete(Request $request, Hotel $hotel, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$hotel->getId(), $request->request->get('_token'))) {
            $entityManager->remove($hotel);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_hotel_index', [], Response::HTTP_SEE_OTHER);
    }

    
    







    #[IsGranted('ROLE_ADMIN')]
    #[Route('/hotel/stat', name: 'hotel_reservation_stat', methods: ['GET'])]
    public function hotelReservationStatistics(ReservationHotelRepository $reservationHotelRepository): Response
    {
        // Get all hotels from the repository
        $hotels = $this->getDoctrine()->getRepository(Hotel::class)->findAll();

        // Initialize an array to store reservation counts by hotel
        $reservationsByHotel = [];

        // Calculate statistics
        foreach ($hotels as $hotel) {
            $hotelId = $hotel->getId();

            // Count reservations for each hotel
            $reservationCount = $reservationHotelRepository->count(['Hotel' => $hotelId]);
            $reservationsByHotel[$hotelId] = $reservationCount;
        }

        // Render the template with reservation statistics
        return $this->render('hotel/statistics.html.twig', [
            'reservationsByHotel' => $reservationsByHotel,
        ]);
    }



}
