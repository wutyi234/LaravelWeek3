<?php

namespace App\Providers;

use App\Events\ReceipeCreatedEvent;
use App\Events\ReceipeDestroyedEvent;
use App\Events\ReceipeUpdatedEvent;
use App\Listeners\ReceipeCreatedListener;
use App\Listeners\ReceipeDestroyedListener;
use App\Listeners\ReceipeUpdatedListener;
use Illuminate\Auth\Events\Registered;
use Illuminate\Auth\Listeners\SendEmailVerificationNotification;
use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Event;

class EventServiceProvider extends ServiceProvider
{
    /**
     * The event listener mappings for the application.
     *
     * @var array
     */
    protected $listen = [
        Registered::class => [
            SendEmailVerificationNotification::class,
        ],
        ReceipeCreatedEvent::class => [
            ReceipeCreatedListener::class,
        ],
        ReceipeUpdatedEvent::class => [
            ReceipeUpdatedListener::class,
        ],
        ReceipeDestroyedEvent::class => [
            ReceipeDestroyedListener::class,
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
