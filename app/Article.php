<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\softDeletes;


class Article extends Model
{
    use softDeletes; 
    
    public function picture(){
        return $this->morphOne('App\Picture', 'pictureable');
    }
    public function brand(){
        return $this->belongsTo('App\Brand');
    }
    public function category(){
        return $this->belongsTo('App\Category');
    }
    public function ratings(){
        return $this->hasMany('App\Rating');
    }
}
