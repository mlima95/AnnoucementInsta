<?php


namespace App\Controller;

use App\Entity\Annoucement;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Validator\Tests\Fixtures\ToString;

class AnnoucementsController extends AbstractController
{
    /**
     * @Route("/annoucements/{page}", name="annoucements",
     *     requirements={"page"="\d+"},
     *     defaults={"page"="1"})
     */
    public function index(int $page)
    {
        $annoucements = [
            [
            'id' => 1,
            'title' => 'Espagne',
            'content' => 'voyage',
            'price' => '70 $',
             'createdDate' => new \DateTime()
        ],
            [
                'id' => 2,
                'title' => 'Portugal',
                'content' => 'voyage',
                'price' => '64 $',
                'createdDate' => new \DateTime()
            ],
            [
                'id' => 3,
                'title' => 'France',
                'content' => 'voyage',
                'price' => '30 $',
                'createdDate' => new \DateTime()
            ],
            [
                'id' => 4,
                'title' => 'Etats Unis',
                'content' => 'voyage',
                'price' => '50 $',
                'createdDate' => new \DateTime()
            ],
            [
                'id' => 5,
                'title' => 'Royaume Uni',
                'content' => 'voyage',
                'price' => '330 $',
                'createdDate' => new \DateTime()
            ],
            [
                'id' => 6,
                'title' => 'Chili',
                'content' => 'voyage',
                'price' => '95 $',
                'createdDate' => new \DateTime()
            ],
            [
                'id' => 7,
                'title' => 'Australie',
                'content' => 'voyage',
                'price' => '42 $',
                'createdDate' => new \DateTime()
            ],
            [
                'id' => 8,
                'title' => 'Canada',
                'content' => 'voyage',
                'price' => '230 $',
                'createdDate' => new \DateTime()
            ],
            [
                'id' => 9,
                'title' => 'Mexique',
                'content' => 'voyage',
                'price' => '88 $',
                'createdDate' => new \DateTime()
            ],
            [
                'id' => 10,
                'title' => 'Bresil',
                'content' => 'voyage',
                'price' => '65 $',
                'createdDate' => new \DateTime()
            ],
        ];


        return $this->render('/list.html.twig', [
            'controller_name' => 'AnnoucementsController',
            'ListAnnoucements' => $annoucements,
        ]);
    }


    /**
     * @Route("/annoucements/{page}", name="annoucements",
     *     requirements={"page"="\d+"},
     *     defaults={"page"="1"})
     */
    public function list()
    {
        $annoucements = $this->getDoctrine()
            ->getRepository(Annoucement::class)
            ->findAnnoucements();
       // dump($annoucements);die;


        // ...
        return $this->render('list.html.twig', [
            'controller_name' => 'AnnoucementsController',
            'ListAnnoucements' => $annoucements,
        ]);
    }

}