<?php

namespace App\Listeners;

use App\Events\ReceipeDestroyedEvent;
use App\Mail\ReceipeStored;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Mail;

class ReceipeDestroyedListener
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
     * @param  ReceipeDestroyedEvent  $event
     * @return void
     */
    public function handle(ReceipeDestroyedEvent $event)
    {
        //
        \Mail::to('wutyi179@gmail.com')->send(new ReceipeStored($event->receipe));
    }
}
