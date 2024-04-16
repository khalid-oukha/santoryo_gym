<?php
namespace App\Repositories;
use App\Models\Category;
use App\Models\Subscription;
use App\Models\Lesson;
use App\Models\Offer;
use App\Models\Payment;
use App\Models\User;
use App\Repositories\Interfaces\StatisticsRepositoryInterface;

class StatisticsRepository implements StatisticsRepositoryInterface
{
    public function todaySubscribers()
    {
        $todaySubscribers = 0;
        return $todaySubscribers = Subscription::whereDate('created_at', today())->count();
    }

    public function todayRevenue()
    {
        $todayRevenue = 0;
        return $todayRevenue = Payment::whereDate('created_at', today())->sum('amount');
    }

    public function todayUsers()
    {
        $todayUsers = 0;
        return $todayUsers = User::whereDate('created_at', today())->count();
    }

    public function todayReservations()
    {
        $todayReservations = 0;
        return $todayReservations = Lesson::whereHas('Users', function ($query) {
            $query->whereDate('lesson_user.created_at', today());
        })->count();
    }

    public function totalSubscribers()
    {
        $totalSubscribers = 0;
        return $totalSubscribers = Subscription::count();
    }

    public function totalCategories()
    {
        $totalCategories = 0;
        return $totalCategories = Category::count();
    }

    public function totalUsers()
    {
        $totalUsers = 0;
        return $totalUsers = User::count();
    }

    public function totalActiveSubscribers()
    {
        $totalActiveSubscribers = 0;
        return $totalActiveSubscribers = Subscription::where('status', 'active')->count();
    }

    public function totalOffers()
    {
        $totalOffers = 0;
        return $totalOffers = Offer::count();
    }

    public function latestSubscribers()
    {

        return $latestSubscribers = Subscription::with(['offer' => function ($query) {
            $query->withTrashed(); // Include soft deleted offers
        }])
        ->latest()
        ->take(5)
        ->get();
    }
}
