<?php

namespace App\Listeners;

use App\Events\AssignAdminRole;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class AssignAdminRoleListener
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
    public function handle(AssignAdminRole $event): void
    {
        //
    }
}
