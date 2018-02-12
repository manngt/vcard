<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserPhone extends Model
{
    protected $fillable = [
        'id',

        'user_id',

        'phoneNumber'

    ];

    public  function user()
    {

        return $this->belongsTo(User::class,'user_id','id');

    }
}
