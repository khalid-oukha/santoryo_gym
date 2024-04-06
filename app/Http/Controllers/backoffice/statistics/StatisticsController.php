<?php

namespace App\Http\Controllers\backoffice\statistics;

use App\Http\Controllers\Controller;
use App\Models\Lesson;
use App\Models\Payment;
use App\Models\Subscription;
use App\Models\User;
use Illuminate\Http\Request;

class StatisticsController extends Controller
{

    public function index()
    {
        $todaySubscribers = $this->todaySubscribers();
        $todayRevenue = $this->todayRevenue();
        $todayUsers = $this->todayUsers();
        $todayReservations = $this->todayReservations();
        return view('admin.statistics.statistics', compact('todaySubscribers', 'todayRevenue','todayUsers','todayReservations'));
    }

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
}
