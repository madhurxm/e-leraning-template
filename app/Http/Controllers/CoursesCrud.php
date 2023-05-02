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
    public function index2()
    {
        //
        $courses_details = Courses::offset(0)->limit(3)->get();
        return view('index',  compact('courses_details'));

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
     * 
     */
    public function update(Request $request, $id)
    {
        //
    //     $course_data = Courses::where('course_id', $id)->first();;
    //     // dd($course_data);
        

        $files = $request->file('course_picture');
        $name = $_SERVER['REQUEST_TIME'];
        $name = $name. "." .$files->getClientOriginalExtension();
        $files->move('uploaded_images', $name);



    //     $course_data->course_title = $request['course_title'];
    //     $course_data->course_instructor = $request['course_instructor'];
    //     $course_data->course_price = $request['course_price'];
    //     $course_data->course_duration = $request['course_duration'];
    //     $course_data->course_total_students = $request['course_total_students'];
    //     $course_data->course_picture = $name;
    //     // $create_course->course_picture = $request['course_picture'];

    //     // $data = array('course_title'=>$course_data->course_title, "course_instructor"=>$course_data->course_instructor, 'course_price'=>$course_data->course_price, 'course_duration'=>$course_data->course_duration, 'course_total_students'=>$course_data->course_total_students, 'course_picture'=>$name,);
    //     $course_data->save();
    //     // if () {
    //     //     echo ("Records updated");
    //     // } else {
    //     //     echo ("not updated");
    //     // }
    Courses::where('course_id', $id)->update([
        [
            // 'magazine_id'      => $request->input('magazine'),
            // 'page'             => $request->input('pagename'),
            // 'page_description' => $request->input('description'),
            // 'page_number'      => $request->input('pageno'),
            // 'file'             => $audioName,
            // 'created_at'       => $date,
            // 'updated_at'       => $date,
            // 'user_id'          => 1

            'course_title'=>$request->course_title, "course_instructor"=>$request->course_instructor, 'course_price'=>$request->course_price,
             'course_duration'=>$request->course_duration, 'course_total_students'=>$request->course_total_students, 
            'course_picture'=>$name,
        ]
    ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $course_id
    
     */
    public function destroy($course_id)
    {
        //
        // dd($course_id);
        $data = Courses::where('course_id',$course_id)->delete();
        if ($data) {
           return '1';
        } else {
            return '0';
        }
        
    }
}
