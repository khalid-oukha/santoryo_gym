<?php

namespace App\Http\Controllers\backoffice\Offers;

use App\Http\Controllers\Controller;
use App\Http\Requests\Offers\StoreOfferReqeust;
use App\Models\Feature;
use App\Models\Offer;
use Illuminate\Http\Request;

class OfferController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $offers = Offer::paginate(10);
        return view('admin.offers.index',compact('offers'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $features = Feature::all();
        return view('admin.offers.create', compact('features'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreOfferReqeust $request)
    {
        //
        $data = $request->validated();
        $offer = Offer::create(
            [
                'title' => $data['title'],
                'description' => $data['description'],
                'price' => $data['price'],
                'months_valid' => $data['months_valid'],
            ]
        );
        if ($offer)
        {
            $offer->features()->attach($request['features']);
            return redirect()->route('offer.index');
        }
    }

    public function suspendOffersList(){
        $offers = Offer::onlyTrashed()->paginate(10);
        return view('admin.offers.suspend',compact('offers'));
    }
    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Offer $offer)
    {
        $offer->delete();
        return redirect()->route('offer.index')->with('success','Offer deleted successfully');
    }



}
