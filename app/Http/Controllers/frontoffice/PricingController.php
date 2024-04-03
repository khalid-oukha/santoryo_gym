<?php

namespace App\Http\Controllers\frontoffice;
use App\Services\SubscriptionService;
use App\Http\Controllers\Controller;
use App\Models\Offer;
use Illuminate\Http\Request;

class PricingController extends Controller
{
    protected $subscriptionService;
    public function __construct(SubscriptionService $subscriptionService)
    {
        $this->subscriptionService = $subscriptionService;
    }
    public function index()
    {
        $hasActiveSubscription = $this->subscriptionService->hasActiveSubscription();
        $offers  = Offer::latest()->take(2)->get();
        return view('front.pricing',compact('offers','hasActiveSubscription'));
    }

}
