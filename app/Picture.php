<?php

   namespace App;
   use App\Picture;
   use Illuminate\Database\Eloquent\Model;

   class Picture extends Model
   {

   public static function store($request, $id, $type_picture)
   {
   if($request->hasFile('img'))
   {
      $file = $request->file('img')->store('pictures','public');
      $picture=new Picture();
      $picture->name='photo';
      $picture->extention=$request->img->extension();
      $picture->path = $file;
      $picture->pictureable_id=$id;
      $picture->pictureable_type=$type_picture;
      $picture->save();
   }
   return $picture;
}

   public function pictureable()
   {
      return $this->morphTo();
   }
  

   }
