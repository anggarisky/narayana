<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Course;
use App\Models\CourseVideo;

class FrontController extends Controller
{
    //
    public function index()
    {
        $courses = Course::latest()->where('isOpen', 1)->get();
        $courses_random = Course::where('isOpen', 1)->inRandomOrder()->limit(4)->get();
        return view('landing', compact('courses', 'courses_random'));
    }

    public function details($slug)
    {
        $course_details = Course::where([
            ['slug', '=', $slug],
        ])->first();

        $videos = CourseVideo::where([
            ['id_course', '=', $course_details->id],
        ])->get();
        
        if($course_details)
        {
            return view('details', compact('course_details', 'videos'));
        }
    }
}