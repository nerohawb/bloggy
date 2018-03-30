<?php

namespace App\Listeners;

use App\Events\ThreaCreated;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class CheckForSpam
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
     * @param  ThreaCreated  $event
     * @return void
     */
    public function handle(ThreaCreated $event)
    {
        //
    }
}
