<?php

namespace App\Http\Controllers\frontoffice;

use App\Http\Controllers\Controller;
use App\Models\Lesson;
use Illuminate\Http\Request;

class ReservationController extends Controller
{
    //
    public function reservation(Lesson $lesson)
    {
        $user = auth()->user();
        $lesson->users()->attach($user->id);
    }

    

}
