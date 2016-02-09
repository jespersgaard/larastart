<?php

namespace App\Traits;

use App\UserProfile;

trait HasProfile
{
    /**
     * A user has a profile.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function profile()
    {
        return $this->hasOne(UserProfile::class);
    }

    /**
     * Returns a name attribute for the user.
     *
     * @return mixed
     */
    public function getNameAttribute()
    {
        if ($this->profile->name) {
            return $this->profile->name;
        }

        return $this->attributes['username'];
    }
}