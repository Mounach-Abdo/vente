@extends('layouts.master')
@section('content')
<div class="form-group">

        <form  action="/categories" method="POST" enctype="multipart/form-data">
                <!--  -->
                @csrf
                <div class="container">
                <div class="card" style="margin-top: 15%">
                    <h4 style="margin-left: 40%;margin-top: 2%x">Add a new category</h4>
                    <div class="card-body">    
                        <div class="row mt-3">
                                <div class="col-md-4">
                                        <label for=""> Category name :</label>
                                </div>
                                <div class="col-md-4">
                                        <input type="text" name="name" id="name">
                                </div>
                        </div>
                        <div class="row mt-3">
                                <div class="col-md-4">
                                        <label for=""> Designation Category :</label>
                                </div>
                                <div class="col-md-4">
                                        <input type="textarea" name="description" id="description">
                                </div>
                        </div>
                        <div class="row mt-3">
                                <div class="col-md-4">
                                        <label for=""> Choose the picture of the Category</label>
                                </div>
                                <div class="col-md-4">
                                        <input type="file" name="img" id="img" required>
                                </div>
                        </div>
                        <div class="row mt-4">
                                <input style="margin-left: 30px" type="submit" class="btn btn-primary" name="" id=" "
                                        value="Upload the catégory picture">
                        </div>
                    </div>
                    
                    </div>
                </div>
        </form>
</div>
@endsection


