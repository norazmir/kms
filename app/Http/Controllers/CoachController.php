<?php

namespace App\Http\Controllers;

use App\StudentForm;
use Illuminate\Http\Request;

class CoachController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $studentForms = StudentForm::all();
        return view('coach/coach', ['studentForms' => $studentForms, 'layout' => 'index']);
    }

    public function indexApprove()
    {
        $studentForms = StudentForm::all();
        return view('coach/coach', ['studentForms' => $studentForms, 'layout' => 'approve']);
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
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $studentForm = StudentForm::find($id);
        $studentForms = StudentForm::all();
        return view('coach/coach', ['studentForms' => $studentForms, 'studentForm' => $studentForm, 'layout' => 'edit']);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $studentForm = StudentForm::find($id);
        $studentForm->matrixNumber = $request->input('matrixNumber');
        $studentForm->status = $request->input('status');
        $studentForm->save();
        return redirect('/coach');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
