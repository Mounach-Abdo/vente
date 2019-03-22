<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\softDeletes;


class Category extends Model
{
    use softDeletes;
    public function articles(){
return $this->hasMany('App\Article');
    }
    
}
