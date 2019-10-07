<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Format extends Model
{
    protected $table = 'formats';
    public $primaryKey = 'id';
   
    public function event(){
        return $this->belongsToMany('App/Event');
    }
}
