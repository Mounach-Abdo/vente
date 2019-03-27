<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" >
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" >
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <meta name="csrf-token" content="{{csrf_token()}}">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <style>
    li a {
    font-size: 13px;
    font-weight: 500;
    color: white;
}
a{
    color:white;
}
    
    </style>
    <title>Document</title>
</head>
<body style="background-color:#f7faff">
        <nav style="font-color:white;" class=" navbar navbar-expand-lg  bg-dark" style="display:block;:auto;margin-left:auto;">
                <a class="navbar-brand" href="https://shop.com/articles">General menu</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                </button>
              
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                  <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                      <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="#">Link</a>
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
                        Articles
                      </a>
                      <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="https://shop.com/articles/create">Create Articles</a>
                        <a class="dropdown-item" href="https://shop.com/articles/">Show Articles</a>
                        <a class="dropdown-item" href="https://shop.com/articles/trash">Trash </a>
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
              </nav>
    @yield('content')
   <script src="{{asset('js/app.js')}}"></script>
   <script src="{{ asset('jquery/jquery-3.3.1.min.js') }}"></script>

</body>
</html>