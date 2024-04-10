<?php

namespace App\Services;

use App\Models\Lesson;
use App\Models\Subscription;
use Illuminate\Support\Facades\Auth;

class ReservationService
{


    /**
     * Check if the authenticated user has an active subscription.
     *
     * @return bool
     */
    public static function alreadyReservedLesson(int $lesson_id): bool
    {
        if (!Auth::check()) {
            return false;
        }
        $user = auth()->user();

        $lesson = Lesson::findOrFail($lesson_id);

        $reserved = $lesson->users()->where('user_id', $user->id)->first();

        if ($reserved) {
            return true;
        } else {
            return false;
        }
    }
}
