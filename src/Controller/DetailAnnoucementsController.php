<?php


namespace App\Controller;


use App\Entity\Annoucement;
use App\Entity\User;
use App\Service\UserManager;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DetailAnnoucementsController extends AbstractController
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
     * @Route("/{_locale}/annoucements/detail/{id}", name="detail",
     *     requirements={"id"="[0-9]+","_locale"="fr|en"})
     */
    public function index(int $id)
    {

        $detailAnnoucement = $this->userManager->findid($id);

        return $this->render('/detail.html.twig', [
            'controller_name' => 'DetailAnnoucementsController',
            'ListDetail' => $detailAnnoucement,
        ]);
    }

}