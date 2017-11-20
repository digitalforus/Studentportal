<?php

namespace App\Http\Controllers\Student;

use App\Http\Controllers\Controller;
use App\Student;
use Illuminate\Http\Request;
use Validator;
use Auth;
use App\Rules\passwordChange;

class StudentController extends Controller
{
	public function __construct(){

        $this->middleware('student');

    }

    public function show()
    {
    	$student = Auth::guard('student')->user();

        return view('students.dashboard', compact('student'));
    }

    public function showUpdate(Student $student)
    {
    	//$student = Auth::guard('student')->user();

        return view('students.update', compact('student'));
    }

    public function update(Student $student){

        $this->validate(request(), [
            'surname' => 'required|string|max:255',
            'firstName' => 'required|string|max:255',
            'userName' => 'required|string|max:255|unique:students,userName,'.$student->id,
            'level' => 'required|string|max:255',
            'email' => 'required|string|email|max:255',
            'phoneNo' => 'required|digits_between:11,15',
        ]);

        $student->surname = Request('surname');
        $student->firstName = Request('firstName');
        $student->userName = Request('userName');
        $student->email= Request('email');
        $student->phoneNo = Request('phoneNo');

        $student->save();

        //$input = request()->all();

        //$student->fill($input)->save();

        session()->flash('studentDetailsChanged', 'You have Successfully changed your details');

        return redirect('/dashboard');
    }

    public function updatePassword(Student $student){

        $this->validate(request(), [
            'old-password' => [new passwordChange($student->password)],
            'password' => 'required|string|min:6|confirmed',
        ]);

        //if(bcrypt(Request('old-password')) == $student->password){

        $student->password = bcrypt(Request('password'));

        $student->save();

        session()->flash('studentPasswordChanged', 'You have Successfully changed your password');

        //$input = request()->all();

        //$student->fill($input)->save();

        return redirect('/dashboard');
        

    }


}
