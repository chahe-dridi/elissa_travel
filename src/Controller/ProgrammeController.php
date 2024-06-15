<?php

namespace App\Controller;
use App\Entity\Voyage;

use App\Entity\Programme;
use App\Form\ProgrammeType;
use App\Repository\ProgrammeRepository;
use Doctrine\ORM\EntityManagerInterface;
use Endroid\QrCode\Builder\Builder;
use Endroid\QrCode\Encoding\Encoding;
use Endroid\QrCode\ErrorCorrectionLevel;
use Endroid\QrCode\Label\Font\NotoSans;
use Endroid\QrCode\Label\LabelAlignment;
use Endroid\QrCode\RoundBlockSizeMode;
use Endroid\QrCode\Writer\PngWriter;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/programme')]
class ProgrammeController extends AbstractController
{
    #[Route('/', name: 'app_programme_index', methods: ['GET'])]
    public function index(ProgrammeRepository $programmeRepository): Response
    {
        return $this->render('programme/index.html.twig', [
            'programmes' => $programmeRepository->findAll(),
        ]);
    }

/*
    #[Route('/clientprog', name: 'app_programme_clientprog', methods: ['GET'])]
    public function clientprog(ProgrammeRepository $ProgrammeRepository): Response
    {
        return $this->render('programme/clientprog.html.twig', [
            'programme' => $ProgrammeRepository->findAll(),
        ]);
    }
*/
#[Route('/clientprog/{voyageId}', name: 'app_programme_clientprog', methods: ['GET'])]
public function clientprog(int $voyageId,ManagerRegistry $manager): Response
{
    $entityManager = $manager->getManager();

    // Retrieve the Voyage entity by its ID
    $voyage = $entityManager->getRepository(Voyage::class)->find($voyageId);

    // Check if the Voyage exists
    if (!$voyage) {
        throw $this->createNotFoundException('Voyage not found');
    }

    // Retrieve the associated programmes of the voyage
    $programmes = $voyage->getProgrammes();

    return $this->render('programme/clientprog.html.twig', [
        'programme' => $programmes,
    ]);
}



    #[Route('/new', name: 'app_programme_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $programme = new Programme();

        $form = $this->createForm(ProgrammeType::class, $programme);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $voyage = $programme->getVoyage();
                // Obtenez l'ID du voyage et affectez-le au programme
                $id = $request->query->get('voyageId');
                $voyage = $entityManager->getRepository(Voyage::class)->find($id);
                $programme->setVoyage($voyage);

                $entityManager->persist($programme);
                $entityManager->flush();

                return $this->redirectToRoute('app_programme_index', ['id' => $id], Response::HTTP_SEE_OTHER);
        }
        return $this->renderForm('programme/new.html.twig', [
            'programme' => $programme,
            'form' => $form,
        ]);
    }


    #[Route('/{id}', name: 'app_programme_show', methods: ['GET'])]
    public function show(Programme $programme): Response
    {
        return $this->render('programme/show.html.twig', [
            'programme' => $programme,
        ]);
    }


    #[Route('/{id}/edit', name: 'app_programme_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Programme $programme, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(ProgrammeType::class, $programme);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            return $this->redirectToRoute('app_programme_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('programme/edit.html.twig', [
            'programme' => $programme,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_programme_delete', methods: ['POST'])]
    public function delete(Request $request, Programme $programme, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$programme->getId(), $request->request->get('_token'))) {
            $entityManager->remove($programme);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_programme_index', [], Response::HTTP_SEE_OTHER);
    }

    #[Route('/generate/{id}', name: 'app_programme_generate_qr_code', methods: ['GET'])]
    public function generateQrCode(Request $request, EntityManagerInterface $entityManager): Response
    {
        $id = $request->attributes->get('id');
        $programme = $entityManager->getRepository(Programme::class)->find($id);

        $qrCode = Builder::create()
            ->writer(new PngWriter())
            ->writerOptions([])
            ->data("Programme details :\n - Description :"
                . $programme->getDescription() . "\n - Date debut :"
                . $programme->getDatedebut()->format('Y-m-d H:i:s') . "\n - Date Fin :"
                . $programme->getDatefin()->format('Y-m-d H:i:s') . "\n - Prix : "
                . $programme->getPrix())
            ->encoding(new Encoding('UTF-8'))
            ->errorCorrectionLevel(ErrorCorrectionLevel::High)
            ->size(300)
            ->margin(10)
            ->roundBlockSizeMode(RoundBlockSizeMode::Margin)
            ->logoPath(__DIR__ . '/../../public/assets/qr/qr.png')
            ->logoResizeToWidth(50)
            ->logoPunchoutBackground(true)
            ->labelText('Elissa Travel')
            ->labelFont(new NotoSans(20))
            ->labelAlignment(LabelAlignment::Center)
            ->validateResult(false)
            ->build();

        // Save it to a file
        $qrCode->saveToFile('../public/assets/qr/qrcode.png');

        // Generate a data URI to include image data inline (i.e. inside an <img> tag)
        $dataUri = $qrCode->getDataUri();

        // Render the QR code inside a div
        return $this->render('qrcode/qr_code_template.html.twig', [
            'qrCode' => $dataUri,
            'id' => $request->attributes->get('id')
        ]);
    }


}
