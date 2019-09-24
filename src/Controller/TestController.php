<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class TestController extends AbstractController
{
    /**
     * @Route("/annonce/test", name="test")
     */
    public function index()
    {

        $languages = [
        [
            'language' => 'Symfony',
            'version' => '4.3.4'
        ],[
                'language' => 'PHP',
                'version' => '7.3'
            ],[
                'language' => 'Node.js',
                'version' => '10.2'
            ],
            ];
            $dateTime= new \DateTime();

        return $this->render('test/index.html.twig', [
            'controller_name' => 'TestController',
            'Tableaulanguages' => $languages,
            'DateTime' => $dateTime,
        ]);
    }
}
