<?php

namespace App;

use App\Traits\HasRole as HasRole;
use Illuminate\Foundation\Auth\User as Authenticatable;
use App\Events\UserWasRegistered;

class User extends Authenticatable
{
    use HasRole;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * When mode boots, set some listeners.
     *
     * @void
     */
    public static function boot()
    {
        parent::boot();

        static::created(function ($user) {
            event(new UserWasRegistered($user));
        });
    }
}
