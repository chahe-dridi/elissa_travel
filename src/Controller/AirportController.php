<?php

namespace App\Controller;

use App\Entity\Airport;
use App\Form\AirportType;
use App\Repository\AirportRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

use Knp\Component\Pager\PaginatorInterface;


use MercurySeries\FlashyBundle\FlashyNotifier;

#[Route('/airport')]
class AirportController extends AbstractController
{
   
    private $flashy;

    // Inject Flashy service into the constructor
    public function __construct(FlashyNotifier $flashy)
    {
        $this->flashy = $flashy;
    }


 

  /*  #[Route('/', name: 'app_airport_index', methods: ['GET'])]
    public function index(AirportRepository $airportRepository, Request $request): Response
    {
        $searchQuery = $request->query->get('code');

        if ($searchQuery) {
            $airport = $airportRepository->findByAirportCode($searchQuery);
            if ($airport) {
                return $this->render('airport/index.html.twig', [
                    'airports' => [$airport], // Display only the matching airport
                ]);
            } else {
                return $this->render('airport/index.html.twig', [
                    'airports' => [], // No matching airport found
                ]);
            }
        }

        // If no search query provided, show all airports
        return $this->render('airport/index.html.twig', [
            'airports' => $airportRepository->findAll(),
        ]);
    }

*/
    #[Route('/', name: 'app_airport_index', methods: ['GET'])]
    public function index(AirportRepository $airportRepository, Request $request, PaginatorInterface $paginator): Response
    {
        // Retrieve all airports from the repository
        $airportsQuery = $airportRepository->findAll();

        // Paginate the results
        $airports = $paginator->paginate(
            $airportsQuery, // Query to paginate
            $request->query->getInt('page', 1), // Get the current page number from the request, default to 1
            10 // Number of items per page
        );

        // Render the template with pagination
        return $this->render('airport/index.html.twig', [
            'airports' => $airports,
        ]);
    }
     
    #[Route('/search', name: 'app_airport_search', methods: ['GET'])]
    public function search(AirportRepository $airportRepository, Request $request): Response
    {
        $searchQuery = $request->query->get('search');
        $airports = $airportRepository->findBySearchQuery($searchQuery);

      

        return $this->render('airport/index.html.twig', [
            'airports' => $airports,
        ]);
    }

    #[Route('/new', name: 'app_airport_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $airport = new Airport();
        $form = $this->createForm(AirportType::class, $airport);
        $form->handleRequest($request);
      
        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($airport);
            $entityManager->flush();
            $this->flashy->success('Airport created successfully!');
            return $this->redirectToRoute('app_airport_index', [], Response::HTTP_SEE_OTHER);
        }
        
    
        return $this->renderForm('airport/new.html.twig', [
           
            'airport' => $airport,
            'form' => $form,
        ]);
    }
    
    #[Route('/{id}', name: 'app_airport_show', methods: ['GET'])]
    public function show(Airport $airport): Response
    {
        return $this->render('airport/show.html.twig', [
            'airport' => $airport,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_airport_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Airport $airport, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(AirportType::class, $airport);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            return $this->redirectToRoute('app_airport_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('airport/edit.html.twig', [
            'airport' => $airport,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_airport_delete', methods: ['POST'])]
    public function delete(Request $request, Airport $airport, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$airport->getId(), $request->request->get('_token'))) {
            $entityManager->remove($airport);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_airport_index', [], Response::HTTP_SEE_OTHER);
    }















    #[Route('/stat', name: 'airport_stat')]
    public function airportStatistics(AirportRepository $airportRepository): Response
    {
        // Retrieve all airports from the database
        $airports = $airportRepository->findAll();
    
        // Initialize an empty array to store country and city statistics
        $statistics = [];
    
        // Loop through each airport to count the number of airports in each country and city
        foreach ($airports as $airport) {
            $country = $airport->getCountry();
            $city = $airport->getCity();
    
            // Increment country count
            $countryName = $country;
            $statistics[$countryName]['num_airports'] = ($statistics[$countryName]['num_airports'] ?? 0) + 1;
    
            // Increment city count for the country
            $statistics[$countryName]['cities'][$city] = ($statistics[$countryName]['cities'][$city] ?? 0) + 1;
        }
    
        // Render the statistics using a Twig template
        return $this->render('airport/statistics.html.twig', [
            'statistics' => $statistics,
        ]);



    }







}

