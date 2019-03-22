@extends('layouts.master')
@section('content')
<div class="container">
    <div class="card">
        <div class="table">
            <br>
            <h2 style="text-align:center;">List of categories :</h2>
            <br>
        @foreach ($categories as $category)
            <div class="row">
            <div class="col-md-4">Name : {{ $category->name }}</div>
            <div class="col-md-4">Description : {{ $category->description }}</div>
            <div class="col-md-4"> The image will be showen here </div>
            </div>
        @endforeach
        </div>
    </div>
</div>
@endsection