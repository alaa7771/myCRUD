<?php

namespace App\Http\Controllers;

use App\Students;
use Illuminate\Http\Request;

class StudentsController extends Controller
{


    public function addStudent(){
        return view('add-student');
    }

    public function saveStd(Request $request){
//        dd($request);
        $data =[];
        if(isset($request->name)&&$request->name )
            $data["name"]=$request->name;
        if(isset($request->description)&&$request->description )
            $data["description"]=$request->description;
        if(isset($request->email)&&$request->email )
            $data["email"]=$request->email;
        Students::create($data);
//        return redirect()->back()->with('message', 'Student created successfully');
        return redirect()->route('all.std')->with('success','Student created successfully.');

    }
    public function allStd()
    {
        $students = Students::latest()->paginate(5);
        return view('index',compact('students'))->with('i', (request()->input('page', 1) - 1) * 5);
    }



    public function showStd($student_id)
    {
        $student=Students::find($student_id);
        return view('student_show',compact('student'));
    }

    public function editStd($student_id)
    {
        $student=Students::find($student_id);
        return view('student_edit',compact('student'));
    }
    public function updateStd(Request $request, $student_id)
    {
        $student=Students::find($student_id);
        $request->validate([
            'name' => 'required',
            'description' => 'required',
            'email'=>'required',
        ]);

        $student->update($request->all());
        return redirect()->route('all.std')->with('success','Student updated successfully.');
    }
    public function deleteStd($student_id)
    {
        $student=Students::find($student_id);
        $student->delete();
        return redirect()->route('all.std')->with('success','Student deleted successfully.');
    }



}
