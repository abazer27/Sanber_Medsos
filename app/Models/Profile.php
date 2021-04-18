<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    protected $fillable=['nama', 'biodata', 'profile_image', 'user_id'];

    public function user(){
        return $this->belongsTo('App\Models\User');
    }
}
