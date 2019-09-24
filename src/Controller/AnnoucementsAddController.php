<?php


namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;

class AnnoucementsAddController extends AbstractController
{
    /**
     * @Route("/annoucements/add", name="add",
     * methods={"GET","POST"})
     */
    public function index()
    {
        return $this->render('/add.html.twig', [
            'controller_name' => 'AnnoucementsAddController',
        ]);
    }



}