<?php

namespace App\Http\Controllers\backoffice\Coachs;

use App\Http\Controllers\Controller;
use App\Http\Requests\Coash\StoreCoashRequest;
use App\Models\Coach;
use Illuminate\Http\Request;

class CoachController extends Controller
{
    public function index()
    {
        $coashes = Coach::paginate(10);
        return view("admin/coach/index", compact("coashes"));
    }

    public function create()
    {
        return view("admin/coach/create");
    }

    public function store(StoreCoashRequest $request)
    {
        $data = $request->validated();
        dd($data);
    }

    
}
