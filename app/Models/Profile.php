<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    protected $fillable = ['title', 'description'];

    public function user() {
        return $this->belongsTo('App\Models\User');
    }


}
