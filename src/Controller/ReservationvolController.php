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

//mail
use SensioLabs\Security\SecurityChecker;
use Symfony\Component\Mailer\Mailer ;
use Symfony\Component\Mailer\Transport;
use Symfony\Component\Mime\Email;
 
use Knp\Component\Pager\PaginatorInterface;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;
#[IsGranted('ROLE_USER')]
#[Route('/reservationvol')]
class ReservationvolController extends AbstractController
{
  
  
  
  
  
  
  
  /*
  
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

*/

private $paginator;

public function __construct(PaginatorInterface $paginator)
{
    $this->paginator = $paginator;
}



#[Route('/', name: 'app_reservationvol_index', methods: ['GET'])]
public function index(VolRepository $volRepository, Request $request): Response
{
    // Get the current datetime
    $currentTime = new \DateTime();

    // Fetch available flights with departure time in the future
    $query = $volRepository->createQueryBuilder('v')
        ->where('v.disponible = :disponible')
        ->andWhere('v.heure_depart > :currentTime')
        ->setParameter('disponible', true)
        ->setParameter('currentTime', $currentTime)
        ->getQuery();

    // Paginate the results
    $pagination = $this->paginator->paginate(
        $query, // Query to paginate
        $request->query->getInt('page', 1), // Get the current page number from the request, default to 1
        12 // Number of items per page
    );

    // Render the template with paginated flights data
    return $this->render('reservationvol/index.html.twig', [
        'flights' => $pagination,
    ]);
}




 

 //works
/*
 #[Route('/new', name: 'app_reservationvol_new', methods: ['GET', 'POST'])]
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


    $transport = Transport::fromDsn('smtp://chaher.dridi.100@gmail.com:zimfxdkatgdgcoxe@smtp.gmail.com:587');
    $mailer = new Mailer($transport);
    $email = (new Email())
        ->from('webuild2026@gmail.com')
        ->to('chaher.dridi@ieee.org')
        ->subject('test reservation mail')
        ->html('hello check our web application! someone write a comment ');
        $mailer->send($email);
  
 



    // Render the form
    return $this->render('reservationvol/new.html.twig', [
        'reservationvol' => $reservationvol,
        'form' => $form->createView(),
    ]);
}
 
*/
 


/*
#[Route('/new', name: 'app_reservationvol_new', methods: ['GET', 'POST'])]
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
      
       
    $this->addFlash('success', 'Réservation effectuée avec succès! Vous recevrez une confirmation par e-mail et par SMS.');


      
        $entityManager->persist($reservationvol);
        $entityManager->flush();

    
    
        $user = $reservationvol->getUser();

        // Check if a user is associated with the reservation
        
        
        
        $volclass = $vol->getVolclass();
        $userEmail = $user->getEmail();
    
        $heureDepart = $vol->getHeureDepart()->format('Y-m-d H:i:s'); // Format the DateTime object
        $heureArrivee = $vol->getHeureArrive()->format('Y-m-d H:i:s'); // Format the DateTime object
        $airportDepart = $vol->getAirportDepart()->getName(); // Assuming getName() returns the airport name
        $airportArrive = $vol->getAirportArrive()->getName(); // Assuming getName() returns the airport name
        $cityDepart = $vol->getAirportDepart()->getCity(); // Assuming you have a method to get the city object
        $cityArrive = $vol->getAirportArrive()->getCity(); // Assuming you have a method to get the city object
        $countryDepart = $vol->getAirportDepart()->getCountry(); // Assuming you have a method to get the country object
        $countryArrive = $vol->getAirportArrive()->getCountry(); // Assuming you have a method to get the country object
        $volClassName = $vol->getVolclass()->getClassName(); // Assuming getName() returns the class name
        $volClassDescription = $vol->getVolclass()->getDescription(); // Assuming you have a method to get the description
        $totalPrice = $reservationvol->getTotalPrice(); // Assuming you have a method to get the total price
        

        $Compagnie_aerienne = $vol->getCompagnieAerienne();
        // Generate the HTML content for the email
        $htmlContent = "
        <html>
        <head>
            <style>
                body {
                    font-family: Arial, sans-serif;
                    line-height: 1.6;
                    background-color: #f4f4f4;
                    padding: 20px;
                    margin: 0;
                }
                .container {
                    max-width: 600px;
                    margin: 0 auto;
                    background-color: #fff;
                    padding: 20px;
                    border-radius: 8px;
                    box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
                }
                h2 {
                    color: #333;
                    font-size: 24px;
                    margin-bottom: 20px;
                }
                p {
                    margin-bottom: 15px;
                    font-size: 16px;
                }
                ul {
                    list-style: none;
                    padding: 0;
                    margin-bottom: 20px;
                }
                li {
                    margin-bottom: 10px;
                    font-size: 16px;
                }
                strong {
                    font-weight: bold;
                }
                .thank-you {
                    font-size: 16px;
                    margin-top: 20px;
                }
            </style>
        </head>
        <body>
            <div class='container'>
                <h2>Dear {$user->getlastName()} {$user->getfirstName()},</h2>
                <p>We are delighted to confirm your flight reservation. Below are the details:</p>
                <ul>
                    <li><strong>Departure Country:</strong> $countryDepart</li>
                    <li><strong>Departure City:</strong> $cityDepart</li>           
                    <li><strong>Arrival Country:</strong> $countryArrive</li>
                    <li><strong>Arrival City:</strong> $cityArrive</li>    
                    <li><strong>Departure Time:</strong> $heureDepart</
                    </li>
                    <li><strong>Arrival Time:</strong> $heureArrivee</li>
                    <li><strong>Departure Airport:</strong> $airportDepart</li>
                    <li><strong>Arrival Airport:</strong> $airportArrive</li>
                    <li><strong>Class Name:</strong> $volClassName</li>
                    <li><strong>Class Description:</strong> $volClassDescription</li>
                    <li><strong>Total Price:</strong> $totalPrice</li>
                </ul>
                <p class='thank-you'>Thank you for choosing $Compagnie_aerienne. We look forward to serving you on board.</p>
                <p>Best regards,<br> $Compagnie_aerienne Team</p>
            </div>
        </body>
        </html>
";                

        

    
        $transport = Transport::fromDsn('smtp://tester44.tester2@gmail.com:hpevdqbvclzebhxa@smtp.gmail.com:587');
        $mailer = new Mailer($transport);
       
        // Create the email message
        $email = (new Email())
            ->from('tester44.tester2@gmail.com')
            ->to($userEmail)
            ->subject('Flight Reservation Details')
            ->html($htmlContent);
        
        // Send the email
        $mailer->send($email);
    
    
    
    
    




        // Redirect to the index page after successful submission
        return $this->redirectToRoute('app_reservationvol_index');
   
   
   
    }


   
  
 
    


    // Render the form
    return $this->render('reservationvol/new.html.twig', [
        'reservationvol' => $reservationvol,
        'form' => $form->createView(),
    ]);


   


}

 
 */


