@extends('layouts.master')
@section('content')
<div class="container">
    <div class="card">
        <div class="table">
            <form action="articles/{{ $article->id }}" method="POST">
                @csrf
                <input type="hidden" name="_method" value="put">
        @foreach ($articles as $article)
            <div class="row">
            <div class="col-md-6">Name : <input type="text" value="{{ $article->name }}" ></div>
            <div class="col-md-6">Description : <input type="textarea" class="textarea" value="{{ $article->description }}"></div>
            <div class="col-md-6">Price : <input type="text" value="{{ $article->price }}"></div>
            <div class="col-md-6">Quantity available : <input type="text" value="{{ $article->quantity }}"></div>
            <div class="col-md-6">Category :
                <select name="category">
                    @foreach ($categories as $category)
                    <option value="{{ $category->id }}">{{ $category->name }}</option>    
                    @endforeach
                </select>
            </div>
            <div class="col-md-6"><button type="submit">Edit</button></div>
            </div>
            </form>
        @endforeach
        </div>
    </div>
</div>
@endsection