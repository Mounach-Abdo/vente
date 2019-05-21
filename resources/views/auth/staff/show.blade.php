@extends('layouts.app')
@section('content')
<!--{{ auth()->guard('staff')->user() }}-->
<div class="container">
    <h3 style="text-align: center;"> Account </h3> 
  
    <div class="card bg-dark text-white" >
        <div class="card-body">
                <div class="form-group row" style="padding-top: 50px">
                        <label for="first_name" id="id" class="col-md-4 col-form-label text-md-right">First name</label>

                        <div class="col-md-6">
                        <input  id="first_name" type="text" 
                        value="{{$staff[0]['first_name']}}" class="form-control{{ $errors->has('first_name') ? ' is-invalid' : '' }}"
                         name="first_name" value="{{ old('first_name') }}" required>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label id="id" for="last_name" class="col-md-4 col-form-label text-md-right">Last name</label>

                        <div class="col-md-6">
                            <input id="last_name" value="{{$staff[0]['last_name']}}" 
                            type="text" class="form-control{{ $errors->has('last_name') ? ' is-invalid' : '' }}" name="last_name" 
                            value="{{ old('last_name') }}" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label id="id" for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                        <div class="col-md-6">
                            <input id="email" value=" {{$staff[0]['email']}}" type="email" 
                            class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" 
                            value="{{ old('email') }}" required>
                        </div>
                    </div>
     
            <a id="logout" href='{{ url('staff/logout') }}'> Log out </a>
        </div>
    </div>
</div>
@endSection

<style>
   
#logout{
    color: red;font-size: 20px;
}   
#id{
    padding-top: 55px;
}
.card{width: 40%;
height: 600px;
text-align: center;
align-self: center; 
margin: 0 auto;
float: none; 
margin-bottom: 10px;}
.col-md-6{
    padding-top: 50px;
}

</style>