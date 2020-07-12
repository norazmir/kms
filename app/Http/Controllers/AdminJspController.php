<?php

namespace App\Http\Controllers;

use App\AdminJsp;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;


class AdminJSPController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //display list of admin available
        $adminJsps = AdminJsp::all() ;
        return view('layouts/adminJsp', ['adminJsps'=> $adminJsps, 'layout' => 'index']);
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $adminJsp
     * @return \Illuminate\Contracts\Validation\Validator
     */

    protected function validator(array $adminJsp)
    {
        return Validator::make($adminJsp, [
            'matrixNumber' => ['required', 'string', 'max:255', 'unique:users'],
            'firstName' => ['required', 'string', 'max:255'],
            'lastName' => ['required', 'string', 'max:255'],
            'gender' => ['required', 'string', 'max:255'],
            'phoneNumber' => ['required', 'string', 'max:255'],
            'role' => ['required', 'string', 'max:255'],
            'emailAddress' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'courses' => ['required', 'string', 'max:255'],
            'branch' => ['required', 'string', 'max:255']
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $adminJsps = AdminJsp::all() ;
        return view('layouts/adminJsp', ['adminJsps'=> $adminJsps, 'layout' => 'create']);

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = request()->validate([
            'matrixNumber' => ['required', 'string', 'max:255', 'unique:admin_jsps'],
            'firstName' => ['required', 'string', 'max:255'],
            'lastName' => ['required', 'string', 'max:255'],
            'gender' => ['required', 'string', 'max:255'],
            'phoneNumber' => ['required', 'string', 'max:255'],
            'role' => ['required', 'string', 'max:255'],
            'emailAddress' => ['required', 'string', 'email', 'max:255', 'unique:admin_jsps'],
            'courses' => ['required', 'string', 'max:255'],
            'branch' => ['required', 'string', 'max:255']
        ]);

        //store data
        $adminJsp = new AdminJsp() ;
        $adminJsp->matrixNumber = $request->input('matrixNumber');
        $adminJsp->firstName = $request->input('firstName');
        $adminJsp->lastName = $request->input('lastName');
        $adminJsp->gender = $request->input('gender');
        $adminJsp->phoneNumber = $request->input('phoneNumber');
        $adminJsp->role = $request->input('role');
        $adminJsp->emailAddress = $request->input('emailAddress');
        $adminJsp->courses = $request->input('courses');
        $adminJsp->branch = $request->input('branch');
        $adminJsp->save();
        return redirect('/admin/list') ;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function home(){
        return view('admin/admin');
    }

    public function show($id)
    {
        //
        $adminJsp = AdminJsp::find($id) ;
        $adminJsps = AdminJsp::all() ;
        return view('adminJsp', ['adminJsps'=>$adminJsps, 'adminJsp'=>$adminJsp, 'layout'=>'show']);
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
        $adminJsp = AdminJsp::find($id) ;
        $adminJsps = AdminJsp::all() ;
        return view('layouts/adminJsp', ['adminJsps'=>$adminJsps, 'adminJsp'=>$adminJsp, 'layout'=>'edit']);

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
        //
        $adminJsp = AdminJsp::find($id) ;
        $adminJsp->matrixNumber = $request->input('matrixNumber');
        $adminJsp->firstName = $request->input('firstName');
        $adminJsp->lastName = $request->input('lastName');
        $adminJsp->gender = $request->input('gender');
        $adminJsp->phoneNumber = $request->input('phoneNumber');
        $adminJsp->role = $request->input('role');
        $adminJsp->emailAddress = $request->input('emailAddress');
        $adminJsp->courses = $request->input('courses');
        $adminJsp->branch = $request->input('branch');
        $adminJsp->save();
        return redirect('/admin/list') ;

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
        $adminJsp = AdminJsp::find($id) ;
        $adminJsp->delete();
        return redirect('/');
    }
}
