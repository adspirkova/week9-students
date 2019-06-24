<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

//----Q5------
use App\Student;


//----Q9------
use App\Image;

use App\Detention;

class StudentController extends Controller
{  
    //public function __construct()
    //{
    //    $this->middleware('auth')->except('index');
    //}


    //----Q7------
    public function index()
    { 
        //----Q10------
        $students = Student::orderBy('name')->get();
        //
        $view = view('student/index', compact('students'));
        return $view;
    }
    public function show($student_slug)
    {
        $student = \App\Student::where('slug', $student_slug)->first();

        if (!$student) {
            abort(404, 'Student not found');
        }

        $view = view('student/show');
        $view->student = $student;
        return $view;
    }

    // Q11
    public function detention(Request $request)
    {
        $newDetention = new Detention;
        $newDetention->student_id = $request->student_id;
        $newDetention->user_id = \Auth::user()->id;
        $newDetention->subject=$request->subject;
        $newDetention->description=$request->description;
        
        $newDetention->save();
        return redirect(action('StudentController@index'));
    }
}
