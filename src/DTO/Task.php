<?php


namespace App\DTO;

use Symfony\Component\Validator\Constraints as Assert;

class Task
{

    /**
     * @Assert\NotBlank()
     * @Assert\Length(max = 100)
     */
    public $title;
    /** @Assert\NotNull() */
    public $content;
}