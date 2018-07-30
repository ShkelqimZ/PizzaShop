<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

        <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script> -->

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
        
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <!-- <link rel="stylesheet" type="text/css" href="css/shop.css"> -->
        <link href="{{ asset('css/shop.css') }}" rel='stylesheet' type='text/css' />
        
        <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.5.6/angular.min.js"></script>
        <script src="/js/angular/shop.js"></script>
    </head>
    <body>
        <div class="main-div">
            <div class="header">
                @if(!Auth::check())
                <a href="/login" class="inOut"><i class="fa fa-user"></i><span> Login</span></a>
                @else
                <a href="{{ route('logout') }}" class="inOut"
                    onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">
                    <i class="fa fa-sign-out"></i><span> Logout</span>
                </a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    {{ csrf_field() }}
                </form>
                @endif
                <div class="container">
                    <div class="row">
                        <div class="col-md-4 col-sm-4 d-none d-sm-block align-self-center">
                            <table>
                                <tr>
                                    <td rowspan="2"><i class="fa fa-mobile"></i></td>
                                    <td style="margin-right:10px;">+383 44 123 456</td>
                                </tr>
                                <tr>
                                    <td style="margin-right:10px;">8:00 am – 11:30 pm</td>
                                </tr>
                            </table>
                        </div>
                        <div class="col-md-4 col-sm-4 col-xs-12 text-center">
                            <a href="/"><img src="{{asset('img/pizza_hut_logo.png')}}" width="150" height="150"></a>
                        </div>
                        <div class="col-md-4 col-sm-4 d-none d-sm-block align-self-center">
                            <table class="float-right">
                                <tr>
                                    <td rowspan="2"><i class="fa fa-mobile"></i></td>
                                    <td style="margin-right:10px;">+383 44 123 456</td>
                                </tr>
                                <tr>
                                    <td style="margin-right:10px;">8:00 am – 11:30 pm</td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <div class="main-navbar">
                <nav class="navbar navbar-expand-sm navbar-dark bg-dark" data-toggle="affix">
                    <div class="mx-auto d-sm-flex d-block flex-sm-nowrap">
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample11" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse text-center" id="navbarsExample11">
                            <ul class="navbar-nav">
                                <li class="nav-item active">
                                    <a class="nav-link" href="/">Home</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="/menu">Menu</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Features</a>
                                </li>
                                @if(Auth::check() && Auth::user()->type == 'admin')
                                <li class="nav-item">
                                    <a class="nav-link" href="/product">Add product</a>
                                </li>
                                @endif
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Shop</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="/home#info">About</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Contact</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </nav>
            </div>
            @yield('content')
            <!-- <div class="footer">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 col-sm-12 col-xs-12 text-center">
                            <p>Copyright © 2018 ShkelqimZ. All Rights Reserved.</p>
                        </div>
                    </div>
                </div>
            </div> -->
            <a href="javascript:" id="return-to-top"><i class="fa fa-chevron-up"></i></a>
        </div>
        <script>

            var showCover = function(id){
                document.getElementById("coverDiv-"+id).style.display = "block";
            }

            var hideCover = function(id){
                document.getElementById("coverDiv-"+id).style.display = "none";
            }

            $(window).scroll(function() {
                if ($(this).scrollTop() >= 200) {        // If page is scrolled more than 50px
                    $('#return-to-top').fadeIn(200);    // Fade in the arrow
                } else {
                    $('#return-to-top').fadeOut(200);   // Else fade out the arrow
                }
            });
            $('#return-to-top').click(function() {      // When arrow is clicked
                $('body,html').animate({
                    scrollTop : 0                       // Scroll to top of body
                }, 500);
            });
        </script>
    </body>
</html>
