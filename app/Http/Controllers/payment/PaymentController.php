<?php

namespace App\Http\Controllers\payment;

use App\Http\Controllers\Controller;
use App\Models\Offer;
use App\Models\Payment;
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

        Stripe::setApiKey(env('STRIPE_SECRET_KEY'));
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
                    'unit_amount' => $offer->price * 100,
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

        $offerId = IlluminateSession::get('offer_id');
        $userId = auth()->id();
        $offer = Offer::findOrFail($offerId);
        $endDate = now()->addMonths($offer->months_valid);


        Subscription::create([
            'offer_id' => $offerId,
            'user_id' => $userId,
            'start_date' => now(),
            'end_date' => $endDate,
            'status' => 'active'
        ]);

        Payment::create([
            'user_id' => $userId,
            'offer_id' => $offerId,
            'payment_method' => 'stripe',
            'amount' => $offer->price
        ]);

        return view('success');
    }
}
