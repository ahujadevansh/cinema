<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    protected $table = 'events';
    public $primaryKey = 'id';
    public function artists(){
        return $this->belongsToMany('App\Artist');
    }

    public function reviews(){
        return $this->belongsToMany('App\UserReview');
    }

    public function formats(){
        return $this->belongsToMany('App\Format');
    }
}
