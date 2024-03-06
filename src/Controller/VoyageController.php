<?php

namespace App\Controller;

use App\Entity\Voyage;
use App\Form\VoyageType;
use App\Repository\VoyageRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\String\Slugger\SluggerInterface;
use Knp\Component\Pager\PaginatorInterface;


#[Route('/voyage')]
class VoyageController extends AbstractController
{
    #[Route('/', name: 'app_voyage_index', methods: ['GET'])]
    public function index(VoyageRepository $voyageRepository,Request $request): Response
    {
        $searchQuery = $request->query->get('search');
        $voyage = [];
        if ($searchQuery) {
            $voyage = $voyageRepository->findByDestination
            ($searchQuery);
        } else {
            $voyage = $voyageRepository->findAll();
        }
        return $this->render('voyage/index.html.twig', [
            'voyages' => $voyageRepository->findAll(),
        ]);
    }

    #[Route('/clientF', name: 'app_voyage_clientF', methods: ['GET'])]
    public function clientF(VoyageRepository $voyageRepository ,PaginatorInterface $paginator ,Request $request ): Response
    {
        $queryBuilder = $voyageRepository->createQueryBuilder('v')
        ->orderBy('v.id', 'ASC');
        $pagination = $paginator->paginate(
            $queryBuilder,
            $request->query->getInt('page', 1),
            1
        );
        return $this->render('voyage/clientF.html.twig', [
            'pagination' => $pagination,

        ]);
    }



    #[Route('/new', name: 'app_voyage_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager, SluggerInterface $slugger): Response
    {
        $voyage = new Voyage();
        $form = $this->createForm(VoyageType::class, $voyage);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            $imageFile = $form->get('image')->getData();

            if ($imageFile) {
                $originalFilename = pathinfo($imageFile->getClientOriginalName(), PATHINFO_FILENAME);

                $safeFilename = $slugger->slug($originalFilename);
                $newFilename = $safeFilename.'-'.uniqid().'.'.$imageFile->guessExtension();


                $imageFile->move(
                    $this->getParameter('voyages_images_directory'),
                    $newFilename
                );


                $voyage->setImageName($newFilename);
            }

            $entityManager->persist($voyage);
            $entityManager->flush();

            return $this->redirectToRoute('app_voyage_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('voyage/new.html.twig', [
            'voyage' => $voyage,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_voyage_show', methods: ['GET'])]
    public function show(Voyage $voyage): Response
    {
        return $this->render('voyage/show.html.twig', [
            'voyage' => $voyage,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_voyage_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Voyage $voyage, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(VoyageType::class, $voyage);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            return $this->redirectToRoute('app_voyage_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('voyage/edit.html.twig', [
            'voyage' => $voyage,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_voyage_delete', methods: ['POST'])]
    public function delete(Request $request, Voyage $voyage, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$voyage->getId(), $request->request->get('_token'))) {
            $entityManager->remove($voyage);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_voyage_index', [], Response::HTTP_SEE_OTHER);
    }








}
