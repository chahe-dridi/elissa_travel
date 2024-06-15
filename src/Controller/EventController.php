<?php

namespace App\Controller;

use App\Entity\AvisEvenement;
use App\Entity\Event;
use App\Entity\User;
use App\Form\AvisEvenementType;
use App\Form\EventType;
use App\Repository\EventRepository;
use App\Repository\ReservationEventRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\TypeEvenement;
use Symfony\Component\Security\Core\Security;
use Knp\Component\Pager\PaginatorInterface;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;


class EventController extends AbstractController
{
    #[IsGranted('ROLE_ADMIN')]

    #[Route('/event', name: 'app_event')]
    public function index(EventRepository $em): Response
    {
        $evenement = $em->findAll();
        return $this->render('event/afficherEvent.html.twig', ['listS'=>$evenement]);
    }


    #[IsGranted('ROLE_ADMIN')]
    #[Route('/ajouterEvent', name: 'ajouterEvent')]

    #[Route('/ajouterEvent', name: 'ajouterEvent')]
    public function ajouterEvent(Request $request, Security $security): Response
    {
        $evenement = new Event();
        $form = $this->createForm(EventType::class, $evenement);
        $form->handleRequest($request); 
        
        if ($form->isSubmitted() && $form->isValid()) {
            $user = $security->getUser(); // Récupère l'utilisateur actuellement authentifié
            
            $fileUpload = $form->get('imageevent')->getData();
            
            // Récupérer le nom d'origine du fichier
            $originalFileName = $fileUpload->getClientOriginalName();
            // Déplacer le fichier vers le répertoire de téléchargement
            $targetDirectory = $this->getParameter('kernel.project_dir') . '/public/uploads';
            $targetFilePath = $targetDirectory . '/' . $originalFileName;
            
            // Déplacer le fichier vers le répertoire de téléchargement
            $fileUpload->move($targetDirectory, $originalFileName);
    
            $evenement->setImageevent($originalFileName); // Enregistrer le nom du fichier dans la base de données
            $evenement->setUser($user); // Attribuer l'utilisateur actuel à l'événement
            
            $em = $this->getDoctrine()->getManager();
            $em->persist($evenement);
            $em->flush();
            
            $this->addFlash(
                'notice', 'Evenement a été bien ajoutée '
            );
            
            return $this->redirectToRoute('app_event');
        }
        
        return $this->render('event/addEvent.html.twig', ['f' => $form->createView()]);
    }
    
    #[IsGranted('ROLE_ADMIN')]
    #[Route('/modifierEvent/{id}', name: 'modifierEvenement')]
    public function modifierArticle(Request $request, $id): Response
    {
        $evenement = $this->getDoctrine()->getManager()->getRepository(Event::class)->find($id);
        $form = $this->createForm(EventType::class, $evenement);
        $form->handleRequest($request); 
        if ($form->isSubmitted() && $form->isValid()) {

             
            $fileUpload = $form->get('imageevent')->getData();

            $fileName = md5(uniqid()) . '.' . $fileUpload->guessExtension();

            $fileUpload->move($this->getParameter('kernel.project_dir') . '/public/uploads', $fileName);

            $evenement->setImageevent($fileName);
            $em = $this->getDoctrine()->getManager();
            $em->persist($evenement);
            $em->flush();
            $this->addFlash(
                'notice', 'Evenement a été bien modifié '
            );

            return $this->redirectToRoute('app_event');

        }

        return $this->render('event/modifierevent.html.twig',
            ['f' => $form->createView()]
        );
    }
    #[IsGranted('ROLE_ADMIN')]
    #[Route('/suppressionEvent/{id}', name: 'suppressionEvent')]
    public function suppressionEvent(Request $request, $id): Response
    {
        $em = $this->getDoctrine()->getManager();
        $typeEvenement = $em->getRepository(Event::class)->find($id);
    
        if (!$typeEvenement) {
            throw $this->createNotFoundException('Evenement not found');
        }
    
        $em->remove($typeEvenement);
        $em->flush();
    
        $this->addFlash(
            'noticedelete', 'Evenement a été bien supprimé '
        );
    
        return $this->redirectToRoute('app_event');
    }
    /////////////////////////////aslaneya///////////////////////////////
    /*
    
    #[Route('/EventFront', name: 'EventFront')]
    public function EventFront(): Response
    {

        $em = $this->getDoctrine()->getManager()->getRepository(Event::class); 
        $prods = $em->findAll();
        return $this->render('event/EventFront.html.twig', ['listS'=>$prods]);
    }

*/
 
   

    /////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

