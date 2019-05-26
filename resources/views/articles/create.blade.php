@extends('layouts.master')
@section('content')

<div class="container contact-form">
            
            <form action="/articles" method="POST" enctype="multipart/form-data">
                @csrf
                <h3>Add a new product</h3>
            <div class="row">
                <div class="col-md-6">
                        <div class="form-group">
                            <input type="text" name="name" value="{{ old('name') }}" class="form-control" placeholder="Article Name" value="" />
                        </div>
                        <div class="form-group">
                            <input type="text" name="price" value="{{ old('price') }}" class="form-control" placeholder="Price" value="" />
                        </div>
                        <div class="form-group">
                            <input type="text" type="text" name="quantity" value="{{ old('quantity') }}" class="form-control" placeholder="Quantity available" value="" />
                        </div>
                <div class="form-group">
                            <h4>Select article's brand</h4> 
                        <select class="drop" type="text" name="brand" value="{{ old('brand') }}">
                            <option value="">Select brand</option>
                                @foreach ($brands as $brand)    
                                <option value="{{ $brand->id }}">{{$brand->name_brand }}</option>
                                @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                            <h4>Select article's category</h4> 
                        <select class="drop" type="text" name="category" value="{{ old('category') }}">
                            <option value="">Select category</option>
                            @foreach ($categories as $category)    
                                <option value="{{ $category->id }}">{{$category->name }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <textarea  name="description" value="{{ old('description') }}" class="form-control" placeholder=" Description " style="width: 100%; height: 150px;"></textarea>
                        </div>
                        <div class="form-group">
                            <div><h4> Upload article's picture :  </h4></div><div class="col-md-6"><input  type="file" name="img" value="{{ old('img') }}"></div><br><br>
                        </div>
                    </div>
                    <div class="form-group">
                            <input type="submit" name="btnSubmit" class="btnContact" value="Create" />
                    </div>
            </div>
        </form> 
</div>
@endsection

<style>
   

.container  {
    border-radius: 3px;
}
.drop{
    width: 260px;
    border-radius: 3px;
    height: 37px;
}
.contact-form{
    background: #fff;
    margin-top: 4%;
    margin-bottom: 5%;
    width: 70%;
}
.contact-form .form-control{
    border-radius:3px;
}
.contact-image{
    text-align: center;
}
.contact-image img{
    border-radius:4px;
    width: 19%;
    margin-top: -5%;
}
.contact-form form{
    padding: 14%;
}
.contact-form form .row{
    margin-bottom: -7%;
}
.contact-form h3{
    margin-bottom: 8%;
    margin-top: -10%;
    text-align: center;
    color: #0062cc;
}
.contact-form .btnContact {
    width: 100px;
    margin-left: 20%;
    border: none;
    border-radius: 1px;
    padding: 1.5%;
    background: #dc3545;
    font-weight: 600;
    color: #fff;
    cursor: pointer;
}
.btnContactSubmit
{
    width: 50%;
    border-radius: 3px;
    padding: 1.5%;
    color: #fff;
    background-color: #0062cc;
    border: none;
    cursor: pointer;
}
</style>

