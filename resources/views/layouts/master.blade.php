<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" >
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" >
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <meta name="csrf-token" content="{{csrf_token()}}">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <title>Aery</title>
</head>
<body style="background-color:#f7faff">
        <nav style="font-color:white;" class=" navbar navbar-expand-lg  bg-dark " >
          <a href="http://shop.com/articles"> <img src="https://opgg-static.akamaized.net/images/lol/perk/8214.png" style="width: 100px;height: 100px;" alt=""></a>
                <a class="navbar-brand" href="http://shop.com/articles" style="padding-bottom:6%"><h2>ⒶⒺⓇⓎ </h2></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                </button>
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                      <a class="nav-link" href="http://shop.com/articles">Home <span class="sr-only">(current)</span></a>
                    </li><li class="nav-item dropdown">
                      <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Articles
                      </a>
                      <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="http://shop.com/articles/create">Create Articles</a>
                        <a class="dropdown-item" href="http://shop.com/articles/">Show Articles</a>
                        <a class="dropdown-item" href="http://shop.com/articles/trash">Trash </a>
                        <div class="dropdown-divider"></div>
                      </div>
                    </li>
                    <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                              Employes
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                              <a class="dropdown-item" href="https://shop.com/employes/create">Create Employe</a>
                              <a class="dropdown-item" href="https://shop.com/employes/">Show employes</a>
                              <a class="dropdown-item" href="https://shop.com/employes/trash">Trash </a>
                              <div class="dropdown-divider"></div>
                            </div>
                      </li>
                    
                    <li class="nav-item dropdown">
                      <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Categories
                      </a>
                      <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="https://shop.com/categories/create">Create a category</a>
                        <a class="dropdown-item" href="https://shop.com/categories/">Show Categories</a>
                        <a class="dropdown-item" href="https://shop.com/categories/trash">Trash </a>
                        <div class="dropdown-divider"></div>
                      </div>
                    </li>
                  </ul>

                  <form class="form-inline md-form mr-auto mb-4"  action="/articles" method="POST">
                    @csrf
                    <input type="text" name="s" id="s" class="form-control" placeholder="Search" style="width: 300px">
                    <button type="submit" class="btn btn-primary mt-2" style="margin-bottom: 6px"> Search</button>
                  </form>
                  
                  <ul class="nav navbar-nav navbar-right">
                      <li><a href="{{url('staff/account')}}"><span class="glyphicon glyphicon-user"></span> Profile</a></li>
                      <li><a href="{{ url('staff/logout') }}"> <span class="glyphicon glyphicon-log-out"></span>Logout</a></li>
                  </ul>   
              </nav>          
              @yield('content')
             <script src="{{asset('js/app.js')}}"></script>
          <script src="{{ asset('jquery/jquery-3.3.1.min.js') }}"></script>
                <!-- Site footer -->
   <footer class="site-footer">
      <div class="container">
        <div class="row">
          <div class="col-sm-12 col-md-6">
            <h6>About</h6>
            <p class="text-justify">Aery.com ,
              At Aery shop we believe everyone deserves to have a website or online store. 
              Simplicity makes us happy: our goal is to remove any technical or financial barriers that can prevent clients from found their own products.
              We're excited to help you on your journey!</p>
          </div>
          <div class="col-xs-6 col-md-3">
            <h6>NOS OFFRES</h6>
            <ul class="footer-links">
              <li><a href="#">Nos marques</a></li>
              <li><a href="#/">Ecouteurs</a></li>
              <li><a href="#">Jeux & consoles</a></li>
              <li><a href="#">Tablettes</a></li>
              <li><a href="#">Climatisation</a></li>
              <li><a href="#">Templates</a></li>
            </ul>
          </div>
          <div class="col-xs-6 col-md-3">
            <h6>Quick Links</h6>
            <ul class="footer-links">
              <li><a href="#">About Us</a></li>
              <li><a href="#">Contact Us</a></li>
              <li><a href="#">Contribute</a></li>
              <li><a href="#">Privacy Policy</a></li>
              <li><a href="#">Sitemap</a></li>
            </ul>
          </div>
        </div>
        <hr>
      </div>
      <div class="container">
        <div class="row">
          <div class="col-md-8 col-sm-6 col-xs-12">
            <p class="copyright-text">Copyright &copy; 2019 All Rights Reserved by 
          <a href="#">Teemo</a>.
            </p>
          </div>
          <div class="col-md-4 col-sm-6 col-xs-12">
            <ul class="social-icons">
              <li><a class="facebook" href="#"><i class="fa fa-facebook"></i></a></li>
              <li><a class="twitter" href="#"><i class="fa fa-twitter"></i></a></li>
              <li><a class="linkedin" href="#"><i class="fa fa-linkedin"></i></a></li>   
            </ul>
          </div>
        </div>
      </div>
