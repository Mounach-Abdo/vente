@extends('layouts.master')
@section('content')
<div class="container">
    <div class="card">
        <div class="table">
            <h2 style="text-align:center;">Add a new product :</h2>
            <br>
            <form action="/articles" method="POST">
                @csrf
            <div class="row">
            <div class="col-md-6" style="text-align:right;">Name : </div><div class="col-md-6"><input type="text" name="name" value="{{ old('name') }}"></div><br><br>
            <div class="col-md-6" style="text-align:right;">Description : </div><div class="col-md-6"><input type="textarea" class="textarea" name="description" value="{{ old('description') }}"></div><br><br>
            <div class="col-md-6" style="text-align:right;">Price :  </div><div class="col-md-6"><input type="text" name="price" value="{{ old('price') }}"></div><br><br>
            <div class="col-md-6" style="text-align:right;">Quantity available :  </div><div class="col-md-6"><input type="text" name="quantity" value="{{ old('price') }}"></div><br><br>
            <div class="col-md-6" style="text-align:right;">Category :  </div><div class="col-md-6">
                <select type="text" name="category" value="{{ old('category') }}">
                    @foreach ($categories as $category)    
                    <option value="{{ $category->id }}">{{$category->name }}</option>
                    @endforeach
                </select></div><br><br>
            </div>
            <!--<div class="col-md-6"><img src="" alt="Image not found !"></div>-->
            <div class="col-md-6" style="display:block;margin-left:auto;"><button type="submit" class="btn btn-success" >Create</button></div>
            </div>
            </form>
        </div>
    </div>
</div>
@endsection