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
        $subscriptions = auth()->user()->subscription()->with(['offer' => function ($query) {
            $query->withTrashed();
        }])->get();
        $offer = $subscriptions->pluck('offer');
        $features = $offer->pluck('features')->flatten();
        return view('front.profile', compact('subscriptions', 'offer', 'hasSubscription', 'reservations', 'features'));
    }



    public function UserReservations()
    {
        return $reservations = auth()->user()->lessons()
        ->where('start_at', '>', now())
        ->get();

    }



}
