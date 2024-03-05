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


use CMEN\GoogleChartsBundle\GoogleCharts\Charts\PieChart;


use Knp\Component\Pager\PaginatorInterface;
use Symfony\Component\HttpFoundation\JsonResponse;

#[Route('/reservation/vol/admin')]
class ReservationVolAdminController extends AbstractController
{
    /*#[Route('/', name: 'app_reservation_vol_admin_index', methods: ['GET'])]
    public function index(ReservationvolRepository $reservationvolRepository): Response
    {
        return $this->render('reservation_vol_admin/index.html.twig', [
            'reservationvols' => $reservationvolRepository->findAll(),
        ]);
    }
*/
#[Route('/', name: 'app_reservation_vol_admin_index', methods: ['GET'])]
public function index(ReservationvolRepository $reservationvolRepository, PaginatorInterface $paginator, Request $request): Response
{
    $query = $reservationvolRepository->createQueryBuilder('r')
        ->getQuery();

    $pagination = $paginator->paginate(
        $query, // Query to paginate
        $request->query->getInt('page', 1), // Page number
        10 // Limit per page
    );

    return $this->render('reservation_vol_admin/index.html.twig', [
        'reservationvols' => $pagination,
    ]);
}


/*
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
*/


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

        // If form is invalid, pass the form with errors to the template
        return $this->render('reservation_vol_admin/new.html.twig', [
            'reservationvol' => $reservationvol,
            'form' => $form->createView(), // Pass the form view to the template
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

 



 
    #[Route('/charte', name: 'app_reservation_vol_admin_chart', methods: ['GET'])]
    public function charte(ReservationvolRepository $reservationvolRepository): Response
    {
        $reservationData = $reservationvolRepository->findAll();
        $dataByCountry = [];

        foreach ($reservationData as $reservation) {
            $country = $reservation->getVol()->getairportarrive()->getCountry();

            if (!isset($dataByCountry[$country])) {
                $dataByCountry[$country] = 0;
            }

            $dataByCountry[$country]++;
        }

        $charte = new PieChart();
        $charte->getData()->setArrayToDataTable([
            ['Country', 'Reservations'],
            ...array_map(null, array_keys($dataByCountry), array_values($dataByCountry))
        ]);
        $charte->getOptions()->setTitle('Reservations by Country');
        $charte->getOptions()->setHeight(400);

        return $this->render('reservation_vol_admin/chart.html.twig', [
            
            'charte' => $charte
        ]);
    }
 

 




    #[Route('/reservationvol/stat', name: 'reservationvol_stat', methods: ['GET'])]
    public function reservationVolStatistics(ReservationvolRepository $reservationVolRepository): Response
    {
        // Get all reservation volumes from the repository
        $reservationVols = $reservationVolRepository->findAll();
        
        // Initialize an array to store city counts
        $citiesCount = [];
        
        // Calculate statistics
        foreach ($reservationVols as $reservationVol) {
            $city = $reservationVol->getVol()->getAirportArrive()->getCity();
        
            // Count reservations for each city
            if (!isset($citiesCount[$city])) {
                $citiesCount[$city] = 1;
            } else {
                $citiesCount[$city]++;
            }
        }
        
        // Sort cities by the number of reservations
        arsort($citiesCount);
        
        // Get the top 10 cities with the most reservations
        $topReservedCities = array_slice($citiesCount, 0, 10, true);
        
        // Prepare statistics data
        $statistics = [
            'Top Reserved Cities' => $topReservedCities,
        ];
        
        // Render the template with statistics
        return $this->render('reservation_vol_admin/statistics.html.twig', [
            'statistics' => $statistics,
        ]);
    }
    




}
