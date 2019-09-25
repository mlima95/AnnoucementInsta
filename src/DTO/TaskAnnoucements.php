<?php


namespace App\DTO;

use Symfony\Component\Validator\Constraints as Assert;

class TaskAnnoucements
{

    /**
     * @Assert\NotBlank()
     */
    public $title;
    /**
     * @Assert\Type(
     *     type="integer",
     *     message="The value {{ value }} is not a valid {{ type }}."
     * )
     */
    public $price;
    /**
     * @Assert\NotBlank()
     */
    public $content;
}