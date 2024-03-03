<?php

namespace App\Controller;

use App\Entity\Volclass;
use App\Form\VolclassType;
use App\Repository\VolclassRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;



use Knp\Component\Pager\PaginatorInterface;



#[Route('/volclass')]
class VolclassController extends AbstractController
{
   /* #[Route('/', name: 'app_volclass_index', methods: ['GET'])]
    public function index(VolclassRepository $volclassRepository): Response
    {
        return $this->render('volclass/index.html.twig', [
            'volclasses' => $volclassRepository->findAll(),
        ]);
    }

*/

#[Route('/', name: 'app_volclass_index', methods: ['GET'])]
public function index(VolclassRepository $volclassRepository, PaginatorInterface $paginator, Request $request): Response
{
    $query = $volclassRepository->createQueryBuilder('v')
        ->getQuery();

    $pagination = $paginator->paginate(
        $query, // Query to paginate
        $request->query->getInt('page', 1), // Page number
        10 // Limit per page
    );

    return $this->render('volclass/index.html.twig', [
        'volclasses' => $pagination,
    ]);
}





    #[Route('/new', name: 'app_volclass_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $volclass = new Volclass();
        $form = $this->createForm(VolclassType::class, $volclass);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($volclass);
            $entityManager->flush();

            return $this->redirectToRoute('app_volclass_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('volclass/new.html.twig', [
            'volclass' => $volclass,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_volclass_show', methods: ['GET'])]
    public function show(Volclass $volclass): Response
    {
        return $this->render('volclass/show.html.twig', [
            'volclass' => $volclass,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_volclass_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Volclass $volclass, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(VolclassType::class, $volclass);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            return $this->redirectToRoute('app_volclass_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('volclass/edit.html.twig', [
            'volclass' => $volclass,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_volclass_delete', methods: ['POST'])]
    public function delete(Request $request, Volclass $volclass, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$volclass->getId(), $request->request->get('_token'))) {
            $entityManager->remove($volclass);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_volclass_index', [], Response::HTTP_SEE_OTHER);
    }
}
