<?php

namespace App\Controller;

use App\Entity\Reservationvol;

use App\Entity\Vol;

use App\Form\ReservationvolType;

use App\Repository\VolRepository;

use App\Repository\ReservationvolRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/reservationvol')]
class ReservationvolController extends AbstractController
{
    #[Route('/', name: 'app_reservationvol_index', methods: ['GET'])]
   // Controller action to fetch and display available flights
public function index(VolRepository $volRepository): Response
{
    // Fetch available flights
    $availableFlights = $volRepository->findBy(['disponible' => true]);

    // Render the template with available flights data
    return $this->render('reservationvol/index.html.twig', [
        'flights' => $availableFlights,
    ]);
}
 /*
#[Route('/new', name: 'app_reservationvol_new', methods: ['GET', 'POST'])]
public function new(Request $request, EntityManagerInterface $entityManager): Response
{
    $reservationvol = new Reservationvol();

    // Set vol automatically, assuming you have the vol ID available
    $volId = $request->query->get('id');
    $vol = $entityManager->getRepository(Vol::class)->find($volId);
    $reservationvol->setVol($vol);

    $form = $this->createForm(ReservationvolType::class, $reservationvol);
    $form->handleRequest($request);

    if ($form->isSubmitted() && $form->isValid()) {
        $entityManager->persist($reservationvol);
        $entityManager->flush();

        return $this->redirectToRoute('app_reservationvol_index', [], Response::HTTP_SEE_OTHER);
    }

    return $this->renderForm('reservationvol/new.html.twig', [
        'reservationvol' => $reservationvol,
        'form' => $form,
    ]);
}
*/#[Route('/new', name: 'app_reservationvol_new', methods: ['GET', 'POST'])]
public function new(Request $request, EntityManagerInterface $entityManager): Response
{
    // Create a new Reservationvol entity
    $reservationvol = new Reservationvol();

    // Set the Vol entity automatically, assuming you have the Vol ID available
    $volId = $request->query->get('id');
    $vol = $entityManager->getRepository(Vol::class)->find($volId);
    
    if (!$vol) {
        throw $this->createNotFoundException('Vol not found');
    }

    $reservationvol->setVol($vol);

    // Retrieve the associated Volclass
    $volclass = $vol->getVolclass();

    // Check if there are available tickets
    $ticketNumber = $volclass->getTicketNumber();
    if ($ticketNumber > 0) {
        // Decrease the ticket number by 1
        $volclass->setTicketNumber($ticketNumber - 1);
        
        // If ticket number reaches 0, mark the Vol as not available
        if ($ticketNumber === 1) {
            $vol->setDisponible(false);
        }

        // Persist the changes to the Volclass and Vol entities
        $entityManager->persist($volclass);
        $entityManager->persist($vol);
    } else {
        // Handle the case where there are no available tickets
        // You can throw an exception, display an error message, or handle it according to your application logic
        throw new \Exception('No available tickets for this flight.');
    }

    // Calculate the total price based on the selected volclass price
    $volclassPrice = $volclass->getPrice();
    $reservationvol->setTotalPrice($volclassPrice);

    // Create the form and bind it to the Reservationvol entity
    $form = $this->createForm(ReservationvolType::class, $reservationvol);

    // Handle the form submission
    $form->handleRequest($request);
    if ($form->isSubmitted() && $form->isValid()) {
        // Persist the Reservationvol entity
        $entityManager->persist($reservationvol);
        $entityManager->flush();

        // Redirect to the index page after successful submission
        return $this->redirectToRoute('app_reservationvol_index');
    }

    // Render the form
    return $this->render('reservationvol/new.html.twig', [
        'reservationvol' => $reservationvol,
        'form' => $form->createView(),
    ]);
}













#[Route('/show', name: 'app_reservationvol_show', methods: ['GET'])]
public function show(ReservationvolRepository $reservationvolRepository): Response
{
    $reservationvols = $reservationvolRepository->findAll();

    return $this->render('reservationvol/show.html.twig', [
        'reservationvols' => $reservationvols,
    ]);
}







   /* #[Route('/{id}', name: 'app_reservationvol_show', methods: ['GET'])]
    public function show(Reservationvol $reservationvol): Response
    {
        return $this->render('reservationvol/show.html.twig', [
            'reservationvol' => $reservationvol,
        ]);
    }*/

    #[Route('/{id}/edit', name: 'app_reservationvol_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Reservationvol $reservationvol, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(ReservationvolType::class, $reservationvol);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            return $this->redirectToRoute('app_reservationvol_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('reservationvol/edit.html.twig', [
            'reservationvol' => $reservationvol,
            'form' => $form,
        ]);
    }






    #[Route('/{id}', name: 'app_reservationvol_delete', methods: ['POST'])]
    public function delete(Request $request, Reservationvol $reservationvol, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$reservationvol->getId(), $request->request->get('_token'))) {
            // Retrieve the associated Vol entity
            $vol = $reservationvol->getVol();
    
            // If the departure time has not passed yet, increase the ticket number of the associated Volclass by 1
            $heureDepart = $vol->getHeureDepart();
            if ($heureDepart > new \DateTime('now')) {
                $volclass = $vol->getVolclass();
                $ticketNumber = $volclass->getTicketNumber();
                $volclass->setTicketNumber($ticketNumber + 1);
                $entityManager->persist($volclass);
            }
    
            // Remove the Reservationvol entity
            $entityManager->remove($reservationvol);
            $entityManager->flush();
    
            // Check if the flight is not available, then make it available again
            if (!$vol->isDisponible()) {
                $vol->setDisponible(true);
                $entityManager->persist($vol);
                $entityManager->flush();
            }
        }
    
        return $this->redirectToRoute('app_reservationvol_index', [], Response::HTTP_SEE_OTHER);
    }
    
    
    
}