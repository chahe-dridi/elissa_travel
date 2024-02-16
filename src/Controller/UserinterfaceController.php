<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class UserinterfaceController extends AbstractController
{
    #[Route('/userinterface', name: 'app_userinterface')]
    public function index(): Response
    {
        return $this->render('userinterface/user_interface.html.twig', [
            'controller_name' => 'UserinterfaceController',
        ]);
    }
}
