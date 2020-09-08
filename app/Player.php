<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Player extends Model
{
    //
    public function team(){
        return $this->belongsTo(Team::class);
    }

        public function comments(){
        return $this->hasMany(Comment::class);
    }
}
