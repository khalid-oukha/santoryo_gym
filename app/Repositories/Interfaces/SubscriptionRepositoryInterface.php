<?php
namespace App\Repositories\Interfaces;

interface SubscriptionRepositoryInterface
{
    public function paginate($perPage = 10);

}
