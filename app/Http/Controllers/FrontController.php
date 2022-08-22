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

    public function catalog ()
    {
        $courses_product_design = Course::latest()->where('isOpen', 1)->where('category', 'UI/UX Design')->get();
        $courses_website_development = Course::latest()->where('isOpen', 1)->where('category', 'Website Development')->get();
        $courses_random = Course::where('isOpen', 1)->inRandomOrder()->limit(4)->get();
        return view('catalog', compact('courses_random', 'courses_product_design', 'courses_website_development'));
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