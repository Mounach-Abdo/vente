@extends('layouts.master')
@section('content')
<div class="container">
    <div class="card">
        <div class="table">
            <h2 style="text-align:center;">Article : {{ $article->id }}</h2>
            <div class="row">
            <div class="col-md-6">Name : </div><div class="col-md-6">{{ $article->name }}</div><br><br>
            <div class="col-md-6">Description : </div><div class="col-md-6">{{ $article->description }}</div><br><br>
            <div class="col-md-6">Price : </div><div class="col-md-6">{{ $article->price }}</div><br><br>
            <div class="col-md-6">Quantity available : </div><div class="col-md-6">{{ $article->quantity }}</div><br><br>
            <div class="col-md-6">Category :</div><div class="col-md-6">{{ $article->category->name }}</div><br><br>
            <div class="col-md-6"></div>
            </div>
        </div>
    </div>
</div>
@endsection