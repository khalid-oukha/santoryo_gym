<?php

namespace App\Http\Controllers\backoffice\subscription;

use App\Http\Controllers\Controller;
use App\Models\Subscription;
use Illuminate\Http\Request;

class PrintController extends Controller
{
    public function print(Subscription $subscription)
    {
        $subscription = Subscription::find($subscription->id);
        return view('admin.subscription.print', compact('subscription'));
    }
}
