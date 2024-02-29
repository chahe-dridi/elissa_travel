<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class FrontController extends AbstractController
{
    #[Route('/front', name: 'app_front')]
    public function index(): Response
    {
        return $this->render('nav_user.html.twig', [
            'controller_name' => 'FrontController',
        ]);
    }
    #[Route('/register', name: 'register_front')]
    public function register(): Response
    {
        return $this->render('back/register.html.twig', [
            'controller_name' => 'FrontController',
        ]);

    }

    #[Route('/login', name: 'login_front')]
    public function login(): Response
    {
        return $this->render('back/login.html.twig', [
            'controller_name' => 'FrontController',
        ]);

    }

}
