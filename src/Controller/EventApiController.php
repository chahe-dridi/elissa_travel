<?php

namespace App\Controller\Api;

use App\Repository\EventRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class EventApiController extends AbstractController
{
    #[Route('/api/event/stats/type', name: 'api_event_stats_by_type')]
   /* public function statsByType(EventRepository $eventRepository): JsonResponse
    {
        // Récupérer les statistiques d'événements par type d'événement depuis le repository
        $statsByType = $eventRepository->getEventStatsByType();

        // Convertir le tableau en JSON
        $jsonStatsByType = json_encode($statsByType);

        // Retourner les statistiques sous forme de réponse JSON
        return new JsonResponse($jsonStatsByType, JsonResponse::HTTP_OK, [], true);
    }*/

    

    #[Route('/api/event/stats/type', name: 'api_event_stats_by_type')]
    public function statsByType(EventRepository $eventRepository): Response
    {
        // Récupérer les statistiques d'événements par type d'événement depuis le repository
        $statsByType = $eventRepository->getEventStatsByType();

        // Rendre la vue Twig avec les données
        return $this->render('event_api/StatEvent.html.twig', [
            'statsByType' => $statsByType,
        ]);
    }





}
