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

        'id',

        'firstName',

        'lastName',

        'additional',

        'prefix',

        'suffix',

        'company',

        'jobTitle',

        'role',

        'url',

        'photo',

        'email',

        'password',

    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [

        'password',

        'remember_token',

    ];

    public function userAddress()
    {

        return $this->hasMany(UserAddress::class,'user_id','id');

    }

    public function userPhone()
    {

        return $this->hasMany(UserPhone::class,'user_id','id');
    }
}
