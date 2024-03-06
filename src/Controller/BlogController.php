<?php

namespace App\Controller;

use App\Entity\Blog;
use App\Entity\BlogLike;
use App\Entity\User;
use App\Entity\Voyage;
use App\Form\BlogType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/blog')]
class BlogController extends AbstractController
{
    #[Route('/blog/new', name: 'blog_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $blog = new Blog();
        $blog->setCreatedAt(new \DateTimeImmutable());

        $form = $this->createForm(BlogType::class, $blog);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($blog);
            $entityManager->flush();

            return $this->redirectToRoute('front_blog_show', ['id' => $blog->getId()]);
        }

        return $this->render('blog/new.html.twig', [
            'blog' => $blog,
            'form' => $form->createView(),
        ]);
    }

    #[Route('/show/{id}', name: 'front_blog_show', methods: ['GET'])]
    public function show(EntityManagerInterface $entityManager, Request $request): Response
    {
        $user = $entityManager->getRepository(User::class)->find(1);
        $voyageRepository = $entityManager->getRepository(Voyage::class);
        $blog = $entityManager->getRepository(Blog::class)->find($request->attributes->get('id'));
        $voyage = $voyageRepository->findOneBy(['blog' => $blog]);
        // Vérifier si le blog est associé à un voyage
        $isBlogInVoyage = $voyage !== null;

        if ($isBlogInVoyage) {
            // Redirection vers la route app_voyage_index
            return $this->redirectToRoute('blog_new');
        }

        $isBlogAlreadyLiked = $entityManager->getRepository(BlogLike::class)->countByBlogAndUser($blog, $user);
        $count = $entityManager->getRepository(BlogLike::class)->countBlog($blog);

        return $this->render('blog/show.html.twig', [
            'count' => $count,
            'blog' => $blog,
            'isBlogAlreadyLiked' => $isBlogAlreadyLiked
        ]);
    }

    #[Route('/like-unlike', name: 'front_blog_like_unlike')]
    public function like(Request $request, EntityManagerInterface $entityManager): JsonResponse
    {
        if ($request->getMethod() === 'POST' && $request->isXmlHttpRequest()) {
            $blogId = $request->request->get('entityId');
            $blog = $entityManager->getRepository(Blog::class)->findOneBy(array('id' => $blogId));
            if (!$blog) {
                return new JsonResponse("Blog not found");
            }
            $submittedToken = $request->get('csrfToken');
            if ($this->isCsrfTokenValid('blog' . $blog->getId(), $submittedToken)) {

                $user = $entityManager->getRepository(User::class)->find(1);
                $blogAlreadyLiked = $entityManager->getRepository(BlogLike::class)->findOneBy(
                    array('user' => $user, 'blog' => $blog)
                );
                if ($blogAlreadyLiked) {
                    $entityManager->remove($blogAlreadyLiked);
                    $entityManager->flush();
                    return new JsonResponse("already liked");
                } else {
                    $like = new BlogLike();
                    $like->setUser($user);
                    $like->setBlog($blog);
                    $entityManager->persist($like);
                    $entityManager->flush();
                }
            }
        }
        return new JsonResponse("like");
    }

}