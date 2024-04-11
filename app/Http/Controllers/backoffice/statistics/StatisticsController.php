<?php

namespace App\Http\Controllers\backoffice\statistics;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Lesson;
use App\Models\Offer;
use App\Models\Payment;
use App\Models\Subscription;
use App\Models\User;
use App\Repositories\StatisticsRepository;
use Illuminate\Http\Request;

class StatisticsController extends Controller
{

    protected $statisticsRepository;

    public function __construct()
    {
        $this->statisticsRepository = new StatisticsRepository();
    }

    public function index()
    {

        $todaySubscribers = $this->statisticsRepository->todaySubscribers();
        $todayRevenue = $this->statisticsRepository->todayRevenue();
        $todayUsers = $this->statisticsRepository->todayUsers();
        $todayReservations = $this->statisticsRepository->todayReservations();
        $totalSubscribers = $this->statisticsRepository->totalSubscribers();
        $totalCategories = $this->statisticsRepository->totalCategories();
        $totalUsers = $this->statisticsRepository->totalUsers();
        $totalActiveSubscribers = $this->statisticsRepository->totalActiveSubscribers();
        $totalOffers = $this->statisticsRepository->totalOffers();

        $latestSubscribers = $this->statisticsRepository->latestSubscribers();

        return view('admin.statistics.statistics', compact('todaySubscribers', 'todayRevenue','todayUsers','todayReservations','totalSubscribers','totalCategories','totalUsers','totalActiveSubscribers','totalOffers','latestSubscribers'));
    }


}
