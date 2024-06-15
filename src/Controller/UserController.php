<?php

namespace App\Controller;
use TCPDF;


use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\ResponseHeaderBag;

use App\Repository\UserRepository;
use App\Entity\User;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;
use Symfony\Component\Security\Csrf\TokenGenerator\TokenGeneratorInterface;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;
use Symfony\Component\Mime\Email;
use App\Form\ForgotPasswordType;
use App\Form\ResetPasswordType;
use App\Form\UserProfileType;
use App\Service\SendMailService;
use Doctrine\Persistence\ManagerRegistry;

class UserController extends AbstractController
{
    private $mailer;

    

        #[Route('/forgot-pass', name: 'app_jdida')]
        public function index(Request $request,ManagerRegistry $manager, UserRepository $userRepository,SendMailService $mailer, TokenGeneratorInterface  $tokenGenerator): Response
    {
        
        $form = $this->createForm(ForgotPasswordType::class);
        $form->handleRequest($request);
        dump($form);
        if($form->isSubmitted() && $form->isValid()) {
            $email = $form->get('email')->getData();

            $user = $userRepository->findOneBy(['email' => $email]);
            dump($user);

            if(!$user) {
                $this->addFlash('danger','cette adresse n\'existe pas');
                dump($user);
                //return $this->redirectToRoute("app_user");

            }
            $token = $tokenGenerator->generateToken();

            
                $user->setResetToken($token);
                $entitymanager=$manager->getManager();
                //$entityManger = $this->getDoctrine()->getManager();
                $entitymanager->persist($user);
                $entitymanager->flush();




            $url = $this->generateUrl('app_reset_password',array('token'=>$token),UrlGeneratorInterface::ABSOLUTE_URL);

            //$context = compact('url', 'user');
            
            //BUNDLE MAILER
            $message = (new Email())
                ->from('walahamdi0@gmail.com')
                ->to('walahamdi0@gmail.com')
                //->to($user->getEmail())
                ->subject("hello")
                ->text("hi")
                ->html("<p> Bonjour</p> unde demande de réinitialisation de mot de passe a été effectuée. Veuillez cliquer sur le lien suivant :".$url,
                "text/html");

           /* $mailer->send(
                'walahamdi0@gmail.com',
                $user->getEmail(),
                'Réinitialisation de mot de passe',
                'resetPassword',
                $context
            );*/
            //send mail
            //$mailer->send($message);
            $this->addFlash('message','E-mail  de réinitialisation du mp envoyé :');
            return $this->redirectToRoute("login");
        }

        return $this->render('back/user/forgotPassword.html.twig',['form'=>$form->createView()]);
    }

    #[Route('/reset/{token}', name: 'app_reset_password')]
    public function resetpassword(Request $request,ManagerRegistry $manager,string $token, UserPasswordHasherInterface  $passwordEncoder)
    {
        
        $user = $manager->getRepository(User::class)->findOneBy(['reset_token'=>$token]);

        if($user == null ) {
            $this->addFlash('danger','TOKEN INCONNU');
            return $this->redirectToRoute("app_jdida");

        }
        $form = $this->createForm(ResetPasswordType::class);
        $form->handleRequest($request);

        if($request->isMethod('POST')) {
            
            $user->setResetToken("");
            
            $user->setPassword($passwordEncoder->hashPassword(
                $user,
                $form->get('password')->getData()
            ));
            
            $entitymanager=$manager->getManager();
            $entitymanager->persist($user);
            $entitymanager->flush();

            $this->addFlash('message','Mot de passe mis à jour :');
            return $this->redirectToRoute("login");

        }
        else {
            return $this->render("back/user/resetPassword.html.twig",['token'=>$token, 'form'=>$form->createView()]);

        }
    }
    #[Route('/pdf', name: 'app_pdf')]
public function downloadPdf(Request $request, ManagerRegistry $entityManager)
{
    $users = $entityManager->getRepository(User::class)->findAll();

    $pdf = new TCPDF();

    $pdf->SetCreator('Your Application Name');
    $pdf->SetTitle('Users Information');
    $pdf->SetHeaderData('', 0, '', '', array(0, 0, 0), array(255, 255, 255));
    $pdf->setHeaderFont(Array('helvetica', '', 12));
    $pdf->setFooterFont(Array('helvetica', '', 10));
    $pdf->SetDefaultMonospacedFont('courier');
    $pdf->SetMargins(10, 10, 10);
    $pdf->SetAutoPageBreak(TRUE, 10);
    $pdf->SetFont('helvetica', '', 11);
    $pdf->AddPage();

    $headers = array('Email', 'First Name', 'Last Name', 'Roles');

    $pdf->SetFillColor(255, 255, 255);
    $pdf->SetTextColor(0, 0, 0);
    $pdf->SetDrawColor(128, 128, 128);
    $pdf->SetLineWidth(0.3);
    $pdf->SetFont('helvetica', 'B', 12);

    $pdf->Cell(60, 10, $headers[0], 1, 0, 'C', 1);
    $pdf->Cell(40, 10, $headers[1], 1, 0, 'C', 1);
    $pdf->Cell(40, 10, $headers[2], 1, 0, 'C', 1);
    $pdf->Cell(50, 10, $headers[3], 1, 1, 'C', 1); 

    $pdf->SetFillColor(240, 240, 240);
    $pdf->SetTextColor(0, 0, 0);
    $pdf->SetFont('helvetica', '', 11);

    foreach ($users as $user) {
        $emailWidth = 60;
        $pdf->Cell($emailWidth, 10, $user->getEmail(), 1, 0, 'C', 1);
        $pdf->Cell(40, 10, $user->getFirstName(), 1, 0, 'C', 1);
        $pdf->Cell(40, 10, $user->getLastName(), 1, 0, 'C', 1);
        $roles = implode(', ', $user->getRoles()); 
        $pdf->Cell(50, 10, $roles, 1, 1, 'C', 1); 
    }

   
    $response = new Response($pdf->Output('users.pdf', 'D'));

    $response->headers->set('Content-Type', 'application/pdf');

    return $response;
}



    
     
    #[Route('/download', name: 'app_download')]
    public function download(Request $request, ManagerRegistry $entityManager)
    {
        $users = $entityManager->getRepository(User::class)->findBy(['isVerified' => false]);
        
        $response = new Response();
    
        $response->headers->set('Content-Type', 'text/plain');
        $response->headers->set('Content-Disposition', $response->headers->makeDisposition(
            ResponseHeaderBag::DISPOSITION_ATTACHMENT,
            'users.txt'
        ));
    
        $text = '';
        foreach ($users as $user) {
            $text .= "Email: {$user->getEmail()}\n";
        }
    
        $response->setContent($text);
    
        return $response;
    }

    #[Route('/admin/profile/edit', name: 'profile_edit')]

    public function edit(Request $request, ManagerRegistry $manager): Response
    {
        $user = $this->getUser();

        $form = $this->createForm(UserProfileType::class, $user);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entitymanager=$manager->getManager();
            $entitymanager->persist($user);
            $entitymanager->flush();

            $this->addFlash('success', 'Your profile has been updated successfully.');

            return $this->redirectToRoute('admin_dashboard_index');
        }

        return $this->render('back/user/profile.html.twig', [
            'form' => $form->createView(),
        ]);
    }

}