 /*
    public function events(Request $request, PaginatorInterface $paginator)
    {
        // Récupérer la liste complète des événements (à remplacer par votre propre logique de récupération)
        $events = $this->getDoctrine()->getRepository(Event::class)->findAll();
    
        // Paginer les événements
        $pagination = $paginator->paginate(
            $events,
            $request->query->getInt('page', 1), // Numéro de page
            4 // Nombre d'événements par page
        );
    
        return $this->render('EventFront.html.twig', [
            'pagination' => $pagination,
        ]);
    }*/


    //////////////////////////////////////////////////////////////////////////////////////////////////////

  
     /* #[Route("/events/filtre", name:"event_filtre", methods:"GET")]
    
    public function filtre(Request $request): Response
    {
        $type = $request->query->get('type'); // Récupérer le type d'événement depuis l'URL

        // Récupérer les événements filtrés selon le type
        $filteredEvents = $this->getDoctrine()->getRepository(Event::class)->findBy(['TypeEvenement' => $type]);

        return $this->render('event/filtredEvent.html.twig', [
            'filteredEvents' => $filteredEvents,
        ]);
    }

/*
    public function filtre(): Response
{
    $filteredEvents = $this->getDoctrine()->getRepository(Event::class)->findAll();

    return $this->render('filtredevent.html.twig', [
        'filteredEvents' => $filteredEvents,
    ]);
}*/



///////////////////////////////////////////////////Affichagepagination//////////////////////////////////////////////////////
     
/*     
#[Route('/EventFront', name: 'EventFront')]
public function EventFront(Request $request, PaginatorInterface $paginator): Response
{
    $em = $this->getDoctrine()->getManager()->getRepository(Event::class); 
    $query = $em->createQueryBuilder('e')->getQuery();

    $pagination = $paginator->paginate(
        $query,
        $request->query->getInt('page', 1),
        5 // Nombre d'éléments par page
    );

    return $this->render('event/EventFront.html.twig', ['pagination' => $pagination]);
}*/
   
//////////////////////////////////////////////////////////////////Affichagepaginationtype/////////////////

#[IsGranted('ROLE_USER')]
#[Route('/EventFront', name: 'EventFront')]
public function EventFront(Request $request, PaginatorInterface $paginator): Response
{
    $em = $this->getDoctrine()->getManager()->getRepository(Event::class); 
    $query = $em->createQueryBuilder('e')
                ->innerJoin('e.TypeEvenement', 't');

    $typeId = $request->query->get('type_id');
    if ($typeId) {
        $query->andWhere('t.id = :typeId')
              ->setParameter('typeId', $typeId);
    }

    // Vérifie si le tri par prix est demandé
    $sortByPrice = $request->query->get('sort_by_price');
    if ($sortByPrice === 'asc') {
        $query->orderBy('e.prixentre', 'ASC');
    }

    // Récupération de tous les événements triés
    $sortedEvents = $query->getQuery()->getResult();

    $pagination = $paginator->paginate(
        $sortedEvents,
        $request->query->getInt('page', 1),
        5 // Nombre d'éléments par page
    );

    // Récupération de tous les types d'événement pour le filtre
    $types = $this->getDoctrine()->getRepository(TypeEvenement::class)->findAll();

    return $this->render('event/EventFront.html.twig', [
        'pagination' => $pagination,
        'types' => $types,
        'selectedTypeId' => $typeId,
    ]);
}
/*
public function EventFront(Request $request, PaginatorInterface $paginator): Response
{
    $em = $this->getDoctrine()->getManager()->getRepository(Event::class); 
    $query = $em->createQueryBuilder('e')
                ->innerJoin('e.TypeEvenement', 't');

    $typeId = $request->query->get('type_id');
    if ($typeId) {
        $query->andWhere('t.id = :typeId')
              ->setParameter('typeId', $typeId);
    }

    // Vérifie si le tri par type et prix est demandé
    $sortByTypeAndPrice = $request->query->get('sort_by_type_and_price');
    if ($sortByTypeAndPrice === 'asc') {
        $query->orderBy('t.nomType', 'ASC')
              ->addOrderBy('e.prixentre', 'ASC');
    }

    $pagination = $paginator->paginate(
        $query->getQuery(),
        $request->query->getInt('page', 1),
        5 // Nombre d'éléments par page
    );

    // Récupération de tous les types d'événement pour le filtre
    $types = $this->getDoctrine()->getRepository(TypeEvenement::class)->findAll();

    return $this->render('event/EventFront.html.twig', [
        'pagination' => $pagination,
        'types' => $types,
        'selectedTypeId' => $typeId,
    ]);
}

*/







     
    

}




    


