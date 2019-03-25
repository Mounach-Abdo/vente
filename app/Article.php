<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\softDeletes;


class Article extends Model
{
    use softDeletes;
    public function category(){
        return $this->belongsTo('App\Category');
    }
    public function ratings(){
        return $this->hasMany('App\Rating');
    }
    public function picture(){
        return $this->morphOne('App\Picture', 'pictureable');
    }
}
