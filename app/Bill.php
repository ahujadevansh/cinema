<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bill extends Model
{
    protected $table = 'bills';
    public $primaryKey = 'id';
    public function user(){
        return $this->belongsTo('App\User');
    }
    public function show(){
        return $this->belongsTo('App\Show');
    }
    
}
