<?php
namespace App\Controller;

use App\Model\User;

class UserController
{
    protected $user;
    public function __construct(User $user)
    {
        $this->user = $user;
    }

    public function index()
    {
        $users = $this->user->getAll('users');
        var_dump($users);
    }
}