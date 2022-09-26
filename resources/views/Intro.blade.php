<!DOCTYPE html>
<html lang="en">
    <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WebApp</title>
    <link rel="stylesheet" href="style.css">
    <script src="{{asset('js/bootstrap.min.js')}}"></script>
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    </head>
    <body style="margin-top:200px">
        <div class="text-center">
        <h1>Welcome to my useless web app!</h1>
        
<nav>
        <a href="{{url('/')}}"><h3>Click to go back Home</h3></a>
        <a href="{{url('/Intro')}}"><h3>Click to go back Intro web app!</h3></a>
        <a href="{{url('/Intro')}}"><h3>Click to go back Intro web app!</h3></a>
</nav>
        </div>
    </body>
</html>