<?php

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

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::get('/dashboard2', 'Student\StudentController@show2');
//--------------------------Student--------------------------------------------------------
//Student Routes...
Route::get('/dashboard', 'Student\StudentController@show');
Route::get('student/update/{student}', 'Student\StudentController@showUpdate');
Route::post('student/update/{student}', 'Student\StudentController@update');
Route::post('student/password/{student}', 'Student\StudentController@updatePassword');

//Login Routes...
Route::get('student/login', 'Student\Auth\LoginController@showLoginForm');
Route::post('student/login', 'Student\Auth\LoginController@login');
Route::get('student/logout', 'Student\Auth\LoginController@logout');

// Registration Routes...
Route::get('student/register', 'Student\Auth\RegisterController@showRegistrationForm');
Route::post('student/register', 'Student\Auth\RegisterController@register');

// Password Reset Routes...
Route::get('student/password/reset', 'Student\Auth\ForgotPasswordController@showLinkRequestForm');
Route::post('student/password/email', 'Student\Auth\ForgotPasswordController@sendResetLinkEmail');
Route::get('student/password/reset/{token}', 'Student\Auth\ResetPasswordController@showResetForm')->name('password.reset');
Route::post('student/password/reset', 'Student\Auth\ResetPasswordController@reset');

