<?php

namespace App\Http\Controllers\payment;

use App\Http\Controllers\Controller;
use App\Models\Offer;
use App\Models\Payment;
use Illuminate\Http\Request;

class PaymentHistoricController extends Controller
{
    public function index()
    {
        $totalYearlyIncome = $this->yearlyIncome();
        $monthlyIncome = $this->monthlyIncome();
        $totalLastYearIncome = $this->lastYearIncome();
        $offerPaymentsPercentages = $this->offerPaymentsPercentage();

        $payments = Payment::with(['user', 'offer'])->paginate(10);
        return view('admin.statistics.payment', compact('payments', 'monthlyIncome', 'totalYearlyIncome', 'totalLastYearIncome', 'offerPaymentsPercentages'));
    }

    public function monthlyIncome()
    {
        $totalMonthlyIncome = 0;
        $totalMonthlyIncome = Payment::whereMonth('created_at', now()->month)
            ->whereYear('created_at', now()->year)
            ->sum('amount');
        return $totalMonthlyIncome;
    }

    public function yearlyIncome()
    {
        $totalYearlyIncome = 0;
        $totalYearlyIncome = Payment::whereYear('created_at', now()->year)
            ->sum('amount');
        return $totalYearlyIncome;
    }

    public function lastYearIncome()
    {
        $totalLastYearIncome = 0;
        $totalLastYearIncome = Payment::whereYear('created_at', now()->year - 1)
            ->sum('amount');
        return $totalLastYearIncome;
    }



    public function totalpayments()
    {
        $totalPayments = Payment::count();
        return $totalPayments;
    }

    public function offerpayments($offerId)
    {
        $offerPayments = Payment::where('offer_id', $offerId)->count();
        return $offerPayments;
    }



    public function offerPaymentsPercentage()
    {
        $offers = Offer::all();
        $offerPaymentsPercentages = [];

        foreach ($offers as $offer) {
            $totalPayments = $this->totalPayments();
            $offerPayments = $this->offerPayments($offer->id);

            $percentage = $totalPayments > 0 ? ($offerPayments / $totalPayments) * 100 : 0;

            $offerPaymentsPercentages[] = [
                'name' => $offer->title,
                'percentage' => $percentage,
            ];
        }

        return $offerPaymentsPercentages;
    }
}
