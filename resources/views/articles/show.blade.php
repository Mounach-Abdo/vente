@extends('layouts.master')
@section('content')
<div class="container">
    <div class="card" >
        <div class="card-header">
            <div class="card-title">
              Article ID : {{ $article->id }}
            </div>
        </div>
        <div class="card-body">
          <div class="row">
            <div class="col-md-12">
                <h1 style="font-weight: bold">{{$article->name}}</h1>
            </div>
          </div>
          <div class="row">
            <div class="col-md-6">
                <img style="float: left;" src="{{ Storage::url($article->picture->path) }}" alt="Error picture not found !"  class="img-fluid"  >
            </div>
            
        <div class="col-md-6" style="background-color: #f3f4f6;width: 520px;height:auto;" >
          <h2 style="font-weight: bold">IN SHORT</h2>
               <h3 style="font-weight: bold; padding-top: 50px">{{ $article->name }}</h3>
          <div class="row" style="">
                <div class="col-md-8">
                   <h3>{{ $article->description }}</h3> 
                </div>
          </div>
          <div class="row">
             <div class="col-md-8">
                 <div style="color: red">  <h3><div id="price">{{ $article->price }}.00</div><div id="quote">DH TTC </div></h3></div></h3>  
             </div>
          </div>
        </div>
          </div>
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
                                 document.getElementById('{{$article->id}}').children[0].checked=true;
                               </script>
                    @elseif($rate>0.5 && $rate<=1)
                                <script>
                                  document.getElementById('{{$article->id}}').children[1].checked=true;
                                </script>
                      @elseif($rate>1 && $rate <= 1.5)
                                <script>
                                  document.getElementById('{{$article->id}}').children[2].checked=true;
                                </script>
                      @elseif($rate>1.5 && $rate<=2)
                                <script>
                                  document.getElementById('{{$article->id}}').children[3].checked=true;
                                </script>
                      @elseif($rate>2 && $rate<=2.5)
                                  <script>
                                   document.getElementById('{{$article->id}}').children[4].checked=true;
                                  </script>
                      @elseif($rate>=2.5 && $rate<=3)
                                  <script>
                                   document.getElementById('{{$article->id}}').children[5].checked=true;
                                  </script>
                      @elseif($rate>3 && $rate<=3.5)
                                  <script>
                                    document.getElementById('{{$article->id}}').children[6].checked=true;
                                   </script>
                      @elseif($rate>3.5 && $rate<=4)
                                   <script>
                                     document.getElementById('{{$article->id}}').children[7].checked=true;
                                   </script>
                      @elseif($rate>4 && $rate<=4.5)
                                    <script>
                                      document.getElementById('{{$article->id}}').children[9].checked=true;
                                    </script>
                      @elseif($rate>4.5 && $rate<=5)
                                    <script>
                                    document.getElementById('{{$article->id}}').children[10].checked=true;
                                    </script>
                      @endif
                      
                      @if(auth()->guard('staff')->user()!=null)
                      <div class="col-md-4">
                              <form action="/articles/{{$article->id}}" method="post">
                                  @csrf
                                  <input  style="margin-top:20%;margin-left: 100%;  width:100% "  type="submit" class="btn btn-danger" name="" id="" value="Delete">
                                  <input type="hidden" name="_method" value="delete">
                              </form>
                      </div>
                           
                      </div>
                      @endif
                        </div>
                    </div>
                </div>
            </div>
@endsection
         
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
      
    <script>
          function voter()
              {
                  var value = $( "input[type=radio][name=rating]:checked" ).val();
                  var id = {{ $article->id }};
                  var good = 1;
                  window.location = "http://shop.com/articles/vote/"+value+'/'+id;
              }
    </script>
