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
     * @Route("/{_locale}/annoucements/{page}", name="annoucements",
     *     requirements={"page"="\d+","_locale"="fr|en"},
     *     defaults={"page"="1"})
     */
    public function list()
    {
        $annoucements = $this->userManager->findLastAnnouncements(10);



        // ...
        return $this->render('list.html.twig', [
            'controller_name' => 'AnnoucementsController',
            'ListAnnoucements' => $annoucements,
        ]);
    }

}