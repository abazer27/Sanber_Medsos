<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
class profile extends Model
{
    protected $fillable = [
        'user_id','biodata', 'profile_image',
    ];
    // protected $guarded = [];
}
