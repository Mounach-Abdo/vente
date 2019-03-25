<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\softDeletes;


class Article extends Model
{
    use softDeletes;
    public function category(){
        return $this->belongsTo('App\Article');
    }
    public function ratings(){
        return $this->hasMany('App\Rating');
    }
}
