<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class InformUserProfile extends Mailable
{
    use Queueable, SerializesModels;

    protected $user;
    protected $filename;

    public function __construct()
    {
        $this->user = $user;
        $this->filename = $filename;
    }

    public function build()
    {
        if ($this->filename == '/') {
            return $this->view('mail.inform-user-profile', ['user'=> $this->user]);
        }
        return $this->view('mail.inform-user-profile', ['user'=> $this->user])
                    ->attach($this->filename);
    }
}
