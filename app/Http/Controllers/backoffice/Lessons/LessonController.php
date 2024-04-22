<?php

namespace App\Http\Controllers\backoffice\Lessons;

use App\Http\Controllers\Controller;
use App\Http\Requests\Lesson\StoreLessonRequest;
use App\Models\Category;
use App\Models\Coach;
use App\Models\Lesson;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class LessonController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $lessons = Lesson::orderBy('start_at', 'desc')->paginate(10);
        $total = Lesson::count();
        $categories = Category::get();
        return view('admin.lesson.index', compact('lessons','total','categories'));
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
        $lesson = Lesson::find($id);
        $categories = Category::all();
        $coaches = Coach::all();
        return view('admin.lesson.edit', compact('lesson', 'categories', 'coaches'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $lesson = Lesson::find($id);
        if ($lesson) {
            $data = $request->validate([
                'title' => 'string|max:255',
                'description' => 'string',
                'category_id' => 'exists:categories,id',
                'coach_id' => 'exists:coaches,id',
                'price' => 'numeric',
                'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg',
            ]);

            $startDateTime = Carbon::parse($request->start_date . ' ' . $request->start_time);
            $data['start_at'] = $startDateTime;

            if ($request->hasFile('image')) {

                if ($lesson->image) {
                    Storage::delete('public/images/lessons/' . $lesson->image);
                }

                $title = str_replace(' ', '_', trim($request->title));
                $fileName = time() . '_' . $title . '.' . $request->image->extension();

                $storedPath = $request->image->storeAs('public/images/lessons', $fileName);

                if ($storedPath) {
                    $data['image'] = $fileName;
                } else {
                    return back()->withInput()->with('error', 'Failed to upload the image.');
                }
            }

            $lesson->update($data);
            return redirect()->route('lesson.index')->with('success', 'Lesson updated successfully.');
        } else {
            return redirect()->route('lesson.index')->with('error', 'Failed to update the lesson.');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $lesson = Lesson::find($id);
        if ($lesson) {
            $lesson->delete();
            return redirect()->route('lesson.index')->with('success', 'Lesson deleted successfully.');
        } else {
            return redirect()->route('lesson.index')->with('error', 'Failed to delete the lesson.');
        }
    }

    public function cancel(Lesson $lesson)
    {
        $lesson->status = 'canceled';
        $lesson->save();
        return redirect()->route('lesson.index')->with('success', 'Lesson cancelled successfully.');
    }

    public function done(Lesson $lesson)
    {
        $lesson->status = 'completed';
        $lesson->save();
        return redirect()->route('lesson.index')->with('success', 'Lesson completed successfully.');
    }
}
