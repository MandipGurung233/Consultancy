<?php

namespace App\Listeners;

use App\Events\queryAnswer;
use App\Mail\replyContact;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Mail;

class replyQueryAnswer
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
    public function handle(queryAnswer $event): void
    {
        //
        Mail::send(new replyContact($event->email,$event->answer,$event->subject));
    }
}
