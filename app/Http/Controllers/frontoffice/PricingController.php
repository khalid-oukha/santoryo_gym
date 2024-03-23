<?php

namespace App\Http\Controllers\frontoffice;

use App\Http\Controllers\Controller;
use App\Models\Offer;
use Illuminate\Http\Request;

class PricingController extends Controller
{
    public function index()
    {
        $offers  = Offer::latest()->take(2)->get();
        return view('front.pricing',compact('offers'));
    }

}
