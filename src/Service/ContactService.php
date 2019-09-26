<?php


namespace App\Service;


use Symfony\Component\Routing\Generator\UrlGeneratorInterface;

class ContactService
{
    /**
     * @var UrlGeneratorInterface
     */

    private $sender;

    private $mailer;


    public function __construct(\Swift_Mailer $mailer,string $sender)
    {

        $this->sender=$sender;
        $this->mailer = $mailer;
    }


//    public function send(string $message): void {
//
//        $this->mailer->send(
//            (new \Swift_Message($message))
//            ->setFrom($this->sender)
//            ->setTo('milan.limapro@gmail.com')
//            ->setBody($message)
//        );
//    }
}