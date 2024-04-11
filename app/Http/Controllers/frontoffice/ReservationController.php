<?php

namespace App\Http\Controllers\frontoffice;

use App\Http\Controllers\Controller;
use App\Models\Lesson;
use App\Services\ReservationService;
use Illuminate\Http\Request;

class ReservationController extends Controller
{
    //
    public function reservation(string $id)
    {
        $lesson = Lesson::findOrFail($id);

        $user = auth()->user();
        if (ReservationService::alreadyReservedLesson($lesson->id)) {
            return back()->with('error', 'You have already reserved this lesson.');
        }

        if (ReservationService::AvalaibleSeats($lesson->id) == 0) {
            return back()->with('error', 'No available seats for this lesson.');
        }
        
        $lesson->users()->attach($user->id);
        return back()->with('success', 'Lesson reserved successfully.');
    }

    public function cancel(Lesson $lesson)
    {
        auth()->user()->lessons()->detach($lesson->id);
        return redirect()->back();
    }

}