 #[Route('/new', name: 'app_reservationvol_new', methods: ['GET', 'POST'])]
 public function new(Request $request, EntityManagerInterface $entityManager ,SecurityController $security): Response
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
             
             // Mark all other flights with the same class as not available
             $flightsWithSameClass = $entityManager->getRepository(Vol::class)->findBy(['volclass' => $volclass]);
             foreach ($flightsWithSameClass as $flight) {
                 $flight->setDisponible(false);
                 $entityManager->persist($flight);
             }
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
       
            $user=$security->getUser();
            $reservationvol->setUser($user);
     
       
         $entityManager->persist($reservationvol);
         $entityManager->flush();
 
     
     
         $user = $reservationvol->getUser();
 
         // Check if a user is associated with the reservation
         
         
         
         $volclass = $vol->getVolclass();
         $userEmail = $user->getEmail();
     
         $heureDepart = $vol->getHeureDepart()->format('Y-m-d H:i:s'); // Format the DateTime object
         $heureArrivee = $vol->getHeureArrive()->format('Y-m-d H:i:s'); // Format the DateTime object
         $airportDepart = $vol->getAirportDepart()->getName(); // Assuming getName() returns the airport name
         $airportArrive = $vol->getAirportArrive()->getName(); // Assuming getName() returns the airport name
         $cityDepart = $vol->getAirportDepart()->getCity(); // Assuming you have a method to get the city object
         $cityArrive = $vol->getAirportArrive()->getCity(); // Assuming you have a method to get the city object
         $countryDepart = $vol->getAirportDepart()->getCountry(); // Assuming you have a method to get the country object
         $countryArrive = $vol->getAirportArrive()->getCountry(); // Assuming you have a method to get the country object
         $volClassName = $vol->getVolclass()->getClassName(); // Assuming getName() returns the class name
         $volClassDescription = $vol->getVolclass()->getDescription(); // Assuming you have a method to get the description
         $totalPrice = $reservationvol->getTotalPrice(); // Assuming you have a method to get the total price
         
 
         $Compagnie_aerienne = $vol->getCompagnieAerienne();
         // Generate the HTML content for the email
         $htmlContent = "
         <html>
         <head>
             <style>
                 body {
                     font-family: Arial, sans-serif;
                     line-height: 1.6;
                     background-color: #f4f4f4;
                     padding: 20px;
                     margin: 0;
                 }
                 .container {
                     max-width: 600px;
                     margin: 0 auto;
                     background-color: #fff;
                     padding: 20px;
                     border-radius: 8px;
                     box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
                 }
                 h2 {
                     color: #333;
                     font-size: 24px;
                     margin-bottom: 20px;
                 }
                 p {
                     margin-bottom: 15px;
                     font-size: 16px;
                 }
                 ul {
                     list-style: none;
                     padding: 0;
                     margin-bottom: 20px;
                 }
                 li {
                     margin-bottom: 10px;
                     font-size: 16px;
                 }
                 strong {
                     font-weight: bold;
                 }
                 .thank-you {
                     font-size: 16px;
                     margin-top: 20px;
                 }
             </style>
         </head>
         <body>
             <div class='container'>
                 <h2>Dear {$user->getfirstName()} {$user->getfirstName()},</h2>
                 <p>We are delighted to confirm your flight reservation. Below are the details:</p>
                 <ul>
                     <li><strong>Departure Country:</strong> $countryDepart</li>
                     <li><strong>Departure City:</strong> $cityDepart</li>           
                     <li><strong>Arrival Country:</strong> $countryArrive</li>
                     <li><strong>Arrival City:</strong> $cityArrive</li>    
                     <li><strong>Departure Time:</strong> $heureDepart</
                     </li>
                     <li><strong>Arrival Time:</strong> $heureArrivee</li>
                     <li><strong>Departure Airport:</strong> $airportDepart</li>
                     <li><strong>Arrival Airport:</strong> $airportArrive</li>
                     <li><strong>Class Name:</strong> $volClassName</li>
                     <li><strong>Class Description:</strong> $volClassDescription</li>
                     <li><strong>Total Price:</strong> $totalPrice</li>
                 </ul>
                 <p class='thank-you'>Thank you for choosing $Compagnie_aerienne. We look forward to serving you on board.</p>
                 <p>Best regards,<br> $Compagnie_aerienne Team</p>
             </div>
         </body>
         </html>
 ";                
 
         
 
     
         $transport = Transport::fromDsn('smtp://tester44.tester2@gmail.com:hpevdqbvclzebhxa@smtp.gmail.com:587');
         $mailer = new Mailer($transport);
        
