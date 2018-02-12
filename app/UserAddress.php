<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserAddress extends Model
{
    protected $fillable = [

        'id',

        'user_id',

        'name',

        'extended',

        'street',

        'city',

        'region',

        'zip',

        'country'

    ];

    public function user()
    {

        return $this->belongsTo(User::class,'user_id','id');

    }
}
