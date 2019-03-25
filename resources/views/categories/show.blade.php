@extends('layouts.master')
@section('content')
<div class="container">
    <div class="card">
        <div class="table">
            <h2 style="text-align:center;">Category : {{ $category->id }}</h2>
            <div class="row">
            <div class="col-md-6">Name : </div><div class="col-md-6">{{ $category->name }}</div><br><br>
            <div class="col-md-6">Description : </div><div class="col-md-6">{{ $category->description }}</div><br><br>
            <div class="col-md-6">
            </div>
            </div>
        </div>
    </div>
</div>
@endsection