<<<<<<< HEAD
<!DOCTYPE html>
=======

>>>>>>> 6644799c10830811473fe05aae1410916222a58a
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
<<<<<<< HEAD

    <meta name="csrf-token" content="{{csrf_token()}}">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <title>Document</title>
</head>
<body>
    @yield('content')
   <script src="{{asset('js/app.js')}}"></script>
=======
    <link rel="stylesheet" href="{{ asset('css/app.css') }}" >
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Shop</title>
</head>
<body>
    @yield('content')
    <script rel="stylesheet" href="{{ asset('js/app.js') }}" ></script>
>>>>>>> 6644799c10830811473fe05aae1410916222a58a
</body>
</html>