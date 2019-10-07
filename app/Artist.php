<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Artist extends Model
{
    protected $table = 'artists';
    public $primaryKey = 'id';

    public function event(){
        return $this->belongsToMany('App/Event');
    }
}
