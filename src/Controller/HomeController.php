<?php

namespace App\Controller;

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
        $homeAnnoucement=[];

        for($i =0; $i<=1;$i++){
            $homeAnnoucement[]=[
                'id' => $i,
                'title' => 'Espagne',
                'content' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.',
                'price' => $i+56,
                'createdDate' => new \DateTime()
            ];
    }

        return $this->render('/home.html.twig', [
            'controller_name' => 'HomeController',
            'HomeList' => $homeAnnoucement,
        ]);
    }

}