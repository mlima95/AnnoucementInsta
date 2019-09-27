<?php

namespace App\Controller;

use App\Entity\Annoucement;
use App\Service\UserManager;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
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
     * @Route("/{_locale}", name="home",
     *     requirements={"_locale"="fr|en"})
     */
    public function index()
    {
        $homeAnnoucement = $this->userManager->findLastAnnouncements(2);
        // dump($annoucements);die;

        return $this->render('/home.html.twig', [
            'controller_name' => 'HomeController',
            'HomeList' => $homeAnnoucement,
        ]);
    }

}