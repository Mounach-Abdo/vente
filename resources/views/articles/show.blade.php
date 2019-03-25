@extends('layouts.master')
@section('content')


<script>

function voter()
        {
          var value = $( "input[type=radio][name=rating]:checked" ).val();
          var id = {{ $article->id }};
          $.ajax({
            url : "{{url('/articles/vote')}}",
            type : "POST",
            data : { 'rate' : value ,
            'article_id' : id },
            
            success:function(data){//200 response comes here
            
              //Do what you want to do with processed data
            }, 
            error:function(e){
            //Error handling
            }
          })
        }


        <?php

        ?>

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
                          <style>
                              fieldset, label { margin: 0; padding: 0; }
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
                                  .rating > input:checked ~ label:hover ~ label { color: #FFED85;  }
                                   </style>
                              
                              <br>
                              <h1>Rate</h1>
                              <fieldset class="rating">
                                  <input type="radio" id="star5" onclick="voter()"  name="rating" value="5" /><label class = "full" for="star5" title="Awesome - 5 stars"></label>
                                  <input type="radio" id="star4half" onclick="voter()"  name="rating" value="4.5" /><label class="half" for="star4half" title="Pretty good - 4.5 stars"></label>
                                  <input type="radio" id="star4" onclick="voter()"  name="rating" value="4" /><label class = "full" for="star4" title="Pretty good - 4 stars"></label>
                                  <input type="radio" id="star3half" onclick="voter()"  name="rating" value="3.5" /><label class="half" for="star3half" title="Meh - 3.5 stars"></label>
                                  <input type="radio" id="star3" onclick="voter()"  name="rating" value="3" /><label class = "full" for="star3" title="Meh - 3 stars"></label>
                                  <input type="radio" id="star2half" onclick="voter()"  name="rating" value="2.5" /><label class="half" for="star2half" title="Kinda bad - 2.5 stars"></label>
                                  <input type="radio" id="star2" onclick="voter()"  name="rating" value="2" /><label class = "full" for="star2" title="Kinda bad - 2 stars"></label>
                                  <input type="radio" id="star1half" onclick="voter()"  name="rating" value="1.5" /><label class="half" for="star1half" title="Meh - 1.5 stars"></label>
                                  <input type="radio" id="star1" onclick="voter()"  name="rating" value="1" /><label class = "full" for="star1" title="Sucks big time - 1 star"></label>
                                  <input type="radio" id="starhalf" onclick="voter()"  name="rating" value="0.5" /><label class="half" for="starhalf" title="Sucks big time - 0.5 stars"></label>
                              </fieldset>
                              

                              @if($rate > 0 && $rate<0.5)
                              <script>
                                document.getElementById('starhalf').checked=true;
                              </script>
                                {{ $rate }}
                                @elseif($rate>0.5 && $rate<=1)
                                <script>
                                    document.getElementById('star1').checked=true;
                                  </script>
                                  {{ $rate }}
                                @elseif($rate>1 && $rate <= 1.5)
                                <script>
                                    document.getElementById('star1half').checked=true;
                                  </script>
                                  {{ $rate }}
                                  @elseif($rate>1.5 && $rate<=2)
                                  <script>
                                      document.getElementById('star2').checked=true;
                                    </script>
                                    {{ $rate }}
                                    @elseif($rate>2 && $rate<=2.5)
                                    <script>
                                        document.getElementById('star2half').checked=true;
                                      </script>
                                      {{ $rate }}

                                    @elseif($rate>=2.5 && $rate<=3)
                                    <script>
                                        document.getElementById('star3').checked=true;
                                      </script>
                                      {{ $rate }}
                                      @elseif($rate>3 && $rate<=3.5)
                                      <script>
                                          document.getElementById('star3half').checked=true;
                                        </script>
                                        {{ $rate }}
                                          @elseif($rate>3.5 && $rate<=4)
                                          <script>
                                              document.getElementById('star4').checked=true;
                                            </script>
                                            {{ $rate }}
                                            @elseif($rate>4 && $rate<=4.5)
                                            <script>
                                                document.getElementById('star4half').checked=true;
                                              </script>
                                              {{ $rate }}
                                              @elseif($rate>4.5 && $rate<=5)
                                              <script>
                                                  document.getElementById('star5').checked=true;
                                                </script>
                                                {{ $rate }}
                                              @endif
                      </div>
                    </div>

              </div>
            </div>
        </div>
    </div>
</div>
@endsection