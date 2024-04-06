<?php

namespace App\Http\Controllers\frontoffice;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function index()
    {
        $subscriptions = auth()->user()->subscription()->with('offer')->get();
        $offer = $subscriptions->pluck('offer');
        // dd($offer);
        return view('front.profile', compact('subscriptions', 'offer'));
    }
}
