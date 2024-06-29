<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Support\Facades\Mail;
use App\Mail\ReservationMarkdownMail;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;

class SendReservationMarkdownMail implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    protected $mailabler;
    protected $email;
    protected $id;
    public function __construct(ReservationMarkdownMail $email, $mailabler)
    {
        $this->mailabler = $mailabler;
        $this->email = $email;
    }

    public function handle()
    {
        Mail::to($this->email)->send($this->mailabler);
    }
}
