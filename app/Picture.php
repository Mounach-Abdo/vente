<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Picture extends Model
{
  public static function store($request, $id, $type_picture)
  {
     if($request->hasFile('pic'))
     {
         $file = $request->file('pic')->store('pictures','public');
         $picture=new Article();
         $picture->name='pictures';
         $picture->extention=$request->pic->extention;
         $picture->path=$file;
         $picture->picturable_id=$id;
         $picture->picturable_type=$type_picture;
         $picture->save();
     }
     return $picture;
  }  

  public function brand()
  {
     return $this->hasOne('App\brand');
  }

  public function picturable()
  {
     return $this->morphTo();
  }
}


