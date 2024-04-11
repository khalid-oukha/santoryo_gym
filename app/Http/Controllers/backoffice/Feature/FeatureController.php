<?php

namespace App\Http\Controllers\backoffice\Feature;

use App\Http\Controllers\Controller;
use App\Http\Requests\Feature\StoreFeatureRequest;
use App\Models\Feature;
use App\Repositories\Interfaces\FeatureRepositoryInterface;
use Illuminate\Http\Request;

class FeatureController extends Controller
{
    protected $featureRepository;

    public function __construct(FeatureRepositoryInterface $featureRepository)
    {
        $this->featureRepository = $featureRepository;
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // $features = Feature::all();
        $features = $this->featureRepository->all();
        return view('admin.feature.index',compact('features'));
    }



    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreFeatureRequest $request)
    {
        $data = $request->validated();
        $feature = $this->featureRepository->create($data);
        if ($feature) {
            return redirect()->route('feature.index')->with('success', 'Feature created successfully.');
        } else {
            return back()->withInput()->with('error', 'Failed to create the feature.');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $feature = Feature::find($id);
        return view('admin.feature.show',compact('feature'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {

        // $feature = Feature::find($id);
        $feature = $this->featureRepository->find($id);
        return view('admin.feature.edit',compact('feature'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $feature = $this->featureRepository->update($id,$request->all());
        return redirect()->route('feature.index')->with('success', 'Feature updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $this->featureRepository->delete($id);
        return redirect()->route('feature.index')->with('success', 'Feature deleted successfully.');
    }
}
