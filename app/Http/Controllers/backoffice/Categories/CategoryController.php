<?php

namespace App\Http\Controllers\backoffice\Categories;

use App\Http\Controllers\Controller;
use App\Http\Requests\Category\CategoryRequest;
use App\Http\Requests\Category\UpdateCategoryRequest;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categories = Category::paginate(5);
        $total_lessons = Category::whereHas('lessons')->count();
        return view("admin.category.index", compact("categories", 'total_lessons'));
    }

    /**
     * Show the form for creating a new resource.
     */


    /**
     * Store a newly created resource in storage.
     */
    public function store(CategoryRequest $request)
    {
        $data = $request->validated();
        $fileName = time() . $request->name . '.' . $request->image->extension();
        $request->image->storeAs('public/images', $fileName);
        $data['image'] = $fileName;

        $category = Category::create($data);
        if ($category) {
            return redirect()->route('category.index')->with('success', 'Category created successfully.');
        } else {
            return back()->withInput()->with('error', 'Failed to create the category.');
        }
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
        return view('admin.category.edit', ['category' => Category::find($id)]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateCategoryRequest $request, string $id)
    {
        $category = Category::findOrFail($id);

        // dd($request);
        $data = $request->validated();



        if ($request->hasFile('image') && $category->image) {
            Storage::delete('public/images/' . $category->image);
        }

        if ($request->hasFile('image')) {
            $fileName = time() . $request->name . '.' . $request->image->extension();
            $request->image->storeAs('public/images', $fileName);
            $data['image'] = $fileName;
        }

        $category->update($data);
        return redirect()->route('category.index')->with('success', 'Category updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $category = Category::findOrFail($id);
        if ($category->delete()) {
            return redirect()->route('category.index')->with('success', 'Category deleted successfully.');
        } else {
            return back()->with('error', 'Failed to delete the category.');
        }
    }
}
