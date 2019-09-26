<?php

namespace App\Controller;

use App\Entity\Annoucement;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    /**
     * @Route("/", name="home")
     */
    public function index(): Response
    {
        $homeAnnoucement = $this->getDoctrine()
            ->getRepository(Annoucement::class)
            ->findLastAnnoucements(2);
        // dump($annoucements);die;

        return $this->render('/home.html.twig', [
            'controller_name' => 'HomeController',
            'HomeList' => $homeAnnoucement,
        ]);
    }

}