<?php

namespace App\Http\Controllers\frontoffice;

use App\Http\Controllers\Controller;
use App\Models\Subscription;
use App\Services\SubscriptionService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    public function index()
    {
        $hasSubscription = SubscriptionService::hasSubscription();
        $reservations = $this->UserReservations();
        // dd($reservations);
        $subscriptions = auth()->user()->subscription()->with('offer')->get();
        $offer = $subscriptions->pluck('offer');
        return view('front.profile', compact('subscriptions', 'offer', 'hasSubscription', 'reservations'));
    }

    public function UserReservations()
    {
        return $reservations = auth()->user()->lessons()
        ->where('start_at', '>', now())
        ->get();

    }



}