</footer>
</body>
<style>


li a {
  font-size: 20px;
  font-weight: 500px;
  color: white;
}
a{
  color:white;
}


/* Footer design*/

.site-footer
{
  margin-top: 10%;
  bottom: 0%;  
  max-height: 50%;
  background-color:#26272b;
  padding:45px 0 20px;
  font-size:15px;
  line-height:24px;
  color:#737373;
  width: 100%;
}
.site-footer hr
{
  border-top-color:#bbb;
  opacity:0.5
}
.site-footer hr.small
{
  margin:20px 0
}
.site-footer h6
{
  color:#fff;
  font-size:16px;
  text-transform:uppercase;
  margin-top:5px;
  letter-spacing:2px
}
.site-footer a
{
  color:#737373;
}
.site-footer a:hover
{
  color:#3366cc;
  text-decoration:none;
}
.footer-links
{
  padding-left:0;
  list-style:none
}
.footer-links li
{
  display:block
}
.footer-links a
{
  color:#737373
}
.footer-links a:active,.footer-links a:focus,.footer-links a:hover
{
  color:#3366cc;
  text-decoration:none;
}
.footer-links.inline li
{
  display:inline-block
}
.site-footer .social-icons
{
  text-align:right
}
.site-footer .social-icons a
{
  margin-top: 10%;
  bottom: 0%; 
  width:40px;
  margin: 1px;
  height:40px;
  line-height:40px;
  margin-left:6px;
  margin-right:0;
  border-radius:100%;
  background-color:#33353d
}
.copyright-text
{
  margin:0
}
@media (max-width:991px)
{
  .site-footer [class^=col-]
  {
    margin-bottom:30px
  }
}
@media (max-width:767px)
{
  .site-footer
  {
    max-height: 10px;
    padding-bottom:0
  }
  .site-footer .copyright-text,.site-footer .social-icons
  {
    text-align:center
  }
}
.social-icons
{
  padding-left:0;
  margin-bottom:0;
  list-style:none
}
.social-icons li
{
  display:inline-block;
  margin-bottom:4px
}
.social-icons li.title
{
  margin-right:15px;
  text-transform:uppercase;
  color:#96a2b2;
  font-weight:700;
  font-size:13px
}
.social-icons a{
  background-color:#eceeef;
  color:#818a91;
  padding: 1px;
  font-size:16px;
  display:inline-block;
  line-height:44px;
  width:44px;
  height:44px;
  text-align:center;
  margin-right:8px;
  padding-top: 10px;
  border-radius:100%;
  -webkit-transition:all .2s linear;
  -o-transition:all .2s linear;
  transition:all .2s linear
}
.social-icons a:active,.social-icons a:focus,.social-icons a:hover
{
  color:#fff;
  background-color:#29aafe
}
.social-icons.size-sm a
{
  line-height:35px;
  height:35px;
  width:35px;
  font-size:14px
}
.social-icons a.facebook:hover
{
  background-color:#3b5998
}
.social-icons a.twitter:hover
{
  background-color:#00aced
}
.social-icons a.linkedin:hover
{
  background-color:#007bb6
}
.social-icons a.dribbble:hover
{
  background-color:#ea4c89
}
@media (max-width:767px)
{
  .social-icons li.title
  {
    display:block;
    margin-right:0;
    font-weight:600
  }
}
</style>
</html>