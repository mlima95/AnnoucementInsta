<?php


namespace App\Controller;

use App\Entity\Annoucement;
use App\Service\UserManager;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Validator\Tests\Fixtures\ToString;

class AnnoucementsController extends AbstractController
{
    private $userManager;
    public function __construct(UserManager $userManager)
    {
        $this->userManager=$userManager;
    }

    /**
     * @Route("/annoucements/{page}", name="annoucements",
     *     requirements={"page"="\d+"},
     *     defaults={"page"="1"})
     */
    public function list()
    {
        $annoucements = $this->userManager->findAnnouncements();



        // ...
        return $this->render('list.html.twig', [
            'controller_name' => 'AnnoucementsController',
            'ListAnnoucements' => $annoucements,
        ]);
    }

}