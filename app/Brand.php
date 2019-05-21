<?php

  namespace App;

  use Illuminate\Database\Eloquent\Model;
  use Illuminate\Database\Eloquent\softDeletes;

  class Brand extends Model
  {
  use softDeletes;
  /**
  * Get the brand for the article.
  */
public function articles()
  {
  return $this->hasMany('App\Article');
  }
  /**
  * Get the brand picture.
  */

  public function picture()
  {
  return $this->morphOne('App\Picture','pictureable');
  }

  }
