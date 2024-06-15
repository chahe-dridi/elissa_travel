<?php

namespace App\Controller;

use App\Entity\Voyage;
use App\Form\VoyageSearchType;
use App\Form\VoyageType;
use App\Repository\VoyageRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\String\Slugger\SluggerInterface;
use Knp\Component\Pager\PaginatorInterface;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;


#[Route('/voyage')]
class VoyageController extends AbstractController
{
    #[IsGranted('ROLE_ADMIN')]
    #[Route('/', name: 'app_voyage_index')]
    public function index(VoyageRepository $voyageRepository,Request $request): Response
    {
        $form = $this->createForm(VoyageSearchType::class);
        $form->handleRequest($request);
        dump($form);

        $voyages =$voyageRepository->findAll();
        if ($form->isSubmitted() && $form->isValid()) {
            $data = $form->getData();
            $voyages = $voyageRepository->search($data['searchTerm']);
            dump($voyages);
            if (empty($voyages)) {
                $message = 'No voyages found with the given search criteria.';
            }
        }
        return $this->render('voyage/index.html.twig', [
            'form' => $form->createView(),
            'voyages' =>  $voyages, 
        ]);
    }

    #[IsGranted('ROLE_USER')]
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



    #[IsGranted('ROLE_ADMIN')]
    #[Route('/new', name: 'app_voyage_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager, SluggerInterface $slugger): Response
    {
        $voyage = new Voyage();
        $form = $this->createForm(VoyageType::class, $voyage);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

           // $imageFile = $form->get('image')->getData();

           // if ($imageFile) {
                //$originalFilename = pathinfo($imageFile->getClientOriginalName(), PATHINFO_FILENAME);

                //$safeFilename = $slugger->slug($originalFilename);
                //$newFilename = $safeFilename.'-'.uniqid().'.'.$imageFile->guessExtension();


                //$imageFile->move(
                   // $this->getParameter('voyages_images_directory'),
                    //$newFilename
                //);


                //$voyage->setImageName($newFilename);
            //}

            $entityManager->persist($voyage);
            $entityManager->flush();

            return $this->redirectToRoute('app_voyage_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('voyage/new.html.twig', [
            'voyage' => $voyage,
            'form' => $form,
        ]);
    }

    #[IsGranted('ROLE_ADMIN')]
    #[Route('/{id}', name: 'app_voyage_show', methods: ['GET'])]
    public function show(Voyage $voyage): Response
    {
        return $this->render('voyage/show.html.twig', [
            'voyage' => $voyage,
        ]);
    }

    #[IsGranted('ROLE_ADMIN')]
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

    #[IsGranted('ROLE_ADMIN')]
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
