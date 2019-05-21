@extends('layouts.master')
@section('content')
<br><br>
<div class="container">
    <form action="/brands" method="post" enctype="multipart/form-data">
        @csrf
   <div class="card">
        <div class="card-header">
           <div class="text-center lead">
               Create a new brand 
           </div>
       </div>
       <div class="card-body">
           <div class="row">
               <div class="col-md-4">
                   <label for="" class="label label-default">brand name</label>
               </div>
               <div class="col-md-8">
                   <input type="text" name="name" id="" class="form-control" placeholder="EX: ASUS" required>
               </div>
           </div>
           <div class="row">
               <div class="col-md-4">
                   <label for=""></label>
               </div>
           </div>
           <div class="row">
               <div class="col-md-4">
                   <label for="" class="label label-default">Upload the brand's picture</label>
               </div>
               <div class="col-md-8">
               <input type="file" name="img" id="img" required>
               
               </div>
           </div>
           <br><br>
           <div class="row">
               <br>
               <input type="submit" name="" style="margin-left:30px;" value="Add a new brand" class="btn btn-success ">
           </div>
       </div>
   </div>
</form>
</div>
@endsection
