<?php

namespace App\Controller;
use App\Entity\voyage;
use App\Repository\VoyageRepository;
use App\Entity\Programme;
use App\Form\ProgrammeType;
use App\Repository\ProgrammeRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/programme')]
class ProgrammeController extends AbstractController
{
    #[Route('/', name: 'app_programme_index', methods: ['GET'])]
    public function index(ProgrammeRepository $programmeRepository): Response
    {
        return $this->render('programme/index.html.twig', [
            'programmes' => $programmeRepository->findAll(),
        ]);
    }


    #[Route('/clientprog', name: 'app_programme_clientprog', methods: ['GET'])]
    public function clientprog(ProgrammeRepository $ProgrammeRepository): Response
    {
        return $this->render('programme/clientprog.html.twig', [
            'programme' => $ProgrammeRepository->findAll(),
        ]);
    }



    #[Route('/new/{voyageId}', name: 'app_programme_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager, VoyageRepository $voyageRepository, int $voyageId): Response
    {
        $voyage = $voyageRepository->find($voyageId);

        if (!$voyage) {
            
            return $this->redirectToRoute('app_voyage_index'); 
        }

        $programme = new Programme();
        
        $programme->setVoyage($voyage);

        $form = $this->createForm(ProgrammeType::class, $programme);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($programme);
            $entityManager->flush();

            
            
            return $this->redirectToRoute('app_programme_index', ['id' => $voyageId]);

        }

        
        return $this->renderForm('programme/new.html.twig', [
            'programme' => $programme,
            'form' => $form,
        ]);
    }
    


    #[Route('/{id}', name: 'app_programme_show', methods: ['GET'])]
    public function show(Programme $programme): Response
    {
        return $this->render('programme/show.html.twig', [
            'programme' => $programme,
        ]);
    }



  


    #[Route('/{id}/edit', name: 'app_programme_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Programme $programme, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(ProgrammeType::class, $programme);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            return $this->redirectToRoute('app_programme_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('programme/edit.html.twig', [
            'programme' => $programme,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_programme_delete', methods: ['POST'])]
    public function delete(Request $request, Programme $programme, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$programme->getId(), $request->request->get('_token'))) {
            $entityManager->remove($programme);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_programme_index', [], Response::HTTP_SEE_OTHER);
    }

   
}