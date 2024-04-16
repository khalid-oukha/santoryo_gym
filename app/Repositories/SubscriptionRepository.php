<?php
namespace App\Repositories;
use App\Models\Subscription;
use App\Repositories\Interfaces\SubscriptionRepositoryInterface;

class SubscriptionRepository implements SubscriptionRepositoryInterface
{
    public function paginate($perPage = 10)
    {
        $subscription = Subscription::with(['user','offer' => function ($query) {
            $query->withTrashed();
        }])
        ->orderBy('status')
        ->latest()
        ->paginate($perPage);
        return $subscription;
    }

}
