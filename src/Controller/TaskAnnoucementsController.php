<?php


namespace App\Controller;



use App\DTO\TaskAnnoucements;
use App\Entity\Annoucement;
use App\Form\TaskAnnoucementsType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class TaskAnnoucementsController extends AbstractController
{

    /**
     * @Route("/annoucements/taskannoucements", name="taskannoucements")
     */

    public function index(Request $request){
        $taskAnnoucement = new TaskAnnoucements();
        $form=$this->createForm(TaskAnnoucementsType::class,$taskAnnoucement);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
             $entityManager = $this->getDoctrine()->getManager();
            $annoucement= new Annoucement($taskAnnoucement);
             $entityManager->persist($annoucement);
             $entityManager->flush();

            return $this->redirectToRoute('home');
        }

        return $this->render('form.html.twig', [
            'form' => $form->createView(),
        ]);

    }
}