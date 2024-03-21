<?php

namespace App\Http\Controllers\lessons;

use App\Http\Controllers\Controller;
use App\Models\Lesson;
use Illuminate\Http\Request;

class lessonsListController extends Controller
{
    public function index()
    {   
        $lessons = Lesson::where('start_at', '>', now())
        ->where('status', 'planned')
        ->orderBy('start_at', 'desc')->paginate("9");
        return view('front.lessons',compact('lessons'));
    }
}
