<?php

namespace App\Http\Controllers;

use App\AdminJsp;
use App\Student;
use App\StudentForm;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
        //
        $students = Student::all() ;
        return view('admin/studentDetail', ['students'=> $students, 'layout' => 'index']);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $students = Student::all() ;
        return view('admin/studentDetail', ['students'=> $students, 'layout' => 'create']);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $student = new Student() ;
        $student->matrixNumber = $request->input('matrixNumber');
        $student->firstName = $request->input('firstName');
        $student->lastName = $request->input('lastName');
        $student->gender = $request->input('gender');
        $student->phoneNumber = $request->input('phoneNumber');
        $student->emailAddress = $request->input('emailAddress');
        $student->courses = $request->input('courses');
        $student->branch = $request->input('branch');
        $student->sportsType = $request->input('sportsType');
        $student->sportsAchievementOne = $request->input('sportsAchievementOne');
        $student->sportsAchievementTwo = $request->input('sportsAchievementTwo');
        $student->sportsAchievementThree = $request->input('sportsAchievementThree');
        $student->save();
        return redirect('/admin/studentDetail/studentList') ;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $student = Student::find($id) ;
        $students = Student::all() ;
        return view('$studentDetail', ['students'=>$students, 'student'=>$student, 'layout'=>'show']);
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
        $student = Student::find($id) ;
        $students = Student::all() ;
        return view('admin/studentDetail', ['students'=>$students, 'student'=>$student, 'layout'=>'edit']);
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
        $student = Student::find($id);
        $student->matrixNumber = $request->input('matrixNumber');
        $student->firstName = $request->input('firstName');
        $student->lastName = $request->input('lastName');
        $student->gender = $request->input('gender');
        $student->phoneNumber = $request->input('phoneNumber');
        $student->emailAddress = $request->input('emailAddress');
        $student->courses = $request->input('courses');
        $student->branch = $request->input('branch');
        $student->sportsType = $request->input('sportsType');
        $student->sportsAchievementOne = $request->input('sportsAchievementOne');
        $student->sportsAchievementTwo = $request->input('sportsAchievementTwo');
        $student->sportsAchievementThree = $request->input('sportsAchievementThree');
        $student->save();
        return redirect('admin/studentDetail/studentList') ;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        //
        $student = Student::find($id) ;
        $student->delete();
        return redirect('admin/studentDetail/studentList');
    }
}
