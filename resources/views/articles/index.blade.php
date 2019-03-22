@extends('layouts.master')
@section('content')
<div class="container">
    <div class="card">
        <div class="table">
            <h2 style="text-align:center;">List of articles :</h2>
        @foreach ($articles as $article)
            <div class="row">
            <div class="col-md-6">Name : {{ $article->name }}</div>
            <div class="col-md-6">Description : {{ $article->description }}</div>
            <div class="col-md-6">Price : {{ $article->price }}</div>
            <div class="col-md-6">Quantity available : {{ $article->quantity }}</div>
            <div class="col-md-6">Category :{{ $article->category }}</div>
            <div class="col-md-6"><img src="" alt="Image not found !"></div>
            </div>
        @endforeach
        </div>
    </div>
</div>
@endsection