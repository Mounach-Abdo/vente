
@extends('layouts.master')
@section('content')
<div class="form-group">

        <form action="/brands" method="post" enctype="multipart/form-data">
                <!--  -->
                @csrf
                <div class="container">
                <div class="card" style="margin-top: 15%">
                    <h4 style="margin-left: 40%;margin-top: 2%x"> Add a new brand </h4>
                    <div class="card-body">    
                        <div class="row mt-3">
                                <div class="col-md-4">
                                        <label for=""> Brand name :</label>
                                </div>
                                <div class="col-md-4">
                                        <input type="text" name="name" id="name">
                                </div>
                        </div>
                        <div class="row mt-3">
                                <div class="col-md-4">
                                        <label for=""> Choose the brand's picture</label>
                                </div>
                                <div class="col-md-4">
                                        <input type="file" name="img" id="img" required>
                                </div>
                        </div>
                        <div class="row mt-4">
                                <input style="margin-left: 30px" type="submit" class="btn btn-primary" name="" id=" "
                                        value="Upload the brand's picture">
                        </div>
                    </div>
                    
                    </div>
                </div>
        </form>
</div>
@endsection


