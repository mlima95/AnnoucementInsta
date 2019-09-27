<?php


namespace App\Service;


use App\Entity\User;
use Doctrine\Common\Persistence\ObjectManager;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;

class RegistrationManager
{

    /**
     * @var UserPasswordEncoderInterface
     */
    private $userPasswordEncoder;
    /**
     * @var ObjectManager
     */
    private $objectManager;

    public function __construct(UserPasswordEncoderInterface $userPasswordEncoder,ObjectManager $objectManager)
    {
        $this->userPasswordEncoder = $userPasswordEncoder;
        $this->objectManager = $objectManager;
    }

    public function save(User $user)
    {
        $encodePassword=$this->userPasswordEncoder->encodePassword(
            $user,
            $user->getPassword()
        );

        $user->setPassword($encodePassword);

        $this->objectManager->persist($user);
        $this->objectManager->flush();

    }

}