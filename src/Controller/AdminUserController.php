<?php

namespace App\Controller;

use App\Entity\User;
use App\Form\UserType;
use App\Repository\UserRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Form\UserEditType;
use App\Form\UserAddType;
use Doctrine\ORM\EntityManagerInterface;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;
use App\Form\UserSearchType;




#[IsGranted('ROLE_ADMIN')]
#[Route('/admin/utilisateur')]
class AdminUserController extends AbstractController
{/*
    #[Route('/', name: 'admin_user_index', methods: ['GET'])]
    public function index(UserRepository $userRepository): Response
    {
        return $this->render('back/user/index.html.twig', [
            'users' => $userRepository->findAll(),
        ]);
    }
    */
    #[Route('/', name: 'admin_user_index')]
    public function index(Request $request,UserRepository $userRepository): Response{
        $form = $this->createForm(UserSearchType::class);
        $form->handleRequest($request);
    
        $users = $userRepository->findAll();
        if ($form->isSubmitted() && $form->isValid()) {
            $data = $form->getData();
            $users = $userRepository->searchUsers($data['searchTerm']);
            if (empty($users)) {
                $message = 'No users found with the given search criteria.';
            }
        }
    
        return $this->render('back/user/index.html.twig', [
            'form' => $form->createView(),
            'users' => $users,
        ]);
    }

    
    #[Route('/status/{id}', name: 'Status')]
    public function DisableOrEnableUser(ManagerRegistry $doctrine, $id): Response
    {
        $em = $doctrine->getManager();
        $repo = $doctrine->getRepository(User::class);
        $user = $repo->find($id);
    
        if ($user) {
            dump('Original Status: ' . ($user->isVerified() ? 'Enabled' : 'Disabled'));
    
            // Toggle the status
            $user->setIsVerified(!$user->isVerified());
    
            dump('New Status: ' . ($user->isVerified() ? 'Enabled' : 'Disabled'));
    
            $em->persist($user);
            $em->flush();
    
            dump("Status changed successfully");
        } else {
            dump("User not found with ID: " . $id);
        }
        $em->persist($user);
        $em->flush();
    
        return $this->redirectToRoute('admin_user_index');
    }

    #[Route('/add', name: 'admin_user_add', methods: ['GET', 'POST'])]
    public function add(Request $request, UserRepository $userRepository,UserPasswordEncoderInterface $encoder): Response
    {
        $user = new User();
        $form = $this->createForm(UserAddType::class, $user);
        $form->handleRequest($request);
        $user->setResetToken(" ");

        if ($form->isSubmitted() && $form->isValid()) {
            $user->setPassword($encoder->encodePassword($user, $form->get('password')->getData()));
            // lena try catch
            $user->setRoles(["ROLE_USER"]);
            $user->setIsVerified(true);
            $userRepository->save($user, true);

            return $this->redirectToRoute('admin_user_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('back/user/add.html.twig', [
            'user' => $user,
            'form' => $form
        ]);
    }

    #[Route('/{id}', name: 'admin_user_show', methods: ['GET'])]
    public function show(User $user): Response
    {
        return $this->render('back/user/show.html.twig', [
            'user' => $user,
        ]);
    }

    #[Route('/{id}/edit', name: 'admin_user_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, User $user, UserRepository $userRepository): Response
    {
        $form = $this->createForm(UserEditType::class, $user);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            // Update roles
            $user->setRoles($form->get('roles')->getData());

            $userRepository->save($user, true);

            return $this->redirectToRoute('admin_user_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('back/user/edit.html.twig', [
            'user' => $user,
            'form' => $form,
        ]);
    }

    /**
     * Delete user
     *
     * @Route("{id}/suppression", name="admin_user_delete")
     * 
     * @param User $user
     * @return Response
     */
    public function delete(User $user,EntityManagerInterface $entityManager)
    {
        // Check user role and redirect if is admin
        if($user->getRoleTitle() == "Administrateur"){
            $this->addFlash(
                'danger',
                "Vous ne pouvez pas supprimer l'utilisateur <strong>{$user->getFullName()}</strong>."
            );

            return $this->redirectToRoute('admin_user_index');
        }

       $entityManager->remove($user);
       $entityManager->flush();

        $this->addFlash(
            'success',
            "L'utilisateur <strong>{$user->getFullName()}</strong> a bien était supprimé !"
        );

        return $this->redirectToRoute('admin_user_index');
    }
}
