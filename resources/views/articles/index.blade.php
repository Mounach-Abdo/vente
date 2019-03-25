@extends('layouts.master')
@section('content')
<div class="container">
    <div class="card">
        <div class="table">
            <h2 style="text-align:center;">List of articles :</h2>
        @foreach ($articles as $article)
        <?php
        if ($article->ratings->count()!=0) {
          $rate = $article->ratings->sum('rating')/$article->ratings->count();
        }else{$rate = 0;}
        ?>
            <div class="row" style="border-bottom:2px solid gold; width:auto;margin:auto;">
            <div class="col-md-3"><img style="height:200px;width:200px;" class="rounded" src="{{ Storage::url($article->picture->path) }}" alt="Error picture not found !"></div>
            <div class="col-md-3">Name : {{ $article->name }}</div>
            <div class="col-md-3">Description : {{ $article->description }}</div>
            <div class="col-md-3">Price : {{ $article->price }}.00 MAD</div>
            <div class="col-md-3">Quantity available : {{ $article->quantity }}</div>
            <div class="col-md-3">Category :{{ $article->category->name }}</div>
            <div class="col-md-3">
            Rating:
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
            <br>
        @endforeach
        </div>
    </div>
</div>
@endsection