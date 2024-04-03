<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Offer;
use App\Models\Subscription;
use Illuminate\Http\Request;
use Stripe\Checkout\Session;
use Stripe\Stripe;
use Illuminate\Support\Facades\Session as IlluminateSession;

class PaymentController extends Controller
{
    //
    public function pay(Request $request)
    {

        Stripe::setApiKey(env('STRIPE_SECRET'));
        $offer = Offer::findOrFail($request->offer_id);
        // Store the offer ID in the session
        IlluminateSession::put('offer_id', $offer->id);
        $checkout_session = Session::create([
            'line_items' => [[
                'price_data' => [
                    'currency' => 'usd',
                    'product_data' => [
                        'name' => $offer->title,
                    ],
                    'unit_amount' => $offer->price * 10,
                ],
                'quantity' => 1,
            ]],
            'mode' => 'payment',
            'success_url' => route('pay.success')
        ]);

        return redirect($checkout_session->url);
    }

    public function success()
    {
        // Retrieve offer ID from the session or request data
        // $offerId = $request->session()->get('offer_id');
        $offerId = IlluminateSession::get('offer_id');
        // dd($offerId);
        // Retrieve user ID from the authenticated user
        $userId = auth()->id();

        // Retrieve offer details from the database
        $offer = Offer::findOrFail($offerId);

        // Calculate end date based on offer validity
        $endDate = now()->addMonths($offer->months_valid);

        // Create a new subscription record
        Subscription::create([
            'offer_id' => $offerId,
            'user_id' => $userId,
            'start_date' => now(),
            'end_date' => $endDate,
            'status' => 'active'
        ]);

        // Flash success message

        return redirect()->route('home');
    }
}
