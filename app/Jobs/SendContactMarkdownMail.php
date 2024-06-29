<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use App\Mail\ContactMarkdownMail;
use Illuminate\Support\Facades\Mail;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;

class SendContactMarkdownMail implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;
    protected $mailablec;
    /**
     * Create a new job instance.
     */
    public function __construct(ContactMarkdownMail $mailablec)
    {
        $this->mailablec = $mailablec;
    }

    /**
     * Execute the job.
     */
    public function handle()
    {
        Mail::to('riverofland@contact.bj')->send($this->mailablec);
    }
}
