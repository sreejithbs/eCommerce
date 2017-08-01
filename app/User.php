<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'firstName', 'lastName', 'email', 'password', 'mobile', 'avatar', 'homeTown', 'city', 'state', 'country', 'zipCode', 'status', 'type',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    // Combine firstName and lastName to get full_name with the help of accessors
    function getFullNameAttribute()
    {
      return $this->attributes['firstName']. ' ' .$this->attributes['lastName'];
    }
}
