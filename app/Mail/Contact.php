<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class Contact extends Mailable
{
    use Queueable, SerializesModels;

    protected $message;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(Object $message)
    {
        $this->message = $message;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from($this->message->from)
                    ->view('Mails.contactMail')
                    ->with([
                        'content' => $this->message
                    ]);
    }
}