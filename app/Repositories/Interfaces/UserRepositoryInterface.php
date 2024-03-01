<?php

namespace App\Repositories\Interfaces;

interface UserRepositoryInterface
{
    public function attemptLogin(array $credentials);
    public function logout();
    public function createUser(array $credentials);
}