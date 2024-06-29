<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class ReservationMarkdownMail extends Mailable
{
    use Queueable, SerializesModels;
    public $email;
    public $id;
    /**
     * Create a new message instance.
     */
    public function __construct($email, $id)
    {
        $this->email = $email;
        $this->id = $id;
    }

    public function build()
    {
        return $this->from("riverofland@noreply.bj")
                    ->subject("Confirmation de réservation")
                    ->markdown('emails.markdownreservation')
                    ->with([
                        'id' => $this->id,
                    ]);
    }

}
