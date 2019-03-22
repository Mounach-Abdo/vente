@extends('layouts.master')
@section('content')
<div class="container">
    <div class="card">
        <div class="table">
            <br>
            <h2 style="text-align:center;">Add a new category :</h2>
            <br>
            <form action="/categories" method="POST">
                @csrf
            <div class="row">
            <div class="col-md-6">Name : <input type="text" name="name"></div>
            <div class="col-md-6">Description : <input type="textarea" class="textarea" name="description"></div>
            <!--<div class="col-md-6"><img src="" alt="Image not found !"></div>-->
            <div class="col-md-6"><button type="submit" class="btn btn-success" >Create</button></div>
            </div>
            </form>
        </div>
    </div>
</div>
@endsection