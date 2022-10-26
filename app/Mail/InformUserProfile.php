<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class InformUserProfile extends Mailable
{
    use Queueable;
    use SerializesModels;

    public $user;
    public $attachment;

    public function __construct($user, $attachment)
    {
        $this->user = $user;
        $this->attachment = $attachment;
    }

    public function build()
    {
        if ($this->attachment == '/') {
            return $this->view('mail.inform-user-profile', ['user'=> $this->user]);
        }
        return $this->view('mail.inform-user-profile', ['user'=> $this->user])->attach($this->attachment);
    }
}
