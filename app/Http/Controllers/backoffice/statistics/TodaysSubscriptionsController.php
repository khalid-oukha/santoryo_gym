<?php

namespace App\Http\Controllers\backoffice\statistics;

use App\Http\Controllers\Controller;
use App\Models\Payment;
use Illuminate\Http\Request;

class TodaysSubscriptionsController extends Controller
{


    public function IncomePerDay()
    {
        $TodaysIncome = Payment::whereDate('created_at', today())->with(['offer' => function($query){
            $query->withTrashed();
        }])->get();
        $total = $TodaysIncome->sum('amount');
        return view('admin.statistics.todays-report',compact('TodaysIncome','total'));
    }
}
