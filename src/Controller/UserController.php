<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use App\Repository\UserRepository;
use App\Entity\User;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;
use Symfony\Component\Security\Csrf\TokenGenerator\TokenGeneratorInterface;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;
use Symfony\Component\Mime\Email;
use App\Form\ForgotPasswordType;
use App\Form\ResetPasswordType;
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
/*

    #[Route('/users/pdf', name: 'users_pdf')]
public function generatePdf(Request $request, UserRepository $userRepository, FormBuilderInterface $formBuilder): Response
{
    // Create a form
    $form = $formBuilder->create(FormType::class)
        ->add('username', TextType::class)
        ->add('submit', SubmitType::class, ['label' => 'Submit'])
        ->getForm();

    // Handle form submission
    $form->handleRequest($request);

    // Fetch users based on search term if form is submitted
    if ($form->isSubmitted() && $form->isValid()) {
        $searchTerm = $form->get('searchTerm')->getData();
        $users = $userRepository->searchUsers($searchTerm);
    } else {
        // If form is not submitted or invalid, fetch all users
        $users = $userRepository->findAll();
    }

    // Render the users_pdf.html.twig template, passing the form and users data
    return $this->render('user/users_pdf.html.twig', [
        'form' => $form->createView(),
        'users' => $users,
    ]);
}

*/



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
     


}
