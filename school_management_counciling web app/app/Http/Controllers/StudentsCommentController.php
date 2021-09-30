<?php

namespace App\Http\Controllers;

use App\Models\Student;
use App\Models\StudentsComment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class StudentsCommentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $students = StudentsComment::all();
        return view('counciler_page.contact_student_index')
        ->with('students', $students);

    }


    public function create()
    {
        $students = Student::all();
        return view('counciler_page.contact_student')
        ->with('students',$students);
    }


    public function store(Request $request)
    {
        // dd($request->all());

        $student = Student::where('user_id',auth()->user()->id)->first();
        $validated = $this->validate($request,[
            'studnet_id'=>'required',
            'body'=>'required',

        ]);
        $student_comment = new StudentsComment;
        $student_comment->user_id = auth()->user()->id;
        $student_comment->student_id = $request->studnet_id;
        $student_comment->comment = $request->body;
        $student_comment->save();
        Session::flash('success', 'Student Comment Registered Successfully');
        // return redirect()->route('customer.index');
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\StudentsComment  $studentsComment
     * @return \Illuminate\Http\Response
     */
    public function show(StudentsComment $studentsComment)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\StudentsComment  $studentsComment
     * @return \Illuminate\Http\Response
     */
    public function edit(StudentsComment $studentsComment)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\StudentsComment  $studentsComment
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, StudentsComment $studentsComment)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\StudentsComment  $studentsComment
     * @return \Illuminate\Http\Response
     */
    public function destroy(StudentsComment $studentsComment)
    {
        //
    }
}
