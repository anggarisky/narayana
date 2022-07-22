<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Course;

class FrontController extends Controller
{
    //
    public function index()
    {
        $courses = Course::latest()->limit(6)->get();
        return view('landing', compact('courses'));
    }

    public function details($slug)
    {
        $course_details = Course::where([
            ['slug', '=', $slug],
        ])->first();
        if($course_details)
        {
            return view('details', compact('course_details'));
        }
    }
}