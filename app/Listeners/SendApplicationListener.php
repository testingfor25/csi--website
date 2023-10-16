<?php

namespace App\Listeners;

use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Mail;
use App\Mail\SendApplicationEmail;

class SendApplicationListener implements ShouldQueue
{
    /**
     * Handle the event.
     *
     * @param  object  $event
     * @return void
     */
    public function handle($event)
    {
        sleep(1);

        Mail::to(env('EMAIL_RECEIVER_1'))->send(new SendApplicationEmail($event));
    }
}
