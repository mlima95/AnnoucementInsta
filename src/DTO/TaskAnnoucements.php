<?php


namespace App\DTO;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Validator\Constraints as Assert;

class TaskAnnoucements
{

    /**
     * @Assert\NotBlank(message="annoucements.form.title")
     */
    public $title;
    /**
     * @Assert\Type(
     *     type="double",
     *     message="annoucements.form.price."
     * )
     */
    public $price;
    /**
     * @Assert\NotBlank(message="annoucements.form.content")
     */
    public $content;
}