<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable=['post', 'image', 'user_id'];

    public function user(){
        return $this->belongsTo('App\Models\User');
    }
}
