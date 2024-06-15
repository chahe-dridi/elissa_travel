<?php

namespace App\Controller;
use App\Entity\Hotel;
use App\Entity\Chambre;

use App\Entity\ReservationHotel;
use App\Form\ReservationHotelType;
use App\Form\reservationtype;
use App\Repository\HotelRepository;
use Symfony\Component\Mime\Email;
use Symfony\Component\Mailer\Transport;
use Symfony\Component\Mailer\Mailer;
use SensioLabs\Security\SecurityChecker;
use App\Repository\ReservationHotelRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\Security;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;


#[IsGranted('ROLE_USER')]
 
#[Route('/reservation/hotel')]
class ReservationHotelController extends AbstractController
{
    #[Route('/', name: 'app_reservation_hotel_index', methods: ['GET'])]
    public function index(ReservationHotelRepository $reservationHotelRepository, Request $request): Response
{
    $searchQuery = $request->query->get('search');

    // Retrieve reservation hotels based on search query
    $reservationHotels = [];

    if ($searchQuery) {
        $reservationHotels = $reservationHotelRepository->findByNom
        ($searchQuery);
    } else {
        $reservationHotels = $reservationHotelRepository->findAll();
    }

    return $this->render('reservation_hotel/index.html.twig', [
        'reservation_hotels' => $reservationHotels,
    ]);
}

#[Route('/back', name: 'app_reservation_back', methods: ['GET'])]
public function back(ReservationHotelRepository $reservationHotelRepository, Request $request): Response
{
$searchQuery = $request->query->get('search');

// Retrieve reservation hotels based on search query
$reservationHotels = [];

if ($searchQuery) {
    $reservationHotels = $reservationHotelRepository->findByNom
    ($searchQuery);
} else {
    $reservationHotels = $reservationHotelRepository->findAll();
}

return $this->render('reservation_hotel/backindex.html.twig', [
    'reservation_hotels' => $reservationHotels,
]);
}

    #[Route('/new', name: 'app_reservation_hotel_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager ,SecurityController $security): Response
    {
        $id = $request->query->get('id');
        $entityManager = $this->getDoctrine()->getManager();
        $hotel = $entityManager->getRepository(Hotel::class)->find($id);

        $reservationHotel = new ReservationHotel();
        $form = $this->createForm(reservationtype::class, $reservationHotel, [
            'hotel' => $hotel, 
        ]);
        $form->handleRequest($request);
        
        $reservationHotel->setDistination($hotel->getLieu());
        $reservationHotel->setHotel($hotel);


        if ($form->isSubmitted() && $form->isValid()) {
            $user=$security->getUser();
            $reservationHotel->setUser($user);
     




            $this->addFlash('success', 'Réservation effectuée avec succès! Vous recevrez une confirmation par e-mail' );
            $formData = $form->getData();
            $selectedChambre = $formData->getChambree();
            
            $transport = Transport::fromDsn('smtp://tester44.tester2@gmail.com:hpevdqbvclzebhxa@smtp.gmail.com:587');
            $mailer = new Mailer($transport);
            $email = (new Email())
                ->from('tester44.tester2@gmail.com')
                ->to('aymenbahri351@gmail.com')
                ->subject(' reservation hotel')
                ->html('votre reservation a ete effectuer avec succes  ');
                $mailer->send($email);

            if ($selectedChambre) {
                $prixHotel = $selectedChambre->getPrixHotel();
                $reservationHotel->setPrixTT($prixHotel);
            }

            $reservationHotel->setChambrE($selectedChambre->getVueHotel());


            $entityManager->persist($reservationHotel);

            $entityManager->flush();

            return $this->redirectToRoute('app_reservation_hotel_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('reservation_hotel/new.html.twig', [
            'hotelname' => $hotel->getNomHotel(),
            'lieu' => $hotel->getLieu(),
            
            'reservation_hotel' => $reservationHotel,
            'form' => $form,
        ]);
    }

    

