<?php

namespace App\Http\Controllers;

use App\Models\CourseVideo;
use App\Models\Course;
use Illuminate\Http\Request;

class CourseVideoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    public function manage($id)
    {
        //
        $course = Course::where([
            ['id', '=', $id],
        ])->first();

        $videos = CourseVideo::where([
            ['id_course', '=', $id],
        ])->get();
        return view('cms_courses/manage/index', compact('course', 'videos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
        //
        $course = Course::where([
            ['id', '=', $id],
        ])->first();

        return view('cms_courses/manage/create', compact('course'));
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
        CourseVideo::create($data);
        return redirect()->route('admin.course.manage', $request->id_course);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\CourseVideo  $courseVideo
     * @return \Illuminate\Http\Response
     */
    public function show(CourseVideo $courseVideo, $id)
    {
        //
        $video = CourseVideo::where([
            ['id', '=', $id],
        ])->first();

        return view('cms_courses/manage/edit', compact('video'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\CourseVideo  $courseVideo
     * @return \Illuminate\Http\Response
     */
    public function edit(CourseVideo $courseVideo)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\CourseVideo  $courseVideo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, CourseVideo $courseVideo, $id)
    {
        //
        $data = $request->all(); 

        $course = CourseVideo::findOrFail($id);
        $course->update($data);

        return redirect()->route('admin.course.manage', $request->id_course);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\CourseVideo  $courseVideo
     * @return \Illuminate\Http\Response
     */
    public function destroy(CourseVideo $courseVideo)
    {
        //
    }
}