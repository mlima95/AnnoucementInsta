<?php


namespace App\Controller;



use App\DTO\TaskAnnoucements;
use App\Entity\Annoucement;
use App\Entity\User;
use App\Form\TaskAnnoucementsType;
use App\Service\UserManager;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class TaskAnnoucementsController extends AbstractController
{
    /**
     * @var UserManager
     */
    private $userManager;

    public function __construct(UserManager $userManager)
    {

        $this->userManager = $userManager;
    }

    /**
     * @Route("/annoucements/taskannoucements", name="taskannoucements")
     */

    public function index(Request $request){
        $taskAnnoucement = new TaskAnnoucements();
        $form=$this->createForm(TaskAnnoucementsType::class,$taskAnnoucement);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->userManager->save($taskAnnoucement);
            return $this->redirectToRoute('home');
        }

        return $this->render('form.html.twig', [
            'form' => $form->createView(),
        ]);

    }
}