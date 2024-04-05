<?php

namespace App\Http\Controllers\payment;

use App\Http\Controllers\Controller;
use App\Models\Payment;
use Illuminate\Http\Request;

class PaymentHistoricController extends Controller
{
    public function index()
    {
        $totalYearlyIncome = $this->yearlyIncome();
        $monthlyIncome = $this->monthlyIncome();
        $totalLastYearIncome = $this->lastYearIncome();

        $payments = Payment::with(['user', 'offer'])->paginate(10);
        return view('admin.statistics.payment', compact('payments', 'monthlyIncome', 'totalYearlyIncome', 'totalLastYearIncome'));
    }

    public function monthlyIncome(){
        $totalMonthlyIncome = 0;
        $totalMonthlyIncome = Payment::whereMonth('created_at', now()->month)
        ->whereYear('created_at',now()->year)
        ->sum('amount');
        return $totalMonthlyIncome;
    }

    public function yearlyIncome(){
        $totalYearlyIncome = 0;
        $totalYearlyIncome = Payment::whereYear('created_at',now()->year)
        ->sum('amount');
        return $totalYearlyIncome;
    }

    public function lastYearIncome(){
        $totalLastYearIncome = 0;
        $totalLastYearIncome = Payment::whereYear('created_at',now()->year-1)
        ->sum('amount');
        return $totalLastYearIncome;
    }
}
