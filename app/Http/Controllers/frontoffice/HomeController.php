<?php

namespace App\Http\Controllers\frontoffice;

use App\Http\Controllers\Controller;
use App\Models\Coach;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){

         $coachs = Coach::latest()->take(3)->get();
        return view('front.home',compact('coachs'));
        
    }


}
