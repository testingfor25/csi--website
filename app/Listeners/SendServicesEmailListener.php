<?php

namespace App\Listeners;

use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Mail;
use App\Mail\SendServicesEmail;

class SendServicesEmailListener implements ShouldQueue
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

        Mail::to(env('EMAIL_RECEIVER_3'))->send(new SendServicesEmail($event));
    }
}
