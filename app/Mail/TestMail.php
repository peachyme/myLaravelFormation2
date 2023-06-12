<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class TestMail extends Mailable
{
    use Queueable, SerializesModels;

    public $data = [];
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(Array $user)
    {
        $this->data = $user;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this//->from('me@test.com') we can put it here or in the .env
                    ->subject('my personalized subject')
                    ->view('emails.mail-test')
                    //->attach(public_path('img/kageyama.png'));
                    ->attachFromStorage('img/kageyama.png');
    }
}
