<?php

namespace App\Jobs;

use App\Mail\replyContact as MailReplyContact;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Mail;

class replyContact implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    /**
     * Create a new job instance.
     */
    
    /*public string $to;
    public string $answer;*/

    public function __construct(/*string $to, string $answer*/)
    {
        //
       /* $this->to = $to;
        $this->answer = $answer;*/
    }

    /**
     * Execute the job.
     */
    public function handle(): void
    {
        //Mail::send(new MailReplyContact());
    }
}
