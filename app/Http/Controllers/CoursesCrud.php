<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Courses;

class CoursesCrud extends Controller
{
    
    public function index()
    {
        //
        $courses_details = Courses::all();
        return view('pages.add_course',  compact('courses_details'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $create_course = new Courses;

        $files = $request->file('course_picture');
        $name = $_SERVER['REQUEST_TIME'];
        $name = $name . "." . $files->getClientOriginalExtension();
        $files->move('uploaded_images', $name);



        $create_course->course_title = $request['course_title'];
        $create_course->course_instructor = $request['course_instructor'];
        $create_course->course_price = $request['course_price'];
        $create_course->course_duration = $request['course_duration'];
        $create_course->course_total_students = $request['course_total_students'];
        $create_course->course_picture = $name;
        // $create_course->course_picture = $request['course_picture'];

        if ($create_course->save()) {
            echo ("Records inserterd");
        } else {
            echo ("not inserted");
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
