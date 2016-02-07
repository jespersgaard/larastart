<?php

namespace App\Listeners;

use App\Events\UserWasRegistered;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Support\Facades\Mail;

class WelcomeNewUser
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
     * @param  UserWasRegistered  $event
     * @return void
     */
    public function handle(UserWasRegistered $event)
    {
        Mail::send('auth.emails.welcome', ['user' => $event->user], function ($m) use ($event) {
            $m->to($event->user->email, $event->user->name)->subject('Welcome to ' . config('larastart.website_name') . '!');
        });
    }
}
