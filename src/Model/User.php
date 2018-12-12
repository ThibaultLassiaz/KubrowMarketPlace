<?php

namespace App\Model;

use Symfony\Component\Validator\Constraints as Assert;

/**
 * @UniqueEntity(fields={"email"}, message="It looks like your already have an account!")
 */
class User
{
    /**
     * @var string
     * @Assert\NotNull(message="Please enter a name");
     */
    public $username;

    /**
     * @var string
     * @Assert\NotNull(message="Please enter a password");
     */
    public $password;

    /**
     * @var string
     * @Assert\NotNull(message="Please enter your email");
     */
    public $email;
}
