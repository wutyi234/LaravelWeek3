<?php

namespace App\Listeners;

use App\Events\ReceipeUpdatedEvent;
use App\Mail\ReceipeStored;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Mail;

class ReceipeUpdatedListener
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  ReceipeUpdatedEvent  $event
     * @return void
     */
    public function handle(ReceipeUpdatedEvent $event)
    {
        //
        \Mail::to('wutyi179@gmail.com')->send(new ReceipeStored($event->receipe));
    }
}
