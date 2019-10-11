<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Show extends Model
{
    protected $table = 'shows';
    public $primaryKey = 'id';
    public function venue(){
        return $this->belsongTo('App\Venue');
    }
}
