<?php

namespace App\Http\Controllers;

use App\Models\Familly;
use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class FamillyDashbordController extends Controller
{
    public function index() {
        return view('familly_page.app');
      }
      public function create()
    {

        $students = Student::all();
        return view('familly_page.create')->with('students', $students);
    }

    public function store(Request $request)
    {
        Session::flash('success', 'Family  registered successfully');
        // return redirect()->route('customer.index');
        return redirect()->back();
    }

}
