<?php

namespace App;

use App\Traits\HasRole as HasRole;
use Illuminate\Foundation\Auth\User as Authenticatable;

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
     * A user belongs to many roles.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function roles()
    {
        return $this->belongsToMany(Role::class);
    }

    /**
     * Assign a role to a user.
     *
     * @param $role
     */
    public function assignRole($role)
    {
        return $this->roles()->save(
            Role::whereName($role)->firstOrFail()
        );
    }

    /**
     * Check to see if user has a role.
     *
     * @param $role
     * @return bool
     */
    public function hasRole($role)
    {
        if(is_string($role)) {
            return $this->roles->contains('name', $role);
        }

        return !! $role->intersect($this->roles)->count();
    }
}
