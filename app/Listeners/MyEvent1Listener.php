<?php

namespace App\Listeners;

use App\Events\MyEvent1;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Support\Facades\Log;

class MyEvent1Listener
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
     * @param  object $event
     * @return void
     */
    public function handle(MyEvent1 $event)
    {
        dd('9999');
        $code = $event->info;
        Log::info('您的密码是'.$code);
    }
}
