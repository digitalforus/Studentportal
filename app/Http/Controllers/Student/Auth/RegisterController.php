<?php

namespace App\Http\Controllers\Student\Auth;

use App\Student;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Http\Request;
use Illuminate\Auth\Events\Registered;
use App\Events\StudentRegistered;
use App\Mail\StudentWelcome;
use Auth;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/dashboard';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'matricNo' => 'required|digits_between:2,12|unique:students',
            'surname' => 'required|string|max:255',
            'firstName' => 'required|string|max:255',
            'userName' => 'required|string|max:255|unique:students',
            'faculty' => 'required|string|max:255',
            'dept' => 'required|string|max:255',
            'level' => 'required|string|max:255',
            'email' => 'required|string|email|max:255',
            'phoneNo' => 'required|digits_between:11,15',
            'gender' => 'required|string|max:255',
            'dob' => 'required|date|max:255',
            'passport' => 'required|file|image',
            'password' => 'required|string|min:6|max:255|confirmed',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Student
     */
    protected function create(array $data)
    {
        $path = Request('passport')->store('public/images');

        return Student::create([
            'matricNo' => $data['matricNo'],
            'surname' => $data['surname'],
            'firstName' => $data['firstName'],
            'userName' => $data['userName'],
            'faculty' => $data['faculty'],
            'department' => $data['dept'],
            'level' => $data['level'],
            'email' => $data['email'],
            'phoneNo' => $data['phoneNo'],
            'gender' => $data['gender'],
            'dob' => $data['dob'],
            'photoId' => $path,
            'password' => bcrypt($data['password']),
        ]);
    }

    public function register(Request $request)
    {
        $this->validator($request->all())->validate();

        event(new Registered($user = $this->create($request->all())));

        $this->guard()->login($user);

        event(new StudentRegistered($user));

        \Mail::to($user)->send(new StudentWelcome($user));

        session()->flash('studentRegisteredSuccess', 'You have Successfully Registered');

        return $this->registered($request, $user)
                        ?: redirect($this->redirectPath());
    }

    protected function guard()
    {
        return Auth::guard('student');
    }

    public function showRegistrationForm()
    {
        return view('students.auth.register');
    }

    public function redirectPath()
    {
        if (method_exists($this, 'redirectTo')) {
            return $this->redirectTo();
        }

        return property_exists($this, 'redirectTo') ? $this->redirectTo : '/dashboard';
    }
}
