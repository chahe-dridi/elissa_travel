<?php

namespace App\Controller;

use App\Entity\Vol;
use App\Form\VolType;
use App\Repository\VolRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;



//pdf
use Dompdf\Dompdf;
use Dompdf\Options;


#[Route('/vol')]
class VolController extends AbstractController
{
    #[Route('/', name: 'app_vol_index', methods: ['GET'])]
    public function index(VolRepository $volRepository, Request $request): Response
    {
        $departureAirportId = $request->query->get('departureAirport');
        $arrivalAirportId = $request->query->get('arrivalAirport');

        // Retrieve filtered vols based on departure and arrival airports
        $filteredVols = $volRepository->findByDepartureAndArrivalAirport($departureAirportId, $arrivalAirportId);

        return $this->render('vol/index.html.twig', [
            'vols' => $filteredVols,
        ]);
    }

    #[Route('/search', name: 'app_vol_search', methods: ['GET'])]
    public function search(Request $request, VolRepository $volRepository): Response
    {
        $departureAirportId = (int) $request->query->get('departureAirport');
        $arrivalAirportId = (int) $request->query->get('arrivalAirport');
    
        $vols = $volRepository->findByDepartureAndArrivalAirport($departureAirportId, $arrivalAirportId);
    
        return $this->render('vol/index.html.twig', [
            'vols' => $vols,
        ]);
    }








    
    #[Route('/new', name: 'app_vol_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $vol = new Vol();
        $form = $this->createForm(VolType::class, $vol);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($vol);
            $entityManager->flush();

            return $this->redirectToRoute('app_vol_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('vol/new.html.twig', [
            'vol' => $vol,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_vol_show', methods: ['GET'])]
    public function show(Vol $vol): Response
    {
        return $this->render('vol/show.html.twig', [
            'vol' => $vol,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_vol_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Vol $vol, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(VolType::class, $vol);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            return $this->redirectToRoute('app_vol_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('vol/edit.html.twig', [
            'vol' => $vol,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_vol_delete', methods: ['POST'])]
    public function delete(Request $request, Vol $vol, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$vol->getId(), $request->request->get('_token'))) {
            $entityManager->remove($vol);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_vol_index', [], Response::HTTP_SEE_OTHER);
    }




























    #[Route('/vol/pdf', name: 'app_vol_pdf', methods: ['GET'])]
    public function generatePdf(VolRepository $volRepository): Response
    {
        // Fetch flight information from the repository
        $flights = $volRepository->findAll();
    
        // Render the flights into a PDF using a template
        $pdf = $this->renderView('vol/flights_pdf.html.twig', [
            'flights' => $flights,
        ]);
    
        // Create a new instance of Dompdf
        $dompdf = new Dompdf();
        $dompdf->loadHtml($pdf);
    
        // Set paper size and rendering options
        $dompdf->setPaper('A4', 'portrait');
    
        // Render the PDF
        $dompdf->render();
    
        // Stream the PDF response
        return new Response(
            $dompdf->output(),
            Response::HTTP_OK,
            [
                'Content-Type' => 'application/pdf',
            ]
        );
    }








}
