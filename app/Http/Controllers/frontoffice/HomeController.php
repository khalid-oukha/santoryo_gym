<?php

namespace App\Http\Controllers\frontoffice;

use App\Http\Controllers\Controller;
use App\Models\Coach;
use App\Models\Lesson;
use App\Models\Subscription;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function index(){

         $coachs = Coach::latest()->take(3)->get();

         $lessons = Lesson::where('start_at', '>', now())
         ->where('status', 'planned')
         ->orderBy('start_at', 'desc')->take(3)->get();

         $userReservations = [];
         if (Auth::check()) {
             $user = auth()->user();
             $userReservations = $user->lessons()->pluck('id')->toArray();
         }
         return view('front.home',compact('coachs','lessons','userReservations'));

    }


}
