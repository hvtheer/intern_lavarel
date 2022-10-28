<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class InformUserProfile extends Mailable
{
    use Queueable;
    use SerializesModels;

    protected $user;
    protected $attachment;

    public function __construct($user, $attachment)
    {
        $this->user = $user;
        $this->attachment = $attachment;
    }

    public function build()
    {
        $mail = $this->view('mail.inform', [
            'user' => $this->user,
        ]);

        if ($this->attachment) {
            $mail->attach($this->attachment, [
                'as' => $this->attachment->getClientOriginalName(),
            ]);
        }

        return $mail;
    }
}