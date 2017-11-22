<?php

namespace App\Listeners;

use App\Student;
use App\User;
use App\Events\StudentRegistered;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use App\Mail\AdminStudentNotification;
use Mail;

class EmailNewStudent
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  StudentRegistered  $event
     * @return void
     */
    public function handle(StudentRegistered $event)
    {
        $admins = User::all();

        foreach($admins as $admin)
        {
            Mail::to($admin->email)->send(new AdminStudentNotification($admin));
        } 
    }
}
