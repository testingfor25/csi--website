<?php

namespace App\Providers;

use Illuminate\Support\Facades\Event;
use Illuminate\Auth\Events\Registered;
use Illuminate\Auth\Listeners\SendEmailVerificationNotification;
use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;

class EventServiceProvider extends ServiceProvider
{
    /**
     * The event listener mappings for the application.
     *
     * @var array
     */
    protected $listen = [
        \App\Events\SendApplicationEvent::class => [
            \App\Listeners\SendApplicationListener::class,
        ],
        \App\Events\SendContactEmailEvent::class => [
            \App\Listeners\SendContactEmailListener::class,
        ],
        \App\Events\SendServicesEmailEvent::class => [
            \App\Listeners\SendServicesEmailListener::class,
        ],
    ];

    /**
     * Register any events for your application.
     *
     * @return void
     */
    public function boot()
    {
        parent::boot();

        //
    }
}
