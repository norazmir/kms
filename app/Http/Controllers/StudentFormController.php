<?php

namespace App\Http\Controllers;

use App\StudentForm;
use Illuminate\Http\Request;

class StudentFormController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function home(){
        return view('student/student');
    }

    public function index()
    {
        $studentForms = StudentForm::all() ;
        return view('student/student', ['studentForms'=> $studentForms, 'layout' => 'index']);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $studentForms = StudentForm::all() ;
        return view('student/student', ['studentForms'=> $studentForms, 'layout' => 'create']);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $studentForm = new StudentForm() ;
        $studentForm->matrixNumber = $request->input('matrixNumber');
        $studentForm->firstName = $request->input('firstName');
        $studentForm->lastName = $request->input('lastName');
        $studentForm->gender = $request->input('gender');
        $studentForm->phoneNumber = $request->input('phoneNumber');
        $studentForm->courses = $request->input('courses');
        $studentForm->branch = $request->input('branch');
        $studentForm->sportsType = $request->input('sportsType');
        $studentForm->save();
        return redirect('/student/list') ;
    }



    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $studentForm = StudentForm::find($id) ;
        $studentForms = StudentForm::all() ;
        return view('student', ['students'=>$studentForms, 'student'=>$studentForm, 'layout'=>'show']);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $studentForm = StudentForm::find($id) ;
        $studentForms = StudentForm::all() ;
        return view('student/student', ['studentForms'=>$studentForms, 'studentForm'=>$studentForm, 'layout'=>'edit']);
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
        $studentForm = StudentForm::find($id);
        $studentForm->matrixNumber = $request->input('matrixNumber');
        $studentForm->firstName = $request->input('firstName');
        $studentForm->lastName = $request->input('lastName');
        $studentForm->gender = $request->input('gender');
        $studentForm->phoneNumber = $request->input('phoneNumber');
        $studentForm->courses = $request->input('courses');
        $studentForm->branch = $request->input('branch');
        $studentForm->sportsType = $request->input('sportsType');
        $studentForm->save();
        return redirect('/student/list') ;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        $studentForm = StudentForm::find($id) ;
        $studentForm->delete();
        return redirect('student/list');
    }
}
