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
//    public function index()
//    {
//        $entityManager = $this->getDoctrine()->getManager();
//
//        $product = new Product();
//        $product->setName('Jacket');
//        $product->setPrice(250);
//        $product->setDescription('Levis Jacket');
//
//        $entityManager->persist($product);
//
//        $entityManager->flush();
//
//        return new Response('Saved new product with id '.$product->getId());
//
//        return $this->render('/add.html.twig', [
//            'controller_name' => 'AnnoucementsAddController',
//        ]);
//    }



}