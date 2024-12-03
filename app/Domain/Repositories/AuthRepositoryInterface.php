<?php

namespace App\Domain\Repositories;

interface AuthRepositoryInterface
{
    public function login($username, $password);

    public function logout();

}

?>