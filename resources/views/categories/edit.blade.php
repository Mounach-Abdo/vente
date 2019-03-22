@extends('layouts.master')
@section('content')
<div class="container">
    <div class="card">
        <div class="table">
            <form action="categories/{{ $category->id }}" method="POST">
                @csrf
                <input type="hidden" name="_method" value="put">
            <div class="row">
            <div class="col-md-6">Name : <input type="text" value="{{ $category->name }}" ></div>
            <div class="col-md-6">Description : <input type="textarea" class="textarea" value="{{ $category->description }}"></div>
            </div>
            <div class="col-md-6"><img src="" alt="Image not found !"></div>
            <div class="col-md-6"><button type="submit" class="btn btn-primary">Edit</button></div>
            </div>
            </form>
        </div>
    </div>
</div>
@endsection