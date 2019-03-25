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
            <div class="col-md-6"></div><img style="height:200px;width:200px;" class="rounded" src="{{ Storage::url($article->picture->path) }}" alt="Error picture not found !"></div><br><br>
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
                              @if($rate > 0 && $rate<1)
                              <script>
                                document.getElementById('starhalf');
                              </script>
                                {{ $rate }}
                                @elseif($rate>=1 && $rate<2)
                                <input type="radio" style="color:orange;" class="fa fa-star checked" >
                                <input type="radio" style="color:black;" class="fa fa-star" >
                                <input type="radio" style="color:black;" class="fa fa-star" >
                                <input type="radio" style="color:black;" class="fa fa-star" >
                                <input type="radio" style="color:black;" class="fa fa-star" >
                                  {{ $rate }}
                                  @elseif($rate>=2 && $rate<3)
                                  <input type="radio" style="color:orange;" class="fa fa-star checked" >
                                  <input type="radio" style="color:orange;" class="fa fa-star checked" >
                                  <input type="radio" style="color:black;" class="fa fa-star" >
                                  <input type="radio" style="color:black;" class="fa fa-star" >
                                  <input type="radio" style="color:black;" class="fa fa-star" >
                                    {{ $rate }}
                                    @elseif($rate>=3 && $rate<4)
                                    <input type="radio" style="color:orange;" class="fa fa-star checked" >
                                    <input type="radio" style="color:orange;" class="fa fa-star checked" >
                                    <input type="radio" style="color:orange;" class="fa fa-star checked" >
                                    <input type="radio" style="color:black;" class="fa fa-star" >
                                    <input type="radio" style="color:black;" class="fa fa-star" >
                                      {{ $rate }}
                                      @elseif($rate>=4 && $rate<5)
                                       <input type="radio" style="color:orange;" class="fa fa-star checked" >
                                       <input type="radio" style="color:orange;" class="fa fa-star checked" >
                                       <input type="radio" style="color:orange;" class="fa fa-star checked" >
                                       <input type="radio" style="color:orange;" class="fa fa-star checked" >
                                       <input type="radio" style="color:black;" class="fa fa-star" >
                                        {{ $rate }}
                                          @elseif($rate==5)
                                          <input type="radio" style="color:orange;" class="fa fa-star checked" >
                                          <input type="radio" style="color:orange;" class="fa fa-star checked" >
                                          <input type="radio" style="color:orange;" class="fa fa-star checked" >
                                          <input type="radio" style="color:orange;" class="fa fa-star checked" >
                                          <input type="radio" style="color:orange;" class="fa fa-star checked" >
                                            {{ $rate }}
                                              @endif
                        </div>
                      </div>
                    </div>
TESTING  
<style>fieldset, label { margin: 0; padding: 0; }
    body{ margin: 20px; }
    h1 { font-size: 1.5em; margin: 10px; }
    
    /****** Style Star Rating Widget *****/
    
    .rating { 
      border: none;
      float: left;
    }
    
    .rating > input { display: none; } 
    .rating > label:before { 
      margin: 5px;
      font-size: 1.25em;
      font-family: FontAwesome;
      display: inline-block;
      content: "\f005";
    }
    
    .rating > .half:before { 
      content: "\f089";
      position: absolute;
    }
    
    .rating > label { 
      color: #ddd; 
     float: right; 
    }
    
    /***** CSS Magic to Highlight Stars on Hover *****/
    
    .rating > input:checked ~ label, /* show gold star when clicked */
    .rating:not(:checked) > label:hover, /* hover current star */
    .rating:not(:checked) > label:hover ~ label { color: #FFD700;  } /* hover previous stars in list */
    
    .rating > input:checked + label:hover, /* hover current star when changing rating */
    .rating > input:checked ~ label:hover,
    .rating > label:hover ~ input:checked ~ label, /* lighten current selection */
    .rating > input:checked ~ label:hover ~ label { color: #FFED85;  } </style>

<br>
<h1>Pure CSS Star Rating Widget</h1>
<fieldset class="rating">
    <input type="radio" id="star5" name="rating" value="5" /><label class = "full" for="star5" title="Awesome - 5 stars"></label>
    <input type="radio" id="star4half" name="rating" value="4 and a half" /><label class="half" for="star4half" title="Pretty good - 4.5 stars"></label>
    <input type="radio" id="star4" name="rating" value="4" /><label class = "full" for="star4" title="Pretty good - 4 stars"></label>
    <input type="radio" id="star3half" name="rating" value="3 and a half" /><label class="half" for="star3half" title="Meh - 3.5 stars"></label>
    <input type="radio" id="star3" name="rating" value="3" /><label class = "full" for="star3" title="Meh - 3 stars"></label>
    <input type="radio" id="star2half" name="rating" value="2 and a half" /><label class="half" for="star2half" title="Kinda bad - 2.5 stars"></label>
    <input type="radio" id="star2" name="rating" value="2" /><label class = "full" for="star2" title="Kinda bad - 2 stars"></label>
    <input type="radio" id="star1half" name="rating" value="1 and a half" /><label class="half" for="star1half" title="Meh - 1.5 stars"></label>
    <input type="radio" id="star1" name="rating" value="1" /><label class = "full" for="star1" title="Sucks big time - 1 star"></label>
    <input type="radio" id="starhalf" name="rating" value="half" /><label class="half" for="starhalf" title="Sucks big time - 0.5 stars"></label>
</fieldset>




              </div>
            </div>
        </div>
    </div>
</div>
@endsection