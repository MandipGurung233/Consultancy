<?php

namespace App\Listeners;

use App\Events\emailSend;
use App\Events\queryAnswer;
use App\Mail\send_Mail;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Mail;

class sendMail
{
    /**
     * Create the event listener.
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     */
    public function handle(emailSend $event): void
    {
        Mail::send(new send_Mail($event->email,$event->subject,$event->answer));
    }
}