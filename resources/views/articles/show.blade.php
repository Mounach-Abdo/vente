@extends('layouts.master')
@section('content')
<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" >
<div class="container">
    <div class="card">
        <div class="table">
            <h2 style="text-align:center;">Article : {{ $article->id }}</h2>
            <div class="row">
            <div class="col-md-6">Name : </div><div class="col-md-6">{{ $article->name }}</div><br><br>
            <div class="col-md-6">Description : </div><div class="col-md-6">{{ $article->description }}</div><br><br>
            <div class="col-md-6">Price : </div><div class="col-md-6">{{ $article->price }}</div><br><br>
            <div class="col-md-6">Quantity available : </div><div class="col-md-6">{{ $article->quantity }}</div><br><br>
            <div class="col-md-6">Category :</div><div class="col-md-6">{{ $article->category->name }}</div><br><br>
            <div class="col-md-6">

                Rating:
                <div class="container">
                    <div class="row">
                      <div class="col-lg-12">
                        <div class="star-rating">
                                <a href="star1" ><span onclick=" document.getElementById('star1').style.color='orange'" class="fa fa-star checked" ></span></a>
                                <a href="/rates/{{ $article->id }}/2" ><span onclick=" document.getElementById('star2').style.color='orange'" class="fa fa-star checked" ></span></a>
                                <a href="/rates/{{ $article->id }}/3" ><span onclick=" document.getElementById('star3').style.color='orange'" class="fa fa-star checked" ></span></a>
                                <a href="/rates/{{ $article->id }}/4" ><span onclick=" document.getElementById('star4').style.color='orange'" class="fa fa-star checked" ></span></a>
                                <a href="/rates/{{ $article->id }}/5" ><span onclick=" document.getElementById('star5').style.color='orange'" class="fa fa-star checked" ></span></a>

                        </div>
                      </div>
                    </div>



            </div>
            </div>
        </div>
    </div>
</div>
@endsection