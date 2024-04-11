<?php

namespace App\Http\Controllers\lessons;

use App\Http\Controllers\Controller;
use App\Models\Lesson;
use App\Services\ReservationService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class lessonsListController extends Controller
{
    public function index()
    {

        $lessons = Lesson::where('start_at', '>', now())
        ->where('status', 'planned')
        ->orderBy('start_at', 'desc')->paginate("9");
        $userReservations = [];
        if (Auth::check()) {
            $user = auth()->user();
            $userReservations = $user->lessons()->pluck('id')->toArray();
        }
        return view('front.lessons',compact('lessons','userReservations'));
    }
}
