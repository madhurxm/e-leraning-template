<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Instructor_Master;

class InstructorCrud extends Controller
{
    //
    public function form()
    {
        $action_url = "admin/instructor";
        $edit = new Instructor_Master();
        $data = compact('action_url', 'edit');

        return view('admin.admin_instructor_master')->with($data);
    }
    public function create_instructor(Request $req)
    {
        // dd($req);
        // if ($req->hasFile('instructor_pfp')) {

        $file = $req->file('instructor_pfp');
        $path = time();
        $path = $path . "." . $file->getClientOriginalExtension();
        $file->move(public_path('uploaded_images/Instructor_PFP'), $path);

        // }
        $instructor_master = new Instructor_Master();
        $instructor_master->instructor_name = $req['instructor_name'];
        $instructor_master->instructor_profile = $req['instructor_profile'];
        $instructor_master->instructor_pfp = $path;
        $instructor_master->save();

        // return redirect()->action('InstructorCrud@instructor_table');
        return redirect()->route('instructor_table');
    }
    public function instructor_table()
    {
        $instructors = Instructor_Master::orderBy('instructor_id', 'desc')->get();

        // echo("<pre>");
        // print_r($instructors);
        // echo("<pre>");
        return view('admin.admin_instructor_master_view_all')->with(compact('instructors'));
    }
    public function delete($id)
    {
        $delete = Instructor_Master::where('instructor_id', $id);
        $delete->delete();
        return redirect()->action('InstructorCrud@instructor_table');
    }
    public function edit($id)
    {
        $edit = Instructor_Master::where('instructor_id', $id)->first();
        // $edit = $edit->get();

        // echo("<pre>");
        // print_r($edit);
        // echo("<pre>");

        $action_url = "admin/instructor/edit/" . $id;

        $data = compact('action_url', 'edit');
        return view('admin.admin_instructor_master')->with($data);
    }
    public function instructor_records()
    {
        $instructors = new Instructor_Master();
        $instructors = $instructors->orderBy('instructor_id', 'desc')->get();
        return view('pages.about')->with(compact('instructors'));
    }
    public function update(Request $request, $id)
    {
        $instructor = new Instructor_Master();
        $instructor = $instructor->where('instructor_id', $id);
        if ($request->hasFile('instructor_pfp')) {
            $file = $request->file('instructor_pfp');
            $path = time();
            $path = $path . "." . $file->getClientOriginalExtension();
            $file->move(public_path('uploaded_images/Instructor_PFP'), $path);
            $instructor->instructor_name = $request['instructor_name'];
            $instructor->instructor_profile = $request['instructor_profile'];
            $instructor->instructor_pfp = $path;
            $instructor->update(['instructor_name' => $request['instructor_name'], 'instructor_profile' => $request['instructor_profile'], 'instructor_pfp' => $path]);

            return redirect()->route('instructor_table');
        } else {
            $instructor->update(['instructor_name' => $request['instructor_name'], 'instructor_profile' => $request['instructor_profile']]);
            return redirect()->route('instructor_table');
        }
    }
}
