<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;
use App\Student;

class StudentWelcome extends Mailable
{
    use Queueable, SerializesModels;


    public $user; 

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(Student $user)
    {
        //
        $this->user = $user;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('emails.studentWelcome');
    }
}
