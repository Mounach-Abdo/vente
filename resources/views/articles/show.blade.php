@extends('layouts.master')
@section('content')


<script>

function postLabel()
        {
          var value = $('#').value();
          $.ajax({
            url : "{{url('/articles')}}",
            type : "GET",
            data : { 'price' : value },
            success:function(data){//200 response comes here
              //Do what you want to do with processed data
            }, 
            error:function(e){
            //Error handling
            }
          })
        }

</script>
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
                              @if($rate == 0)
                              <span style="color:black;" class="fa fa-star" ></span>
                              <span style="color:black;" class="fa fa-star" ></span>
                              <span style="color:black;" class="fa fa-star" ></span>
                              <span style="color:black;" class="fa fa-star" ></span>
                              <span style="color:black;" class="fa fa-star" ></span>
                                {{ $rate }}
                                @elseif($rate>=1 && $rate<2)
                                <span style="color:orange;" class="fa fa-star checked" ></span>
                                <span style="color:black;" class="fa fa-star" ></span>
                                <span style="color:black;" class="fa fa-star" ></span>
                                <span style="color:black;" class="fa fa-star" ></span>
                                <span style="color:black;" class="fa fa-star" ></span>
                                  {{ $rate }}
                                  @elseif($rate>=2 && $rate<3)
                                  <span style="color:orange;" class="fa fa-star checked" ></span>
                                  <span style="color:orange;" class="fa fa-star checked" ></span>
                                  <span style="color:black;" class="fa fa-star" ></span>
                                  <span style="color:black;" class="fa fa-star" ></span>
                                  <span style="color:black;" class="fa fa-star" ></span>
                                    {{ $rate }}
                                    @elseif($rate>=3 && $rate<4)
                                    <span style="color:orange;" class="fa fa-star checked" ></span>
                                    <span style="color:orange;" class="fa fa-star checked" ></span>
                                    <span style="color:orange;" class="fa fa-star checked" ></span>
                                    <span style="color:black;" class="fa fa-star" ></span>
                                    <span style="color:black;" class="fa fa-star" ></span>
                                      {{ $rate }}
                                      @elseif($rate>=4 && $rate<5)
                                       <span style="color:orange;" class="fa fa-star checked" ></span>
                                       <span style="color:orange;" class="fa fa-star checked" ></span>
                                       <span style="color:orange;" class="fa fa-star checked" ></span>
                                       <span style="color:orange;" class="fa fa-star checked" ></span>
                                       <span style="color:black;" class="fa fa-star" ></span>
                                        {{ $rate }}
                                          @elseif($rate==5)
                                          <span style="color:orange;" class="fa fa-star checked" ></span>
                                          <span style="color:orange;" class="fa fa-star checked" ></span>
                                          <span style="color:orange;" class="fa fa-star checked" ></span>
                                          <span style="color:orange;" class="fa fa-star checked" ></span>
                                          <span style="color:orange;" class="fa fa-star checked" ></span>
                                            {{ $rate }}
                                              @endif
                        </div>
                      </div>
                    </div>
              </div>
            </div>
        </div>
    </div>
</div>
@endsection