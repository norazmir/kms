<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function() {return view('auth/login');  });
Route::get('/admin/list', "AdminJspController@index") ;
Route::get('/admin/edit/{id}', "AdminJspController@edit") ;
Route::get('/admin/show/{id}', "AdminJspController@show") ;
Route::get('/admin/create', "AdminJspController@create") ;
Route::get('/delete/{id}', "AdminJspController@delete") ;
Route::post('/admin/store', "AdminJspController@store") ;
Route::post('/admin/update/{id}', "AdminJspController@update") ;
Route::get('/admin', 'AdminJspController@home')->name('admin')->middleware('admin');



Route::get('/coach', 'CoachController@index')->name('coach')->middleware('coach');
Route::get('/coach/listForm', "CoachController@index") ;
Route::get('/coach/listApprove', "CoachController@indexApprove") ;
Route::post('/coach/update/{id}', "CoachController@update") ;
Route::get('/coach/edit/{id}', "CoachController@edit") ;



Route::get('/student', 'StudentFormController@index')->name('student')->middleware('student');
Route::post('/student/store', "StudentFormController@store") ;
Route::get('/student/list', "StudentFormController@index") ;
Route::get('/student/edit/{id}', "StudentFormController@edit") ;
Route::get('/student/show/{id}', "StudentFormController@show") ;
Route::get('/student/create', "StudentFormController@create") ;
Route::post('/student/update/{id}', "StudentFormController@update") ;
Route::get('/student/delete/{id}', "StudentFormController@delete") ;



Route::get('admin/studentDetail/studentList', "StudentController@index");
Route::get('/admin/studentDetail/edit/{id}', "StudentController@edit") ;
Route::get('/admin/studentDetail/show/{id}', "StudentController@show") ;
Route::get('/admin/studentDetail/create', "StudentController@create") ;
Route::get('/admin/studentDetail/delete/{id}', "StudentController@delete") ;
Route::post('/admin/studentDetail/store', "StudentController@store") ;
Route::post('/studentDetail/update/{id}', "StudentController@update") ;
Auth::routes();


//Route::post('login', [
//    'uses' => 'LoginController@redirectTo',
//    'as' => 'login'
//]);
//Route::post('/login/custom', [
//    'uses' => 'LoginRoleController@login',
//    'as' => 'login.custom'
//]);

//Route::group(['middleware' => 'auth', 'middleware' => ['web']], function (){
//    Route::get('/admin', function (){
//        return view('admin/admin');
//    })->name('admin');
//    Route::get('/student', function (){
//        return view('student/student');
//    })->name('student');
//});


//Route::get('/home', 'HomeController@index')->name('home');

// Route::get('/home', 'HomeController@index')->name('home');
