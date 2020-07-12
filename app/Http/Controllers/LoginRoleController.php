<?php


namespace App\Http\Controllers;


use App\User;
use Illuminate\Http\Request;
use Auth;

class LoginRoleController
{
    public function login(Request $request)
    {
        if (Auth::attempt([
            'matrix_number' => $request -> matrix_number,
            'password' => $request -> password,
        ]))
        {
            $user= User::where('matrix_number', $request->matrix_number)->first();
            $role= User::where('role', $request->role)->first();
            if ($user->$role)
            {
                return redirect()->route('admin');
            }
            return redirect()->route('student');
        }
        return redirect()->back();
    }
}
