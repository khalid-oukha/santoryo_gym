<?php

namespace App\Http\Controllers\frontoffice;

use App\Http\Controllers\Controller;
use App\Models\Coach;
use App\Models\Lesson;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){

         $coachs = Coach::latest()->take(3)->get();

         $lessons = Lesson::where('start_at', '>', now())
         ->where('status', 'planned')
         ->orderBy('start_at', 'desc')->take(3)->get();

         return view('front.home',compact('coachs','lessons'));
        
    }


}
