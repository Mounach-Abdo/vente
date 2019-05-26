<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" >
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" >
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <meta name="csrf-token" content="{{csrf_token()}}">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <title>Document</title>

</head>
<body style="background-color:#f7faff">
    <script src="{{asset('js/app.js')}}"></script>
    
    <script src="{{ asset('jquery/jquery-3.3.1.min.js') }}"></script>
    <nav style="font-color:white;padding:0;margin:0;" class=" navbar navbar-expand-lg  bg-dark" >
            <a href="http://shop.com/articles"> <img src="https://opgg-static.akamaized.net/images/lol/perk/8214.png" style="width: 100px;height: 100px;" alt=""></a>
                    <a class="navbar-brand" href="http://shop.com/articles"><h2>ⒶⒺⓇⓎ </h2></a>
            <!-- Toggler/collapsibe Button -->
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
                <span class="navbar-toggler-icon"></span>
            </button>
            <!-- Navbar links -->
            <div class="collapse navbar-collapse" id="collapsibleNavbar">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="https://shop.com/staff/account">Profile</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Css</a>
                </li>
                <!-- Dropdown -->   
                <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
                Products
                </a>
                <div class="dropdown-menu">
                    <a class="dropdown-item" href="http://shop.com/articles/create">Create Product</a>
                    <a class="dropdown-item" href="#">Modify Product</a>
                    <a class="dropdown-item" href="#">Delete Product</a>
                    <a class="dropdown-item" href="#">Manage Products</a>
                    <a class="dropdown-item" href="#">Trash</a>
                </div>
                </li>
                <!-- Dropdown -->
                <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
                Category
                </a>
                <div class="dropdown-menu">
                    <a class="dropdown-item" href="https://shop.com/categories/create">Create Category</a>
                    <a class="dropdown-item" href="#">Modify Category</a>
                    <a class="dropdown-item" href="#">Delete Category</a>
                    <a class="dropdown-item" href="#">Manage Category</a>
                    <a class="dropdown-item" href="#">Trash</a>
                </div>
                </li>
            </ul>
            <ul class="nav navbar-nav navbar-right" style="margin-left: 280px">
                    <li><a href="{{url('staff/account')}}"><span class="glyphicon glyphicon-user"></span> Profile</a></li>
                    <li><a href="{{ url('staff/logout') }}"> <span class="glyphicon glyphicon-log-out"></span>Logout</a></li>
                  </ul>
            </div>
            
        </nav>

    </div>

@yield('content')
<!-- /Section: about -->

    <!-- Site footer -->
    <footer class="site-footer">
    <div class="container">
        <div class="row">
        <div class="col-sm-12 col-md-6">
            <h6>About</h6>
            <p class="text-justify">Aery.com ,<i> </i> At Aery shop we believe that  everyone deserves to have a website or online store. Simplicity makes us happy: our goal is to remove any technical or financial barriers that can prevent clients from found their own products. We're excited to help you on your journey!</p>
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
            <li><a class="dribbble" href="#"><i class="fa fa-dribbble"></i></a></li>
            <li><a class="linkedin" href="#"><i class="fa fa-linkedin"></i></a></li>   
            </ul>
        </div>
        </div>
    </div>
    </footer>
</body>
</html>



<style>

    li a {
    display: inline-block;
    font-size: 20px;
    color: white;
    font-family: sans-serif;
}
 /* footer*/
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
width:40px;
height:40px;
padding: 1px;
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
    margin:10%;
    font-weight:600
}
}    
    </style>
