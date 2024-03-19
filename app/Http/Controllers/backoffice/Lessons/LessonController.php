<?php

namespace App\Http\Controllers\backoffice\Lessons;

use App\Http\Controllers\Controller;
use App\Http\Requests\Lesson\StoreLessonRequest;
use App\Models\Category;
use App\Models\Coach;
use App\Models\Lesson;
use Carbon\Carbon;
use Illuminate\Http\Request;

class LessonController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $lessons = Lesson::paginate(10);
        return view('admin.lesson.index', compact('lessons'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::all();
        $coaches = Coach::all();
        return view('admin.lesson.create', compact('categories', 'coaches'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreLessonRequest $request)
    {
        $data = $request->validated();
        $startDateTime = Carbon::parse($request->start_date . ' ' . $request->start_time);
        $data['start_at'] = $startDateTime;
        // dd($data);

        if ($request->hasFile('image')) {
            $title = str_replace(' ', '_', trim($request->title));
            $fileName = time() . '_' . $title . '.' . $request->image->extension();

            $storedPath = $request->image->storeAs('public/images/lessons', $fileName);

            if ($storedPath) {
                $data['image'] = $fileName;
            } else {
                return back()->withInput()->with('error', 'Failed to upload the image.');
            }
        }

        $lesson = Lesson::create($data);

        if ($lesson) {
            return redirect()->route('lesson.index')->with('success', 'Lesson created successfully.');
        } else {
            return back()->withInput()->with('error', 'Failed to create the lesson.');
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
    public function destroy(string $id)
    {
        //
    }
}
