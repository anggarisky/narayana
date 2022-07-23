<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class CourseController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $courses = Course::all();
        return view('cms_courses/index', compact('courses'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('cms_courses/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $data = $request->all();
        if($request->file('thumbnail'))
        {
            $data['thumbnail'] = $request->file('thumbnail')->store('assets/thumbnail_courses', 'public');
        }
        $data['slug'] = Str::slug($request->title);
        Course::create($data);
        return redirect()->route('admin.overview');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Course  $course
     * @return \Illuminate\Http\Response
     */
    public function show(Course $course)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Course  $course
     * @return \Illuminate\Http\Response
     */
    public function edit(Course $course, $id)
    {
        //
        $course = Course::where([
            ['id', '=', $id],
        ])->first();
        return view('cms_courses/edit', compact('course'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Course  $course
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Course $course, $id)
    {
        //
        $data = $request->all(); 
        if($request->file('thumbnail'))
        {
            $data['thumbnail'] = $request->file('thumbnail')->store('assets/thumbnail_courses', 'public');
        }
        $data['slug'] = Str::slug($request->title);

        $course = Course::findOrFail($id);
        $course->update($data);

        return redirect()->route('admin.overview');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Course  $course
     * @return \Illuminate\Http\Response
     */
    public function destroy(Course $course)
    {
        //
    }
}