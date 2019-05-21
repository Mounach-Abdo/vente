@extends('layouts.menu')
@section('content')
<h2 style="padding-top: 41px;text-align: center" >Espace Staff</h2>

        <div class="row" style="padding-top: 10%;">
            <div class="col-md-2 offset-md-2" >
                <div class="wow bounceInUp" data-wow-delay="0.2s">
                    <a class="lien" href="http://shop.com/articles/create">
                    <div class="team boxed-grey">
                        <div class="inner" >
                            <img
                                src="/assets/menu/plus-math.png">
                            <h5>Add Products</h5>
                            <p class="subtitle"></p>
                            <div class="avatar"><img src="img/team/1.jpg" alt=""
                                    class="img-responsive img-circle" /></div>
                        </div>
                    </div>
                    </a>
                </div>
            </div>
            <div class="col-md-2">
                <div class="wow bounceInUp" data-wow-delay="0.5s">  
                    <a class="lien" href="http://shop.com/articles/editing">
                        <div class="team boxed-grey">
                        <div class="inner">
                            <img
                                src="/assets/menu/edit-property.png">
                            <h5>Modify products</h5>
                            <p class="subtitle"></p>
                            <div class="avatar"><img src="img/team/2.jpg" alt=""
                                    class="img-responsive img-circle" /></div>
                        </div>
                    </div>
                    </a>
                </div>
            </div>
            <div class="col-md-2">
                <div class="wow bounceInUp" data-wow-delay="0.8s">
                    <a class="lien" href="">
                        <div class="team boxed-grey">
                        <div class="inner">
                            <img
                                src="/assets/menu/delete-property.png">
                            <h5>Delete Products</h5>
                            <p class="subtitle"></p>
                            <div class="avatar"><img src="img/team/3.jpg" alt=""
                                    class="img-responsive img-circle" /></div>
                        </div>
                    </div>
                    </a>
                </div>
            </div>
            <div class="col-md-2">
                <div class="wow bounceInUp" data-wow-delay="1s">
                    <a class="lien" href="http://shop.com/articles/">
                        <div class="team boxed-grey">
                        <div class="inner">
                            <img
                                src="/assets/menu/show-property.png">
                            <h5>Manage Products</h5>
                            <p class="subtitle"></p>
                            <div class="avatar"><img src="img/team/4.jpg" alt=""
                                class="img-responsive img-circle" /></div>
                        </div>
                    </div>
                    </a>
                </div>
            </div>
        </div>
<style>
.lien:hover{
color: #fff;
    }
.lien{
    color: black;
}
.inner{
    text-align: center;
}
.boxed-grey {
	background: gray;
	padding: 20px;
}
.team h5 {
	margin-bottom: 10px;
}

.team p.subtitle {
	margin-bottom: 10px;
}
.avatar {
    
    margin-bottom: 10px;
	margin-bottom: 20px;
}
.team-social {
    
    margin-bottom: 10px;
	margin-left: 0;
	padding-left: 0;

}
.team-social {
	text-align: center;
}
.team-social li{
    display: inline-block;
	margin:0 !important;
	padding:0;
}
.team-social a{
	margin:0;
	padding:0;
    display: block;
	width: 40px;
    height: 40px;
    line-height: 40px;
    text-align: center;
    background: #3bbec0;
	color: #fff;
    -webkit-transition: background .3s ease-in-out;
    transition: background .3s ease-in-out;
}
.team-social a i{
	text-align: center;
	margin:0;
	padding:0;
}
</style>
@endsection
