<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use app\Models\Student;

class StudenController extends Controller
{
    public function addStudent()
    {
        return view('addstudent');
    }
    public function storeStudent(Request $request)
    {
        $request->validate(
            [
                'name' => 'required',
                'account_number' => 'required',
                'email' => 'required',
                'image'=>'required',
            ]
        );
        $student = new Student();
        $student->name = $request->name;
        $student->account_number = $request->account_number;
        $student->email = $request->email;
        $student->image = $request->image;
        $student->save();

        return redirect('/addstudent')->with('message', 'Student Added Successfully');

    }



}
