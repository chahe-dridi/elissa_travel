<?php

namespace App\Controller;
use App\Entity\Hotel;

use App\Entity\Chambre;
use App\Form\ChambreType;
use App\Repository\ChambreRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;

#[Route('/chambre')]
#[IsGranted('ROLE_ADMIN')]
class ChambreController extends AbstractController
{
    #[Route('/', name: 'app_chambre_index', methods: ['GET'])]
    public function index(ChambreRepository $chambreRepository, Request $request): Response
    {

        $id = $request->query->get('id');

        $entityManager = $this->getDoctrine()->getManager();
        $hotel = $entityManager->getRepository(Hotel::class)->find($id);

        $chambres = $hotel->getChambres();
        
        return $this->render('chambre/index.html.twig', [
            'chambres' => $chambres,
        ]);
    }
    

    #[Route('/new', name: 'app_chambre_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager): Response
{
    $chambre = new Chambre();
    $form = $this->createForm(ChambreType::class, $chambre);
    $form->handleRequest($request);

    if ($form->isSubmitted() && $form->isValid()) {
        $hotel = $chambre->getHotel(); // Assuming there's a method to get the hotel associated with the room
        if ($hotel && $hotel->getNbChambre() !== null) {
            $totalChambres = $hotel->getChambres()->count();
            if ($totalChambres >= $hotel->getNbChambre()) {
                $this->addFlash('error', 'Cannot create more rooms. Maximum limit reached.');
                return $this->redirectToRoute('app_chambre_index');
            }
        }
        
        $id = $chambre->getHotel()->getId();

        $entityManager->persist($chambre);
        $entityManager->flush();

        return $this->redirectToRoute('app_chambre_index', ['id' => $id], Response::HTTP_SEE_OTHER);
    }

    $id = $request->query->get('id');

    return $this->renderForm('chambre/new.html.twig', [
        'id' => $id,
        'chambre' => $chambre,
        'form' => $form,
    ]);
}

    #[Route('/{id}', name: 'app_chambre_show', methods: ['GET'])]
    public function show(Chambre $chambre): Response
    {
        return $this->render('chambre/show.html.twig', [
            'chambre' => $chambre,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_chambre_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Chambre $chambre, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(ChambreType::class, $chambre);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();
            $id = $chambre->getHotel()->getId();


            return $this->redirectToRoute('app_chambre_index', ['id' => $id], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('chambre/edit.html.twig', [
            'chambre' => $chambre,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_chambre_delete', methods: ['POST'])]
    public function delete(Request $request, Chambre $chambre, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$chambre->getId(), $request->request->get('_token'))) {
            $entityManager->remove($chambre);
            $entityManager->flush();
        }

        $id = $chambre->getHotel()->getId();


        return $this->redirectToRoute('app_chambre_index', ['id' => $id], Response::HTTP_SEE_OTHER);

    }
}
