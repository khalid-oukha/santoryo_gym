<?php

namespace App\Http\Controllers\backoffice\lessons;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Lesson;
use Illuminate\Http\Request;

class FilterLessonsController extends Controller
{
    //
    public function filterByCategory(Request $request){
        $id = $request->input('category');
        $category = Category::find($id);
        $lessons = Lesson::with('category', 'coach.user')->where('category_id', $category->id)->get();

        return response()->json($lessons);
    }
}
