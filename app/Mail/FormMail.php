<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class FormMail extends Mailable
{
    use Queueable, SerializesModels;

    public $user;

    public function __construct($user)
    {
        $this->user = $user;
    }

    public function build()
    {
        return $this->markdown('mail.form')->subject(config('app.name') . 'Заявка на консультацию');
    }

    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'Заявка на консультацию',
        );
    }

}