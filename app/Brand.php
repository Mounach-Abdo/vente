<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\softDeletes;

class brand extends Model
{
    use softDeletes;
    
    public function picture()
    {
        return $this->morphOne('App\Picture','pictureable');
    }

    public function articles()
    {
        return $this->HasMany('App\Article');
    }
}
