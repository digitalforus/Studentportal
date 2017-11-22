<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Student;
use App\User;
use Illuminate\Http\Request;
use Validator;
use Auth;
use App\Rules\passwordChange;

class AdminController extends Controller
{
	public function __construct(){

        $this->middleware('admin');

    }

    public function show()
    {
    	$students = Student::all();

        return view('admins.dashboard', compact('students'));
    }

    public function student(Student $student){

        return view('admins.student', compact('student')); 
    }

    public function studentDelete(Student $student){

        $student->delete();

        session()->flash('studentDeleted', 'You have Successfully deleted a students record');

        return redirect('admin/dashboard');

   }

   public function studentUpdate(Student $student){

        $this->validate(request(), [
            'dept' => 'required|string|max:255',
            'faculty' => 'required|string|max:255',
        ]);

        $student->department = Request('dept');
        $student->faculty = Request('faculty');

        $student->save();

        session()->flash('studentDetailsChanged', 'You have Successfully changed a students details');

        return redirect('admin/dashboard');
    }

    public function updatePassword(User $admin){

        $this->validate(request(), [
            'old-password' => [new passwordChange($admin->password)],
            'password' => 'required|string|min:6|confirmed',
        ]);


        $admin->password = bcrypt(Request('password'));

        $admin->save();

        session()->flash('adminPasswordChanged', 'You have Successfully changed your password');

        return redirect('admin/dashboard');
    }


}
