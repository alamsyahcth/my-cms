<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <meta name="csrf-token" content="{{ csrf_token() }}">

  <meta name="description" content="">
  <meta name="author" content="">

  <head>
    <title>@yield('title')</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">

    <!--Font-->
    <link href="https://fonts.googleapis.com/css2?family=Maven+Pro:wght@500&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300&display=swap" rel="stylesheet">

    <style>
      a{
        font-family: 'Inter', sans-serif;
        color: #4A4A4A;
        text-decoration: none;
      }
      a:hover{
        font-family: 'Inter', sans-serif;
        color: #868686;
        text-decoration: none;
      }
      .nav-link-data{
        font-family: 'Maven Pro', sans-serif;
      }
      p{
        font-family: 'Inter', sans-serif;
        color: #4A4A4A;
      }
      h1,h2,h3,h4,h5,h6{
        font-family: 'Maven Pro', sans-serif;
      }
    </style>

  </head>
  
  <body>
    <nav class="navbar fixed-top navbar-expand-lg navbar-light p-0 bg-nav">
      <div class="container">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item py-3 active">
            <img src="{{asset('images/global/logo-2-color.svg')}}" height="40"/>
          </li>
        </ul>
        <ul class="navbar-nav ml-auto navbar-right">
          <li class="nav-item">
            <a class="nav-link nav-link-data mx-2 active-page" href="#">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link nav-link-data mx-2" href="#">About Us</a>
          </li>
          <li class="nav-item">
            <a class="nav-link nav-link-data mx-2" href="#">News</a>
          </li>
          <li class="nav-item">
            <a class="nav-link nav-link-data mx-2" href="#">Contact</a>
          </li>
          <li class="nav-item">
            <a class="nav-link nav-link-data mx-2" href="#"><img src="{{asset('images/global/search.svg')}}"/></a>
          </li>
        </ul>
        <ul class="navbar-nav ml-auto navbar-right-responsive">
          <span class="nav-link" id="hamburger-icon" onclick="openNav()">
            <span class="line line-1"></span>
            <span class="line line-2"></span>
            <span class="line line-3"></span>
          </span>
          <div id="myNav" class="overlay">
            <div class="d-flex align-content-between container">
              <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
            </div>
            <div class="overlay-content">
              <a href="#">About</a>
              <a href="#">Services</a>
              <a href="#">Clients</a>
              <a href="#">Contact</a>
            </div>
          </div>
        </ul>
      </div>
    </nav>

    @yield('content')

    <footer>
      <div class="container my-5">
        <div class="row bg-grey p-5">
          <div class="col-md-3">
            <h5 class="mb-3">Navigation</h5>
            <p><a href="#">Home</a></p>
            <p><a href="#">About</a></p>
            <p><a href="#">News</a></p>
            <p><a href="#">Contact</a></p>
          </div>
          <div class="col-md-3">
            <h5 class="mb-3">Navigation</h5>
            <p><a href="#">Home</a></p>
            <p><a href="#">About</a></p>
            <p><a href="#">News</a></p>
            <p><a href="#">Contact</a></p>
          </div>
          <div class="col-md-3">
            <h5 class="mb-3">Navigation</h5>
            <p><a href="#">Home</a></p>
            <p><a href="#">About</a></p>
            <p><a href="#">News</a></p>
            <p><a href="#">Contact</a></p>
          </div>
          <div class="col-md-3">
            <p style="font-size:12px; line-height:22px;">
              Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
            </p>
            <div class="d-flex">
              <a href="#" class="sosmed">
                <img src="{{asset('images/global/facebook.svg')}}" class="mr-4"/>
              </a>
              <a href="#" class="sosmed">
                <img src="{{asset('images/global/instagram.svg')}}" class="mr-4"/>
              </a>
              <a href="#" class="sosmed">
                <img src="{{asset('images/global/twitter.svg')}}" class="mr-4"/>
              </a>
              <a href="#" class="sosmed">
                <img src="{{asset('images/global/linkedin.svg')}}" class="mr-4"/>
              </a>
            </div>
          </div>
        </div>
      </div>
      <div class="container my-5">
        <div class="row text-center justify-content-center">
          <img src="{{asset('images/global/logo-2-color.svg')}}" height="40"/>
        </div>
      </div>
    </footer>
  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  <script src="http://cdnjs.cloudflare.com/ajax/libs/gsap/1.18.0/TweenMax.min.js"></script>
  <script>
    $(window).scroll(function() {
			$('nav').toggleClass('bgscroll', $(this).scrollTop() > 10)
    })
    

    var rect = $('#about')[0].getBoundingClientRect();
    var mouse = {x:0, y:0, moved:false}

    $('#about').mousemove(function(e) {
      mouse.moved = true;
      mouse.x = e.clientX - rect.left;
      mouse.y = e.clientY - rect.top;
    })

    TweenLite.ticker.addEventListener('tick', function() {
      if(mouse.moved) {
        parallaxIt('.img-about', -30);
        parallaxIt('.img-cloud-1', -100);
      }
      mouse.moved = false;
    })

    function parallaxIt(target, movement) {
      TweenMax.to(target, 0.5, {
        x:(mouse.x - rect.width / 2) / rect.width * movement,
        y:(mouse.y - rect.height / 2) / rect.width * movement
      })
    }

    $(window).on('resize scroll', function() {
      rect = $('#about')[0].getBoundingClientRect();
    })


    function openNav() {
      document.getElementById("myNav").style.height = "100%";
    }

    function closeNav() {
      document.getElementById("myNav").style.height = "0%";
    }

    
  </script>
  </body>
</html>