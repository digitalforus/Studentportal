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

Route::get('test_email', function(){
	\Mail::raw('Sending emails with Mailgun and Laravel is easy!', function($message)
	{
		$message->subject('Mailgun and Laravel are awesome!');
		$message->from('no-reply@website_name.com', 'Website Name');
		$message->to('blessyn2hope@gmail.com');
	});

	return 'mail sent';
});
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


//----------------------------------ADMIN----------------------------------------------------
//Student Routes...
Route::get('admin/dashboard', 'Admin\AdminController@show');
Route::get('admin/dashboard/student/{student}', 'Admin\AdminController@student');
Route::get('admin/dashboard/student/delete/{student}', 'Admin\AdminController@studentDelete');
Route::post('admin/dashboard/student/update/{student}', 'Admin\AdminController@studentUpdate');
Route::post('admin/password/{admin}', 'Admin\AdminController@updatePassword');

//Login Routes...
Route::get('admin/login', 'Admin\Auth\LoginController@showLoginForm');
Route::post('admin/login', 'Admin\Auth\LoginController@login');
Route::get('admin/logout', 'Admin\Auth\LoginController@logout');

// Password Reset Routes...
Route::get('admin/password/reset', 'Admin\Auth\ForgotPasswordController@showLinkRequestForm');
Route::post('password/email', 'Admin\Auth\ForgotPasswordController@sendResetLinkEmail');
Route::get('student/password/reset/{token}', 'Student\Auth\ResetPasswordController@showResetForm')->name('password.reset');
Route::post('student/password/reset', 'Student\Auth\ResetPasswordController@reset');