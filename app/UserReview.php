<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserReview extends Model
{
    protected $table = 'user_reviews';
    public $primaryKey = 'id';
    public $timestamps = true;

    public function user(){
        return $this->belongsTo('App/User');
    }

    public function event(){
        return $this->belongsTo('App/Event');
    }
}
