@extends('layouts.master')
@section('content')
<div class="container cta-100 ">
    <div class="container" style="margin-top: -10%">
      <div class="row blog">
        <div class="col-md-12">
          <div id="blogCarousel" class="carousel slide container-blog" data-ride="carousel"><!-- Carousel items -->
            <div class="carousel-inner">
              <div class="carousel-item active">
                <div class="row"> 
                  @foreach ($articles as $article)
                  <div class="col-md-4" style="max-width: 100%">
                     
                    <div class="item-box-blog" style="text-align: center">
                      <div class="item-box-blog-image" style="text-align: center">
                        <!--Date-->
                        <!-- <div class="item-box-blog-date bg-blue-ui white"> <span class="mon">Prod {{$article->id}}</span> </div>-->
                        <!--Image-->
                        <figure style="text-align: center">  
                        <img style="height:250px;width:300px;max-width: 260px;margin-right: -1%;background-image: none" class="center"
                         src="{{Storage::url($article->picture->path) }}" alt=" picture not found !">
                      
                         </figure>
                      </div>
                      <div class="item-box-blog-body">
                        <!--Heading-->
                        <div class="item-box-blog-heading">
                          <a href="#" tabindex="0">
                           
                          </a>
                        </div>
                        <div><h3><div class="art">{{ $article->name }} </div></h3></div>
                        <!--Data-->
                        <div class="item-box-blog-data" style="padding: px 15px;">
                         
                          <?php
                          $rate= $article->ratings->avg('rating');
                          $rate = round($rate,2);
                          ?>
                          <div class="row" style="padding-left: 50px">
                           <div class="col-md">
                              <fieldset id="{{$article->id}}" class="rating">
                                    <input type="radio" id="star5"  name="rating" value="5" /><label class = "full" for="star5" title="Awesome - 5 stars"></label>
                                    <input type="radio" id="star4half"  name="rating" value="4.5" /><label class="half" for="star4half" title="Pretty good - 4.5 stars"></label>
                                    <input type="radio" id="star4"  name="rating" value="4" /><label class = "full" for="star4" title="Pretty good - 4 stars"></label>
                                    <input type="radio" id="star3half"  name="rating" value="3.5" /><label class="half" for="star3half" title="Meh - 3.5 stars"></label>
                                    <input type="radio" id="star3"  name="rating" value="3" /><label class = "full" for="star3" title="Meh - 3 stars"></label>
                                    <input type="radio" id="star2half"  name="rating" value="2.5" /><label class="half" for="star2half" title="Kinda bad - 2.5 stars"></label>
                                    <input type="radio" id="star2"  name="rating" value="2" /><label class = "full" for="star2" title="Kinda bad - 2 stars"></label>
                                    <input type="radio" id="star1half"  name="rating" value="1.5" /><label class="half" for="star1half" title="Meh - 1.5 stars"></label>
                                    <input type="radio" id="star1"  name="rating" value="1" /><label class = "full" for="star1" title="Sucks big time - 1 star"></label>
                                    <input type="radio" id="starhalf"  name="rating" value="0.5" /><label class="half" for="starhalf" title="Sucks big time - 0.5 stars"></label>
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
                                                </div>
                            </div>
                            <p><i class="fa fa-user-o"></i> Admin, <i class="fa fa-comments-o"></i> Rate {{$rate}}</p>
                        </div>
                        <!--Text-->
                        <div class="item-box-blog-text">
                           
                            <div>  <h3><div class="art">{{ $article->description }}</div></h3>      </div>
                            <div>  <h3><div id="price">{{ $article->price }}.00</div><div id="quote">DH TTC </div></h3></div>
                        </div>

                        <div class="mt"> <a href="http://shop.com:8000/articles/{{$article->id}}" tabindex="0" class="btn bg-blue-ui white read">See the product</a> </div>
                        <!--Read More Button-->
                      </div>
                    </div>
                  </div> @endforeach
               
                </div>
              </div>
              <!--.item-->
             
            </div>
            <!--.carousel-inner-->
          </div>
          <!--.Carousel-->
        </div>
      </div> 
    </div>
</div>
@endsection

<style> 

.cta-100 {
  margin-top: 100px;
  padding-left: 8%;
  margin-bottom:80px; 
  padding-top: 7%;
}
.col-md-4{
    padding-bottom:20px;
    max-width: 100%;
}

.white {
  color: #fff !important;
}
.mt{float: left;margin-top: -20px;padding-top: 20px;}
.bg-blue-ui {
  background-color: #708198 !important;
}
figure img{
  width:300px;
  text-align: center
  }

#blogCarousel {
  padding-bottom: 100px;
}

.blog .carousel-indicators {
  left: 0;
  top: -50px;
  height: 50%;
}


/* The colour of the indicators */

.blog .carousel-indicators li {
  background: #708198;
  border-radius: 50%;
  width: 8px;
  height: 8px;
}

.blog .carousel-indicators .active {
  background: #0fc9af;
}




.item-carousel-blog-block {
  outline: medium none;
  padding: 15px;
}

.item-box-blog {
  border: 1px solid #dadada;
  text-align: center;
  z-index: 4;
  padding: 20px;
}

.item-box-blog-image {
  position: relative;
  align-content: center;
  text-align: center;
}

.item-box-blog-image figure img {
  max-width:  100%;
  height: auto;
}

.item-box-blog-date {
  position: absolute;
  z-index: 5;
  padding: 4px 20px;
  top: -20px;
  right: -20px;
  background-color: #41cb52;
}

.item-box-blog-date span {
  color: #fff;
  display: block;
  text-align: center;
  line-height: 1.2;
}

.item-box-blog-date span.mon {
  font-size: 18px;
}

.item-box-blog-date span.day {
  font-size: 16px;
}

.item-box-blog-body {
  padding: 10px;
}

.item-heading-blog a h5 {
  margin: 0;
  line-height: 1;
  text-decoration:none;
  transition: color 0.3s;
}

.item-box-blog-heading a {
    text-decoration: none;
}

.item-box-blog-data p {
  font-size: 13px;
}

.item-box-blog-data p i {
  font-size: 12px;
}

.item-box-blog-text {
  max-height: 100px;
  overflow: hidden;
}

.mt-10 {
  float: left;
  margin-top: -10px;
  padding-top: 10px;
}

.btn.bg-blue-ui.white.read {
  cursor: pointer;
  padding: 4px 20px;
  float: left;
  margin-top: 10px;
}

.btn.bg-blue-ui.white.read:hover {
  box-shadow: 0px 5px 15px inset #4d5f77;
}



    .art{
      font-size: 20px;
      display: inline;
      color: black;
      
    }
    .lbl{
      font-size: 20px;
      color: black;
    }
    #price{
      color: red;
      font-size: 25px;
      display: inline-block;
    }
    #quote{
      color: red;
      font-size: 20px;
      display: inline-block;
    }
            fieldset, label { margin: 0; padding: 0; }
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


