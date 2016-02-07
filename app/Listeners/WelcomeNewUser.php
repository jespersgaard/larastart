<?php

namespace App\Listeners;

use App\Events\UserWasRegistered;
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
     * Handle this event.
     *
     * @param UserWasRegistered $event
     * @return bool
     */
    public function handle(UserWasRegistered $event)
    {
        if (config('larastart.send_register_welcome_email') !== false) {
            Mail::send('auth.emails.welcome', ['user' => $event->user], function ($m) use ($event) {
                $m->to($event->user->email, $event->user->name)->subject('Welcome to ' . config('larastart.website_name') . '!');
            });
        }
    }
}
