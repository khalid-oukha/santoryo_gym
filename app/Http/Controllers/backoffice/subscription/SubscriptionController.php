<?php

namespace App\Http\Controllers\backoffice\subscription;

use App\Http\Controllers\Controller;
use App\Repositories\Interfaces\SubscriptionRepositoryInterface;
use Illuminate\Http\Request;

class SubscriptionController extends Controller
{

    //
    protected $subscriptionRepository;

    public function __construct(SubscriptionRepositoryInterface $subscriptionRepository)
    {
        $this->subscriptionRepository = $subscriptionRepository;
    }
    public function index()
    {
        $subscriptions = $this->subscriptionRepository->paginate(10);
        return view('admin.subscription.index', compact('subscriptions'));
    }


}
