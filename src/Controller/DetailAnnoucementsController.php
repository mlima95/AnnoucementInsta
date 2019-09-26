<?php


namespace App\Controller;


use App\Entity\Annoucement;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DetailAnnoucementsController extends AbstractController
{
    /**
     * @Route("/annoucements/detail/{id}", name="detail",
     *     requirements={"id"="[0-9]+"})
     */
    public function index(int $id)
    {

//        $detailAnnoucement=[];
//
//
//        for($id; $id<$id;$id++) {
//            $detailAnnoucement[] = [
//                'id' => $id,
//                'title' => 'Espagne',
//                'content' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.',
//                'price' => $id + 56,
//                'createdDate' => new \DateTime()
//            ];
//        }

        $detailAnnoucement = $this->getDoctrine()
            ->getRepository(Annoucement::class)
            ->findid($id);

        return $this->render('/detail.html.twig', [
            'controller_name' => 'DetailAnnoucementsController',
            'ListDetail' => $detailAnnoucement,
        ]);
    }

}