<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Venue extends Model
{
    protected $table = 'venues';
    public $primaryKey = 'id';
    public function organiser(){
        return $this->belongsTo('App\Organiser');
    }
    public function shows(){
        return $this->hasMany('App\Show');
    }

    public function events(){
        return $this->belongsToMany('App\Event', 'events_venues');
    }

}
