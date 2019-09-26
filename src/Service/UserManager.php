<?php


namespace App\Service;


use App\DTO\TaskAnnoucements;
use App\Entity\Annoucement;
use App\Repository\AnnoucementRepository;
use Doctrine\Common\Persistence\ObjectManager;

class UserManager
{

    /**
     * @var AnnoucementRepository
     */
    private $annoucementRepository;
    /**
     * @var ObjectManager
     */
    private $objectManager;

    public function __construct(AnnoucementRepository $annoucementRepository, ObjectManager $objectManager)
    {

        $this->annoucementRepository = $annoucementRepository;
        $this->objectManager = $objectManager;
    }

    public function save(TaskAnnoucements $taskAnnoucement){

        $this->objectManager->persist(new Annoucement($taskAnnoucement));
        $this->objectManager->flush();
    }

    public function findAnnouncements(): array
    {
        return $this->annoucementRepository->findAnnoucements();
    }

    public function findid($id){
        return $this->annoucementRepository->findid($id);
    }

    public function findLastAnnouncements($limit): array
    {
        return $this->annoucementRepository->findLastAnnoucements($limit);
    }
}