<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;
use App\Form\LoginFormType;
use Symfony\Component\Form\FormError;
use Symfony\Component\HttpFoundation\Request;


class SecurityController extends AbstractController
{

   
    #[Route('/connexion', name: 'login')]
public function login(AuthenticationUtils $authenticationUtils, Request $request): Response
{
    $form = $this->createForm(LoginFormType::class);
    $form->handleRequest($request);

    $error = $authenticationUtils->getLastAuthenticationError();
    $lastUsername = $authenticationUtils->getLastUsername();

    return $this->render('security/login.html.twig', [
        'last_username' => $lastUsername,
        'error' => $error,
        'form' => $form->createView(),
    ]);
}

    #[Route(path: '/deconnexion', name: 'logout')]
    public function logout(): void
    {
        throw new \LogicException('This method can be blank - it will be intercepted by the logout key on your firewall.');
    }
    /**
     * Check for role and redirect
     *
     * @Route("/connexion/succes", name="login_success")
     * 
     * @return Response
     */
    public function onLoginSuccess()
    {
        if ($this->isGranted('ROLE_ADMIN')) return $this->redirectToRoute('admin_dashboard_index');
        else return $this->redirectToRoute('home_index');
    }
    
}