         // Create the email message
         $email = (new Email())
             ->from('tester44.tester2@gmail.com')
             ->to($userEmail)
             ->subject('Flight Reservation Details')
             ->html($htmlContent);
         
         // Send the email
         $mailer->send($email);
     
     
     
      
 
 
         // Redirect to the index page after successful submission
         return $this->redirectToRoute('app_reservationvol_index');
    
    
    
     }
 
 
    
   
  
     
 
 
     // Render the form
     return $this->render('reservationvol/new.html.twig', [
         'reservationvol' => $reservationvol,
         'form' => $form->createView(),
     ]);
 
 
    
 
 
 }

/*
#[Route('/show', name: 'app_reservationvol_show', methods: ['GET'])]
public function show(ReservationvolRepository $reservationvolRepository): Response
{
    $reservationvols = $reservationvolRepository->findAll();

    return $this->render('reservationvol/show.html.twig', [
        'reservationvols' => $reservationvols,
    ]);
}
*/

#[Route('/show', name: 'app_reservationvol_show', methods: ['GET'])]
public function show(ReservationvolRepository $reservationvolRepository, PaginatorInterface $paginator, Request $request ,SecurityController $security): Response
{
    // Get the current logged-in user
    $user = $security->getUser();

    // Fetch reservations for the current user
    $reservationvolsQuery = $reservationvolRepository->findBy(['user' => $user]);

    // Paginate the results
    $reservationvols = $paginator->paginate(
        $reservationvolsQuery, // Query to paginate
        $request->query->getInt('page', 1), // Get the current page number from the request, default to 1
        10 // Number of items per page
    );

    // Render the template with pagination
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

   /* #[Route('/{id}/edit', name: 'app_reservationvol_edit', methods: ['GET', 'POST'])]
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
*/
/*
#[Route('/{id}/edit', name: 'app_reservationvol_edit', methods: ['GET', 'POST'])]
public function edit(Request $request, Reservationvol $reservationvol, EntityManagerInterface $entityManager): Response
{
    // Check if the departure time is at least 48 hours in the future
    $heureDepart = $reservationvol->getVol()->getHeureDepart();
    if ($heureDepart <= new \DateTime('+48 hours')) {
        $this->addFlash('error', 'Cannot edit reservation within 48 hours of departure.');
        return $this->redirectToRoute('app_reservationvol_index');
    }

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
*/








#[Route('/{id}/edit', name: 'app_reservationvol_edit', methods: ['GET', 'POST'])]
public function edit(Request $request, Reservationvol $reservationvol, EntityManagerInterface $entityManager): Response
{
    // Check if the departure time is at least 48 hours in the future
    $heureDepart = $reservationvol->getVol()->getHeureDepart();
    if ($heureDepart <= new \DateTime('+48 hours')) {
        $this->addFlash('error', 'Cannot edit reservation within 48 hours of departure.');
        return $this->redirectToRoute('app_reservationvol_index');
    }

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
