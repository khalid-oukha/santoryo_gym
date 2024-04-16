<?php

namespace App\Http\Controllers\backoffice\subscription;

use App\Http\Controllers\Controller;
use App\Models\Subscription;
use App\Repositories\Interfaces\SubscriptionRepositoryInterface;
use Illuminate\Http\Request;

class SubscriptionController extends Controller
{

    //
    protected $subscriptionRepository;

    public function __construct(SubscriptionRepositoryInterface $subscriptionRepository)
    {
        $this->subscriptionRepository = $subscriptionRepository;
    }
    public function index()
    {
        $subscriptions = $this->subscriptionRepository->paginate(10);
        return view('admin.subscription.index', compact('subscriptions'));
    }


    public function create()
    {
        return view('admin.subscription.create');
    }

    public function store(Request $request)
    {
        // $this->subscriptionRepository->store($request);
        return redirect()->route('subscription.index');
    }
    public function search(Request $request)
    {
        $input = $request->input('search');
        $subscriptions = Subscription::with(['user','offer'])->whereHas('user', function ($query) use ($input) {
            $query->where('lastname', 'like', '%' . $input . '%')->orWhere('firstname', 'like', '%' . $input . '%');
        })->get();

        return response()->json(
            [
                "subscriptions" => $subscriptions
            ]
        );
    }
}
