<?php

namespace App\Services;

use App\Models\Subscription;
use Illuminate\Support\Facades\Auth;

class SubscriptionService
{


    /**
     * Check if the authenticated user has an active subscription.
     *
     * @return bool
     */
    public static function hasActiveSubscription(): bool
    {
        if (!Auth::check()) {
            return false;
        }
        $user = auth()->user();

        $subscription = Subscription::where('user_id', $user->id)
        ->where('status', 'active')
        ->whereDate('end_date', '>=', now()) // Ensure subscription end date is in the future
        ->first();

        if ($subscription) {
            return true;
        } else {
            return false;
        }
    }
}
