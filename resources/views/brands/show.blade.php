@extends('layouts.master')
@section('content')
<div class="container">
    <div class="card">
        <div class="card-header">
            <div class="card-title">
                <div class="text-center lead">
                   <h2> brand number </h2> {{$brand->id  }}
                </div>
            </div>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-md-4">
                    <label for="" ><h2> Brand Name </h2></label>
                </div>
                <div class="col-md-6">
                <label for=""><h2>{{$brand->name_brand}}</h2></label>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                     <img src="{{Storage::url($brand->picture->path) }}" class="img-fluid" alt="erreur">
                </div>
            </div>
        </div>
    </div>
</div>
@endsection