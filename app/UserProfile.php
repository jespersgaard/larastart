<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserProfile extends Model
{
    /**
     * Sets our models table.
     *
     * @var string
     */
    protected $table = "user_profile";

    /**
     * Attributes that are mass-assignable
     *
     * @var array
     */
    protected $fillable = ['name','location'];

    /**
     * A profile belongs to a user.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
