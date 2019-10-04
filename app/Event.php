<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    protected $table = 'events';
    public $primaryKey = 'id';
    public function artist(){
        return $this->hasMany('App\Artist');
    }

    public function review(){
        return $this->hasMany('App\UserReview');
    }

    public function format(){
        return $this->hasMany('App\Format');
    }
}
