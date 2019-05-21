@extends('layouts.menu')
@section('content')
<div class="container">
    <div class="table">
        <form action="/articles/edit" method="POST" >
        @csrf
            <h3>Search for product you wanna modify </h3>
        <div class="row">
                    <div class="col-md-10">
                        <div>
                            <!-- Search form -->
                            <div class="md-form active-cyan-4 mb-3">
                                <input class="form-control" type="text"  id="search" placeholder="Search" aria-label="Search"> 
                            </div>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <input type="button" value="Search" onclick="jib()" style="width: 100%;height: 36px">
                    </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <img id="img"  style="height:250px;width:500px;max-width: 350px;margin-right: 5in" src="https://pngimage.net/wp-content/uploads/2018/06/our-products-icon-png.png" alt="Error picture not found !" class="img-fluid img-thumbnail"  >
                <div class="form-group">
                    <div><h4> Upload article's picture :  </h4></div><div class="col-md-6"><input onchange="pload(this);"  type="file" id="image" name="image" value="{{ old('img') }}"></div><br><br>
                </div>
            </div>
                <div class="col-md-6">
                        <div class="form-group">
                        <input type="text" name="name" value="" class="form-control" placeholder="Article Name" value="" />
                        </div>
                        <div class="form-group">
                            <input type="text" name="price" value="" class="form-control" placeholder="Price" value="" />
                        </div>
                        <div class="form-group">
                            <input type="text" type="text" name="quantity" value="" class="form-control" placeholder="Quantity available" value="" />
                        </div>
                <div class="form-group">
                            <h4>Select article's brand</h4> 
                    <select name="brand" id="" class="select">
                        <option value=""></option>
                    </select>
                </div>
                    <div class="form-group">
                            <h4>Select article's category</h4> 
                        <select name="category" id="" class="select" style="width: 50%;height: 30px">
                            
                        </select>
                    </div>
                </div>
        </div>
        <div class="row" >
            <div class="col-md-6 col-center-block " >
                        <div class="form-group">
                        <textarea  name="description" class="form-control" placeholder=" Description " style="width: 100%; height: 150px;"></textarea>
                        </div>
                        <div class="form-group" style="text-align: center">
                            <input type="submit" name="btnSubmit" style="font-size: 15px;" class="btnContact btn btn-info" value="Modify product" />
                    </div>
                </div>
        </div>
        </form>
    </div>
</div>
@endsection

<script>
var search = document.getElementById('search').value;
function jib(){
if(document.getElementById('search').value=="")
{
    alert("You must fill the field ");
}
else{

}
}

var jsphoto ;
        function pload(choose) {
        if (choose.files && choose.files[0]) {
            var reader = new FileReader();
            reader.onload = function (e) {
                $('#img')
                    .attr('src', e.target.result)
            };
            reader.readAsDataURL(image.files[0]);
        jsphoto =reader.readAsDataURL(image.files[0]);
        }
    }
</script>

<style>
.col-center-block {
    float: none;
    display: block;
    margin: 0 auto;
}

.select{
width: 50%;
height: 30px;
}
</style>