    #[Route('/{id}', name: 'app_reservation_hotel_show', methods: ['GET'])]
    public function show(ReservationHotelRepository $ReservationHotelRepository, Request $request,ReservationHotel $reservationHotel, Security $security): Response
    {   

        

 
    
        // Render the template
        return $this->render('reservation_hotel/show.html.twig', [
            'reservation_hotel' => $reservationHotel,
        ]);
    }
    
    
    #[IsGranted('ROLE_ADMIN')]
    #[Route('/{id}', name: 'app_reservation_afficher', methods: ['GET'])]
    public function afficher(ReservationHotel $reservationHotel): Response
    {
        return $this->render('reservation_hotel/afficher.html.twig', [
            'reservation_hotel' => $reservationHotel,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_reservation_hotel_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, ReservationHotel $reservationHotel, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(ReservationHotelType::class, $reservationHotel);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            return $this->redirectToRoute('app_reservation_hotel_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('reservation_hotel/edit.html.twig', [
            'reservation_hotel' => $reservationHotel,
            'form' => $form,
        ]);
    }


   

    #[Route('/{id}', name: 'app_reservation_hotel_delete', methods: ['POST'])]
    public function delete(Request $request, ReservationHotel $reservationHotel, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$reservationHotel->getId(), $request->request->get('_token'))) {
            $entityManager->remove($reservationHotel);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_reservation_hotel_index', [], Response::HTTP_SEE_OTHER);
    }


   

    #[Route('/{id}/invoice', name: 'app_reservation_hotel_invoice', methods: ['GET'])]
    public function generateInvoice(ReservationHotel $reservationHotel): Response
{
    // Retrieve the associated hotel entity
    $hotel = $reservationHotel->getHotel();

    // Generate PDF content
    $pdfContent = $this->renderView('reservation_hotel/invoice.html.twig', [
        'reservation_hotel' => $reservationHotel,
        'hotel' => $hotel, // Pass the hotel entity to the template
    ]);

    // Generate PDF file
    $pdf = new \Dompdf\Dompdf();
    $pdf->loadHtml($pdfContent);

    // (Optional) Set PDF options

    // Render PDF
    $pdf->render();

    // Stream PDF file as response
    return new Response($pdf->output(), 200, [
        'Content-Type' => 'application/pdf',
        'Content-Disposition' => 'inline; filename="invoice.pdf"',
    ]);
}



    

/*#[Route('/{id}/calendar', name: 'app_reservation_hotel_calendar')]
public function eventCalendar(ReservationHotelRepository $reservationHotelRepository): Response
{
    try {
        // Fetch all events from the repository
        $reservations = $reservationHotelRepository->findAll();

        // Check if events exist
        if (empty($reservations)) {
            throw new \Exception('No reservations found.');
        }

        // Format the events data for the calendar
        $formattedEvents = [];
        foreach ($reservations as $reservation) {
            $formattedEvents[] = [
                'datearrive' => $reservation->getdateArrive()->format('Y-m-d'),
                'datedepart' => $reservation->getdateDepart()->format('Y-m-d'),
                'id_reservation' => $reservation->getId(),
                // You can add more fields like color, url, etc. if needed
            ];
        }   
        $data = json_encode($formattedEvents);

        // Pass formatted events to the Twig template
        return $this->render('reservation_hotel/calendar.html.twig', compact('data'));
    } catch (\Exception $e) {
        // Handle any exceptions
        return $this->render('reservation_hotel/calendar.html.twig', ['error' => $e->getMessage()]);
    }
}

*/




#[Route('/reservation/hotel/calendar', name: 'app_reservation_hotel_calendar')]
public function reservationCalendar(ReservationHotelRepository $reservationHotelRepository): Response
{
    // Fetch vols from the repository
    $reservations = $reservationHotelRepository->findAll();

    // Pass vols to the Twig template
    return $this->render('reservation_hotel/calendar.html.twig', [
        'reservations' => $reservations,
    ]);
}


}



