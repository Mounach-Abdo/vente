@extends('layouts.master')
@section('content')
<div class="container">
  <div class="card">
    <div class="card-header">
        <div class="card-title">
            <h2 style="text-align: center">the products removed</h2>
        </div>
    </div>
           @foreach ($articles as $article)
        <div class="card-body">
              <div class="row" style="padding-top: 8%;"> 
                  <div class="col-md-6" >
                      <img src="{{Storage::url($article->picture->path) }}"  class="img-fluid" alt="Erreur ">
                 </div>
                 <div class="col-md-4">
                  {{$article->name}} <br><br> {{ $article->description }} <br><br>  
                  <h3 style="color: red"><div id="price">{{ $article->price }}.00</div><div id="quote">DH TTC </div></h3>
                </div>
                <div class="col-md-2">
                     <form action="/articles/{{$article->id}}/restore" method="post">
                           @csrf
                           <input style="margin-top: 100px" type="submit" class="btn btn-primary" name="" id="" value="Restore product">
                     </form>
                </div>
                          <br><br><br><br>
             </div> <br><br>
             <div class="row" style="border-bottom:3px solid black; width:auto;margin:auto;"><br><br></div>
          @endforeach 
        </div>
  </div>
</div>
</div></div></div></div></div></div></div></div>



@endsection

<style>
.col-md-4{
    font-size: 30px;
    }
</style>